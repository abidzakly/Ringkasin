<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        if (Session::has('user_id')) {
            return redirect()->route('dashboard');
        }
        $books = [
            'Normal People' => 'normal-people.jpg',
            'Mantappu Jiwa' => 'mantappu-jiwa.jpg',
            'Educated' => 'educated.jpg',
        ];

        $users = [
            'Muhammad Andre' => 'ProfileDummy1.png',
            'Siti Fadzila' => 'ProfileDummy2.png',
            'Rafi Saftari' => 'ProfileDummy3.png',
            'Syahrini' => 'ProfileDummy4.png',
        ];

        $faqs = [
            'Apa itu Ringkasin?' => '1',
            'Kenapa harus Ringkasin?' => '2',
            'Bagaimana cara mengakses ringkasan berbayar?' => '3',
            'Bagaimana cara bergabung menjadi penulis di Ringkasin?' => '4',
        ];

        return view('welcome', compact('books', 'users', 'faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
