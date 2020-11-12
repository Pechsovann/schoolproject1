@extends('evaluator.dashboard')
@section('head')
    {{--    <h3>Customers Data</h3>--}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Documents</h1>
        <a href="{{route('document.create')}}" class="btn btn-primary">Add data</a>
    </div>

@endsection
@section('contents')
    <div class="row">
    <div class="col-md-12">
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif

        <table id="myTable" class="table table-bordered table-striped" style="width: 100%">
            <thead>
            <tr>
                <th>#</th>
                <th>Cus_ID</th>
                <th>FullName</th>
                <th>Loan Amount</th>
                <th>property_price</th>
                <th>Property_Type</th>
{{--                <th>Address</th>--}}
{{--                <th>Province-City</th>--}}
                <th>Created Time</th>
                <th>Updated Time</th>
                <th>option</th>
            </tr>
            </thead>
            {{--            {{ $documents }}--}}
            @foreach($documents as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    {{--                    <td>{{$row->customer}}</td>--}}

                    <td>{{$row->customer->id }}</td>
                    <td>{{$row->customer->full_name}}</td>
                    <td>{{$row->max_loan}}</td>
                    <td>{{$row->property_price}}</td>
                    <td>{{$row->property_type}}</td>
{{--                    <td>{{$row->customer->province->company_area}}</td>--}}
                    <td>{{$row->created_at}}</td>
                    <td>{{$row->updated_at}}</td>
                    <td>
                        <form method="post" class="delete_form" action="{{route('document.destroy',$row->id)}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
{{--                            <a class="btn btn-info" href="{{action('DocController@show', $row['id'])}}"> Show</a>--}}
                            <a href="{{action('DocController@edit', $row['id'])}}" class="btn btn-warning"> Edit</a>
                            <button type="submit" class="btn btn-danger"> Delete</button>
                        </form>
                    </td>
                </tr>
                </tr>
            @endforeach
        </table>
    </div>
    {{--    <script>--}}
    {{--        $(document).ready(function () {--}}
    {{--            $('.delete_form').on('submit', function () {--}}
    {{--                if(confirm("Are you sure want to delete it ?"))--}}
    {{--                {--}}
    {{--                    return true;--}}
    {{--                }--}}
    {{--                else--}}
    {{--                {--}}
    {{--                    return false;--}}
    {{--                }--}}
    {{--            });--}}

    {{--        });--}}
    {{--        // $(document).ready(function () {--}}
    {{--        //     $('#example').DataTable();--}}
    {{--        // });--}}
    {{--      </script>--}}
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
