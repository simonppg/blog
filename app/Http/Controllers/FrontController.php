<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Carbon\Carbon;

class FrontController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(4);
        $articles->each(function ($articles)
        {
            $articles->category;
            $articles->images;
        });
        return view('front.index')->with('articles', $articles);
    }
}
