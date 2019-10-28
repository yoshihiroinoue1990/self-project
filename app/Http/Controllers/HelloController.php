<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HelloController extends Controller
{
  public function index(Request $request){
    $user = Auth::user();
    $items = DB::table('skillLevel_t')->groupBy('skillName')->get();
    $param = ['items' => $items, 'user' => $user];
    return view('hello.index',['items'=> $items]);
  }

  public function post(HelloRequest $request){
      $user = Auth::user();
      $param = ['items' => $items, 'user' => $user];
    $items = DB::table('skillLevel_t')->get();
    return view('hello.index',['items'=>$items]);
  }


  public function logout(Request $request){
    Auth::logout();
    $user = Auth::user();
    $items = ['aaa', 'bbb'];
    $param = ['items' => $items, 'user' => $user];
    return view('hello.index',['user'=> $param]);
  }


  public function add(Request $request)
  {
    return view('hello.add');
  }

  public function create(Request $request)
  {
    $param = [
      'name' => $request->name,
      'mail' => $request->mail,
      'age' => $request->age,
    ];
    DB::table('people')->insert($param);
    return redirect('/hello');
  }

  public function edit(Request $request)
  {
    $param = ['id' => $request->id];
    $item = DB::select('select * from people where id = :id', $param);
    return view('hello.edit',['form' => $item[0]]);
  }

  public function update(Request $request)
  {
    $param = [
      'id' => $request->id,
      'name' => $request->name,
      'mail' => $request->mail,
      'age' => $request->age,
    ];
    DB::update('update people set name =:name, mail =:mail, age =:age, id =:id', $param);
    return redirect('/hello');
  }

  public function show(Request $request)
  {
    $id = $request->id;
    $items = DB::table('people')->where('id','<=',$id)->orderby('age','asc')->get();
    return view('hello.show',['items' => $items]);
  }

  public function ses_get(Request $request)
  {
    $sesdata = $request->session()->get('msg');
    return view('hello.session', ['session_data'=>$sesdata]);
  }

  public function ses_put(Request $request)
  {
    $msg = $request->input;
    $request->session()->put('msg',$msg);
    return redirect('hello/session');
  }

}
