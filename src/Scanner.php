<?php
namespace Siddik\LaravelTranslation;
use Illuminate\Filesystem\Filesystem;

class Scanner
{
    public $files = [];
    public $translateKeys = [];
    public $scanPaths;

    public function __construct()
    {
        $this->scanPaths = config('translation.path_to_scan');
    }

    /**
     * Scan all the files in the provided $scanPath for translations.
     *
     * @return array
     */
  public function Scan()
  {
      $this->files = $this->validateFiles($this->getAllFiles($this->scanPaths));
      $results = ['single' => [], 'group' => []];
      $translateMethod = config('translation.translation_methods');
      // This has been derived from a combination of the following:
      // * Laravel Language Manager GUI from Mohamed Said (https://github.com/themsaid/laravel-langman-gui)
      // * Laravel 5 Translation Manager from Barry vd. Heuvel (https://github.com/barryvdh/laravel-translation-manager)
      $matchingPattern =
          '[^\w]'. // Must not start with any alphanum or _
          '(?<!->)'. // Must not start with ->
          '('.implode('|', $translateMethod).')'. // Must start with one of the functions
          "\(". // Match opening parentheses
          "[\'\"]". // Match " or '
          '('. // Start a new group to match:
          '.+'. // Must start with group
          ')'. // Close group
          "[\'\"]". // Closing quote
          "[\),]";  // Close parentheses or new parameter

      foreach ($this->files as $file) {
          if (preg_match_all("/$matchingPattern/siU", file_get_contents($file), $matches)) {
              foreach ($matches[2] as $key) {
                  if (preg_match("/(^[a-zA-Z0-9:_-]+([.][^\1)\ ]+)+$)/siU", $key, $arrayMatches)) {
                      [$file, $k] = explode('.', $arrayMatches[0], 2);
                      $results['group'][$file][$k] = '';
                      continue;
                  } else {
                    if(!preg_match('/\R/', $key)) {
                      $results['single'][$key] = '';
                    }
                  }
              }
          }
      }

      $this->translateKeys = $results;
      return $this;
  }
  
  public function getAllFiles($paths){
    $files = [];
    foreach ($paths as $dir){
      if(is_dir($dir)) $files[] = $this->collapseArray($this->scan_dir($dir));
    }
    return $this->collapseArray($files);
  }
  
  private function scan_dir($dir){
      $files = [];
      $ffs = scandir($dir);
      unset($ffs[array_search('.', $ffs, true)]);
      unset($ffs[array_search('..', $ffs, true)]);
      
      // prevent empty ordered elements
      if (count($ffs) < 1)
          return [];
      foreach($ffs as $ff){
        $files[] = (is_file($dir.'/'.$ff)) ? $dir.'/'.$ff : $this->scan_dir($dir.'/'.$ff);
      }
      return $files;
    }
    
  private function collapseArray($array){
    if(!is_array($array)) return [];
    $returnArray = [];
    foreach ($array as $item){
      if(!is_array($item)){
        $returnArray[] = $item;
      } else {
        foreach ($this->collapseArray($item) as $itemm){
          $returnArray[] = $itemm;
        }
      }
    }
    return $returnArray;
  }
  
  public function validateFiles(array $files, array $allows = []){
    if($allows == []) $allows = config('translation.view_file_extensions');
    $returnArray = array();
    foreach ($files as $file){
      $filename = $this->getFileName($file, true);
      $expload = explode('.', $filename, 2);
      $extension = $expload[count($expload) - 1];
      if(in_array($extension, $allows)){
        $returnArray[] = $file;
      }
    }
    
    return $returnArray;
  }
  
  
  public function getFileName($path, $extension = false){
    $path_split = explode('/', $path);
    $file = $path_split[count($path_split) - 1];
    if($extension) return $file;
    return explode('.', $file)[0];
  }

  public function getTranslationArray(){
    $path = config('translation.lang_path').'/'.config('translation.translation_priority');
    $files = $this->collapseArray($this->scan_dir($path));
    $trans = [];
    foreach ($files as $file){
      $translations = include($file);
      foreach ($translations as $key => $value){
        if(is_array($value)){
          foreach ($value as $insideKey => $insideValue){
            $trans[] = [
              'path' => $this->getFileName($file, true),
              'file' => $this->getFileName($file),
              'key' => $key.'||'.$insideKey,
              'value' => $insideValue,
            ];
          }
        }else{
          $trans[] = [
            'path' => $this->getFileName($file, true),
            'file' => $this->getFileName($file),
            'key' => $key,
            'value' => $value,
          ];
        }
      }
    }
    
    $global = json_decode(file_get_contents(config('translation.lang_path').'/'.config('translation.translation_priority').'.json'));
    foreach ($global as $key => $value){
      $trans[] = [
        'path' => config('translation.translation_priority').'.json',
        'file' => '',
        'key' => $key,
        'value' => $value,
      ];
    }
    
    return $trans;
  }
  public function getTranslationArrayByFile($file = null){
    if(is_null($file)) $file = 'not_set';
    $path = config('translation.lang_path').'/'.config('translation.translation_priority');
    if($file != 'not_set'){
      $files = [ config('translation.lang_path').'/'.config('translation.translation_priority').'/'.$file.'.php' ];
    }else{
      $files = $this->collapseArray($this->scan_dir($path));
    }
    $trans = [];
    foreach ($files as $file){
      $translations = include($file);
      foreach ($translations as $key => $value){
        if(is_array($value)){
          foreach ($value as $insideKey => $insideValue){
            $trans[] = [
              'path' => $this->getFileName($file, true),
              'file' => $this->getFileName($file),
              'key' => $key.'||'.$insideKey,
              'value' => $insideValue,
            ];
          }
        }else{
          $trans[] = [
            'path' => $this->getFileName($file, true),
            'file' => $this->getFileName($file),
            'key' => $key,
            'value' => $value,
          ];
        }
      }
    }
    
    if($file == 'not_set'){
      $global = json_decode(file_get_contents(config('translation.lang_path').'/'.config('translation.translation_priority').'.json'));
      foreach ($global as $key => $value){
        $trans[] = [
          'path' => config('translation.translation_priority').'.json',
          'file' => '',
          'key' => $key,
          'value' => $value,
        ];
      }
    }
    return $trans;
  }
  
  public function generateLangFile(){
    $languages = config('translation.languages');
    $lang_path = config('translation.lang_path');
    foreach ($languages as $language){
      if(!is_dir($lang_path.'/'.$language)){
        mkdir($lang_path.'/'.$language);
      }
      
      if(!is_file($lang_path.'/'.$language.'.json')){
        $myfile = fopen($lang_path.'/'.$language.'.json', "w");
        fclose($myfile);
      }
      
      foreach ($this->translateKeys['group'] as $group => $v){
        if(strpos($group, '::')) continue;
        $file = $lang_path.'/'.$language.'/'.$group.'.php';
        if(!is_file($file)){
          $myfile = fopen($file, "w");
          fclose($myfile);
        }
      }
    
    }
    
    $this->generateGlobalFiles();
    $this->generateGroupFiles();
    
  }
  
  private function generateGlobalFiles(){
    $lang_path = config('translation.lang_path');
    foreach (config('translation.languages') as $language){
      $file = $lang_path.'/'.$language.'.json';
      \File::put($file, $this->processJsonContent($this->translateKeys['single']));
    }
  }
  
  private function generateGroupFiles(){
    $lang_path = config('translation.lang_path');
    foreach (config('translation.languages') as $language){
      foreach ($this->translateKeys['group'] as $group => $v){
        if(!strpos($group, '::')){
          $file = $lang_path.'/'.$language.'/'.$group.'.php';
          \File::put($file, $this->processPhpContent($v));
        }
      }
    }
  }
  
  private function processJsonContent($translations, $hasValue = false){
    $contents = '{'.PHP_EOL;
    $i = 0;
    foreach ($translations as $key => $v){
      $i++;
      $value = ($hasValue) ? $v : ucfirst(str_replace('_', ' ', $key));
      $contents .= '  "'.$key.'"' . ' : "' . $value . '"';
      if(count($translations) == $i){
        $contents .= PHP_EOL;
      }else{
        $contents .= ','.PHP_EOL;
      }
    }
    $contents .= '}';
    return $contents;
  }
  
  private function processPhpContent($array, $hasValue = false){
   // dd($array);
    $contents = '<?php'.PHP_EOL.'  return ['.PHP_EOL;
    $contents .= '    /**'.PHP_EOL. '    * Auto generated file.'.PHP_EOL.'    * Generated by: siddik/laravel-translation Package'.PHP_EOL.'    **/ '.PHP_EOL.PHP_EOL;
    foreach ($array ?? [] as $key => $v){
      if(is_array($v)){
        $key = explode('||', $key)[0];
        $contents .= '    "'.$key.'" => ['.PHP_EOL;
        foreach ($v as $deepkey => $deepvalue){
          $value = ($hasValue) ? $deepvalue : ucfirst(str_replace('_', ' ', $key));
          $contents .= '        "'.$deepkey.'" => "'.$value.'",'.PHP_EOL; 
        }
        $contents .= '    ],'.PHP_EOL;
      }else{
        $value = ($hasValue) ? $v : ucfirst(str_replace('_', ' ', $key));
        $contents .= '    "'.$key.'"' . ' => "' . $value . '",'.PHP_EOL;
      }
    }
    $contents .= '  ];'.PHP_EOL.'?>';
    return $contents;
  }
  
  public function createLine($req){
    $key = $req->key;
    $file = null;
    $is_json = ($req->file) ? false : true;
    $data = array();
    foreach (config('translation.languages') as $lang){
      if($is_json){
        $file = config('translation.lang_path').'/'.$lang.'.json';
        $data[$lang] = (array) json_decode(file_get_contents($file));
      }else{
        $file = config('translation.lang_path').'/'.$lang.'/'.$req->file.'.php';
        $this->createFileIfNotExist($file);
        $data[$lang] = include($file);
      }
      
      if(strpos($key, '||')){
        $arrayKeys = explode('||', $key);
        if(array_key_exists($arrayKeys[1], $data[$lang][$arrayKeys[0]])) return 'Key already exist';
        $data[$lang][$arrayKeys[0]][$arrayKeys[1]] = trim($req->$lang);
      }else{
        if(array_key_exists($key, $data[$lang])) return 'Key already exist';
        $data[$lang][$key] = trim($req->$lang);
      }
      
      if($is_json) {
        $content = $this->processJsonContent($data[$lang], true);
      }else{
        $content = $this->processPhpContent($data[$lang], true);
      }
      
      
      \File::put($file, $content);
    }
    return $data;
  }
  
  private function createFileIfNotExist($file){
    if(!\File::isFile($file)){
      $myfile = fopen($file, "w");
      fclose($myfile);
      $content = \File::extension($file) == "php" ? "<?php \n return [];" : "{}";
      \File::put($file, $content);
    }
    return true;
  }
  
  public function editLine($filename, $key, $req){
    $file = null;
    $is_json = false;
    $data = array();
    foreach (config('translation.languages') as $lang){
      $extension = explode('.', $filename)[1];
      if($extension == 'json'){
        $is_json = true;
        $file = config('translation.lang_path').'/'.$lang.'.json';
        $data[$lang] = (array) json_decode(file_get_contents($file));
      }else{
        $file = config('translation.lang_path').'/'.$lang.'/'.$filename;
        $data[$lang] = include($file);
      }
      
      if(strpos($key, '||')){
        $arrayKeys = explode('||', $key);
        $data[$lang][$arrayKeys[0]][$arrayKeys[1]] = trim($req->input($lang));
      }else{
        $data[$lang][$key] = trim($req->input($lang));
      }
      
      if($is_json) {
        $content = $this->processJsonContent($data[$lang], true);
      }else{
        $content = $this->processPhpContent($data[$lang], true);
      }
      
      
      \File::put($file, $content);
    }
    return true;
  }
  
  public function deleteLine($filename, $key){
    $file = null;
    $is_json = false;
    $data = array();
    foreach (config('translation.languages') as $lang){
      $extension = explode('.', $filename)[1];
      if($extension == 'json'){
        $is_json = true;
        $file = config('translation.lang_path').'/'.$lang.'.json';
        $data[$lang] = (array) json_decode(file_get_contents($file));
      }else{
        $file = config('translation.lang_path').'/'.$lang.'/'.$filename;
        $data[$lang] = include($file);
      }
      
      if(strpos($key, '||')){
        $arrayKeys = explode('||', $key);
        unset($data[$lang][$arrayKeys[0]][$arrayKeys[1]]);
      }else{
        unset($data[$lang][$key]);
      }
      
      if($is_json) {
        $content = $this->processJsonContent($data[$lang], true);
      }else{
        $content = $this->processPhpContent($data[$lang], true);
      }
      
      
      \File::put($file, $content);
    }
    return true;
  }
  
  public function toSingleArray(){
    $array = $this->translateKeys;
    $returnarray = [];
    foreach ($array['single'] as $key => $v){
      $returnarray[] = $key;
    }
    
    foreach ($array['group'] as $group => $translations){
      if(is_array($translations) && !strpos($group, '::')){
        foreach ($translations as $key => $v){
          if(!strpos($key, '::')) $returnarray[] = $group.'.'.$key;
        }
      }
    }
    $this->translateKeys = $returnarray;
    return $this;
  }
  
  public function study(){
    $returnarray = array();
    $langKeys = $this->Scan()->toSingleArray()->getTranslationArray();
    $keysFromFile = [];
    foreach ($langKeys as $lang){
      if($lang['file']){
        $keysFromFile[] = $lang['file']. '.' .str_replace('||', '.', $lang['key']);
      }else{
        $keysFromFile[] = $lang['key'];
      }
    }
    $returnarray['missing'] = array_diff($this->translateKeys, $keysFromFile);
    $unused = array_diff($keysFromFile, $this->translateKeys);
    $unused_filter = [];
    foreach ($unused as $key){
      $file = explode('.', $key)[0];
      if(!in_array($file, config('translation.skip_unused'))){
        $unused_filter[] = $key;
      }
    }
    $returnarray['unused'] = $unused_filter;
    return $returnarray;
  }
  
  
  
}