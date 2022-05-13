<?php

namespace App\Http\Controllers;

use App\Models\Service;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to the backend course';
//        return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function upload()
    {
        return view('pages.upload');
    }

    public function services()
    {
        $data = [
            'title' => 'Services',
            'services' => Service::all(),
        ];
        return view('pages.services')->with($data);
    }

    public function getService($id)
    {
        $data = [
            'title' => 'Service',
            'service' => Service::all(),
        ];
        return view('pages.services')->with($data);
    }
}
