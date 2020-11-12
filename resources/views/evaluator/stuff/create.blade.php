@extends('evaluator.dashboard')
@section('contents')

    <div class="container">
    <div class="card text-center form p-4" style="width: 80%">
        <div class="card-header">
            <h5>Create Stuff</h5>
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ url('stuff') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="stuff_code" placeholder="stuff_code"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="first_name" placeholder="first_name"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="last_name" placeholder="last_name"/>
                    </div>

{{--                    <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker">--}}
{{--                        <input placeholder="Select date" type="text" id="example" class="form-control">--}}
{{--                        <label for="example">Try me...</label>--}}
{{--                        <i class="fas fa-calendar input-prefix" tabindex=0></i>--}}
{{--                    </div>--}}

                    <button type="submit" class="btn btn-primary">Add Stuff</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
{{--@section('scripts')--}}
{{--    <script>--}}
{{--        $('.datepicker').datepicker();--}}
{{--        // $('.datepicker').date--}}
{{--    </script>--}}

