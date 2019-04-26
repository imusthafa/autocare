<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Services;
use App\User;
use Request;
use Flashy;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
  public function __construct()
  {

    $this->middleware('auth');
  }

  public function validateAdmin()
  {

    if (Auth::user()->isAdmin != 1) {
      die('Access Denied');
    }
  }

  public function dashboard()
  {
    $this->validateAdmin();

    $this->validateAdmin();
    $users = User::count();
    $newUsers = User::orderBy('id', 'desc')->get()->take(5);
    $service = Services::count();
    $newService = Services::orderBy('id', 'desc')->get()->take(5);
    return view('admin.dashboard', compact('users', 'newUsers', 'service', 'newService'));
    //service view in admin dashbord



  }

  public function users()
  {
    $this->validateAdmin();

    $users = User::paginate(10);
    return view('admin.users', compact('users'));
  }

  public function editUser($id)
  {
    $this->validateAdmin();


    $user = User::findOrFail($id);
    return view('admin.edituser', compact('user'));
  }

  public function updateUser($id)
  {
    $this->validateAdmin();

    $msg = User::findOrFail($id);
    $req = Request::all();
    Flashy::success('User updated successfully', '');
    $msg->update($req);
    return redirect('/admin/users');
  }
  public function deleteUser($id)
  {
    $this->validateAdmin();

    $service = User::findOrFail($id);
    $service->delete();
    Flashy::success('User deleted successfully', '');
    return redirect('/admin/users');
  }
  public function services()
  {
    $this->validateAdmin();

    $services = Services::paginate(10);
    return view('admin.service', compact('services'));
  }
  public function deleteService($id)
  {
    $this->validateAdmin();

    $service = Services::findOrFail($id);
    $service->delete();
    Flashy::success('Service deleted successfully', '');

    return redirect('/admin/service');
  }
  public function editService($id)
  {
    $this->validateAdmin();

    $service = Services::findOrFail($id);
    return view('admin.editService', compact('service'));
  }
  public function updateService($id)
  {
    $this->validateAdmin();

    $msg = Services::findOrFail($id);
    $req = Request::all();
    $msg->update($req);
    Flashy::success('Service updated successfully', '');

    return redirect('/admin/services');
  }
}
