<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function dashboard()
    {
        $rooms = Room::all(); 

        return view('dashboard', compact('rooms'));
    }

    public function show($slug)
    {
        $roomDetails = Room::where('slug', $slug)->firstOrFail();
        return view('room.details', compact('roomDetails'));
    }

    public function details($id)
    {
    // Logic to retrieve room details by $id
    return view('room.details', compact('room'));
    }


    public function edit($slug)
    {
        $roomDetails = Room::where('slug', $slug)->firstOrFail();
        return view('room.edit', compact('roomDetails'));
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'status' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $room = Room::where('slug', $slug)->firstOrFail();
        $room->status = $request->status;
        $room->description = $request->description;
        $room->save();

        return redirect()->route('dashboard')->with('success', 'Room updated successfully.');
    }
}
