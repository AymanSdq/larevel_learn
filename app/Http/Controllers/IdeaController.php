<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    //

    public function show(Idea $id){

        return view('ideas.show', [
            'idea' => $id
        ]);

    }



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


    public function destroy(Idea $id){

        $id->delete();

        return redirect()->route('idea.home')->with('success', 'Idea deleted succefully');
    }

}
