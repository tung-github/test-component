<?php namespace Tung\Booking;

use Backend;
use System\Classes\PluginBase;

/**
 * Booking Plugin Information File
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
            'name'        => 'Booking',
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
        // return []; // Remove this line to activate

        return [
            // 'Tung\Booking\Components\MyComponent' => 'myComponent',
            'Tung\Booking\Components\ComponentSearch' => 'componentSearch',
            'Tung\Booking\Components\ComponentSort' => 'componentSort',
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
            'tung.booking.some_permission' => [
                'tab' => 'Booking',
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
         // Remove this line to activate

        return [
            'booking' => [
                'label'       => 'Booking',
                'url'         => Backend::url('tung/booking/bookings'),
                'icon'        => 'icon-leaf',
                'permissions' => ['tung.booking.*'],
                'order'       => 500,
            'sideMenu' => [
                'room' => [
                    'label' => 'Room',
                    'url' => Backend::url('tung/booking/rooms'),
                    'icon' => 'icon-leaf',
                    'permissions' => ['tung.booking.*'],
                    'order'       => 500,
                ],
                'room_type' => [
                    'label' => 'Room Type',
                    'url' => Backend::url('tung/booking/roomtypes'),
                    'icon' => 'icon-leaf',
                    'permissions' => ['tung.booking.*'],
                    'order'       => 500,
                ],
                'status' => [
                    'label' => 'Status',
                    'url' => Backend::url('tung/booking/statuss'),
                    'icon' => 'icon-leaf',
                    'permissions' => ['tung.booking.*'],
                    'order'       => 500,
                ]
            ]
            ],
        ];
    }
}
