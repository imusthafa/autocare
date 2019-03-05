<?php

namespace App\Http\Controllers;
use App\Feedback;
use App\Services;
use App\User;
use Request;
use Flashy;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function users()
    {
     $users = User::paginate(10);
     return view('admin.users',compact('users'));     
    }

    public function editUser($id)
         {
           
           $user=User::findOrFail($id);
           return view('admin.edituser',compact('user')); 
          }   
          
          public function updateUser($id)
          {
            $msg=User::findOrFail($id);
            $req=Request::all();
            Flashy::success('User updated successfully', '');
        $msg->update($req);
        return redirect('/admin/users');
     }
   public function deleteUser($id)
     {
       $service=User::findOrFail($id);
       $service->delete();
       Flashy::success('User deleted successfully', '');
       return redirect('/admin/users');
    }         
    public function services()
    {
    $services=Services::paginate(10);
     return view('admin.service',compact('services'));     
    }
    public function deleteService($id)
     {
       $service=Services::findOrFail($id);
       $service->delete();
       return redirect('/admin/service');
    } 
    public function editService($id)
    {
        $service=Services::findOrFail($id);
         return view('admin.editService',compact('service')); 
    }   
    public function updateService($id)
    {
       $msg=Services::findOrFail($id);
       $req=Request::all();
       $msg->update($req);
       return redirect('/admin/services');
    }        
}



