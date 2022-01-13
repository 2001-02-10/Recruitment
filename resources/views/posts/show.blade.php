<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sports掲示板</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
   <body>
      <h1>募集内容</h1>
      <div class='content'>
            <div class='content_post'>
               <h2 class='title'>{{ $post->title}}</h2>
               <p class='category'>{{ $post->category}}</p>
               <p class='time'>{{ $post->time}}</p>
               <p class='location'>{{ $post->location}}</p>
               <p class='number'>{{ $post->number}}</p>
               <p class='requirement'>{{ $post->requirement}}</p>
            </div>
            <div class="footer">
               <a href="/">募集一覧へ戻る</a>
            </div>
       </div>
   </body>
</html>
