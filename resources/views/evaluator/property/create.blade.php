@extends('evaluator.dashboard')
@section('contents')
    <div class="card" style="width: 80%">
        <div class="card-header">
            <h5>Property</h5>
        </div>
        <div class="card-body">
            <div class="col-sm-12">
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{\Session::get('success') }}</p>
                    </div>
                @endif
                <form  method="post" action="{{ url('property') }}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputEmail" name="property_name" placeholder="Name_Property">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputPassword" name="type" placeholder="Type_Property">
                    </div>
{{--                    <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker">--}}
{{--                        <input placeholder="Select date" type="text" id="example" class="form-control">--}}
{{--                        <label for="example">Try me...</label>--}}
{{--                        <i class="fas fa-calendar input-prefix" tabindex=0></i>--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <input type="text" class="form-control" name="price" placeholder="Price_Property">
                    </div>
                    <div class="form-group">
                        <select id="company" class="form-control" style="width: 200px" name="customer_id">
                            <option></option>
                            @foreach($customers as $cy)
                                <option value="{{ $cy->id }}"> {{$cy->first_name}} {{ $cy->last_name }}</option>
                                {{--                        <option value="{{ $cy->id }}">{{$cy->first_name}} {{ $cy->last_name }}</option>--}}
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>


@endsection

