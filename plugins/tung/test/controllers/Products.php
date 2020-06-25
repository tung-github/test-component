<?php namespace Tung\Test\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Tung\Test\Models\Category;

/**
 * Products Back-end Controller
 */
class Products extends Controller
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

        BackendMenu::setContext('Tung.Test', 'test', 'products');

        $this->addJs('/plugins/tung/test/assest/js/product.js');
    }
    public function test()
    {
        return 1;
    }

    public function onDoSomething()
    {
        $cate = new Category;
        $cate->category_name = "test ajax";
        $cate->save();
        return;
    }
}
