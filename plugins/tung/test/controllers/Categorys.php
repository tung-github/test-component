<?php namespace Tung\Test\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Categorys Back-end Controller
 */
class Categorys extends Controller
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

        BackendMenu::setContext('Tung.Test', 'test', 'categorys');
    }
}
