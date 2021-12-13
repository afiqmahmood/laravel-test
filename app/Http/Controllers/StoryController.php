<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;

class StoryController extends Controller
{
    public function index()
    {
        $request = session()->get('userid');
        if($request  == NULL)
        {
            return redirect('login')->with('status', 'Please Login!');
        }
       $stories = Story::where('userid','=',$request)->paginate(5);

        return view('list-stories',compact('stories')) ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function storepost(Request $request)
    {
        $post = new Story;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->userid =$request->session()->get('userid');

        if($post->userid  == NULL)
        {
            return redirect('login')->with('status', 'Please Login!');
        }

        $post->save();
        return redirect('main')->with('status', 'Save Successfully');
    }

    public function addStory()
    {
        return view('stories.add');
    }

    public function edit($id)
    {
        $story = Story::findOrFail($id);
        return view('stories.edit',compact('story'));
    }

    public function update(Request $request, $id)
    {
        $story = Story::findOrFail($id);

        $story->title = $request->title;
        $story->content = $request->content;

        $story->update();
       
        return redirect('main')->with('status', 'Updated!');
    }

    public function destroy($id)
    {
        $story = Story::findOrFail($id);
        $story->delete();
    
        return redirect('main')->with('status','Deleted successfully');
    }
}
