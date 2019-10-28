@extends('layouts.layouts')

@section('title','Add')

@section('menubar')
  @parent
　新規ページ
@endsection

@section('content')
  <table>
    <form action="/hello/add" methos="post">
      {{ csrf_field() }}
      <tr><th>name: </th><td><input type="text" name="name"></td></tr>
      <tr><th>mail: </th><td><input type="text" name="mail"></td></tr>
      <tr><th>Age: </th><td><input type="text" name="age"></td></tr>
      <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
  </table>
@endsection

@section('footer')
copyright 2019 Inoue.
@endsection
