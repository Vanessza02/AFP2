<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Team;
use App\Models\TeamMember;

class TeamController extends Controller
{
    public function store(Request $request){
        
        $user = Auth::user();
        $user_id = $user->id;

        // Az űrlap adatainak ellenőrzése
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
    
        $team = new Team;
        $team->user_id = $user_id;
        $team->name = $request->name;
        $team->description = $request->description;
        $res = $team->save();

        if($res)
        {
            $teamMember = new TeamMember;
            $teamMember->team_id = $team->id;
            $teamMember->user_id = $user_id;
            $teamMember->role = "Csapat vezető";
            $teamMember->save();

            return back()->with('success','Sikeresen létrehoztál egy új csapatot!');
        }
        else
        {
            return back()->with('fail', 'Valami nincs rendben!');
        }
    }

    public function addMember(Request $request){
        $request->validate([
            'name' => 'required',
            'nickname' => 'required',
        ]);

        $team = $request->name;
        $name = $request->nickname;

        $teamMember = new TeamMember;
        $teamMember->team_id = Team::where('name', '=', $team)->value('id');
        $teamMember->user_id = User::where('nickname' ,'=' , $name)->value('id');
        $teamMember->role = "Tag";
        $res = $teamMember->save();

        if($res)
        {
            return back()->with('success','Sikeresen hozzáadtad a felhasználót!');
        }
        else
        {
            return back()->with('fail', 'Valami nincs rendben!');
        }

    }
}
