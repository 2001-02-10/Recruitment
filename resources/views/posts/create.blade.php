<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ツーリング掲示板</title>
    </head>
   <body>
      <h1>募集内容</h1>
      <form action="/posts" method="POST">
          @csrf
          <div class='title'>
              <h2>タイトル:</h2><br>
              <input type='text' name='post[title]' placeholder="例)バイク初心者募集" value="{{ old('post.title') }}"/>
              <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
        　</div>
        　<div class='time'>
              <h2>集合日時:</h2><br>
              <input type='datetime-local' name='post[time]' value="{{ old('post.time') }}"/>
              <p class="time__error" style="color:red">{{ $errors->first('post.time') }}</p>
        　</div>
        　<div class='gathering'>
              <h2>集合場所:</h2><br>
              <input type='text' name='post[gathering]' placeholder="例)〇〇のコンビニ" value="{{ old('post.gathering') }}"/>
              <p class="gathering__error" style="color:red">{{ $errors->first('post.gathering') }}</p>
        　</div>
        　<div class='destination'>
              <h2>目的地:</h2><br>
              <input type='text' name='post[destination]' placeholder="例)針テラス等" value="{{ old('post.destination') }}"/>
              <p class="destination__error" style="color:red">{{ $errors->first('post.destination') }}</p>
        　</div>
        　<div class='requirement'>
              <h2>募集要件:</h2><br>
              <textarea name='post[requirement]' placeholder="例)学生限定,社会人限定,どなたでもOK,等">{{ old('post.requirement') }}</textarea>
        　</div>
        　<input type="submit" value="募集する"/>
      </form>
      <div class="back">[<a href="/">募集一覧へ戻る</a>]</div>
   </body>
</html>
