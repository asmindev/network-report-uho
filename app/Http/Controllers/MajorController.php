<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    //

    public function all(Request $request)
    {
        $search = $request->search;
        if ($search) {
            $majors = Major::where('name', 'like', '%' . $search . '%')->paginate(10);
            // add query string
            $majors->appends(['search' => $search]);
        } else {
            $majors = Major::paginate(10);
        }
        return view("pages.admin.major.list", [
            "majors" => $majors
        ]);
    }

    public function create()
    {
        $faculties = Faculty::all();
        return view("pages.admin.major.create", [
            "faculties" => $faculties
        ]);
    }

    public function store(Request $request)
    {
        // validate
        $request->validate([
            // unique name
            'name' => 'required|unique:majors',
            'faculty_id' => 'required'
        ]);
        $major = new Major();
        $major->name = $request->name;
        $major->faculty_id = $request->faculty_id;
        $major->save();
        return redirect()->route("admin.major")->with("success", "Data Berhasil di Tambahkan");
    }

    public function edit(Major $major)
    {
        $faculties = Faculty::all();
        return view("pages.admin.major.edit", [
            "major" => $major,
            "faculties" => $faculties
        ]);
    }

    public function update(Major $major, Request $request)
    {
        $major->name = $request->name;
        $major->faculty_id = $request->faculty_id;
        $major->save();
        return redirect()->route("admin.major")->with("success", "Data Berhasil di Update");
    }

    public function destroy(Major $major)
    {
        $major->delete();
        return redirect()->route("admin.major")->with("success", "Data Berhasil di Hapus");
    }
}
