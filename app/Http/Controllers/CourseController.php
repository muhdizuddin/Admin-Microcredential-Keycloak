<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Course;

class CourseController extends Controller
{
    public function course(Request $request)
    {
        $response = Http::get( env('MOODLE_URL') . '/webservice/rest/server.php?wstoken='. env('MOODLE_TOKEN').'&wsfunction=core_course_get_courses_by_field');
        $xml = simplexml_load_string($response);
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        //dd($array);
        $courses = $array['SINGLE']['KEY'][0]['MULTIPLE']['SINGLE'];
        //dd($courses);
        return view('course', compact('courses'));
    }

    public function create(Request $request)
    {
        $create = DB::table('course')
                    ->select('coursecode','courseinfo','coursetitle','category')
                    ->get();

        foreach ($create as $datacourse){
        $code=$datacourse->coursecode;
        $info=$datacourse->courseinfo;
        $title=$datacourse->coursetitle;
        $category=$datacourse->category;

        $response = Http::get( env('MOODLE_URL') . '/webservice/rest/server.php?wstoken='. env('MOODLE_TOKEN2').'&wsfunction=core_course_create_courses&courses[0][fullname]='. $title .'&courses[0][shortname]='. $code .'&courses[0][categoryid]='. $category .'&courses[0][summary]='. $info);
        $xml = simplexml_load_string($response);
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        dd($array);
        $courses = $array['SINGLE']['KEY'][0]['MULTIPLE']['SINGLE'];
        }
        //dd($courses);
        return view('course', compact('courses'));
    }

    public function test(Request $request)
    {
        $course = new Course;
     
        $course->coursetitle=$request->input('coursetitle');
        $course->coursecode=$request->input('coursecode');
        $course->courseinfo=$request->input('courseinfo');
        $course->category=$request->input('category');

        $result = $course->save();
    }
}