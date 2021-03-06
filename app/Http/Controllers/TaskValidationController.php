<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Tasks;

use DB;


class TaskValidationController extends Controller {

  // Create Tasks
  public function createTaskForm(Request $request) {
    $users = DB::table('users')->pluck("name","id");
    return view('taskform',compact('users'));
  }

  // Store Form data in database
  public function TaskForm(Request $request) {

      // Form validation
      $this->validate($request, [
          'user' => 'required|max:255',
          'task' => 'required|max:255',
          'status' => 'required'
          
       ]);

      //  Store data in database
       Tasks::create($request->all());

      //
      return back()->with('success', 'Task assigned successfully!');
  }

 
  
}

?>
