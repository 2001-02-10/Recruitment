<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Sports掲示板</title>
    </head>
   <body>
      <h1>募集内容編集</h1>
      <form action="/posts/{{ $post->id }}" method="POST">
          @csrf
          @method('PUT')
          <div class='title'>
              <h2>タイトル:</h2><br>
              <input type='text' name='post[title]' placeholder="例)バドミントン経験者募集" value="{{ old('post.title') }}"/>
              <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
        　</div>
        　<div class='category'>
              <h2>種目:</h2><br>
              <input type='text' name='post[category]' placeholder="例)バドミントン,卓球　等" value="{{ old('post.category') }}"/>
              <p class="category__error" style="color:red">{{ $errors->first('post.category') }}</p>
        　</div>
        　<div class='time'>
              <h2>日時:</h2><br>
              <input type='text' name='post[time]' placeholder="例)〇月〇日 〇時～〇時" value="{{ old('post.time') }}"/>
              <p class="time__error" style="color:red">{{ $errors->first('post.time') }}</p>
        　</div>
        　<div class='location'>
              <h2>活動場所:</h2><br>
              <input type='text' name='post[location]' placeholder="例)〇〇市の〇〇〇体育館" value="{{ old('post.location') }}"/>
              <p class="location__error" style="color:red">{{ $errors->first('post.location') }}</p>
        　</div>
        　<div class='number'>
              <h2>募集人数:</h2><br>
              <input type='text' name='post[number]' placeholder="例)〇〇人" value="{{ old('post.number') }}"/>
              <p class="number__error" style="color:red">{{ $errors->first('post.number') }}</p>
        　</div>
        　<div class='requirement'>
              <h2>募集要件:</h2><br>
              <textarea name='post[requirement]' placeholder="例)学生限定,社会人限定,どなたでもOK,経験者限定　等">{{ old('post.requirement') }}</textarea>
        　</div>
        　<input type="submit" value="募集内容を更新する"/>
      </form>
      <div class="back">[<a href="/posts/{{ $post->id}}">前の画面に戻る</a>]</div>
      <div class="back">[<a href="/">募集一覧へ戻る</a>]</div>
      
   </body>
</html>
