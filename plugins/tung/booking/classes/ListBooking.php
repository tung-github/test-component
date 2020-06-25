<?php namespace Tung\Booking\Classes;

use Cms\Classes\ComponentBase;
use Tung\Booking\Models\Room;
use Tung\Booking\Models\Booking;
use Request;
use Log;
use Carbon\Carbon;

class ListBooking{

    public function onSort($field,$valueSort,$filter){
        $valueSort = str_replace('id_', '', $valueSort);
        $this->page['booking'] = Booking::orderBy($field,$valueSort)->limit(2)->get();
        if($filter === 'almost_null'){
            $currentDate = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
            $yesterday =  date('Y-m-d',strtotime($currentDate) - 1);
            $this->page['booking'] = Booking::where('checkout_date','=',$yesterday)->orderBy($field,$valueSort)->get();
        }else if($filter === 'checkin'){
            $this->page['booking'] = Booking::where('has_checkin','=',1)->orderBy($field,$valueSort)->get();
        }else if($filter === 'do_not_checkin'){
            $this->page['booking'] = Booking::where('has_checkin','=',0)->orderBy($field,$valueSort)->get();
        }
        return $this->page['booking'];
    }

    public function onLoadMore($countLi,$sortType,$filter){
        $sortType = str_replace('id_','', $sortType);        
        $this->page['booking'] = Booking::orderBy('id',$sortType)->skip($countLi)->take(2)->get();
        if($filter === 'almost_null'){
            $currentDate = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
            $yesterday = date('Y-m-d',strtotime($currentDate) - 1);
            $this->page['booking'] = Booking::where('checkout_date','=',$yesterday)->orderBy('id',$sortType)->skip($countLi)->take(2)->get();
        }else if($filter === 'do_not_checkin'){
            $this->page['booking'] = Booking::where('has_checkin','=',0)->orderBy('id',$sortType)->skip($countLi)->take(2)->get();
        }else if($filter === 'checkin'){
            $this->page['booking'] = Booking::where('has_checkin','=',1)->orderBy('id',$sortType)->skip($countLi)->take(2)->get();
        }
        return $this->page['booking'];
    }

    public function onFilter($value,$field){
        $currentDate = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        if($value === 'current_date'){
            $yesterday =  date('Y-m-d',strtotime($currentDate) - 1);
            $this->page['booking'] = Booking::where('checkout_date','=',$yesterday)->limit(2)->get();
        }else{
            $this->page['booking'] = Booking::where($field,'=',$value)->limit(2)->get();
        }
        return $this->page['booking'];
    }
}
