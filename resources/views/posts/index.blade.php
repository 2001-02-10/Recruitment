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
      <h1>募集一覧</h1>
      <a href='/posts/create'>募集する</a>
      <div class='posts'>
          @foreach($posts as $post) 
            <div class='post'>
               <h2 class='title'>
                  <a href="/posts/{{ $post->id}}">{{ $post->title}}</a> 
               </h2>
               <p class='category'>種目：{{ $post->category}}</p>
               <p class='location'>活動場所：{{ $post->location}}</p>
            </div>
          @endforeach
          <div class='paginate'>
            {{ $posts->links() }}
          </div>
        </div>
      </div>
   </body>
</html>
