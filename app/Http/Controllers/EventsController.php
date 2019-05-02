<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('adminPages.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPages.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'event_name',
            'description',
            'event_date'
        ]);

        $form_data = array(
            'event_name' => $request->event_name,
            'description' => $request->description,
            'event_date' => $request->event_date
        );

        Event::create($form_data);

        return redirect('/events')->with('success', 'Event created successfully');

       /* $request->validate([
            'event_name',
            'description',
            'event_date'
        ]);

        $event = new Event([
            'event_name' => $request->get('event_name'),
            'description' => $request->get('description'),
            'event_date' => $request->get('event_date'),
        ]);

        $event->save();

        return redirect('/events')->with('success', 'Event created successfully');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('adminPages.events.edit', compact('event'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'event_name',
            'description',
            'event_date'
        ]);


        $event = Event::find($id);
        $event->event_name = $request->get('event_name');
        $event->description = $request->get('description');
        $event->event_date = $request->get('event_date');


        $event->save();

        return redirect('/events')->with('success', 'Event updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
    
        return redirect('/events')->with('success', 'Event deleted successfully');
    }
}
