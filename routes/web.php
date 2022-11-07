<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\BookController;
use App\Http\Controllers\admin\TicketController;
use App\Http\Controllers\user\TicketController as UserTicketController;
use App\Http\Controllers\user\AuthController as UserAuthController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/admin-logout' ,[AuthController::class, 'logout'])->name('admin_auth_logout');

//Login
Route::middleware('guest:admin')->group(function () {
    Route::post('admin-login', [AuthController::class, 'login'])->name('admin_auth_login');

    Route::get('/', function () {
        return view('admin_dashboard.login.login');
    })->name('admin-login');
});



Route::prefix('admin')->group(function () {
    Route::middleware('auth:admin')->group(function () {
        Route::get('/ticket-management', [TicketController::class, 'ticket_listings'])->name('ticket-management');
        Route::post('add-ticket', [TicketController::class, 'add_ticket'])->name('add-ticket');
        Route::post('delete-ticket', [TicketController::class, 'delete_ticket'])->name('delete-ticket');
        Route::get('/edit-ticket/{id}',[TicketController::class , 'edit_ticket_form'])->name('edit_ticket_form');
        Route::post('edit-ticket', [TicketController::class, 'edit_ticket'])->name('edit-ticket');
        Route::post('delete-ticket-image' , [TicketController::class , 'delete_ticket_image'])->name('delete_ticket_image');
        Route::get('/content-management/{id}', [TicketController::class, 'participant_listing'])->name('content-management');

        Route::get('/library-management', [BookController::class, 'library_listing'])->name('library-management');
        Route::get('/library-management/add_books', [BookController::class, 'add_book_form'])->name('add-book-form');
        Route::post('add-book', [BookController::class, 'add_book'])->name('add-book');
        Route::get('edit-book/{id}', [BookController::class, 'edit_book_form'])->name('edit-book');
        Route::post('edit-books', [BookController::class, 'update_book'])->name('edit-books');
        Route::post('delete-book-page-images', [BookController::class, 'delete_book_page_images'])->name('delete_book_page_images');
        Route::post('delete-book-cover-image', [BookController::class, 'delete_book_cover_image'])->name('delete_book_cover_image');

        Route::get('/member-management', function () {
            return view('admin_dashboard.member_management.member_management');
        })->name('member-management');
    });
});

Route::prefix('web')->group(function(){
    Route::view('/','web.index')->name('web_index');

    Route::middleware('guest')->group(function () {
        Route::view('/signup','web.signup')->name('web_signup');
        Route::post('/auth-signup',[UserAuthController::class,'signup'])->name('web_auth_signup');

        Route::view('/login','web.login')->name('web_login');
        Route::post('/auth-login',[UserAuthController::class,'login'])->name('web_auth_login');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/logout' ,[UserAuthController::class, 'logout'])->name('web_auth_logout');

        Route::get('/tickets',[UserTicketController::class,'tickets'])->name('web_tickets');
        Route::view('/reservations','web.reservations')->name('web_reservations');
        Route::view('/drawing','web.drawing')->name('web_drawing');
        Route::view('/library','web.library')->name('web_library');
        Route::view('/book-detail','web.book_detail')->name('web_book_detail');
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

