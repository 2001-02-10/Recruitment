<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ツーリング掲示板</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="./css/index.css">
    </head>
   <body class="body">
      <h1 class="head_01">ツーリング募集一覧</h1>
      <p class="post_text_02"><a href="/posts/create" class="button_02 -compact">募集する</a></p>
      <div class='posts'>
        @foreach($posts as $post) 
          <div class="index_post">
            <article class="post_01">
              <div class="post_header">
                <p class="post_title">{{ $post->title }}</p>
              </div>
              <div class="post_body_01">
                <p class="post_destination">目的地：{{ $post->destination }}</p>
              </div>
              <div class="post_body_02">
                <p class="post_updated_at">{{ $post->updated_at }}</p>
              </div>
              <div class="post_footer">
                <p class="post_text_01"><a href="/posts/{{ $post->id }}" class="button_01 -compact">募集詳細を見る</a></p>
              </div>
            </article>
          </div>
          @endforeach
      </div>
          <p class="post_text_02"><a href="/posts/create" class="button_02 -compact">募集する</a></p>
          <div class='paginate'>
            {{ $posts->links() }}</p>
          </div>
   </body>
</html>
