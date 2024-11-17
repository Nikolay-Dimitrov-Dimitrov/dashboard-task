<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Button;

class DashboardController extends Controller
{
    // Show the dashboard
    public function index()
    {
        $buttons = Button::all()->keyBy('position');
        return view('dashboard', compact('buttons'));
    }

    // Show configuration form
    public function configure($position)
    {
        $button = Button::where('position', $position)->first();
        return view('configure', compact('button', 'position'));
    }

    // Save or update button configuration
    public function store(Request $request, $position)
    {
        $request->validate([
            'color' => 'required|string|max:7',
            'url' => 'required|url|max:255'
        ]);

        Button::updateOrCreate(
            ['position' => $position],
            ['color' => $request->color, 'url' => $request->url]
        );

        return redirect('/');
    }

    // Delete button configuration
    public function delete($position)
    {
        Button::where('position', $position)->delete();
        return redirect('/');
    }
}
