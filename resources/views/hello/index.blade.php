@extends('layouts.layouts')

@if(Auth::check())
  @section('title','Top Menu')
@else
  @section('title','Login Page')
@endif

@section('menubar')
  @parent
@endsection

@section('content')
@if(Auth::check())
<div class="container">
  <table>
    <tr><th>SKILL NAME</th><th>TOTAL　VALUE</th><th>AVERAGE VALUE</th></tr>
    @foreach ($items as $item)
    <tr>
      <td>{{$item->skillName}}</td>
      <td>{{$item->skillName}}</td>
      <td>{{$item->SkillLevel}}</td>
    </tr>
    @endforeach
  </table>
</div>

  <div class="container">
    <h2>スキルレベル</h2>
    <form  action="/skillRegistered" method="post">
      <div class="container">
      <select class="form-control">
          <option>Skill A</option>
          <option>Skill B</option>
          <option>Skill C</option>
          <option>Skill D</option>
          <option>Skill E</option>
        </select>
      </div>

        <div class="container">
        <label class="radio-inline">
            <input type="radio" name="database" checked>１
        </label>
        <label class="radio-inline">
            <input type="radio" name="database">２
        </label>
        <label class="radio-inline">
            <input type="radio" name="database">３
        </label>
        <label class="radio-inline">
            <input type="radio" name="database">４
        </label>
        <label class="radio-inline">
            <input type="radio" name="database">５
        </label>
        </div>
        <br>
        <button type="submit">スキルレベル登録</button>
    </form>
</div>

@else
  <p>※ログインしてください(<a href="/login">ログイン</a>|
  <a href="/register">登録</a>)</p>
@endif
@endsection

@section('footer')
copyright 2019 Yoshihiro INOUE.
@endsection
