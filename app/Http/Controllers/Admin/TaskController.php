<?php


namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\task;
use App\Models\department;

class TaskController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }
    public function index()
    {
        $result['task']=task::where(['status'=>1])->get();
        return view('admin/task/index',$result);
    }
    public function add()
    {
        $result['department']=department::where(['status'=>1])->get();
        return view('admin.task.add',$result);
    }
    public function status()
    {
        task::where(['id'=>$id])->get();
        $result=product::where('id',$id)->update($DataInsert);
        $user =task::find($request ->id);
        $user->status=$request->status;
        $user->save();
    
    }
    public function store()
    {
        $this->validate(request(),[
            'task_name' => 'required|unique:tasks,task_name,',
          ]);

            task::create([
            'task_name' =>request('task_name'),
            'status'=>1,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
           
          ]);
    
          //redirect to add page
          return redirect('/admin/task')->with('success','Deparment added successfully!');
    }

    public function edit($id)
    {
      $task = task::where('id', '=', $id)->get()->first();
      return view('admin.task.edit')->with(['task' => $task]);
    }

    public function update(Request $request,$id)
    {
        
        $this->validate(request(),[
            'task_name' => 'required|unique:tasks,task_name,'.$id,
          ]);

          $input=array(
            'task_name' =>request('task_name'),
            'updated_at'=>date('Y-m-d H:i:s'),
           
          );
          $task = task::findOrFail($id);
          $task->update($input);
        //   echo "<pre>";
        //   print_r($task);
        //   echo "</pre>";
        //   die();
          //redirect to add page
          return redirect('/admin/task')->with('success','Deparment updated successfully!');
    }
    public function delete($id)
    {
        $task=task::find($id);
        $task->delete();
        return redirect('/admin/task')->with('success','Deparment Deleted successfully!');
    }

}
