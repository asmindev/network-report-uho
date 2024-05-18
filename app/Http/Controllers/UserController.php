<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // get all user without admin
        $search = $request->search;
        if ($search) {
            $users = User::where('name', 'like', '%' . $search . '%')->where('role', '!=', 'admin')->with("major.faculty")->paginate(10);
            // add query string
            $users->appends(['search' => $search]);
        } else {
            $users = User::where('role', '!=', 'admin')->with("major.faculty")->paginate(10);
        }
        return view('pages.admin.user.index', [
            'page_title' => 'Admin - Users',
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // delete user
        $user->delete();
        return redirect()->route("admin.user")->with("success", "Data Berhasil di Hapus");
    }
}
