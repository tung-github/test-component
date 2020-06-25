<?php namespace Tung\Booking\Components;

use Cms\Classes\ComponentBase;
use Request;
use Tung\Booking\Models\Booking;
use Tung\Booking\Classes\ListBooking;
use Log;

class ComponentSort extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'ComponentSort Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun(){
        $this->page['booking'] = Booking::limit(2)->get();
    }

    public function onTest(){
        $test = new ComponentTest();
        // $test->onTestintest();
        $a = $test->onTestintest();
        return $a;
    }

    public function onFilter(){
        $value = Request::get('value');
        if(Request::get('value') == 'checkin'){
            $field = 'has_checkin';
            $value = 1;
        }else if(Request::get('value') == 'do_not_checkin'){
            $field = 'has_checkin';
            $value = 0;
        }else if(Request::get('value') == 'almost_null'){
            $field = 'checkout_date';
            $value = 'current_date';
        }
        $a = new ListBooking();
        $b = $a->onFilter($value,$field);
        Log::info($value); // tra ve 0 khi la do not checkin
        return $b;
    }

    public function onSort(){
        $a = new ListBooking();
        $b['sort'] = $a->onSort('id',Request::get('value'),Request::get('filter'));
        $b['type'] = Request::get('value');
        return $b;
    }

    public function onLoadMore(){
        $a = new ListBooking();
        $b = $a->onLoadMore(Request::get('count_li'),Request::get('sort_type'),Request::get('filter'));
        Log::info($b);
        return $b;
    }
}
