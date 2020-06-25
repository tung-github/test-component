<?php namespace Tung\Test;

use Backend;
use System\Classes\PluginBase;

/**
 * Test Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Test',
            'description' => 'No description provided yet...',
            'author'      => 'Tung',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Tung\Test\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'tung.test.some_permission' => [
                'tab' => 'Test',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {

        return [
            'test' => [
                'label'       => 'Test',
                'url'         => Backend::url('tung/test/categorys'),
                'icon'        => 'icon-leaf',
                'permissions' => ['tung.test.*'],
                'order'       => 500,
                'sideMenu' =>[
                    'Category' => [
                    'label'       => 'Category',
                    'url'         => Backend::url('tung/test/categorys'),
                    'icon'        => 'icon-leaf',
                    'permissions' => ['tung.test.*'],
                    'order'       => 500,
                    ],
                    'Product' => [
                        'label'       => 'Product',
                        'url'         => Backend::url('tung/test/products'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['tung.test.*'],
                        'order'       => 500,
                        ],
                ]
            ],
        ];
    }
}
