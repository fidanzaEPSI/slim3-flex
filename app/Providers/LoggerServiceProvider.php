<?php

namespace App\Providers;

use Psr\Log\LoggerInterface;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use League\Container\ServiceProvider\AbstractServiceProvider;

class LoggerServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        LoggerInterface::class
    ];

    /**
     * Register function
     *
     * @return void
     */
    public function register()
    {
        $container = $this->getContainer();
        $config = $container->get('config');
        $container->share(LoggerInterface::class, function () use ($config) {
            $log = new Logger($config->get('log.channel_name'));
            $log->pushHandler(new StreamHandler($config->get('log.path'), Logger::WARNING));
            return $log;
        });
    }
}
