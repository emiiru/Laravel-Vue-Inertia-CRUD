<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Str;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $topics = Topic::all();
        return Inertia::render('Topics/Index', [
            'topics' => $topics 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Topics/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $topic = new Topic;
        $topic->name = $request->name;
        $topic->slug = Str::slug($request->name, '-');
        $topic->content = $request->content;
        $topic->save();
        return to_route('topics');
    }

    /**
     * Display the specified resource.
     */
    public function show(Topic $topic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Topic $topic)
    {
        return Inertia::render('Topics/Edit', [
            'topic' => $topic 
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Topic $topic)
    {
        $topic->name = $request->name;
        $topic->slug = Str::slug($request->name, '-');
        $topic->content = $request->content;
        $topic->update();
        return to_route('topics');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Topic $topic)
    {
        $topic->delete();
        return to_route('topics');
    }
}
