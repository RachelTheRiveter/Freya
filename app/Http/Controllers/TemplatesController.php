<?php

namespace App\Http\Controllers;

use App\Template;
use Illuminate\Http\Request;


class TemplatesController extends Controller
{
    public function index()
    {
        $templates = Template::all();

        return view('templates.index', compact('templates'));

    }

    public function store()
    {
        // validate

        // persist
        Template::create(request(['title', 'excerpt', 'template']));

        // redirect
        return redirect('/templates');

    }
}
