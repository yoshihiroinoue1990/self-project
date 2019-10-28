<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request)
    {
      $items = Person::all();
      return view('person.index',['items' => $items]);
    }

    public function getData()
    {
      return $this->id . ':' . $this->name . ' (' . $this->age .')';
    }

    public function find(Request $request)
    {
      return view('person.find',['input' => '']);
    }

    public function search(Request $request)
    {
      $item = Person::find($request->input);
      $param = ['input' => $request->input, 'item' => $item];
      return view('person.find',$param);
    }

    public function add(Request $request)
    {
      return view('person.add');
    }

    public function create(Request $request)
    {
      //$this->validate($request, Person::$rules);
      $person = new Person;
      $form = $request->all();
      unset($form['_token']);
      $person->fill($form)->save();
      return redirect('/person');
    }
}
