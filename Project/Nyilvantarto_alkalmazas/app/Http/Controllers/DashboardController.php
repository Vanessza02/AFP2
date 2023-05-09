<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\User;


class DashboardController extends Controller
{
    public function show($string)
    {
        $dashboard = array('dashboard'=>'Diagram', 'profile'=>'Profil', 'groups'=>'Csapatok', 'ratings'=>'Értékelés', 'calendar'=>'Naptár', 'addMember' => 'Hozzáadás');
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
        elseif($value == 'Hozzáadás')
        {
            $user = User::all();
            $user_id = auth()->id();
            $team = Team::where('user_id', '=', $user_id)->get();
            return view('Dashboard.Team.team', compact('team', 'user'));
        }
    }
}
