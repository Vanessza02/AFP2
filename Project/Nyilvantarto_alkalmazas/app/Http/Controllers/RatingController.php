<?php

namespace App\Http\Controllers;

use App\Models\ratings;
use App\Models\TeamMember;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function rating(Request $request){
        
        $request->validate([
            'name' => 'required',
        ]);
        
        $res = $request->name;
        $team = Team::where('name','=',$res)->value('id');

        if($res)
        {
            session(['showDiv' => true]);
            session(['selectedTeamId' => $team]);
            $selectedTeamId = Session::get('selectedTeamId');
            return redirect()->back()->with('success', 'Sikeresen kiválasztottad az értékelni kivánt csapatot, azonosítója: '.$selectedTeamId);
        }
        else
        {
            return back()->with('fail', 'Valami nincs rendben!');
        }
    }

    public function store(Request $request){
        $request->validate([
            'ratee_name' => 'required',
            'score' => 'required',
            'reason' => 'required',
        ]);


        $selectedTeamId = Session::get('selectedTeamId');

        $rating = new ratings;
        $rating->rater_id = Auth::user()->id;
        $rating->ratee_id = $request->ratee_name;
        $rating->score = $request->score;
        $rating->reason = $request->reason;
        $rating->team_id = $selectedTeamId;
        $res = $rating->save();

        if($res)
        {
            session(['showDiv' => false]);
            session('selectedTeamId', []);
            return back()->with('success','Sikeresen értékelted a felhasználót');
        }
        else
        {
            return back()->with('fail', 'Valami nincs rendben!');
        }
    }
}
