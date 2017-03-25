<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;

class ArticleController extends Controller
{
    public function index()  
	{
	    return view('admin/article/index')->withArticles(Article::all());
	}

	public function create()
	{
	    return view('admin/article/create');
	}

	public function store(Request $request)  
	{
	    $this->validate($request, [
	        'title' => 'required|unique:articles|max:255', // 必填,唯一,最多长度
	        'body' => 'required', // 必填
	    ]);

	    $article = new Article;  // 操作类
	    $article->title = $request->get('title'); // 获取请求的值
	    $article->body = $request->get('body'); 
	    $article->user_id = $request->user()->id;  // 获取登录人id 

	    if ($article->save()) { // 保存
	        return redirect('admin/article')->withInput()->withErrors('保存成功! ');
	    } else {
	        return redirect()->back()->withInput()->withErrors('保存失败！');
	    }
	}

	public function destroy($id)
	{
	    Article::find($id)->delete();
		return redirect()->back()->withInput()->withErrors('删除成功！');
	}

	public function edit($id)
	{
		  return view('admin/article/create')->withArticles(Article::find($id));
	}
}
