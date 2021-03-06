<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ChatsController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('member', [MemberController::class,'addMember']);
Route::get('member', [MemberController::class,'getMemberList']);
Route::get('member/{id}', [MemberController::class,'getMemberById']);
Route::patch('member/img/{id}', [MemberController::class,'addUserImg']); // add profile pic
Route::patch('member/{id}', [MemberController::class,'updateMember']);
Route::delete('member/{id}', [MemberController::class, 'deleteMember']);
Route::post('login',[MemberController::class,'login']);
Route::patch('login/changepass/{id}',[MemberController::class,'changePassword']);



// conversation routes

Route::get('chats', [ChatsController::class,'ShowChats']);
Route::get('chat', [ChatsController::class,'ShowUserChat']);
Route::post('chats', [ChatsController::class,'addChats']);
Route::patch('chats/{id}', [ChatsController::class,'updateChat']);
Route::delete('chats/{id}', [ChatsController::class,'deleteChat']);


// add chat and related to member

Route::post('addchat/{id}', [ChatsController::class,'addMemberChat']);
Route::post('addmember/{id}', [ChatsController::class,'addChatByUser']);
Route::get('chats/{id}', [ChatsController::class,'showChatByusr']);
Route::get('chatmem/{id}',[ChatsController::class,'showUserByChat']);


