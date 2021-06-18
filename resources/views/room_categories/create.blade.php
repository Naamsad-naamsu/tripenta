@extends('layouts.material')

@section('content')

<div class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form  method="POST" action="{{route('category.store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="box-header with-border">
                      <h4 class="box-title">Create Room Type</h4>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
					</div>

                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group {{$errors->has('code') ? 'has-error': ''}}">
                                        <label>Code</label>
                                        <input type="text" class="form-control"  name="code" value="{{ old('code') }}" placeholder="Enter Code">
                                    </div>
                            </div>

                            <div class="col-md-4">
                                    <div class="form-group {{$errors->has('name') ? 'has-error': ''}}">
                                        <label>Name</label>
                                        <input type="text" class="form-control"  name="name" value="{{ old('name') }}" placeholder="Enter The Category Name">
                                    </div>
                            </div>

                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Cost</label>
                                        <input type="text" class="form-control"  name="cost" value="{{ old('cost') }}" placeholder="Enter Cost" pattern="[0-9]+">
                                    </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="5" cols="5" class="form-control"  name="description" value="{{ old('description') }}" placeholder="Description"></textarea>
                                    </div>
                             </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="checkbox" >
                                        @foreach($amenities as $key => $amenity)

                                            <input type="checkbox"  value="{{$amenity->id}}" id="amenitiy_{{$amenity->id}}" name="amenities[]" <?php echo ( is_array(old('amenities')) && in_array($amenity->id, old('amenities')) ) ? 'checked ' : '' ?> >
                                            <!-- <input type="checkbox"  value="{{$amenity->id}}" id="amenitiy_{{$amenity->id}}" name="amenities[]"  > -->
                                            <label for="amenitiy_{{$amenity->id}}">{{$amenity->name}}</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="reset" class="btn btn-rounded btn-warning btn-outline mr-1">
								  <i class="ti-trash"></i> Cancel  <div class="ripple-container"></div></button>
                            <button type="submit" class="btn btn-rounded btn-primary btn-outline">
								  <i class="ti-save-alt"></i>  Submit  <div class="ripple-container"></div></button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>

</div>
@endsection
@section('script')
<script>
$(document).ready(function() {
$('.mdb-select').materialSelect();
});
</script>

@endsection
