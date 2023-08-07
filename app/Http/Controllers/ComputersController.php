<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Vite;

class ComputersController extends Controller
{


    // Array of static data

    /*
    private static function getData(){

        return [
        ['id'=> 1 , 'name' => 'LG', 'origin'=> 'Korea' ],
        ['id'=> 2 , 'name' => 'HP', 'origin'=> 'USA' ],
        ['id'=> 3 , 'name' => 'Siemens', 'origin'=> 'Germany' ],
        ['id'=> 4 , 'name' => 'Lenovo', 'origin'=> 'France' ]
        ];
    }
*/

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('computers.index',[
            'computers'=> Computer::all()
        ]);    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return view ('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request ->validate([
            'computer-name'=>'required',
            'computer-origin'=>'required',
            'computer-price'=>'required|integer'
        ]);
        
        $computer=new Computer();
        $computer-> name = $request->input('computer-name');
        $computer-> origin = $request->input('computer-origin');
        $computer-> price = $request->input('computer-price');

        $computer->save();

        return redirect()->route('computers.index'); 

    }

    /**
     * Display the specified resource.
     */
    public function show(string $computer)
    {
        $index=Computer::findOrFail($computer);

        return view ('computers.show',['computer'=>$index]
    );

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($computer)
    {
        return View ('computers.edit',[
            'computer' => Computer::findorfail($computer)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $computer)
    {
        $request ->validate([
            'computer-name'=>'required',
            'computer-origin'=>'required',
            'computer-price'=>'required|integer'
        ]);

        $to_update=Computer::findorfail($computer);
        $to_update-> name = $request->input('computer-name');
        $to_update-> origin = $request->input('computer-origin');
        $to_update-> price = $request->input('computer-price');

        $to_update->save();

        return redirect()->route('computers.show',$computer ); 


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($computer)
    {
        $to_delete=Computer::findorfail($computer);

        $to_delete->delete();

        return redirect()->route('computers.index');


    }
}
