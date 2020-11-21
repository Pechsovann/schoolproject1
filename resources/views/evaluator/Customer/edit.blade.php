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

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-group">{{ __('First Name') }}</label>
                                        <input id="name" type="text" class="form-control py-4 @error('first_name') is-invalid @enderror" name="first_name" value="{{$customers->first_name}}" required autocomplete="first_name" autofocus placeholder="Enter First Name">
                                        @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-group">{{ __('Last Name') }}</label>
                                        <input id="name" type="text" class="form-control py-4 @error('last_name') is-invalid @enderror" name="last_name" value="{{ $customers->last_name }}" required autocomplete="last_name" autofocus placeholder="Enter Last Name" />

                                        @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Date Of Birth :</label>
                                <input type="text" name="age" class="form-control" value="{{$customers->age}}" placeholder="Enter Age" />
                            </div>

                            <div class="form-group">
                                <label for="">Select Gender :</label>
                                <select class="form-control" name="gender" value="$customers->gender">
{{--                                    <option value="">...</option>--}}
                                    <option value="male">male</option>
                                    <option value="female">female</option>

{{--                                    @foreach($customers as $customer)--}}
{{--                                    <option value="{{ $customer->id }}">{{ $customer->gender }}</option>--}}
{{--                                    @endforeach--}}
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="">Phone Number:</label>
                                <input type="text" name="phone_number" class="form-control py-4" value="{{$customers->phone_number}}" placeholder="Enter Phone Number" />
                            </div>

                            <div class="form-group">
                                <label for="text">Select Job : </label>
                                <select class="form-control" name="job" value="$customers->job">
                                    <option value="web developer">Web developer</option>
                                    <option value="businessman">Businessman</option>
                                    <option value="teacher">Teacher</option>
                                    <option value="farmer">Farmer</option>
                                    <option value="worker">Worker</option>

{{--                                    @foreach($customers as $row)--}}
{{--                                    <option value="$row">{{ $row -> job }}</option>--}}
{{--                                    @endforeach--}}
                                </select>
                            </div>



                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-group">{{ __('Khan') }}</label>
                                        <input id="name" type="text" class="form-control py-4 @error('khan') is-invalid @enderror" name="khan" value="{{ $customers->khan }}" required autocomplete="khan" autofocus placeholder="Enter khan">
                                        @error('khan')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-group">{{ __('City') }}</label>
                                        <input id="name" type="text" class="form-control py-4 @error('city') is-invalid @enderror" name="city" value="{{ $customers->city }}" required autocomplete="city" autofocus placeholder="Enter City" />

                                        @error('city')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Update" />
                            </div>



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
