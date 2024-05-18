<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    //

    public function all()
    {
        $search = request()->search;
        if ($search) {
            $faculties = Faculty::where('name', 'like', '%' . $search . '%')->paginate(1);
            // add query string
            $faculties->appends(['search' => $search]);
        } else {
            $faculties = Faculty::paginate(10);
        }
        return view("pages.admin.faculty.list", [
            "faculties" => $faculties
        ]);
    }
    public function show(Faculty $faculty)
    {
        return view("pages.admin.faculty.detail", [
            "faculty" => $faculty
        ]);
    }
    public function create()
    {
        return view("pages.admin.faculty.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|unique:faculties,name"
        ]);
        $faculty = new Faculty();
        $faculty->name = $request->name;
        $faculty->save();
        return redirect()->route("admin.faculty")->with("success", "Data Berhasil di Tambahkan");
    }

    public function edit(Faculty $faculty)
    {
        return view("pages.admin.faculty.edit", [
            "faculty" => $faculty
        ]);
    }

    public function update(Faculty $faculty, Request $request)
    {
        $faculty->name = $request->name;
        $faculty->save();
        return redirect()->route("admin.faculty")->with("success", "Data Berhasil di Update");
    }

    public function destroy(Faculty $faculty)
    {
        $faculty->delete();
        return redirect()->route("admin.faculty")->with("success", "Data Berhasil di Hapus");
    }
}
