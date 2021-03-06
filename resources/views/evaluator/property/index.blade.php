@extends('evaluator.dashboard')
@section('head')
    {{--    <h3>Customers Data</h3>--}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Property Management</h1>
        <a href="{{route('property.create')}}" class="btn btn-primary">Add data</a>
    </div>

@endsection
@section('contents')
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
                <th>Name_Property</th>
                <th>Type</th>
                <th>Price</th>
{{--                <th>Customer_Name</th>--}}
                <th>Time Created</th>
                <th>Option</th>
            </tr>
            </thead>
            {{--            {{ $documents }}--}}
            @foreach($properties as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    {{--                    <td>{{$row->customer}}</td>--}}
                    <td>{{$row->property_name}}</td>
                    <td>{{$row->type}}</td>
                    <td>{{$row->price}}</td>
{{--                    <div class="form-group">--}}
{{--                        <select id="company" class="form-control" style="width: 200px" name="customer_id">--}}
{{--                            <option></option>--}}
{{--                            @foreach($customers as $cy)--}}
{{--                                <option value="{{ $cy->id }}"> {{$cy->first_name}} {{ $cy->last_name }}</option>--}}
{{--                                --}}{{--                        <option value="{{ $cy->id }}">{{$cy->first_name}} {{ $cy->last_name }}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>>--}}
                    <td>{{$row->created_at}}</td>
                    <td>
                        <form class="delete_form" action="{{ route('property.destroy', $row->id)}}" method="post">
                            <a href="{{ route('property.show', $row->id)}}" class="btn btn-info">View</a>
                            <a href="{{ route('property.edit', $row->id)}}" class="btn btn-warning">Edit</a>
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
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        })
    </script>
@endsection
                                                            
