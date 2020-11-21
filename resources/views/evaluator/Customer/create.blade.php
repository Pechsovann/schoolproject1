@extends('evaluator.dashboard')
@section('contents')
    <div class="container-fluid" style="padding-left: 20%">
    <div class="card" style="width: 80%">
        <div class="card-header">
            <h5>Create Customer</h5>
        </div>
        <div class="card-body">
            <div class="col-md-12">

                <form  method="post" action="{{ url('customer') }}">
                    {{--                <form>--}}
                    {{csrf_field()}}
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="form-group">{{ __('First Name') }}</label>
                                <input id="name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{old('first_name')}}" required autocomplete="first_name" autofocus placeholder="Enter First Name">
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
                                <input id="name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus placeholder="Enter Last Name" />

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
                        <input class="date form-control" type="text" id="age" name="age" placeholder="Enter Date Of Birth">
                    </div>
                    <div class="form-group">
                        <label for="">Select Gender :</label>
                    <select class="form-control" name="gender">
                        <option>...</option>
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                    </div>
{{--                    <div class="form-group {{ $errors->has('dob') ? 'has-error' : '' }}">--}}
{{--                        <label class="col-sm-2 control-label">Birthday*</label>--}}
{{--                        <div class="col-sm-10">--}}
{{--                            <input type="text" class="form-control" name="dob" required="" id="datepicker" value="{{ old("dob") }}">--}}
{{--                            {!! $errors->first('dob','<span class="help-block">:message</span>') !!}--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="form-group">
                        <label for="text">Select Job : </label>
                        <select class="form-control" name="job">
                            <option> ...</option>
                            <option value="web developer">Web developer</option>
                            <option value="businessman">Businessman</option>
                            <option value="teacher">Teacher</option>
                            <option value="farmer">Farmer</option>
                            <option value="worker">Worker</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Phone Number :</label>
                        <input type="text" class="form-control" id="inputPassword" name="phone_number" placeholder="Enter Phone Number">
                    </div>


                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="form-group">{{ __('Khan') }}</label>
                                <input id="name" type="text" class="form-control @error('khan') is-invalid @enderror" name="khan" value="{{ old('khan') }}" required autocomplete="khan" autofocus placeholder="Enter khan">
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
                                <input id="name" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus placeholder="Enter City" />

                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="">Company Area :</label>
                        <select id="company" class="form-check" style="width: 300px" name="province_id">
                            <option></option>
                            @foreach($data as $cy)
                                <option value="{{ $cy->id }}">{{$cy->company_area}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary">
                    </div>

                </form>
            </div>
        </div>
        {{--    </div>--}}
    </div>
    </div>
</div>

@endsection
@section('scripts')
    <script>
        $("#company").select2({
            placeholder: 'Select Company Area',
            allowClear:true
        })
    </script>

    <script type="text/javascript">
        $('.date').datepicker({
            format: 'mm-dd-yyyy'
        });
    </script>
{{--    <script>--}}
{{--        toastr.success("{!! Session::get('success')!!}");--}}
{{--    </script>--}}

{{--    alert toastr    --}}

{{--    @if(Session::has('success'))--}}
{{--        <script>--}}
{{--            toastr.success("{!!Session::get('success')!!}")--}}
{{--        </script>--}}
{{--    @endif--}}



{{--select dob --}}
{{--    <script src="{{ url('js/bootstrap-datepicker.js') }}" charset="utf-8"></script>--}}
{{--    <script>--}}
{{--        $('#datepicker').datepicker({--}}
{{--            autoclose: true--}}
{{--        });--}}
{{--    </script>--}}

@endsection

