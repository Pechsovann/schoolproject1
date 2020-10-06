@extends('evaluator.dashboard')
@section('contents')
    <div class="col-md-12">
        <br />
        <h3>Edit Record</h3>
        <br />
        @if(count($errors) > 0)

            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
                @endif
                <form method="post" action="{{route('document.update',$id)}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <input type="text" name="customer_name" class="form-control" value="{{$documents->customer_name}}" placeholder="Customer name" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="property" class="form-control" value="{{$documents->property}}" placeholder="property" />
                    </div>


                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Save" />
                    </div>

                </form>
            </div>
    </div>
@endsection

