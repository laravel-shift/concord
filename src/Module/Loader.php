<?php
/**
 * Contains the Loader.php class.
 *
 * @copyright   Copyright (c) 2016 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2016-08-14
 *
 */


namespace Konekt\Concord\Module;


use Illuminate\Contracts\Foundation\Application;
use Konekt\Concord\ModuleServiceProvider;


class Loader
{
    /** @var Application  */
    protected $app;

    /**
     * Loader constructor.
     *
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * Loads a module based on its class name
     *
     * @param string    $moduleClass    The full classname of the Module's ModuleServiceProvider class
     *
     * @return ModuleServiceProvider
     */
    public function loadModule($moduleClass)
    {
        /** @var ModuleServiceProvider $module */
        $module = $this->app->register($moduleClass);

        return $module;
    }

}