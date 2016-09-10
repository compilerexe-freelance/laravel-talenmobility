<?php
  namespace App\Http\Controllers;

  use App\Users;
  use App\Http\Controllers\Controller;

  class AuthenPageController extends Controller
  {

    public function getIndex(){
      return view('authen.index');
    }
  }

?>
