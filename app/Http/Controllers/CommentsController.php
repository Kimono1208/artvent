<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Cotizaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request, Cotizaciones $cotizacion)
    {
        $request->validate([
            'comment' => 'required|string',
        ]);

        $comment = new Comments();
        $comment->comment = $request->comment;
        $comment->user_id = Auth::id();
        $comment->cotizacion_id = $cotizacion->id;
        $comment->save();

        return view('selects.cotizacion_select', compact('cotizacion'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Comments $comments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comments $comments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comments $comments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comments $comments)
    {
        //
    }
}
