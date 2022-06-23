<?php

namespace Modules;
use Illuminate\Support\Facades\File;


class ServiceProvider extends  \Illuminate\Support\ServiceProvider{
    public function boot(){
        $listModule = array_map('basename', File::directories(__DIR__));
        foreach ($listModule as $module) {
            if(file_exists(__DIR__ . 'ServiceProvider.php/' .$module.'/routes.php')) {
                include __DIR__ . 'ServiceProvider.php/' .$module.'/routes.php';
            }
            if(is_dir(__DIR__ . 'ServiceProvider.php/' .$module.'/Views')) {
                $this->loadViewsFrom(__DIR__ . 'ServiceProvider.php/' .$module.'/Views', $module);
            }
        }
    }
    public function register(){}
}