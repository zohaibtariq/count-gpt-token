<?php

namespace ZohaibTariq\CountGptToken;

use Illuminate\Support\ServiceProvider;

class CountGptTokenServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     * @return void
     */
    public function register()
    {
        $this->app->bind('chat-gpt-token', function () {
            return new ChatGptToken();
        });
//        $this->app->alias(ChatGptToken::class, 'ChatGptToken');
    }

}
