@extends('layouts.layouts')

@section('title','Person.find')


@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<form action="/person/find" methos="post">
  {{ csrf_field() }}
  <input type="text" name="input" value="{{$input}}">
  <input type="submit" value="find">
</form>
@if (isset($item))
<table>
  <tr><th>Data</th></tr>
  <tr>
    <td>{{$item->getData()}}</td>
  </tr>
</table>
@endif
@endsection

 @section('footer')
copyright 2019 Inoue.
@endsection
