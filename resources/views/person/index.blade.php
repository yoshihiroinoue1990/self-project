@extends('layouts.layouts')

@section('title','Person.index')


@section('menubar')
@parent
インデックスページ
@endsection
@section('content')
<table>
  <tr><th>Data</th></tr>
  @foreach($items as $item)
  <tr>
    <td>{{$item->getData()}}</td>
  </tr>
  @endforeach
</table>
@endsection

 @section('footer')
copyright 2019 Inoue.
@endsection
