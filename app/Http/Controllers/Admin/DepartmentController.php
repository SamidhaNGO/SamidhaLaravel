<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\department;

class DepartmentController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }
    public function index()
    {
        $result['department']=department::where(['status'=>1])->get();
        return view('admin/department/index',$result);
    }
    public function add()
    {
        return view('admin.department.add');
    }
    public function status()
    {
        department::where(['id'=>$id])->get();
        $result=product::where('id',$id)->update($DataInsert);
        $user =department::find($request ->id);
        $user->status=$request->status;
        $user->save();
    
    }
    public function store()
    {
        $this->validate(request(),[
            'department_name' => 'required|unique:departments,department_name,',
          ]);

            department::create([
            'department_name' =>request('department_name'),
            'status'=>1,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
           
          ]);
    
          //redirect to add page
          return redirect('/admin/department')->with('success','Deparment added successfully!');
    }

    public function edit($id)
    {
      $department = department::where('id', '=', $id)->get()->first();
      return view('admin.department.edit')->with(['department' => $department]);
    }

    public function update(Request $request,$id)
    {
        
        $this->validate(request(),[
            'department_name' => 'required|unique:departments,department_name,'.$id,
          ]);

          $input=array(
            'department_name' =>request('department_name'),
            'updated_at'=>date('Y-m-d H:i:s'),
           
          );
          $department = department::findOrFail($id);
          $department->update($input);
        //   echo "<pre>";
        //   print_r($department);
        //   echo "</pre>";
        //   die();
          //redirect to add page
          return redirect('/admin/department')->with('success','Deparment updated successfully!');
    }
    public function delete($id)
    {
        $department=department::find($id);
        $department->delete();
        return redirect('/admin/department')->with('success','Deparment Deleted successfully!');
    }




}
