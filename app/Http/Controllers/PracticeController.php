<?php

namespace App\Http\Controllers;

class PracticeController extends Controller
{
  public function sample()
  {
    return response('practice');
  }
  public function sample2()
  {
    return response('practice2');
  }
  public function sample3()
  {
    return response('test')
  }
}
