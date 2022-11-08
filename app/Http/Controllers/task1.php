<?php
namespace App\Http\Controllers;
use App\Models\task;
use Illuminate\Http\Request;

class task1 extends Controller
{
/*
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/

public function index()
{
$task = task::all();
return view('tasks.index', compact('task'));
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('tasks.create');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{

$task = new task;
$task->name_task = $request->name_task;
$task->describe = $request->describe;
$task->link = $request->link;
$task->points = $request->points;
$task->type = $request->type; 
$task->date = $request->date;
$task->date_end = $request->date_end;
$task->save();
return redirect()->route('tasks.index')
->with('success','task has been created successfully.');

//return $task;
}
/**
* Display the specified resource.
*
* @param  \App\task  $task
* @return \Illuminate\Http\Response
*/
public function show(task $task)
{
    $task = task::all();
return view('tasks.show',compact('task'));
} 
/**
* Show the form for editing the specified resource.
*
* @param  \App\task  $task
* @return \Illuminate\Http\Response
*/
public function edit(task $task)
{
    //$task = task::find($id);
    return view('tasks.edit', compact('task'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\task  $task
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
/*$request->validate([
'name' => 'required',
'email' => 'required',
'address' => 'required',
]);*/
$task = task::find($id);
$task->name_task = $request->input('name_task');
$task->describe = $request->input('describe');
$task->link = $request->input('link');
$task->points = $request->input('points');
$task->type = $request->input('type');
$task->date = $request->input('date');
$task->date_end = $request->input('date_end');
$task->update();
//return $task;
return redirect()->back()
->with('success','task Has Been updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\task  $task
* @return \Illuminate\Http\Response
*/
public function destroy(task $task)
{
$task->delete();
return redirect()->route('tasks.index')
->with('success','task has been deleted successfully');
}
}