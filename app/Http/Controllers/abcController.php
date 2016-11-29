<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use routes\web;
use Illuminate\Support\Facades\Redirect;
use App \Cd; 

class abcController extends Controller
{
   public function showProfile()
    {
        return  view  ('test'  )  ;     
    }
	
	public function show($id){
	$cd = Cd::find($id);
	return view('cds.show')->with('cd',$cd);	
		
	}
	
	public function index(){
        $cds = Cd::all();
        return view('cds.list')->with('cds',$cds);
    }
	
	
	 public function create(){
        return view('cds.create');
		
		
    }
	
	public function destroy($id){
        Cd::find($id)->delete();
        return Redirect('cd');
		
		
    }
	
	public function update(Request $request,$id){
		
		 $this->validate($request,
            [
                'titel' => 'required|min:10',
                'interpret' => 'required',
                'jahr' => 'required|integer'
            ]
            );
		$inputs = $request->all();
        $cd = Cd::find($id);
		$cd->update($inputs);
		
        return Redirect('cd');
		
		
    }
	
	public function updateForm($id){
		
		$cd = Cd::find($id);
		
	    return view('cds.update')->with('cd',$cd);	
		
        
		
		
    }
	
	
	
	  public function store(Request $request){


        $this->validate($request,
            [
                'titel' => 'required|min:10',
                'interpret' => 'required',
                'jahr' => 'required|integer'
            ]
            );

        //dd($request->all());
        Cd::create($request->all());



        $cd =  new Cd();
        $cd->titel = $request->titel;
        $cd->interpret =$request->interpret;
        $cd->jahr = $request->jahr;

        $cd->save();


        return Redirect('cd');
    }
	
	
}
