@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               
             @if(session('message'))
			<h4 class="alert alert-info text center " >	 {{session('message')}} </h4>
			@endif
                <div class="panel-body">
				
				@foreach($posts as $post) 
				


					<br/>
				<a href="{{url('post/update/'.$post->id)}}">	<h4>{{$post->title}}</h4> </a>
					
					
					<p>{{$post->body}} </p>
					
					@if($post->thumbnail) 

					<img class="image-responsive" style="height:200px" src="{{url('/images/'.$post->thumbnail)}}">
					
					@endif
				<a class="btn btn-primary" href="{{url('post/'.$post->id.'/edit')}}">Edit </a>
				@endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
