<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Major;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public static function index()
    {
        $reportCount = Report::count();
        $facultyCount = Faculty::count();
        $majorCount = Major::count();
        $UserCount = User::where("role", "user")->count();
        return view("pages.admin.dashboard", [
            "page_title" => "Dashboard",
            "report_count" => $reportCount,
            "faculty_count" => $facultyCount,
            "major_count" => $majorCount,
            "user_count" => $UserCount
        ]);
    }
}
