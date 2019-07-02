@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			@foreach($blogs as $blog)
				<div class="col-md-6">
					<br> <br>
					<div class="card">
						<div class="card-header">
							<a href="{{ route('blog_path', ['blog' => $blog->id])}}">
								{{ $blog->title}}
							</a>
						</div>
						<div class="card-body">
							<img src="{{ asset('public'.$blog->image)}}" style="height: 240px;" class="card-img-top">
							<br>
							{{ $blog->content}}
							<br>
							<p>Posted: {{ $blog->created_at->diffForHumans()}}</p>	
						</div>
						<br>
						<a href="{{ route('blog_path', ['blog' => $blog->id])}}" class="btn btn-primary">View Post</a>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection