<?php

use App\Models\Salon;
use App\Models\Helper;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
$arr = [1,2,44,5];

Route::get('/', function () use ($arr) {
 
    return view('welcome',['data' => $arr]);
});

Route::get('/about', function () {
    return view('about');
});



Route::get('/std/{id}',function($id){
    return view('student/index',['data'=> $id]);
});

// Route::get('/jobs/{id}',function($id) use($jobs) { 

//     $first = Arr::first($jobs, fn($job) => $job['id'] == $id );

//     return view('singlejob' ,['job' => $first ]);
// });


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/stdinfo',function(){
    $obj = Teacher::first();
    $students = $obj->students;
    return view('student',['data'=>$students]);
});

Route::get('/parts',function(){
    return view('test', ['x'=>123]);
});
Route::get('/parts/{num}',function($x){
    return view('test', ['x'=>$x]);
});



Route::get('/helpers',function(){
    $collection = Helper::with('salon')->paginate(2);
    return view('Helpers.show',['salons'=> $collection]);
});
Route::get('/helpers/create',function(){
    return view('Helpers.create');
});

Route::post('/helpers',function(){
    request()->validate([
        'author' => 'required|min:2'
    ]);
    dd(request()->all());
});