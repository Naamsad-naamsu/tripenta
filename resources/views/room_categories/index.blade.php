@extends('layouts.material')

@section('content')


                            <div class="box">
                                <div class="box-header with-border">
                                <a href="{{ url('category/create') }}" class="btn btn-success pull-right">Create</a>
                                        <h3 class="box-title">ROOM TYPE</h3>
                                </div>
                                    <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Name</th>
                                                    <th>Cost</th>
                                                    <th>Description</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($category as $key => $categories)
                                                <tr>
                                                    <td> <a href="{{ url('category/'.$categories->id) }}">{{ $categories->code }}</a></td>
                                                    <td>{{ $categories->name }}</td>
                                                    <td>{{ $categories->cost }}</td>
                                                    <td>{{ $categories->description }}</td>
                                                    <td>{{ $categories->status }}</td>
                                                    <td> <a href="{{ url('category/'.$categories->id) }}" title="{{trans('category.edit')}}" class="waves-effect waves-light btn btn-info btn-xs">Edit</a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

@endsection
