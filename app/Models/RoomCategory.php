<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'code','name','description','status','cost'
    ];

    public static function getAll(){

        $query = RoomCategory::select(['id','code','name','description','cost','status']);

       $meeting = $query->get();
       return $meeting;
    }
}
