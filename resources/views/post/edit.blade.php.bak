@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('post/update') }}" enctype="multipart/form-data">
                           {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Title</label>
                            @foreach($posts as $post)
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{$post->title}} " required autofocus>

                                @if($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('	body') ? ' has-error' : '' }}">
                            <label for="blogtest" class="col-md-4 control-label">Blog Text</label>

                            <div class="col-md-6">
                                <textarea id="body"  class="form-control" name="body"  required>{{ $post->body }} </textarea>

                                @if($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                
                            <label for="name" class="col-md-4 control-label">Image</label>
                             
								@if($post->thumbnail) 

					      <img class="image-responsive" style="height:200px" src="{{url('/images/'.$post->thumbnail)}}">
					
					           
                            <div class="col-md-6">
                                <input id="thumbnail" type="file" class="form-control" name="thumbnail" value="{{ $post->thumbnail }}" >

                                
                            </div>
                                 @endif


                        
                         @endforeach
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4 text-center">
                                <button type="submit" class="btn btn-primary ">
                                    Update
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
