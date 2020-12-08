<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function store(Request $request)
    {
        Author::create($this->validateRequest($request));
    }

    protected function validateRequest(Request $request)
    {
        return $request->validate([
            'name' => 'required',
            'dob' => 'required'
        ]);
    }
}
