@extends('evaluator.dashboard')
@section('contents')
    <div class="container-fluid" style="padding-left: 20%">
    <div class="card" style="width: 80%">
        <div class="card-header">
            <h5>Documents</h5>
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
                        <form method="post" action="{{route('document.update',$id)}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PATCH">
                            <div class="form-group">
                                <input type="text" name="max_loan" class="form-control" value="{{$documents->max_loan}}" placeholder="Maximum Loan amount" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="property_price" class="form-control" value="{{$documents->property_price}}" placeholder="property_price" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="property_type" class="form-control" value="{{$documents->property_type}}" placeholder="property_type" />
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <input type="text" name="address" class="form-control" value="{{$documents->customer->address}}" placeholder="Address_Customer" />--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <select id="company" class="form-control" style="width: 200px" name="customer_id" value="{{ $documents->customer->first_name }} {{ $documents->customer->last_name }}">--}}
{{--                                    @foreach($customers as $cy)--}}
{{--                                        <option value="{{ $cy->id }}"> {{$cy->first_name}} {{ $cy->last_name }}</option>--}}
{{--                                                                <option value="{{ $cy->id }}">{{$cy->first_name}} {{ $cy->last_name }}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}


                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Save" />
                            </div>

                        </form>
                    </div>
            </div>
        </div>
    </div>
    </div>

@endsection

