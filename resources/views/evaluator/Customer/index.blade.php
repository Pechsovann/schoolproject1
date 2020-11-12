@extends('evaluator.dashboard')
@section('head')
{{--    <h3>Customers Data</h3>--}}
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Customers</h1>
    <a href="{{route('customer.create')}}" class="btn btn-primary">Add data</a>
</div>

@endsection
@section('contents')
    <div class="row">
    <div class="col-md-12">
{{--        @if($message = Session::get('success'))--}}
{{--            <div class="alert alert-success">--}}
{{--                <p>{{$message}}</p>--}}
{{--            </div>--}}
{{--        @endif--}}

        @if(Session::has('success'))
            <script>
                toastr.success("{!!Session::get('success')!!}")
            </script>
        @endif

        <table class="table table-bordered table-striped" id="myTable">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Job</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Company_Area</th>
                <th>option</th>

            </tr>
            </thead>

            @foreach($customers as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row['first_name']}}</td>
                    <td>{{$row['last_name']}}</td>
                    <td>{{$row['age']}}</td>
                    <td>{{$row['job']}}</td>
                    <td>{{$row['phone_number']}}</td>
                    <td>{{$row['address']}}</td>
                    <td>{{$row->province->company_area}}</td>
                    <td>
                        <form method="post" class="delete_form"
                              action="{{action('CustomerController@destroy',$row['id'])}}">
                            <a class="btn btn-info" href="{{action('CustomerController@show', $row['id'])}}"> Show</a>
                            <a href="{{action('CustomerController@edit', $row['id'])}}" class="btn btn-warning"> Edit</a>
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger"> Delete</button>
                        </form>
                    </td>
                </tr>
                </tr>
            @endforeach
        </table>
    </div>
    </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        })
    </script>
@endsection
