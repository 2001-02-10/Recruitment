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
               <h2 class='title'>タイトル：{{ $post->title}}</h2>
               <p class='category'>種目種目：{{ $post->category}}</p>
               <p class='time'>日時日時：{{ $post->time}}</p>
               <p class='location'>活動場所：{{ $post->location}}</p>
               <p class='number'>募集人数：{{ $post->number}}</p>
               <p class='requirement'>募集要件：{{ $post->requirement}}</p>
            </div>
            <div class="footer">
               <a href="/">募集一覧へ戻る</a>
            </div>
       </div>
   </body>
</html>
