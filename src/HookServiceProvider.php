<?php

namespace FlycartHook;

use Herbert\Framework\Application;
use Illuminate\Support\ServiceProvider;

class HookServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('action', function(){
            return new ActionBuilder($this->app);
        });

        $this->app->bind('filter', function (){
            return new FilterBuilder($this->app);
        });
    }
 }
