<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests;
use App\Article;
use App\Maintag;

class IndexController extends Controller
{
    protected $header;
	protected $discription;
	
	
	public function __construct(){
		$this->header='ProgrammersSpace';
		$this->discription='For your learn programming...';
	}
	
	public function index(){
		$articles= Article:: select(['id','title','desc','tag','created_at'])->orderBy('created_at', 'desc')->paginate(10);
		$maintags= Maintag:: select(['id','maintag'])->get();
		//dump($tags);
		return view('mainpage')->with(['header'=>$this->header,'discription'=>$this->discription,'articles'=>$articles,'maintags'=>$maintags]);
	}
	public function page($id){
		
		//$article=Article::find($id);
		$article=Article::select(['id','title','text','tag','created_at'])->where('id',$id)->first();
		$maintags= Maintag:: select(['id','maintag'])->get();
		//dump($article);
		return view('article-content')->with(['header'=>$this->header,'discription'=>$this->discription,'article'=>$article,'maintags'=>$maintags]);
	}
	public function add(){
		return view('add-content')->with(['header'=>$this->header,'discription'=>$this->discription]);
	}
	public function store(Request $request){
		$this->validate($request,[
		
		'title'=>'required|max:255',
		'text'=>'required',
		'tag'=>'required|in:PHP,CSS,HTML,Python,SQL'
		]);
		$data=$request->all();
		$article= new Article;
		$article->fill($data);
		$article->save();
		
		return redirect('/');
	}
public function ontags($tagpage){
	
		$articles=Article::select(['id','title','desc','tag','created_at']);
		$mtag= Maintag:: select(['id','maintag'])->where('maintag',$tagpage)->get();
		$maintags= Maintag:: select(['id','maintag'])->get();
		$diffs=$articles->where('tag',$tagpage)->orderBy('created_at', 'desc')->paginate(10);
		return view('tag-search')->with(['header'=>$this->header,'discription'=>$this->discription,'articles'=>$articles,'mtag'=>$mtag,'maintags'=>$maintags,'diffs'=>$diffs]);
	
	
}
}