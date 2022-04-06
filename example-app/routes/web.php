<?php
use Illuminate\Support\Facades\DB;
use  App\Models\TestSlug;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Route;
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
    $testSlug = new TestSlug([
        'title' =>  "Nguyễn Minh Hiếu",
        'slug' => SlugService::createSlug(TestSlug::class,'slug','Nguyễn Minh Hiếu'),
    ]);
    $testSlug->save();
});
Route::get('/slug','TestSlugController@index')->name('testslug');
