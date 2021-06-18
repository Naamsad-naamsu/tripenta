<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomCategoryAmenities extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_category_id','amenity_id'
    ];
    public static function getAll($filter = []){

        $filterCount = 0;
        $query = RoomCategoryAmenities::select(['amenity_id']);
        if(isset($filter['room_category_id'])){
            $query = $query->Where('room_category_id',$filter['room_category_id']);
            $filterCount++;
       }
       if(empty($filter) || ($filterCount == 0))
           return false;

       $meeting = $query->get();
       return $meeting;
    }

    public static function getDetails($filter = []){

        $filterCount = 0;
        $query = RoomCategoryAmenities::select(['*']);
        if(isset($filter['room_category_id'])){
            $query = $query->Where('room_category_id',$filter['room_category_id']);
            $filterCount++;
       }
       if(empty($filter) || ($filterCount == 0))
           return false;

       $meeting = $query->get();
       return $meeting;
    }
}
