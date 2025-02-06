<?php

namespace App\Http\Controllers;
use App\Models\TaskModel;

use Illuminate\Http\Request;

class TaskModelController extends Controller
{
    public function index()
    {
        $taskdetails= TaskModel::all();
        return view('display',compact('taskdetails'));
    }
    public function create()
    {
        return view('taskcreate');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required',
            'title' => 'required',
            'description' => 'required',
        ]);
        $createtask = New TaskModel; 
        $createtask->name =  $request->name;  
        $createtask->title = $request->title;  
        $createtask->description = $request->description;
        $createtask->save();  
        return redirect()->route('taskdisplay');
    }
    public function edit($id)
    {
        $taskedit= TaskModel::find($id);  
        return view('edit', compact('taskedit')); 
    }
    public function update(Request $request, $id)
    {
        $request->validate([  
            'name'=>'required',  
            'title'=>'required',  
            'description'=>'required',
        ]);  

        $updatetask = TaskModel::find($id); 
        $updatetask->name =  $request->name;  
        $updatetask->title = $request->title;  
        $updatetask->description = $request->description;
        $updatetask->save();  
        return redirect()->route('taskdisplay');
    }
    public function delete(Request $request, $id)
    {
        $taskdelete = TaskModel::find($id);
        if (!$taskdelete) {
            return redirect()->route('taskdisplay')->with('error', 'Task not found.');
        }
        $taskdelete->delete();  
        return redirect()->route('taskdisplay')->with('success', 'Task deleted successfully.');
    }
    


}
