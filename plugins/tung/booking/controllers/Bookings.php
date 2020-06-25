<?php namespace Tung\Booking\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Bookings Back-end Controller
 */
class Bookings extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Tung.Booking', 'booking', 'bookings');
    }
    // public function create($context = null){
    //     $this->addCss('/plugins/tung/booking/controllers/bookings/assets/css/create.css');
    //     return $this->asExtension('FormController')->create($context);
    // } //them file css
}
