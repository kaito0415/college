<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>BLOG</title>
</head>

<body>
	<h1>投稿一覧</h1>
	<div class="posts">
		@foreach ($posts as $post)
			<div class="post">
				<h2 class="title">
					<a href="/posts/{{$post->id}}">{{$post->title}}</a>
				</h2>　
				<p class="body">{{ $post->body }}</p>
				<form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
					@csrf
					@method('DELETE')
					<button type="button" onclick="deletePost({{ $post->id }})">投稿の削除</button>
				</form>
			</div>
		@endforeach
	</div>
	<div class="paginate">
		{{$posts->links()}}
	</div>
	<a href='posts/create'>投稿作成</a>
	
	<script>
	function deletePost(id){
		'use strict'
		
		if(confirm('削除しますか？')){
			document.getElementById(`form_${id}`).submit();
		}
	}
	</script>

</body>

</html>
