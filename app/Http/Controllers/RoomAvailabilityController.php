<?php

namespace App\Http\Controllers;

use App\Models\RoomCategory;
use App\Models\RoomAvailability;
use App\Models\Amenity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class RoomAvailabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = date('Y-m-d');
        $category =  RoomCategory::getAll();
        $available =  RoomAvailability::getAll($date);
        $data = ['category' => $category, 'date'=> $date, 'available'=> $available];
        return view('availability.index')->with($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function date(Request $request)
    {
        // dd($request->date);exit;
        $date = $request->date;
        $category =  RoomCategory::getAll();
        $available =  RoomAvailability::getAll($date);
        $data = ['category' => $category, 'date'=> $date, 'available'=> $available];
        return view('availability.index')->with($data);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $available= 0;

        $roomAvailabilityInput=[];
        foreach($data['category_id'] as $key => $categoryId){
            $available =$data['available'][$key];
            // dd($categoryId);exit;
            $details=RoomAvailability::getDetails(['category_id'=>$categoryId, 'date'=>$data['date']]);
            //  dd($details->id);
            if(empty($details)) {
                $input = [
                    'room_categories_id' => $categoryId,
                    'availability' => $available,
                    'available_date' => $data['date'],
                ];
                $roomAvailabilityInput[]=$input;


            } else {
                $category                       =   RoomAvailability::find($details->id);
                //$category->room_categories_id   =   $categoryId;
                $category->availability         =   $available;
               // $category->available_date       =   $data['date'];

                $save                           =   $category->save();
            }

        }
        // exit;
        if(count($roomAvailabilityInput)>0){
            foreach($roomAvailabilityInput as $input){
                $category = RoomAvailability::create($input);
            }
        }

        // dd($check);exit;
        return redirect('availability')->with('success','Category saved successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
