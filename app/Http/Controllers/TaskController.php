<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{

  public function index(){
    $sql = "select * from tasks";
    $result = DB::select(DB::raw($sql));
    return response()->json([
      'tasks' => $result
 ],200);
  }

  public function store(Request $request){
    $title = $request->title;
    $description = $request->description;
    $sql = "insert into tasks (title,description) values ('$title','$description')";
    DB::insert(DB::raw($sql));
    return response()->json(['message' => "User successfully created."],200);
  }

  public function show($id){
    $sql = "select * from tasks where id=$id";
    $result = DB::select(DB::raw($sql));
    return response()->json($result);
  }

  public function update(Request $request,$id){
    $title = $request->title;
    $description = $request->description;
    $sql = "update tasks set title='$title',description='$description' where id=$id";
    DB::update(DB::raw($sql));
    return response()->json(['message' => "User successfully updated."],200);
  }

  public function destroy($id){
    $sql = "delete from tasks where id=$id";
    $result = DB::delete(DB::raw($sql));
    return response()->json(['message' => "User successfully deleted."],200);
  }

}
