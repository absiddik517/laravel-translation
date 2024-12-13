<?php

namespace Siddik\LaravelTranslation\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Siddik\LaravelTranslation\Scanner;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
  
  
  public function generateLangFiles(){
    $scanner = new Scanner;
    try{
      $scanner->Scan()->generateLangFile();
      return redirect()->route('translation.index')->with('message', __('Files generated successfull.'));
    }catch(\Exception $e){
      return redirect()->route('translation.index')->with('message', exception_message($e));
    }
  }
  
 

  public function findTranslation(Request $req){
    $file = null;
    if($req->has('file')) $file = $req->get('file');
    $scanner = new Scanner;
    if($file) $translations = $scanner->getTranslationArrayByFile($file);
    if(!$file) $translations = $scanner->getTranslationArray();
    return view('translation::trans', [
      'translations' => $translations
    ]);
  }
  
  public function editTrans($key, Request $req){
    $path = $req->get('path');
    $exp = explode('.', $path);
    $file = $exp[0];
    if($exp[1] == 'json') $file = null;
    //$key = str_replace('||', '.', $key);
    return view('translation::edit', [
      'key' => $key,
      'path' => $path,
      'file' => $file
    ]);
  }
  
  public function updateTrans($key, Request $req){
    $scanner = new Scanner;
    $filename = $req->path;
    $scanner->editLine($filename, $key, $req);
    return redirect()->route("translation.trans")->with('message', 'Language updated.');
  }
  
  
  public function deleteTrans($key, Request $req){
    $scanner = new Scanner;
    if($req->has('path')){
      $filename = $req->path;
    }else{
      $exp = explode('.', $key, 2);
      if(count($exp) == 2 && $exp[1] != ''){
        $filename = $exp[0].'.php';
        $key = $exp[1];
      }else{
        $filename = 'en.json';
      }
    }
    
    $scanner->deleteLine($filename, $key);
    return redirect()->back()->with('message', __('Translation deleted successfull'));
  }
  
  public function create(){
    $scanner = new Scanner;
    $files = $scanner->validateFiles($scanner->getAllFiles([config('translation::lang_path')]), ['php']);
    $files = array_map(function($file) use($scanner){
      return $scanner->getFileName($file);
    }, $files);
    return view('translation::create', [
      'files' => $files
    ]);
  }
  
  public function store(Request $req){
    $rules = [
     'file'=>'nullable',
     'key'=> 'required'
    ];
    foreach (config('translation.languages') as $lang){
      $rules[$lang] = 'required';
    }
    $this->validate($req, $rules);
    $scanner = new Scanner;
    $create = $scanner->createLine($req);
    if(is_array($create)) return redirect()->route('translation.study')->with('message', __('Translation store successfull'));
    
    return redirect()->route('translation.trans')->with('message', $create)->withInput();
  }
  
  public function study(){
    $scanner = new Scanner;
    return view('translation::study', [
      'study' => $scanner->study()
    ]);
  }
  
  public function addFromStudy($key){
    $expload = explode('.', $key, 2);
    //dd($expload);
    $file = count($expload) == 2 ? $expload[0] : null;
    $returnkey = count($expload) == 2 ? $expload[1] : $key;
    
  
    return view('translation::add', [
      'key' => $returnkey,
      'file' => $file
    ]);
  }
  
}

