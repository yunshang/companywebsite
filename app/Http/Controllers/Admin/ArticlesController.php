<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Repositories\Admin\ArticleRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use League\Flysystem\Filesystem;

class ArticlesController extends Controller
{
    private $article;
    public function __construct(ArticleRepository $article)
    {
        $this->article = $article;
        $this->middleware('admin');
    }
    public function index()
    {
        $articles = $this->article->getArticlesFeed();
        if(user()->hasRole('admin') || user()->hasRole('admin-one')){
            return view('admin.articles.index',compact('articles'));
        }
        return redirect()->route('admin.index');
    }

    //创建问题页面
    public function create()
    {
        if(user()->hasRole('admin')){
            return view("admin.articles.create");
        }
    }

    //保存问题
    public function store(Request $request)
    {
//        $topics = $this->question->normalizeTopics($request->get('topics'));
        $data = [
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            'user_id' => Auth::id(),
            'cover' => $request->get('img'),
            'is_first' => $request->get('is_first'),
            'article_kind_id' => 1,
        ];
        $article = $this->article->Article($data);
//        Auth::user()->increment('questions_count');
//        $question->topics()->attach($topics);
        return redirect()->route('admin.articles', [$article->id]);
    }

    //编辑问题页面
    public function edit($id)
    {
        if(user()->hasRole('admin') || user()->hasRole('admin-one')){
            $article = $this->article->byId($id);
            return view("admin.articles.edit",compact('article'));
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
        $article = $this->article->byId($id);
//        $topics = $this->question->normalizeTopics($request->get('topics'));
        $article->update([
            'title'=>$request->get('title'),
            'body'=>$request->get('body'),
            'is_first'=>$request->get('is_first')
        ]);

//        $article->topics()->sync($topics);
        return redirect()->route('admin.articles');
    }

    //删除问题
    public function destroy($id)
    {
        if(user()->hasRole('admin') || user()->hasRole('admin-one')){
            $article = $this->article->byId($id);
            $article->delete();
            return redirect()->route('admin.article');
        }
        return redirect()->route('admin.index');
    }
}
