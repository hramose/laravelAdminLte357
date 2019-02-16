<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function dashboardv1()
  {
    return view('layouts.dashboardV1');
  }

  public function dashboardv2()
  {
    return view('layouts.dashboardV2');
  }

  public function dashboardv3()
  {
    return view('layouts.dashboardV3');
  }
}