<?php namespace Truemedia\Lwap\App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index()
    {
        $contact = config('site.contact');
        return view('lwap::pages.test', compact('contact'));
    }
}
