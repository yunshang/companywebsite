<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Repositories\Admin\ArticleKindRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use League\Flysystem\Filesystem;

class ArticleKindController extends Controller
{
    private $articlekind;
    public function __construct(ArticleKindRepository $articlekind)
    {
        $this->articlekind = $articlekind;
        $this->middleware('admin');
    }
    public function index()
    {
        $articlekinds = $this->articlekind->getArticlesKindFeed();
        if(user()->hasRole('admin') || user()->hasRole('admin-one')){
            return view('admin.articlekinds.index',compact('articlekinds'));
        }
        return redirect()->route('admin.index');
    }

    public function create()
    {
        if(user()->hasRole('admin')){
            return view("admin.articlekinds.create");
        }
    }

    public function store(Request $request)
    {
//        $topics = $this->question->normalizeTopics($request->get('topics'));
        $data = [
            'name' => $request->get('name'),
        ];
        $articlekind = $this->articlekind->ArticleKInd($data);
//        Auth::user()->increment('questions_count');
//        $question->topics()->attach($topics);
        return redirect()->route('admin.articlekind', [$articlekind->id]);
    }

    //编辑问题页面
    public function edit($id)
    {
        if(user()->hasRole('admin') || user()->hasRole('admin-one')){
            $articlekind = $this->articlekind->byId($id);
            return view("admin.articlekinds.edit",compact('articlekind'));
        }
        return redirect()->route('admin.index');

    }

    public function uploadimage(Request $request)
    {
        $file = $request->file('files');
        $filePath = 'images/'.str_random(16).'.'.$file->getClientOriginalExtension();
        Storage::disk('uploads')->put($filePath, file_get_contents($file->getRealPath()));
        return response()->json(['path' => $filePath, 'status' => 'success']);
    }

    //编辑问题
    public function update(Request $request,$id)
    {
        $article = $this->articlekind->byId($id);
//        $topics = $this->question->normalizeTopics($request->get('topics'));
        $article->update([
            'name'=>$request->get('name'),
        ]);

//        $article->topics()->sync($topics);
        return redirect()->route('admin.articlekind');
    }

    public function destroy($id)
    {
        if(user()->hasRole('admin') || user()->hasRole('admin-one')){
            $article = $this->articlekind->byId($id);
            $article->delete();
            return redirect()->route('admin.articlekind');
        }
        return redirect()->route('admin.articlekind');
    }
}
