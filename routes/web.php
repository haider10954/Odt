<?php

use App\Http\Controllers\admin\BookController;
use App\Http\Controllers\admin\TicketController;
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
    return view('welcome');
});

Route::prefix('admin')->group(function () {

    Route::get('/ticket-management',[TicketController::class , 'ticket_listings'])->name('ticket-management');
    Route::post('add-ticket',[TicketController::class , 'add_ticket'])->name('add-ticket');
    Route::post('delete-ticket', [TicketController::class , 'delete_ticket'])->name('delete-ticket');
    Route::post('edit-ticket', [TicketController::class, 'edit_ticket'])->name('edit-ticket');
    Route::get('/content-management/{id}' , [TicketController::class , 'participant_listing'])->name('content-management');

    Route::get('/library-management' , [BookController::class , 'library_listing'])->name('library-management');
    Route::get('/library-management/add_books',[BookController::class , 'add_book_form'])->name('add-book-form');
    Route::post('add-book',[BookController::class , 'add_book'])->name('add-book');
    Route::get('edit-book/{id}',[BookController::class , 'edit_book_form'])->name('edit-book');
    Route::post('edit-books',[BookController::class , 'update_book'])->name('edit-books');
    Route::post('delete-book-page-images', [BookController::class , 'delete_book_page_images'])->name('delete_book_page_images');

    Route::get('/member-management' , function(){
        return view ('admin_dashboard.member_management.member_management');
    })->name('member-management');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
