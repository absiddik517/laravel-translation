<?php 
namespace Siddik\LaravelTranslation;
use Illuminate\Support\ServiceProvider;

class TranslationServiceProvider extends ServiceProvider 
{
  public function boot() {
    $this->publishes([
        __DIR__.'/config/translation.php' => config_path('translation.php'),
    ]);
    $this->publishes([
        __DIR__.'/../resources/views' => resource_path('views/vendor/translation'),
    ]);
    $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    $this->loadViewsFrom(__DIR__.'/../resources/views', 'translation');

  }
  
  public function register(){
    $this->mergeConfigFrom(
        __DIR__.'/config/translation.php', 'translation'
    );
  }
}