<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class EventsController extends Controller
{
    public function show()
    {
        // dd("here");
        return Inertia::render('Pages/Show', [
            'event' => [
                'id' => 1,
                'title' => 'First Title',
                'start_date' => 'Today',
                'description' => 'Test description'
            ],
        ]);
    }
}

?>