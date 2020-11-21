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
{{--        @include('Alerts::alerts')--}}
        <table class="table table-bordered table-striped" id="myTable">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>DoB</th>
                <th>Gender</th>
                <th>Job</th>
                <th>Phone Number</th>
                <th>Khan</th>
                <th>city</th>
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
                    <td>{{$row['gender']}}</td>
                    <td>{{$row['job']}}</td>
                    <td>{{$row['phone_number']}}</td>
                    <td>{{$row['khan']}}</td>
                    <td>{{$row['city']}}</td>
                    <td>{{$row->province->company_area}}</td>
                    <td>
                        <form method="post" class="delete_form"
                              action="{{action('CustomerController@destroy',$row['id'])}}">
                            <a class="btn btn-info" href="{{action('CustomerController@show', $row['id'])}}"> Show</a>
                            <a class="btn btn-warning" href="{{action('CustomerController@edit', $row['id'])}}" > Edit</a>
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            {{csrf_field()}}
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

    <script>
        toastr.success("{!! Session::get('success')!!}");
    </script>

    <script>
        $(".delete").on("submit", function(){
            return confirm("Are you sure?");
        });
    </script>

{{--    <script type="text/javascript">--}}
{{--        function deleteConfirmation(id) {--}}
{{--            swal({--}}
{{--                title: "Delete?",--}}
{{--                text: "Please ensure and then confirm!",--}}
{{--                type: "warning",--}}
{{--                showCancelButton: !0,--}}
{{--                confirmButtonText: "Yes, delete it!",--}}
{{--                cancelButtonText: "No, cancel!",--}}
{{--                reverseButtons: !0--}}
{{--            }).then(function (e) {--}}
{{--                if (e.value === true) {--}}
{{--                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');--}}
{{--                    $.ajax({--}}
{{--                        type: 'POST',--}}
{{--                        url: "{{url('/delete')}}/" + id,--}}
{{--                        data: {_token: CSRF_TOKEN},--}}
{{--                        dataType: 'JSON',--}}
{{--                        success: function (results) {--}}
{{--                            if (results.success === true) {--}}
{{--                                swal("Done!", results.message, "success");--}}
{{--                            } else {--}}
{{--                                swal("Error!", results.message, "error");--}}
{{--                            }--}}
{{--                        }--}}
{{--                    });--}}
{{--                } else {--}}
{{--                    e.dismiss;--}}
{{--                }--}}
{{--            }, function (dismiss) {--}}
{{--                return false;--}}
{{--            })--}}
{{--        }--}}
{{--    </script>--}}
@endsection
