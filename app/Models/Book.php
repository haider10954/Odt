<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'book_pages' => 'array'
    ];
    public function bookImage()
    {
        return asset('storage/books/cover/' . $this->image);
    }

    public function bookPageImageList()
    {
        $list = [];
        foreach($this->book_pages as $book_page){
            $list[] = asset('storage/books/pages/' . $book_page);
        }
        return $list;
    }

}
