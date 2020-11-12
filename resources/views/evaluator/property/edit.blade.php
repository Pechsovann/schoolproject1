@extends('evaluator.dashboard')
@section('head')
        @section('contents')

            <div class="card" style="width: 80%">
                <div class="card-header">
                    <h5>Property</h5>
                </div>
                <div class="card-body">
                    {{--            <h5 class="card-title">Special title treatment</h5>--}}
                    <div class="col-md-12">
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                                @endif
                                <form method="post" action="{{ route('property.update',$properties -> id) }}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="PATCH">
                                    <div class="form-group">
                                        <input type="text" name="property_name" class="form-control" value="{{$properties->property_name}}" placeholder="Property Name" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="type" class="form-control" value="{{$properties->type}}" placeholder="Type" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="price" class="form-control" value="{{$properties->price}}" placeholder="Price" />
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Save" />
                                    </div>

                                </form>
                            </div>
                    </div>
                </div>
            </div>
@endsection

