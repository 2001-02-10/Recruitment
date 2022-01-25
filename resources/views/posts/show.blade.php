<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ツーリング掲示板</title>
        <!-- Fonts -->
        <link href="{{secure_asset('/css/show.css')}}" rel="stylesheet">
    </head>
   <body class="body">
      <h1 class="head_01">募集詳細</h1>
      <div class="content">
            <div class="content_post">
              <article　class="post_01">
                 
                 <div class="post_header">
                   <h2 class="post_title">タイトル：{{ $post->title}}</h2>
                 </div>
                 <div class="post_body_01">
                   <h2 class="post_time">集合日時：{{ $post->time}}</h2>
                 </div>
                 <div class="post_body_02">
                   <h2 class="post_gathering">集合場所：{{ $post->gathering}}</h2>
                 </div>
                 <div class="post_body_03">
                   <h2 class="post_destination">目的地：{{ $post->destination}}</h2>
                 </div>
                 <div class="post_body_04">
                   <h2 class="post_requirement">募集要項：{{ $post->requirement}}</h2>
                 </div>
                 <form action="/posts/{{ $post->id }}" id="form_delete" method="post">
              　    @csrf　
            　　     @method('DELETE')
            　　     <input type="submit" style="display:none">
            　　     <div class="post_footer_03">
            　　       <p class="post_text_03"><a onclick="return deletePost(this);return false;" class="button_03 -compact">投稿を削除する</a></p>
            　　     </div>  
            　　   <div class="post_footer_02">
                      <p class=""post_text_02><a href="/posts/{{ $post->id }}/edit" class="button_02 -compact">編集する</a></p>
                 </div>  
        　　       </form>
               </article>
            </div>
            <div class"post_footer_01">
                  <p class="post_text_01"><a href="/" class="button_01 -compact">募集一覧へ戻る</a></p>
            </div>
            <script>
            　 function deletePost(e){
             　'use strict';
             　if(confirm('削除すると復元できません。\n本当に削除しますか？')){
             　document.getElementById('form_delete').submit();
             　　}else{
             　　   alert('キャンセルされました');
             　　 return false;
             　　}
            　　}
            </script>
       </div>
   </body>
</html>
