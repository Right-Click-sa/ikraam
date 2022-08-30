<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\NewsRepository;
use App\Http\Requests\Backend\News\StoreArticleRequest;
use App\Http\Requests\Backend\News\UpdateArticleRequest;
use App\Models\News;

class NewsController extends Controller
{
   /**
    * @var NewsRepository
    */
    protected $newsRepository;

   /**
    * News Controller constructor.
    *
    * @param NewsRepository $newsRepository
    */
    public function __construct(NewsRepository $newsRepository)
    {
       $this->newsRepository = $newsRepository;
    }

    /**
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function index()
    {
      return view('backend.news.news')->withNews($this->newsRepository
            ->orderBy('id')
            ->paginate(10));
    }

    /**
    *
    * @return mixed
    */
    public function create()
    {
      return view('backend.news.create');
    }

   /**
    * @param StoreArticleRequest $request
    * @param News              $article
    *
    * @throws \Throwable
    * @return mixed
    */
    public function store(StoreArticleRequest $request, News $article)
    {
       $this->newsRepository->store();
       return redirect()->route('admin.media.news')->withFlashSuccess(__('News Created Successfully'));
    }

     /**
    * @param News $article
    *
    * @return mixed
    */
    public function edit(News $article)
    {
        return view('backend.news.edit')->withArticle($article);
    }

    /**
    * @param UpdateArticleRequest $request
    * @param News              $article
    *
    * @throws \App\Exceptions\GeneralException
    * @throws \Throwable
    * @return mixed
    */
    public function update(UpdateArticleRequest $request, News $article)
    {
        $this->newsRepository->update($article);
        return redirect()->route('admin.media.news')->withFlashSuccess(__('News Updated Successfully'));
    }

    /**
    * @param News $article
    *
    * @throws \Exception
    * @return mixed
    */
    public function destroy(News $article)
    {
        $this->newsRepository->destroy($article);
        return back()->withFlashSuccess(__('News Deleted Successfully'));
    }

}
