<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Driver;
use App\Models\Passenger;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * Display a listing of the admins.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAdmins()
{
    $passengers = Passenger::all();
    $drivers = Driver::all();
    
    return view('admin.admins.index', compact('passengers', 'drivers'));
}
}


























//     /**
//      * Show the form for creating a new admin.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function createAdmin()
//     {
//         return view('admin.admins.create');
//     }

//     /**
//      * Store a newly created admin in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function storeAdmin(Request $request)
//     {
//         $validatedData = $request->validate([
//             'name' => 'required',
//             'email' => 'required|email|unique:admins',
//             'password' => 'required|min:8',
//         ]);

//         $validatedData['password'] = bcrypt($validatedData['password']);

//         Admin::create($validatedData);

//         return redirect('/admin/admins')->with('success', 'Admin created successfully!');
//     }

//     /**
//      * Show the form for editing the specified admin.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function editAdmin($id)
//     {
//         $admin = Admin::findOrFail($id);
//         return view('admin.admins.edit', compact('admin'));
//     }

//     /**
//      * Update the specified admin in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function updateAdmin(Request $request, $id)
//     {
//         $validatedData = $request->validate([
//             'name' => 'required',
//             'email' => 'required|email|unique:admins,email,'.$id,
//             'password' => 'nullable|min:8',
//         ]);

//         if(isset($validatedData['password'])){
//             $validatedData['password'] = bcrypt($validatedData['password']);
//         }

//         Admin::whereId($id)->update($validatedData);

//         return redirect('/admin/admins')->with('success', 'Admin updated successfully!');
//     }

//     /**
//      * Remove the specified admin from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroyAdmin($id)
//     {
//         Admin::findOrFail($id)->delete();
//         return redirect('/admin/admins')->with('success', 'Admin deleted successfully!');
//     }
// }
