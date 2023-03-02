<?php
namespace App\Models;

use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    return view('posts', [
        'posts' => Post::all()
    ]);
    
});

Route::get('welcome', function () {

    return view('welcome');
});

Route::get('posts/{post}', function ($slug) {    

    return view('post', [

        'post' => Post::find($slug)

    ]);

})->where('post', '[A-z_\-0-9]+');
