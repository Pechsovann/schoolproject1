@extends('evaluator.dashboard')
@section('head')
    <h3 align="center">Create Documents</h3>
@endsection

@section('contents')
    <div class="col-md-12">
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
        <form  method="post" action="{{ url('document') }}">
            {{--                <form>--}}
            {{csrf_field()}}
            <div class="form-group">
                <input type="text" class="form-control" id="inputEmail" name="customer_name" placeholder="Customer Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="inputPassword" name="property" placeholder="Property">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary">
            </div>

        </form>
    </div>


@endsection

