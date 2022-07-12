<?php

namespace App\Http\Controllers;

use App\Models\Broadcast;
use App\Models\Question;
use Illuminate\Http\Request;

class BroadcastController extends Controller
{
    public function radio()
    {
        $questions = Question::all();
        $broadcast = Broadcast::first();

        $status = $broadcast->status;
        $title = $broadcast->title;
        $book = $broadcast->book;
        $teacher = $broadcast->teacher;
        $extra = $broadcast->extra;

        return view('radio')->with([
            'status' => $status,
            'title' => $title,
            'book' => $book,
            'teacher' => $teacher,
            'extra' => $extra,
            'questions' => $questions
        ]);

        // return view('radio', compact('broadcast', 'questions'));
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
        $attributes = [
            'title' => $request->title ?? 'HATUPO LIVE MUDA HUU',
            'book' => $request->book ?? '',
            'teacher' => $request->teacher ?? 'Endelea Kusikiliza Redio',
            'extra' => $request->extra ?? '',
        ];

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


    public function refreshStatus()
    {
        $broadcast = Broadcast::first();
        $status = $broadcast->status;
        dd($status);
        return $status;
    }
    public function refreshTitle()
    {
        $broadcast = Broadcast::first();
        $title = $broadcast->title;
        return $title;
    }
    public function refreshBook()
    {
        $broadcast = Broadcast::first();
        $book = $broadcast->book;
        return $book;
    }
    public function refreshTeacher()
    {
        $broadcast = Broadcast::first();
        $teacher = $broadcast->teacher;
        return $teacher;
    }
    public function refreshExtra()
    {
        $broadcast = Broadcast::first();
        $extra = $broadcast->extra;
        return $extra;
    }
}
