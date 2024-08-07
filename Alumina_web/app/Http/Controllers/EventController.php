<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function create()
    {
        return view('create'); // Ensure this matches your Blade file structure
    }
    

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'images' => 'nullable|string',
            'date' => 'nullable|date', // Validate date format as a date
            'venue' => 'required|max:255',
            'keywords' => 'nullable|string'
        ]);

        // Create a new event with the validated data
        Event::create($validatedData);

        // Redirect to the events index page with a success message
        return redirect()->route('events')->with('success', 'Event created successfully!');
    }

    public function index()
    {
        // Retrieve all events from the database
        $events = Event::all();

        // Return the index view with the events data
        return view('events', compact('events')); // Ensure this matches your Blade file structure
    }
}
