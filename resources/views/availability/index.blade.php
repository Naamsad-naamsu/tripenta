@extends('layouts.material')

@section('content')
            <div class="content-header">
			    <div class="d-flex align-items-center">

                    <form  method="POST" action="{{route('date-select')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <div class="col-lg-7">
                                <input class="form-control" value="{{$date}}" type="date" name="date">

                            </div>
                            <div class="col-lg-5">
                                <button type="submit" class="btn btn-rounded btn-primary btn-outline">
								<i class="ti-save-alt"></i>  Submit  <div class="ripple-container"></div></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                        <div class="box">
                            <form  method="POST" action="{{route('availability.store')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="box-header with-border">
                                        <h3 class="box-title">Room Availability</h3>
                                </div>
                                <input type="hidden" value="{{$date}}" name="date">
                                    <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Cost</th>
                                                    <th>Status</th>
                                                    <th>Available</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($category as $key => $categories)
                                                <tr>
                                                    <td><input type="hidden" value="{{$categories->id}}" name="category_id[]">
                                                     <a href="{{ url('category/'.$categories->id) }}">{{ $categories->code }}</a></td>
                                                    <td>{{ $categories->name }}</td>
                                                    <td>{{ $categories->description }}</td>
                                                     <td>{{ $categories->cost }}</td>
                                                     <td>{{ $categories->status }}</td>
                                                     <td><input type="text" name="available[]" value="{{isset($available[$categories->id]) ? $available[$categories->id]->availability: "0"}}" pattern="[0-9]+"></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-rounded btn-primary btn-outline pull-right">
								        <i class="ti-save-alt"></i>  Submit  <div class="ripple-container"></div></button>
                                    </div>
                                </div>
                            </form>
                        </div>

@endsection
