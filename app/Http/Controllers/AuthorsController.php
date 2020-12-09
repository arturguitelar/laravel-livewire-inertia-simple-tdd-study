<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class AuthorsController extends Controller
{
    public function create()
    {
        return Inertia::render('Authors/Create');
    }

    public function store(Request $request)
    {
        Author::create($this->validateRequest($request));

        return Redirect::route('dashboard');
    }

    protected function validateRequest(Request $request)
    {
        return $request->validate([
            'name' => 'required',
            'dob' => 'required'
        ]);
    }
}
