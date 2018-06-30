@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
				
				<a href='{{url("post")}}'>Create your blog </a> ||  	<a href='{{url("post/show")}}'>Go All Blog </a> 

			
				
				</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h4 class="text-center">Now  You are logged in! Welcome here</h4>
				   <p class="text-center"> you can create your blog here <p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
