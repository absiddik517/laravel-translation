<?php 

return [
  /*
  |--------------------------------------------------------------------------
  | Application languages
  |--------------------------------------------------------------------------
  |
  | The package supports different drivers for translation management.
  |
  | Supported: Only short name
  |
  */
  'languages' => [
    'en', 'bn', 'hi'
  ],
  
  /*
  |--------------------------------------------------------------------------
  | Translation priority
  |--------------------------------------------------------------------------
  |
  | Update this array to tell the package which methods it should look for
  | when finding missing translations.
  |
  */
  'translation_priority' => 'en',
  
  /*
  |--------------------------------------------------------------------------
  | Lang path
  |--------------------------------------------------------------------------
  |
  | Update this array to tell the package which directories to scan when
  | looking for missing translations.
  |
  */
  'lang_path' => base_path().'/language',
  /*
  |--------------------------------------------------------------------------
  | List of paths to be scanned.
  |--------------------------------------------------------------------------
  |
  | List of paths to be scanned
  |
  */
  "path_to_scan" => [
    base_path().'/app/Http/Controllers',
    base_path().'/app/Helper',
    base_path().'/app/Http/Livewire',
    base_path().'/app/Http/Requests',
    base_path().'/app/Rules',
    resource_path().'/views'
  ],
  /*
  |--------------------------------------------------------------------------
  | Translation methods
  |--------------------------------------------------------------------------
  |
  | Update this array to tell the package which methods it should look for
  | when finding missing translations.
  |
  */
  'translation_methods' => ['trans', '__', '@lang'],
  /*
  |--------------------------------------------------------------------------
  | Translation file extensions
  |--------------------------------------------------------------------------
  |
  | Update this array to tell the package which methods it should look for
  | when finding missing translations.
  |
  */
  'view_file_extensions' => ['blade.php', 'vue', 'php'],
  
  /*
  |--------------------------------------------------------------------------
  | Skip when find unused translations
  |--------------------------------------------------------------------------
  |
  | Update this array to tell the package which directories to scan when
  | looking for missing translations.
  |
  */
  'skip_unused' => [
    'validation',
    'passwords',
    'auth',
    'season',
  ],
  
  /*
  |--------------------------------------------------------------------------
  | Route group configuration
  |--------------------------------------------------------------------------
  |
  | The package ships with routes to handle language management. Update the
  | configuration here to configure the routes with your preferred group options.
  |
  */
  'route_group_config' => [
      'middleware' => ['web'],
  ],
  
  /*
  |--------------------------------------------------------------------------
  | UI URL
  |--------------------------------------------------------------------------
  |
  | Define the URL used to access the language management too.
  |
  */
  'ui_url' => 'lang',
  
  /*
  |--------------------------------------------------------------------------
  | UI from field
  |--------------------------------------------------------------------------
  |
  | Define the form field.
  | Between "input", "textarea"
  |
  */
  'form_field' => 'textarea',

  
  
];