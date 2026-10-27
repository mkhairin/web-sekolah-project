<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardAdminController extends Controller
{
    public function index()
    {
        return view('admin/dashboard-admin');
    }
}
