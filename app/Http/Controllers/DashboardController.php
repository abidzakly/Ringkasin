<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Book;
use App\Models\Category;
use App\Models\Summary;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $user_id = session('user_id', null);
        $user = User::where('id', $user_id)->first();

        $summaries = Summary::join('books', 'summaries.book_id', '=', 'books.id')
            ->join('users', 'summaries.user_id', '=', 'users.id')
            ->select('summaries.*', 'books.*', 'users.*')
            ->where('summaries.status', '=', 'published')
            ->get();

        return view(
            'dashboard',
            [
                'username' => $user ? $user->username : null,
                'summaries' => $summaries,
                'booksRead' => [],
            ]
        );
    }
}
