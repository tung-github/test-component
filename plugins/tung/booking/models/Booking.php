<?php namespace Tung\Booking\Models;

use Model;
use Log;

/**
 * Booking Model
 */
class Booking extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'tung_booking_bookings';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Validation rules for attributes
     */
    public $rules = [];

    /**
     * @var array Attributes to be cast to native types
     */
    protected $casts = [];

    /**
     * @var array Attributes to be cast to JSON
     */
    protected $jsonable = [];

    /**
     * @var array Attributes to be appended to the API representation of the model (ex. toArray())
     */
    protected $appends = [];

    /**
     * @var array Attributes to be removed from the API representation of the model (ex. toArray())
     */
    protected $hidden = [];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = ['status'=>['Tung\Booking\Models\Status'],
                        // 'room'=>['Tung\Booking\Models\Room'],
                        'room_type'=>['Tung\Booking\Models\RoomType']
                        ];
    public $belongsToMany = [
        'bookingToRoom' => [
            'Tung\Booking\Models\Room',
            'table'    => 'tung_booking_booking_rooms',
            'key'      => 'booking_id',
            'otherKey' => 'room_id'
        ]
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function getStatusIdOptions(){
        $status = Status::pluck('status_name','id')->toArray();
        return $status;
    }
    public function getRoomTypeIdOptions(){
        $room_type_id = RoomType::pluck('room_type_name','id')->toArray();
        return $room_type_id;
    }

    public function getBookingToRoomOptions() {
        if($this->room_type_id){
            $room_id_array = Room::where('room_type_id','=',$this->room_type_id)->pluck('room_name','id')->toArray();
            return $room_id_array;
        }
        return [];
    }
}
