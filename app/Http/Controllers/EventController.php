<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Public events listing.
     */
    public function index()
    {
        $events = Event::with('images')
            ->latest('created_at')
            ->get();

        return view('pages.events', compact('events'));
    }


    /**
     * Public single event.
     */
    public function show(Event $event)
    {
        $event->load('images');

        return view('pages.event-show', compact('event'));
    }


    /**
     * Admin events listing.
     */
    public function adminIndex()
    {
        $events = Event::with('images')
            ->latest('created_at')
            ->get();

        return view('admin.events.index', compact('events'));
    }


    /**
     * Admin create form.
     */
    public function create()
    {
        return view('admin.events.create');
    }


    /**
     * Store event.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => [
                'required',
                'string',
                'max:255',
            ],

            'event_date' => [
                'nullable',
                'date',
            ],

            'description' => [
                'required',
                'string',
            ],

            'images' => [
                'nullable',
                'array',
            ],

            'images.*' => [
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:5120',
            ],
        ]);


        $event = Event::create([
            'title' => $validated['title'],
            'event_date' => $validated['event_date'] ?? null,
            'description' => $validated['description'],
        ]);


        if ($request->hasFile('images')) {

            foreach ($request->file('images') as $image) {

                $path = $image->store(
                    'events',
                    'public'
                );

                $event->images()->create([
                    'image_path' => $path,
                ]);
            }
        }


        return redirect()
            ->route('admin.events.index')
            ->with(
                'success',
                'Event published successfully.'
            );
    }


    /**
     * Admin edit form.
     */
    public function edit(Event $event)
    {
        $event->load('images');

        return view(
            'admin.events.edit',
            compact('event')
        );
    }


    /**
     * Update event.
     */
    public function update(
        Request $request,
        Event $event
    ) {
        $validated = $request->validate([
            'title' => [
                'required',
                'string',
                'max:255',
            ],

            'event_date' => [
                'nullable',
                'date',
            ],

            'description' => [
                'required',
                'string',
            ],

            'images' => [
                'nullable',
                'array',
            ],

            'images.*' => [
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:5120',
            ],
        ]);


        $event->update([
            'title' => $validated['title'],
            'event_date' => $validated['event_date'] ?? null,
            'description' => $validated['description'],
        ]);


        if ($request->hasFile('images')) {

            foreach ($request->file('images') as $image) {

                $path = $image->store(
                    'events',
                    'public'
                );

                $event->images()->create([
                    'image_path' => $path,
                ]);
            }
        }


        return redirect()
            ->route('admin.events.index')
            ->with(
                'success',
                'Event updated successfully.'
            );
    }


    /**
     * Delete event and its gallery.
     */
    public function destroy(Event $event)
    {
        $event->load('images');


        foreach ($event->images as $image) {

            Storage::disk('public')
                ->delete($image->image_path);
        }


        $event->delete();


        return redirect()
            ->route('admin.events.index')
            ->with(
                'success',
                'Event deleted successfully.'
            );
    }
}