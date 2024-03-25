<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Summary;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ExploreController extends Controller
{
    public function exploreView(): View
    {
        $categories = Category::all();
        $summaries = Summary::join('books', 'summaries.book_id', '=', 'books.id')
            ->join('users', 'summaries.user_id', '=', 'users.id')
            ->select('summaries.*', 'books.*', 'users.*')
            ->where('summaries.status', '=', 'published')
            ->get();
        $popularAuthor = DB::select("SELECT * FROM users WHERE id = (SELECT user_id FROM summaries s GROUP BY user_id ORDER BY COUNT(*) DESC LIMIT 10)");

        return view("eksplor", [
            'categories' => $categories,
            'summaries' => $summaries,
            'popularAuthors' => $popularAuthor,
        ]);
    }
}
