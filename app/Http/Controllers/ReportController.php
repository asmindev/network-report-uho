<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function all(Request $request)
    {
        $search = $request->search;
        $category = $request->category;
        if ($search) {
            switch ($category) {
                case 'status':
                    $reports = Report::where('status', 'like', '%' . $search . '%')->paginate(10);
                    // add query string
                    $reports->appends(['search' => $search, 'category' => $category]);
                    break;
                case "major":
                    $reports = Report::whereHas('major', function ($query) use ($search) {
                        $query->where('name', 'like', '%' . $search . '%');
                    })->paginate(10);
                    $reports->appends(['search' => $search, 'category' => $category]);
                    break;
                default:
                    $reports = Report::where('name', 'like', '%' . $search . '%')->paginate(10);
                    $reports->appends(['search' => $search, 'category' => $category]);
                    break;
            }
        } else {
            $reports = Report::with('major')->paginate(10);
        }
        return view('pages.admin.report.list', [
            'page_title' => 'Admin - Reports',
            'reports' => $reports
        ]);
    }

    public function create()
    {
        $faculties = Faculty::with('majors')->get();
        return view('pages.report.create', [
            'faculties' => $faculties
        ]);
    }

    public function store(Request $request)
    {
        // validate
        $request->validate([
            'name' => 'required',
            'major_id' => 'required',
            'description' => 'required|min:20'

        ]);
        $report = new Report();
        $report->major_id = $request->major_id;
        $report->description = $request->description;
        $report->name = $request->name;
        $report->save();
        return redirect()->route("profile")->with("success", "Data Berhasil di Tambahkan");
    }

    public function destroy($id)
    {
        $report = Report::find($id);
        $report->delete();
        return redirect()->route("admin.report")->with("success", "Laporan Berhasil di Hapus");
    }


    public function edit($id)
    {
        $report = Report::find($id);
        $faculties = Faculty::with('majors')->get();
        return view('pages.report.edit', [
            'report' => $report,
            'faculties' => $faculties
        ]);
    }

    public function update(Request $request, $id)
    {
        $report = Report::find($id);
        // just update if field is not empty
        if (!empty($request->name)) {
            $report->name = $request->name;
        }
        if (!empty($request->description)) {
            $report->description = $request->description;
        }
        if (!empty($request->status)) {
            $report->status = $request->status;
        }
        $report->save();
        // check if auth user is admin
        if (auth()->user()->role == 'admin') {
            return redirect()->route("admin.report")->with("success", "Laporan Berhasil di Update");
        } else if (auth()->user()->role == 'user') {
            return redirect()->route("profile")->with("success", "Laporan Berhasil di Update");
        }
    }

    // details
    public function details(Report $report)
    {
        // report with major, major with faculty
        // update the is_read to true
        if (auth()->user()->role == 'admin' && $report->is_read == false) {
            $report->is_read = true;
            $report->save();
        }
        $statusArray = ['pending', 'done', 'canceled'];
        // remove array elements that if elemnt == report->status
        $finalStts = array_diff($statusArray, [$report->status]);
        return view('pages.admin.report.details', [
            'report' => $report,
            'finalStts' => $finalStts
        ]);
    }
};
