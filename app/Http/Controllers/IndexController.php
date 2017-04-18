<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Tovari;
use App\User;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
	
	public function __construct(){
			$this->header='Тест страница';
    $this->message='тестовая страница';
		
		
	}
	public function index(){
		
 $tovariv=Tovari::all();
    						    
	
	$ptovari= Tovari::select(['id','name','zametka','opisanie','kolvo','cena'])->get();
	//dump($ptovari);
	
	$infoUser= User::select(['id','name','email'])->get();
	//dump($infoUser);
	
//dump(Auth::user()); dump(Auth::User());
	
	return view ('page')->with(['header'=>$this->header,
									'message'=>$this->message,
									'ptovari'=>$ptovari,
									'infoUser'=>$infoUser,
									'tovariv'=>$tovariv]);
									
	//return view ('lc')->with(['header'=>$this->header,
									//'message'=>$this->message,
								//	'ptovari'=>$ptovari]);								
		
	}
	
	public function show($id)
	{
		
		 $tovariv=Tovari::find($id);
		 
      
		
		$stovari = Tovari::select(['id','name','zametka','opisanie','cena'])->where('id',$id)->first();
		
		return view('stovari-content')->with(['header'=>$this->header,
									'message'=>$this->message,
									'stovari'=>$stovari,
									'tovariv'=>$tovariv]);
	}
	
	
	public function showInfoUser()
	{
		
		$showInfoUser = User::select(['id','name','email'])->where('id')->first();
		//dump($showInfoUser);
	//dump(Auth::user());	
		return view('lc')->with(['header'=>$this->header,
									'message'=>$this->message,
									'showInfoUser'=>$showInfoUser]);
	}
	
	
	public function add(){
		//$this->authorize('add-tovar');
		return view('add-tovar')->with(['header'=>$this->header,
									'message'=>$this->message]);
		
	}
	
	public function lc(){
		return view('lc');
		
		
	}
	
	public function store(Request $request){
		
		$this->validate($request, [
		
		'id' => 'required|unique:tovaris',
		'name' => 'required|unique:tovaris',
		'opisanie' => 'required|min:10',
		'cena' => 'required',
		'kolvo' => 'required'
		
		]);
		$soderzaprosa = $request->all();
		$addtovar = new Tovari;
		$addtovar ->fill($soderzaprosa);
		$addtovar->save();
		return redirect('/');
		
	}
	
	 public function create(){
		 
        return view('create');
    }


    public function edit($id){
		
			
            $tovariv=Tovari::find($id);
            return view('edit',['tovariv'=>$tovariv]);
            }

    public function update(Request $request,$id){
            $tovariv=Tovari::find($id);
            $tovariv->name=$request->name;
            $tovariv->opisanie=$request->opisanie;
			$tovariv->zametka=$request->zametka;
            $tovariv->save();
            return redirect('/');
            }
    public function delete($id){
            $tovariv=Article::find($id);
            $tovariv->delete();
            return redirect('/tovariv');


    }
	
}


