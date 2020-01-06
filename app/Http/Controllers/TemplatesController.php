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

    public function show(Template $template)
    {

        return view('templates.show', compact('template'));
    }

    public function store()
    {
        // validate
        $attributes = request()->validate([
            'title' => 'required'
            , 'excerpt'=>'required'
            , 'template'=>'required'
        ]);
        
        // persist
        auth()->user()->templates()->create($attributes);

        // redirect
        return redirect('/templates');

    }
}
