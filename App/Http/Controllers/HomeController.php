<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewCollection;
use App\Models\MenShoes;
use App\Models\WomanShoes;
use App\Models\SportShoes;
use App\Models\Comment;

class HomeController extends Controller
{
    public function index()
    {
        $collection = NewCollection::all();
        $men = MenShoes::all();
        $woman = WomanShoes::all();
        $sport = SportShoes::all();
        $comment = comment::all();
        return view('landingpage.index', [
            'tables' => $collection,
            'men' => $men,
            'woman' => $woman,
            'sport' => $sport,
            'comment' => $comment,
        ]);
    }
}
