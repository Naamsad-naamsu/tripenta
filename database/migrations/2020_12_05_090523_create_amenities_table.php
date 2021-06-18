<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmenitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amenities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->timestamps();
        });

        DB::table('amenities')->insert(array('name' => 'SWIMMING POOL','created_at'=> date('Y-m-d H:i:s'),'updated_at'=> date('Y-m-d H:i:s')));
        DB::table('amenities')->insert(array('name' => 'WIFI','created_at'=> date('Y-m-d H:i:s'),'updated_at'=> date('Y-m-d H:i:s')));
        DB::table('amenities')->insert(array('name' => 'LED TV','created_at'=> date('Y-m-d H:i:s'),'updated_at'=> date('Y-m-d H:i:s')));
        DB::table('amenities')->insert(array('name' => 'BUFFET BREAKFAST','created_at'=> date('Y-m-d H:i:s'),'updated_at'=> date('Y-m-d H:i:s')));
        DB::table('amenities')->insert(array('name' => 'PARKING','created_at'=> date('Y-m-d H:i:s'),'updated_at'=> date('Y-m-d H:i:s')));
        DB::table('amenities')->insert(array('name' => 'ESSENTIALS','created_at'=> date('Y-m-d H:i:s'),'updated_at'=> date('Y-m-d H:i:s')));
        DB::table('amenities')->insert(array('name' => 'ROOM SERVICE','created_at'=> date('Y-m-d H:i:s'),'updated_at'=> date('Y-m-d H:i:s')));
        DB::table('amenities')->insert(array('name' => 'BATH TUB','created_at'=> date('Y-m-d H:i:s'),'updated_at'=> date('Y-m-d H:i:s')));
        DB::table('amenities')->insert(array('name' => 'AIR CONDITION','created_at'=> date('Y-m-d H:i:s'),'updated_at'=> date('Y-m-d H:i:s')));
        DB::table('amenities')->insert(array('name' => 'SAFE LOCKER','created_at'=> date('Y-m-d H:i:s'),'updated_at'=> date('Y-m-d H:i:s')));
        DB::table('amenities')->insert(array('name' => 'HEALTH CLUB','created_at'=> date('Y-m-d H:i:s'),'updated_at'=> date('Y-m-d H:i:s')));
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amenities');
    }
}
