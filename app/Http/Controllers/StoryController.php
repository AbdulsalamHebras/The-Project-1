<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
use DB;


class StoryController extends Controller
{
    public function show($id)
    {
        $stories = Story::select('id', 'image')->get();
        $story = Story::with('authors:name')->select('id', 'name', 'summary', 'image')->findOrFail($id);
        return view('stories.details_story', compact('story', 'stories'));

    }
    public function read(Request $request, $id)
    {
        $userStory = DB::table('user_read_stories')
            ->where('story_id', $id)
            ->where('user_id', auth()->user()->id)
            ->first();

        if ($userStory) {
            return redirect()->back()->with('message', 'This story has been added before.');
        }

        DB::table('user_read_stories')->insert([
            [
                'story_id' => $id,
                'user_id' => auth()->user()->id,
            ]
        ]);

        return redirect()->back()->with('message', 'Story added successfully.');
    }
    public function favorite(Request $request, $id)
    {

        $favoriteStory = DB::table('user_favorite_stories')
            ->where('story_id', $id)
            ->where('user_id', auth()->user()->id)
            ->first();

        if ($favoriteStory) {
            return redirect()->back()->with('message', 'This story has been added before.');
        }

        DB::table('user_favorite_stories')->insert([
            [
                'story_id' => $id,
                'user_id' => auth()->user()->id,
            ]
        ]);

        return redirect()->back()->with('message', 'Story added successfully.');
    }
}
