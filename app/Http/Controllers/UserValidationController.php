<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Users;

class UserValidationController extends Controller {

  // Create Users
  public function createUserForm(Request $request) {
    return view('form');
  }

  // Store Form data in database
  public function UserForm(Request $request) {

      // Form validation
      $this->validate($request, [
          'name' => 'required',
          'email' => 'required|email',
          'mobile' => 'required|regex:/^([0-9]*)$/|min:10'
          
       ]);

      //  Store data in database
       Users::create($request->all());

      //
      return back()->with('success', 'User registered successfully!');
  }

}
?>
