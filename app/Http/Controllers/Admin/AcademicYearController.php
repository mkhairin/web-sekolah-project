<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\academicYears as AcademicYearModel;
use RealRashid\SweetAlert\Facades\Alert;

class AcademicYearController extends Controller
{
    public function index()
    {
        $academicyears = AcademicYearModel::get();
        return view('admin/academic-year/index', compact('academicyears'));
    }
}
