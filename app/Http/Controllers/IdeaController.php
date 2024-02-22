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

    public function edit(Idea $id){

        $editing = true;

        return view('ideas.show', [
            'idea' => $id,
            'editing' => $editing
        ]);
    }

    public function update(Idea $id){

        request()->validate([
            "content" => "required|min:5|max:512",
        ]);

        $id->content = request()->get('content', '');
        $id->save();

        return redirect()->route('idea.show', $id->id )->with('success', 'Idea updated succefully');
    }

    public function store(){

        request()->validate([
            "content" => "required|min:5|max:512",
        ]);

        $getIdea = request()->get('content', '');

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
