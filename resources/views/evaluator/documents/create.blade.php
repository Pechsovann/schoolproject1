@extends('evaluator.dashboard')
@section('contents')
    <div class="container-fluid" style="padding-left: 20%">
    <div class="card" style="width: 80%">
        <div class="card-header">
            <h5>Documents</h5>
        </div>
        <div class="card-body">
            {{--            <h5 class="card-title">Special title treatment</h5>--}}
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
                <form  method="post" action="{{ url('document') }}">
                    {{--                <form>--}}
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputEmail" name="max_loan" placeholder="Maximum Loan Amount">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputPassword" name="property_price" placeholder="Property_price">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputPassword" name="property_type" placeholder="Property_type">
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
{{--@section('scripts')--}}
{{--    <script>--}}
{{--        $('#save_num').on('click', function(){--}}
{{--            var lot = $('input[name=lot_num]').val();--}}
{{--            if($.isNumeric(lot)) {--}}
{{--                $.ajax({--}}
{{--                    url: "{{route('lot.create')}}",--}}
{{--                    method: 'POST',--}}
{{--                    datatype: JSON,--}}
{{--                    data: {--}}
{{--                        lot: lot,--}}
{{--                        _token: '{{csrf_token()}}'--}}
{{--                    }--}}
{{--                }).done(function(response) {--}}
{{--                    console.log(response)--}}
{{--                });--}}

{{--            } else {--}}

{{--                alert('this is not a number')--}}
{{--            }--}}
{{--        })--}}
{{--    </script>--}}
{{--@endsection--}}



