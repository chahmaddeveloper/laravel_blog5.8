@extends('layouts.app')

@section('content')
<form action="{{ route('update_blog_path', ['blog' => $blog->id]) }}" method="POST">
	
	@csrf

	@method('PUT')
	<div class="container">
		<br>
		<br>
		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" class="form-control" value="{{$blog->title}}">
		</div>
		<div class="form-group">
			<label for="content">Content</label>
			<textarea type="text" rows="10" name="content" class="form-control">{{$blog->content}}</textarea>
		</div>
		<div class="form-group">
			<button type="Submit" name="" class="btn btn-outline-primary">
				Edit Blog Post
			</button>
		</div>
	</div>

</form>

@endsection