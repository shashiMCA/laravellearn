@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               
            
                <div class="panel-body">
				
		@foreach($posts as $post)
			
				<h4>{{$post->title}}</h4> 
					<p>{{$post->body}} </p>
					
					@if($post->thumbnail) 

					<img class="image-responsive" style="height:200px" src="{{url('/images/'.$post->thumbnail)}}">
					
					@endif
	
                @endforeach    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
