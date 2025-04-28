<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Team_Management;
use Illuminate\Http\Request;

class Team_ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $team_management = Team_Management::where('user_id', auth()->id())->filter($request->query('search'))->get();
        return view('agent.pages.agent_Office_Management.team.index', compact('team_management'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $team_management = new Team_Management();
        return view('agent.pages.agent_Office_Management.team.create', compact('team_management'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('team_managements', 'public');
        }
        Team_Management::create(array_merge(
            $request->only(['first_name', 'last_name', 'email', 'phone', 'address']),
            [
                'user_id' => auth()->id(),
                'image' => $image ?? null
            ]
        ));

        return redirect()->route('agent.dashboard.team_management.index')->with('success', 'Team member created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team_Management $team_management)
    {
        return view('agent.pages.agent_Office_Management.team.edit', compact('team_management'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team_Management $team_Management)
    {
        if ($request->hasFile('image')) {
            if ($team_Management->image) {
                Storage::delete($team_Management->image);
            }
            $image = $request->file('image')->store('team_managements', 'public');
        }
        $team_Management->update(array_merge($request->only(['first_name', 'last_name', 'email', 'phone', 'address']),['image'=>$image ?? null]));
        return redirect()->route('agent.dashboard.team_management.index')->with('success', 'Team member updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team_Management $team_Management)
    {
        $team_Management->delete();

        return redirect()->route('agent.dashboard.team_management.index')->with('success', 'Team member deleted successfully.');
    }
}
