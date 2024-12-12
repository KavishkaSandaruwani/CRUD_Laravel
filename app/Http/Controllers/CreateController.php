<?php

namespace App\Http\Controllers;

use App\Models\CreateProduct;
use Illuminate\Http\Request;

class CreateController extends Controller
{

    protected $task;

    public function __construct(){
          $this->task = new CreateProduct;
    }

    public function index(){
        $response['tasks'] = $this->task->all();
        return view("pages.create.index")->with($response);
    }

    
    public function store(Request $request){
       $this->task->create($request->all());
       return redirect()->route("create")->with('success','Product created successfully');
    }

    public function delete($task_id){
        $task = $this->task->find($task_id);
        $task->delete();
       

        return redirect()->back()->with('success','Product deleted successfully');
    }

    public function edit($task_id){
        
        $task = $this->task->find($task_id);
        return view('pages.home.edit', compact('task'));

    }

    public function update(Request $request,$task_id){
        $task = $this->task->find($task_id);
        $task->name= $request->name;
        $task->details= $request->details;

        $task->save();
        return redirect('create')->with('success','Product information updated successfully');

    }

    public function show($task_id){
        
        $task = $this->task->find($task_id);
        return view('pages.home.index', compact('task'));

    }

}
