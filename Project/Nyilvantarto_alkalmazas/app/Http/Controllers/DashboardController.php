<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function show($string)
    {
        $dashboard = array('dashboard'=>'Diagram', 'profile'=>'Profil', 'groups'=>'Csapatok', 'ratings'=>'Értékelés', 'calendar'=>'Naptár', 'addMember' => 'Hozzáadás');
        $value = $dashboard[$string];

        if($value == 'Diagram')
        {
            $userAvatar = Auth::user();

            return view('Dashboard.dashboard', compact('userAvatar'));
        }
        elseif($value == 'Profil')
        {
            $userAvatar = Auth::user();

            return view('Dashboard.leader_user', compact('userAvatar'));
        }
        elseif($value == 'Értékelés')
        {
            $userAvatar = Auth::user();
            return view('Dashboard.értesítések', compact('userAvatar'));
        }
        elseif($value == 'Naptár')
        {
            $userAvatar = Auth::user();
            return view('Dashboard.naptás', compact('userAvatar'));
        }
        elseif($value == 'Csapatok')
        {
            $userAvatar = Auth::user();
            return view('Dashboard.csapat', compact('userAvatar'));
        }
        elseif($value == 'Hozzáadás')
        {
            $userAvatar = Auth::user();
            $user = User::all();
            $user_id = auth()->id();
            $team = Team::where('user_id', '=', $user_id)->get();
            return view('Dashboard.Team.team', compact('team', 'user', 'userAvatar'));
        }
    }
}