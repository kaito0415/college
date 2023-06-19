<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>投稿編集</title>
    </head>
    
   <body>
        <h1 class="title">投稿編集</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="edit_title">
                <h3>タイトル編集</h3>
                    <div class="insert_title">
                        <input type="text" name="post[title]"  value="{{ $post->title}}">
                        <p class="title_error" style="color:red">{{ $errors->first('post.title') }}</p>
                    </div>
            </div>
            <div class="create_body">
                <h3>本文編集</h3>
                <input type="text" name="post[body]" value="{{ $post->body }}">
                <p class="body_error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="更新" />
        </form>
        <div class='backindex'>
		    <a href="/posts/{{ $post->id }}">投稿詳細へ</a>
	    </div>
    </body>
    
</html>