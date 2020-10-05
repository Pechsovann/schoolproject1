@extends('evaluator.dashboard')
@section('contents')
    <div class="col-md-12">
        <br />
        <h3 align="center">Customer Data</h3>

        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
                </div>
        @endif
        <div align="right">
            <a href="{{route('customer.create')}}" class="btn btn-primary">Add data</a>
            <br />
            <br />
        </div>
        <table class="table table-bordered table-striped">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>option</th>
                <th></th>

            </tr>
            @foreach($customers as $row)
                <tr>
                    <td>{{$row['first_name']}}</td>
                    <td>{{$row['last_name']}}</td>
                    <td>{{$row['phone_number']}}</td>
                    <td>{{$row['address']}}</td>
                    <td> <a href="{{action('CustomerController@edit', $row['id'])}}" class="btn btn-warning">Edit</a>
{{--                         <a href="{{action('CustomerController@destroy', $row['id'])}}" class="btn btn-danger">Delete</a>--}}

                    </td>
                    <td>
                    <form method="post" class="delete_form" action="{{action('CustomerController@destroy',$row['id'])}}">
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
    <script>
        $(document).ready(function () {
            $('.delete_form').on('submit', function () {
                if(confirm("Are you sure want to delete it ?"))
                {
                    return true;
                }
                else
                {
                    return false;
                }
            });

        });
    </script>

    </div>
@endsection
