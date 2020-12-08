<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class CheckinBookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Book $book)
    {
        try {
            $user = Auth::user();
            $book->checkin($user);
        } catch(\Exception $e) {
            return response([], 404);
        }
    }
}
