@extends('evaluator.dashboard')
@section('contents')
    <div class="container-fluid" style="padding-left: 20%">
    <div class="card" style="width: 80%">
        <div class="card-header">
            <h5>Edit Customer</h5>
        </div>
        <div class="card-body">
            {{--            <h5 class="card-title">Special title treatment</h5>--}}
            <div class="col-md-12">
                <br>
                @if(count($errors) > 0)

                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                        @endif
                        <form method="post" action="{{route('customer.update',$id)}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PATCH">
                            <div class="form-group">
                                <input type="text" name="first_name" class="form-control" value="{{$customers->first_name}}" placeholder="Enter First Name" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="last_name" class="form-control" value="{{$customers->last_name}}" placeholder="Enter Last Name" />
                            </div>

                            <div class="form-group">
                                <input type="text" name="age" class="form-control" value="{{$customers->age}}" placeholder="Enter Age" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="job" class="form-control" value="{{$customers->job}}" placeholder="Enter Job" />
                            </div>

                            <div class="form-group">
                                <input type="text" name="phone_number" class="form-control" value="{{$customers->phone_number}}" placeholder="Enter Phone Number" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="address" class="form-control" value="{{$customers->address}}" placeholder="Enter Address" />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Save" />
                            </div>

{{--                            <div class="form-group">--}}
{{--                                <select id="company" class="form-control" style="width: 200px" name="customer_id">--}}
{{--                                    <option></option>--}}
{{--                                    @foreach($customers as $cy)--}}
{{--                                        <option value="{{ $cy->id }}"> {{$cy->first_name}} {{ $cy->last_name }}</option>--}}
{{--                                        --}}{{--                        <option value="{{ $cy->id }}">{{$cy->first_name}} {{ $cy->last_name }}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
                        </form>
                    </div>
            </div>
        </div>
    </div>
    </div>
    @endsection
@section('scripts')
    <script>
        $("#company").select2({
            placeholder: 'Select Customer Name',
            allowClear:true
        })
    </script>

@endsection
