@extends('layouts.app')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="col-md-12">
					<br> <br>
					<div class="card">
						<div class="card-header">
							<a href="{{ route('blog_path', ['blog' => $blog->id])}}">
								{{ $blog->title}}
							</a>
						</div>
						<div class="card-body">
							<img src="{{ asset('public'.$blog->image)}}" style="height: 255px;" class="card-img-top">		
							{{ $blog->content}}
							<p>Posted: {{ $blog->created_at->diffForHumans()}}</p>	
						</div>
					</div>
					<br>
					<a href="{{ route('edit_blog_path', ['blog' => $blog->id])}}" class="btn btn-outline-info"> Update Post</a>	
					<br><br>
					<a href="{{ route('blogs_path')}}" class="btn btn-info">Back</a>
					<br><br> 
					<form action="{{ route('delete_blog_path', ['blog' => $blog->id])}}" method="POST">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-outline-danger"> Delete</button>
					</form>
					<br> <br> <br> <br> <br>
				</div>
			</div>
		</div>
	</div>
@endsection