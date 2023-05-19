<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\User;
use App\Models\TeamMember;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function show($string)
    {
        $dashboard = array('dashboard'=>'Diagram', 'profile'=>'Profil', 'groups'=>'Csapatok', 'ratings'=>'Értékelés', 'calendar'=>'Naptár', 'addMember' => 'Hozzáadás');
        $value = $dashboard[$string];
        $userAvatar = Auth::user();
        $user = User::all();
        $user_id = auth()->id();
        $team = Team::where('user_id', '=', $user_id)->get();
        $showDiv = session('showDiv', false);
        $selectedTeamId = session('selectedTeamId', 1);

        if($value == 'Diagram')
        {
            return view('Dashboard.dashboard', compact('userAvatar'));
        }
        elseif($value == 'Profil')
        {
            return view('Dashboard.leader_user', compact('userAvatar'));
        }
        elseif($value == 'Értékelés')
        {
            $teamMember = TeamMember::All();
            return view('Dashboard.értesítések', compact('userAvatar', 'team', 'showDiv', 'teamMember', 'selectedTeamId'));
        }
        elseif($value == 'Naptár')
        {
            return view('Dashboard.fullcalender', compact('userAvatar'));
        }
        elseif($value == 'Csapatok')
        {
            return view('Dashboard.csapat', compact('userAvatar'));
        }
        elseif($value == 'Hozzáadás')
        {
            return view('Dashboard.Team.team', compact('team', 'user', 'userAvatar'));
        }
    }
}
