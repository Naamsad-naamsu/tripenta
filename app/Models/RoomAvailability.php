<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomAvailability extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_categories_id','availability','available_date'
    ];

    public static function getAll($date){


        $query = RoomAvailability::select(['room_availabilities.id','room_availabilities.room_categories_id',
                                            'room_availabilities.availability','room_availabilities.available_date'])->where('room_availabilities.available_date',$date);

       $meeting = $query->get()->keyBy('room_categories_id');
       return $meeting;
    }

    public static function getDetails($filter = []){
        $filterCount = 0;
       $query = RoomAvailability::select(['id','room_categories_id','availability','available_date']);

       if(isset($filter['category_id'])){
            $query = $query->where('room_categories_id',$filter['category_id']);
            $filterCount++;
        }
       if(isset($filter['date'])){
            $query = $query->Where('available_date',$filter['date']);
            $filterCount++;
       }

       if(empty($filter) || ($filterCount == 0))
           return false;

       $meeting = $query->first();
       return $meeting;
    }

}
