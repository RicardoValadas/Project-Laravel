<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Flower;
use App\Models\Comment;


class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(alguma coisa) é var_dump
        /* $flowers = DB::select('SELECT * FROM flowers');*/
        $flowers = Flower::all();
        return view('flowers', ['flowers' => $flowers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('new-flower');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'flower' => 'required|max:30',
            'price' => 'required|numeric|between:2,100',
        ]);


        if ($validator->fails()) {
            return redirect('new-flower')->withErrors($validator, 'error')
                ->withErrors($validator)
                ->withInput();
        }

        /*    DB::insert(
            'insert into flowers (name,price) values (?, ?)',
            [$request->flower, $request->price]
        ); */


        $flower = Flower::create([
            'name' => $request->flower,
            'price' => $request->price
        ]);

        return redirect('flowers')->with('success', $request->flower . ' was created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$oneFlower = DB::select('SELECT * FROM flowers WHERE id = ?', [$id]); 
        $oneFlower = Flower::where('id', $id)
            ->get();

        //dd($oneFlower[0]->comments);
        return view('flower-detail', ['flower' => $oneFlower[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$flower = DB::select('SELECT * FROM flowers WHERE id = ?', [$id]); // this returns an array
        $flower = Flower::where('id', $id)
            ->get();

        // Show the form
        return view('update-flower', ['flower' => $flower[0]]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // DB::update('UPDATE flowers SET name=?, price=? WHERE id = ?', [$request->flower, $request->price, $id]);

        Flower::where('id', $id)
            ->update([
                'name' => $request->flower,
                'price' => $request->price
            ]);

        // redirect to flowers list with a message
        return redirect('flowers')->with('success', $request->flower . ' was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DB::delete('DELETE FROM flowers WHERE id = ?', [$id]);
        Flower::destroy($id);

        // redirect to flowers list with a message
        return redirect('flowers')->with('success', 'Flower deleted');
    }
}
