<?php

namespace App\Http\Controllers;
use App\Area;
use App\Course;
use App\Lesson;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function course()
    {   
        $areas = Area::All();
        return view('course', [
            'areas' => $areas,
        ]);
    }
}