<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use PharIo\Manifest\Library;

class BookController extends Controller
{
    public function add_book_form()
    {
        return view('admin_dashboard.library_management.add-books.add-book');
    }

    public function edit_book_form($id)
    {
        $book = Book::where('id', $id)->first();
        return view('admin_dashboard.library_management.edit-books.edit-book', compact('book'));
    }

    public function library_listing()
    {
        $book = Book::paginate(5);
        return view('admin_dashboard.library_management.library_management', compact('book'));
    }

    function upload_files($file)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/books/cover', $fileName);
        $loadPath = storage_path('app/public/') . '/' . $fileName;
        return $fileName;
    }
    public function add_book(Request $request)
    {
        $this->validate($request, [
            'book_title' => 'required',
            'book_description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg',
            'book_pages.*' => 'required|mimes:jpeg,png,jpg'
        ]);
        $book_cover = $this->upload_files($request['image']);
        $book_pages = [];
        if ($request->hasFile('book_pages')) {
            foreach ($request->file('book_pages') as $file) {
                $name = time() . mt_rand(300, 9000) . '.' . $file->extension();
                $file->storeAs('public/books/pages', $name);
                $book_pages[] =  $name;
            }
        }
        $book = Book::create([
            'book_title' => $request['book_title'],
            'description' => $request['book_description'],
            'image' =>  $book_cover,
            'book_pages' => $book_pages ?? []
        ]);
        if ($book) {
            return json_encode([
                'error' => false,
                'message' => 'Book has been added successfully.'
            ]);
        } else {
            return json_encode([
                'error' => false,
                'message' => 'Something went wrong Please try again.'
            ]);
        }
    }

    public function update_book(Request $request)
    {
        $this->validate($request, [
            'book_title' => 'required',
            'book_description' => 'required',
            'image' => 'mimes:jpeg,png,jpg',
            'book_pages.*' => 'mimes:jpeg,png,jpg'
        ]);

        $book = Book::where('id', $request->id)->first();
        $photos = $book->book_pages;

        if ($request->hasFile('image')) {
            $data['image'] = $this->upload_files($request['image']);
        }
        if ($request->hasfile('book_pages')) {
            foreach ($request->file('book_pages') as $file) {
                $name = time() . mt_rand(300, 9000) . '.' . $file->extension();
                $file->storeAs('public/books/pages', $name);
                array_push($photos, $name);
            }
            $data['book_pages'] = $photos;
        }

        $data['book_title'] = $request['book_title'] ?? $book->book_title;
        $data['description'] = $request['book_description'] ?? $book->description;

        $book = Book::where('id', $request->id)->update($data);

        if ($book) {
            return redirect()->route('library-management');
        } else {
            return redirect()->back()->with('msg', 'Something went wrong. Please try again');
        }
    }

    public function delete_book_page_images(Request $request)
    {

        $picture = explode('/', $request->photo);

        $image_name = $picture[5];
        $photos = Book::where('id', $request['id'])->first();
        $photos = $photos['book_pages'];
        $index = array_search($image_name, $photos);
        unset($photos[$index]);

        $data['book_pages'] = $photos;
        $book = Book::where('id', $request->id)->update($data);

        $filePath = storage_path('app/public/books/page/' . $image_name);
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        if ($book) {
            return response()->json([
                'success' => true,
                'message' => 'Book page image deleted Successfully'
            ]);
        } else {

            return response()->json([
                'success' => false,
                'message' => 'Something went wrong, Please try again'
            ]);
        }
    }
}
