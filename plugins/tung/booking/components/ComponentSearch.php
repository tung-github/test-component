<?php namespace Tung\Booking\Components;

use Cms\Classes\ComponentBase;
use Request;
use Tung\Booking\Models\Booking;
class ComponentSearch extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'ComponentSearch Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    public function onSearch(){
        $key = Request::get('key_search');
        $this->page['render'] = Booking::where('renter','like','%' . $key . '%')->get();
        return $this->renderPartial('@show_data.htm', ['booking' => $this->page['render']]);
    }
}
