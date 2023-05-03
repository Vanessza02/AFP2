<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show($string)
    {
        $dashboard = array('dashboard'=>'Diagram', 'profile'=>'Profil', 'groups'=>'Csapatok', 'ratings'=>'Értékelés', 'calendar'=>'Naptár');
        $value = $dashboard[$string];

        if($value == 'Diagram')
        {
            return view('Dashboard.dashboard');
        }
        elseif($value == 'Profil')
        {
            return view('Dashboard.leader_user');
        }
        elseif($value == 'Értékelés')
        {
            return view('Dashboard.értesítések');
        }
        elseif($value == 'Naptár')
        {
            return view('Dashboard.naptás');
        }
        elseif($value == 'Csapatok')
        {
            return view('Dashboard.csapat');
        }
    }
}
