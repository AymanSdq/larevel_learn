<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    //
    public function store(){

        request()->validate([
            "idea" => "required|min:5|max:235",
        ]);

        $getIdea = request()->get('idea', '');

        $idea = Idea::create([
            'content' => $getIdea
        ]);

        return redirect()->route('idea.home')->with('success', 'Idea posted succefully');
    }


    public function destroy($id){

        $idea = Idea::where('id', $id)->firstOrFail();

        $idea->delete();

        return redirect()->route('idea.home')->with('success', 'Idea deleted succefully');
    }

}
