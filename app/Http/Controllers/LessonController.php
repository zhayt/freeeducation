<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
use App\Course;
use App\Lesson;

class LessonController extends Controller
{
    public function show($post)
    {   
        $items = Lesson::where('course_id', $post)->get();
        $names = Course::where('id', $post)->get();
        return view('maincontent',[
            'items' => $items,
            'names' => $names,
        ]);
    }
}
   