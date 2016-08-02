<?php
/**
 * Created by PhpStorm.
 * User: hautruong
 * Date: 02/08/2016
 * Time: 11:26
 */

namespace App\Modules;

use Illuminate\Support\ServiceProvider;
use Request;

class ModuleServiceProvider extends ServiceProvider {

  public function register() {
  }

  public function boot() {
    //Load cai array modules trong file module.php trong thu muc config
    $modules = config('module.modules');

    while (list(, $module) = each($modules)) {

      // Load the routes for each of the modules
      if (file_exists(__DIR__ . '/' . $module . '/routes.php')) {
        include __DIR__ . '/' . $module . '/routes.php';
      }

      // Load the views
      if (is_dir(__DIR__ . '/' . $module . '/Views')) {
        $this->loadViewsFrom(__DIR__ . '/' . $module . '/Views', $module);
      }
    }
  }
}