<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>投稿作成</title>
    </head>
    
    <body>
        <h1 class="title">投稿作成</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="create_title">
                <h3>タイトル入力</h3>
                    <div class="insert_title">
                        <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"　/>
                        <p class="title_error" style="color:red">{{ $errors->first('post.title') }}</p>
                    </div>
            </div>
            <div class="create_body">
                <h3>本文入力</h3>
                <textarea name="post[body]" placeholder="本文" >{{ old('post.body') }}</textarea>
                <p class="body_error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="保存" />
        </form>
        <div class='backindex'>
		    <a href="/">投稿一覧へ</a>
	    </div>
    </body>
    
</html>