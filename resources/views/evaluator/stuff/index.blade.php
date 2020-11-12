@extends('evaluator.dashboard')
@section('head')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Stuffs</h1>
        <a href="{{route('stuff.create')}}" class="btn btn-primary">Add data</a>
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
        <table class="table table-bordered table-striped" id="myTable" style="width: 100%">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Stuff_code</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Create time</td>
                    <td>Update time</td>
                    <td>Option</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                @foreach($stuffs as $row)
                    <tr>
                        <td> {{$row->id}}</td>
                        <td> {{$row->stuff_code}} </td>
                        <td> {{$row->first_name}} </td>
                        <td> {{$row->last_name}} </td>
                        <td> {{$row->created_at}} </td>
                        <td> {{$row->updated_at}} </td>
                        <td>
                            <a href="{{ route('stuff.edit', $row->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('stuff.destroy',$row->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
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
