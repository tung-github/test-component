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
        $listBooking = new ListBooking();
        $booking = $listBooking->onFilter($value,$field);
        Log::info($value); // tra ve 0 khi la do not checkin
        return $booking;
    }

    public function onSort(){
        $listBooking = new ListBooking();
        $bookings = $listBooking->onSort('id',Request::get('value'),Request::get('filter'));
        $type = Request::get('value');
        return [
            'bookings' => bookings,
            'type' => type
        ];
    }

    public function onLoadMore(){
        $listBooking = new ListBooking();
        $booking = $listBooking->onLoadMore(Request::get('count_li'),Request::get('sort_type'),Request::get('filter'));
        return $booking;
    }
}
