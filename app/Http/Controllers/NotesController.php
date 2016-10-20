<?php namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;



class NotesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
     * @param Request $request
     * @param Card $card
	 * @return Response
	 */
	public function store(Request $request, $id)
	{
	    $this->validate($request, [
	        'body' => 'required'
        ]);
        $note = new Note($request->all());

        Card::find($id)->addNote($note, 1);

        return back();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$note = Note::find($id);
        return view('notes.edit', compact('note'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{

        $note = Note::find($id);
        $note->update($request->all());

        return back();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
