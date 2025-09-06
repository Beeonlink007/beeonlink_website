<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[PageController::class,'index']);
Route::get('/about',[PageController::class,'about']);
Route::get('/service',[PageController::class,'service']);
Route::get('/service_details',[PageController::class,'service_details']);
Route::get('/project',[PageController::class,'project']);
Route::get('/project_details',[PageController::class,'project_details']);
Route::get('/pricing',[PageController::class,'pricing']);
Route::get('/error-404',[PageController::class,'error']);
Route::get('/faq',[PageController::class,'faq']);
Route::get('/coming_soon',[PageController::class,'coming_soon']);
Route::get('/terms_condition',[PageController::class,'terms_condition']);
Route::get('/privacy_policy',[PageController::class,'privacy_policy']);
Route::get('/blog_1',[PageController::class,'blog_1']);
Route::get('/blog_2',[PageController::class,'blog_2']);
Route::get('/single_blog',[PageController::class,'blog_3']);
Route::get('/contact',[PageController::class,'contact']);
