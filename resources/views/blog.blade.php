@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('createpost') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('blogtest') ? ' has-error' : '' }}">
                            <label for="blogtest" class="col-md-4 control-label">Blog Text</label>

                            <div class="col-md-6">
                                <textarea id="blogtest"  class="form-control" name="blogtest"  required>{{ old('email') }} </textarea>

                                @if ($errors->has('blogtest'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('blogtest') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                
                            <label for="name" class="col-md-4 control-label">Image</label>

                            <div class="col-md-6">
                                <input id="name" type="file" class="form-control" name="thumbnail" value="{{ old('thumbnail') }}" >

                                
                            </div>
                     


                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4 text-center">
                                <button type="submit" class="btn btn-primary ">
                                    Submit 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
