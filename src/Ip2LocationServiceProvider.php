<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 * @license http://www.larva.com.cn/license/
 */

namespace Larva\Ip2Location;

use Illuminate\Support\ServiceProvider;

/**
 * Class Ip2LocationServiceProvider
 * @author Tongle Xu <xutongle@gmail.com>
 */
class Ip2LocationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/ip2location.php' => config_path('ip2location.php'),
            ], 'ip2location-config');
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        if (!$this->app->configurationIsCached()) {
            $this->mergeConfigFrom(__DIR__ . '/../config/ip2location.php', 'ip2location');
        }

        $this->app->singleton('ip2location', function ($app) {
            return new Ip2LocationManager(config('ip2location.local.path'));
        });
    }
}