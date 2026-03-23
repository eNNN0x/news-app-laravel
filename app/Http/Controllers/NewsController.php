<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(10);
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(StoreNewsRequest $request)
    {
        $data = $request->validated();
        $data['excerpt'] = substr(strip_tags($data['content']), 0, 200);

        News::create($data);

        return redirect()->route('news.index')
            ->with('success', 'Naujiena sukurta!');
    }

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    public function update(UpdateNewsRequest $request, News $news)
    {
        $data = $request->validated();
        $data['excerpt'] = substr(strip_tags($data['content']), 0, 200);

        $news->update($data);

        return redirect()->route('news.index')
            ->with('success', 'Naujiena atnaujinta!');
    }

    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('news.index')
            ->with('success', 'Naujiena ištrinta!');
    }
}