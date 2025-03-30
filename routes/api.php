<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('get_announcement_table', [CommunityController::class, 'getAnnouncementTable'])->name('community.announcement_table');
Route::get('get_pages_by_id', [CommunityController::class, 'getPagesById'])->name('community.get_pages_by_id');
Route::get('get_bulletin_pages_by_id', [CommunityController::class, 'getBulletinPagesById'])->name('community.get_bulletin_pages_by_id');
Route::get('get_writing_collection_bulletin_table', [CommunityController::class, 'getWritingCollectionBulletin'])->name('community.bulletin_table');




