<?php

namespace App\Http\Controllers;

use App\Models\RoomCategory;
use App\Models\RoomCategoryAmenities;
use App\Models\Amenity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class RoomCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category =  RoomCategory::getAll();
        $data = ['category' => $category];
        return view('room_categories.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $amenities= Amenity::all();
        $data = ['amenities' => $amenities];
        return view('room_categories.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
               $validator = Validator::make($request->all(), [
            'code' => 'required|unique:room_categories,code',
            'name' => 'required'
                ]
        );

        if ($validator->fails()) {
            $data = ['error'=> trans('messages.validation_error').'<br>'.$validator->messages()->first(),'errors'=>$validator->errors()];
           return redirect()->back()->withInput()->with($data);
        }
        try{
            $data = $request->all();
            $input = [
                'code' => $data['code'],
                'name' => $data['name'],
                'cost' => $data['cost'],
                'description' => $data['description'],
            ];
            $category = RoomCategory::create($input);
            // $category->save();
            foreach($data['amenities'] as $key => $amenityId){
                // dd($category->id);exit;
                $input = [
                    'room_category_id' => $category->id,
                    'amenity_id' => $amenityId,
                ];

                $amenities = RoomCategoryAmenities::create($input);

            }

        }catch (Exception $ex) {
            return redirect('category')->with('errors','Error in processing request.');
       }
        return redirect('category')->with('success','Category saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $amenities= Amenity::all();
        $category = RoomCategory::where('id',$id)->first();
        $roomcategoryAmenities = RoomCategoryAmenities::getAll(['room_category_id'=>$id ]);
        $roomcategoryAmenityId = [];
        foreach($roomcategoryAmenities as $roomcategoryAmenity){
            $roomcategoryAmenityId[] = $roomcategoryAmenity->amenity_id;
        }
        // dd($roomcategoryAmenityId);exit;
        return view('room_categories.edit',['category'=>$category, 'amenities'=>$amenities,'roomcategoryAmenityId'=>$roomcategoryAmenityId]);
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

        $validator = Validator::make($request->all(), [
            'name' => 'required'
                ]
        );
        if ($validator->fails()) {
            $data = ['error'=> trans('messages.validation_error').'<br>'.$validator->messages()->first(),'errors'=>$validator->errors()];
           return redirect()->back()->withInput()->with($data);
        }

        $category                 =   RoomCategory::find($id);
        // dd($category);exit;
        $category->name           =   $request->name;
        $category->cost           =   $request->cost;
        $category->description    =   $request->description;

        $save                     =   $category->save();

        $delete                     =   RoomCategoryAmenities::where('room_category_id',$id)->delete();

        $data = $request->all();
        foreach($data['amenities'] as $key => $amenityId){

            $input = [
                'room_category_id' => $category->id,
                'amenity_id' => $amenityId,
            ];

            $amenities = RoomCategoryAmenities::create($input);

        }
        return redirect('category')->with('success','Category updated successfully!');
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
