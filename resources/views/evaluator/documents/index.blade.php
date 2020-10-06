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
            <a href="{{route('document.create')}}" class="btn btn-primary">Add data</a>
            <br />
            <br />
        </div>
        <table class="table table-bordered table-striped">
            <tr>
                <th>Customer Name</th>
                <th>property Number</th>
                <th>option</th>
                <th></th>

            </tr>
            @foreach($documents as $row)
                <tr>
                    <td>{{$row['customer_name']}}</td>
                    <td>{{$row['property']}}</td>

                    <td> <a href="{{route('document.edit', $row['id'])}}" class="btn btn-warning">Edit</a>
                        {{--                         <a href="{{action('CustomerController@destroy', $row['id'])}}" class="btn btn-danger">Delete</a>--}}

                    </td>
                    <td>
                        <form method="post" class="delete_form" action="{{route('document.destroy',$row['id'])}}">
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

