<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models;
use App\Models\Summary;
use App\Models\SummaryTopics;
use Illuminate\Http\Request;
use Illuminate\View\View;


class SummaryController extends Controller
{
    public function deleteTopic(Request $req, $topicId)
    {
        SummaryTopics::where("id", $topicId)->delete();
        return back();
    }

    public function inputContentView(Request $request, $book_id, $summary_id): View
    {
        $book = Book::find($book_id);
        $summaryStatus = Summary::find($summary_id)['status'];
        $topics = SummaryTopics::where("summary_id", $summary_id)->get();
        $topicsData = [];

        foreach ($topics as $topic) {
            $topicData = [
                'id' => $topic->id,
                'title' => $topic->title,
                'content' => $topic->content,
            ];

            array_push($topicsData, $topicData);
        }

        return view(
            'summary.content',
            [
                "book_id" => $book_id,
                "book" => $book,
                "summary_status" => $summaryStatus,
                "topics" => $topicsData,
                "summary_id" => $summary_id
            ],
        );
    }

    public function inputContent(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'total-page' => 'required|numeric',
            'publication-year' => 'required|numeric',
            'isbn' => 'required',
            'price' => 'required|numeric',
            'category' => 'required|exists:categories,id',
            'description' => 'required',
        ]);

        Book::create([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'total_page' => $request->input('total-page'),
            'publication_year' => $request->input('publication-year'),
            'isbn' => $request->input('isbn'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category'),
            'description' => $request->input('description'),
        ]);

        return redirect()->back()->with('message', 'Book data submitted successfully!');
    }

    public function inputHeaderView(): View
    {
        $books = Book::pluck('id', 'title')->toArray();
        return view('summary.header', ["books" => $books]);
    }

    public function inputView($summary_id, $book_id): View
    {
        return view('summary.input', ['summary_id' => $summary_id, 'book_id' => $book_id]);
    }
    public function editTopicView($summary_id, $book_id, $topic_id): View
    {
        $topic = SummaryTopics::findOrFail($topic_id);
        return view('summary.edit', ['title' => $topic->title, 'content' => $topic->content, 'summary_id' => $summary_id, 'book_id' => $book_id, 'topic_id' => $topic_id]);
    }
    public function editTopic(Request $req, $summary_id, $book_id, $topic_id)
    {
        $topic = SummaryTopics::findOrFail($topic_id);
        $topic->title = $req->title;
        $topic->content = $req->content;
        $topic->save();

        return redirect()->route(
            'summary.content',
            [
                'book_id' => $book_id,
                'summary_id' => $summary_id
            ]
        );
    }
    public function input(Request $request, $summary_id, $book_id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        SummaryTopics::create([
            'summary_id' => $summary_id,
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect()->route(
            'summary.content',
            [
                "book_id" => $book_id,
                "summary_id" => $summary_id
            ]
        );
    }
    public function inputHeader(Request $request)
    {
        $request->validate([
            'price' => 'required|numeric',
        ]);

        $user_id = session('user_id', null);

        $summary = Summary::create([
            'user_id' => $user_id,
            'price' => $request->input('price'),
            'book_id' => $request->input('book-id'),
            'status' => Summary::DRAFT
        ]);

        return redirect()->route(
            'summary.content',
            [
                'book_id' => $request->input('book-id'),
                'summary_id' => $summary->id
            ]
        );
    }
}
