<?php

namespace App\Http\Controllers;

use App\Models\Broadcast;
use App\Models\Question;
use Illuminate\Http\Request;

class BroadcastController extends Controller
{
    public function index()
    {
        $broadcasts = Broadcast::all();

        return view('welcome', compact('broadcasts'));
    }

    public function create()
    {
        $attributes['title'] = "Darsa ya Tawhiyd (Baada ya Maghrib)";
        $attributes['book'] = "كتاب التوحيد";
        $attributes['teacher'] = "Sheikh Abuu Ayman Al-Shiraaziy";
        $attributes['extra'] = "حفظه الله تعالى";
        $attributes['status'] = false;

        $broadcast = Broadcast::create($attributes);

        return back();
    }

    public function update(Request $request, Broadcast $broadcast)
    {
        $attributes = $this->validate($request, [
            'title' => 'required',
            'book' => 'required',
            'teacher' => 'required',
            'extra' => 'required',
        ]);

        $broadcast->update($attributes);

        return back();
    }

    public function toggleStatus(Request $request, Broadcast $broadcast)
    {
        $attributes = $this->validate($request, [
            'status' => ['required', 'boolean'],
        ]);

        $broadcast->update($attributes);
        return back();
    }

}
