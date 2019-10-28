<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Person extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
      'name' => 'required',
      'mail' => 'email',
      'age' => 'integer|min:0|man:150'
    );

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

}
