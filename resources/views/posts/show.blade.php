<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>投稿詳細</title>
</head>

<body>
	<h1 class='title'>
		{{$post->title}}
	</h1>
	<div class='content'>
		<h3 class='body'>
			{{$post->body}}
		</h3>
	</div>
	<div class="edit" >
		<a href="/posts/{{ $post->id }}/edit" class="post_edit">投稿編集</a>
	</div>
	<div class='backindex'>
		<a href="/">投稿一覧へ</a>
	</div>
</body>
</html>
