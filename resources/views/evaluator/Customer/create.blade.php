@extends('evaluator.dashboard')
@section('contents')
    <div class="container-fluid" style="padding-left: 20%">
    <div class="card" style="width: 80%">
        <div class="card-header">
            <h5>Create Customer</h5>
        </div>
        <div class="card-body">
{{--            <h5 class="card-title">Special title treatment</h5>--}}
            <div class="col-md-12">
{{--                @if(count($errors) > 0)--}}
{{--                    <div class="alert alert-danger">--}}
{{--                        <ul>--}}
{{--                            @foreach($errors->all() as $error)--}}
{{--                                <li>{{$error}}</li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--                @if(\Session::has('success'))--}}
{{--                    <div class="alert alert-success">--}}
{{--                        <p>{{\Session::get('success') }}</p>--}}
{{--                    </div>--}}
{{--                @endif--}}

                    @if(Session::has('success'))
                        <script>
                            toastr.success("{!!Session::get('success')!!}")
                        </script>
                    @endif

                <form  method="post" action="{{ url('customer') }}">
                    {{--                <form>--}}
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="age" name="age" placeholder="Age">
                    </div>

{{--                    <div class="form-group {{ $errors->has('dob') ? 'has-error' : '' }}">--}}
{{--                        <label class="col-sm-2 control-label">Birthday*</label>--}}
{{--                        <div class="col-sm-10">--}}
{{--                            <input type="text" class="form-control" name="dob" required="" id="datepicker" value="{{ old("dob") }}">--}}
{{--                            {!! $errors->first('dob','<span class="help-block">:message</span>') !!}--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="form-group">
                        <input type="text" class="form-control" id="job" name="job" placeholder="job">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputPassword" name="phone_number" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputPassword" name="address" placeholder="Address">
                    </div>

                    <div class="form-group">
                        <select id="company" class="form-control" style="width: 200px" name="province_id">
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

