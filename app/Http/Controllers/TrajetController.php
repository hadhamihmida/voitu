<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trajet;

class TrajetController extends Controller
{
    public function index()
    {
         $trajets = Trajet::paginate(3);
       // $annees  = array('1' => 'one', '2' => 'two' );
        return view('trajet.index', compact('trajets'));
       
    }

  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('trajet.create');
        $trajets = Trajet::all();
        
        return view('trajet.create',compact('trajets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ville_depart' => 'required',
            'ville_arriver' => 'required',
            'heure_depart' => 'required',
            'heure_arriver' => 'required',
           
         ]);
        // dd($request->all());
       Trajet::create($request->all());
   
        return redirect()->route('trajet.index')
                        ->with('success','trajet creer avec succeés.');
    }
   

    public function getMessages(){
         return $messages=[
             'ville_depart.required'=>'tapez ville',
             'ville_arriver.required'=>'tapez ville_arriver',
             'heure_depart.required'=>'tapez heure depart',
             'heure_arriver.required'=>'tapez heure arriver',
         ];
    }



    public function show(Trajet $trajets)
    {
        return view('trajet.show',compact('trajet'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trajets = Trajet::findOrFail($id);
        return view('trajet.edit', compact('trajets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trajet $trajets)
    {
        $request->validate([
            'ville_depart' => 'required',
            'ville_arriver' => 'required',
            'heure_depart' => 'required',
            'heure_arriver' => 'required',
        ]);
    
        $trajets->update($request->all());
    
        return redirect()->route('trajet.index')
                        ->with('success','trajet updated successfully');
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         
        $trajets  = Trajet::findOrFail($id);
        $trajets->delete();

        return redirect('/trajet')->with('completed', 'trajet suprimer!!');
    }
  
}
