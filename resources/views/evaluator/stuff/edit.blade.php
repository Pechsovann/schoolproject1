@extends('evaluator.dashboard')
        @section('contents')
            <div class="card" style="width: 80%">
                <div class="card-header">
                    <h5>Create Stuff</h5>
                </div>
                <div class="card-body">
{{--                    <h5 class="card-title">Special title treatment</h5>--}}
                    <div class="col-md-12">
                        {{--            <h1 class="display-3">Update a Stuff</h1>--}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <br />
                        @endif
                        <form method="post" action="{{route('stuff.update',$stuffs->id)}}">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="stuff_code" placeholder="Stuff_code" value={{ $stuffs->stuff_code }} />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="first_name" placeholder="first_name" value={{ $stuffs->first_name }} />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="last_name" placeholder="last_name" value={{ $stuffs->last_name }} />
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
