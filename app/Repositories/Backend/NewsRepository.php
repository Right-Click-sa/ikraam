<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\News;

/**
 * Class NewsRepository.
 */
class NewsRepository extends BaseRepository
{
    public function __construct(News $model)
    {
        $this->model = $model;
    }

    /**
     * @param Request $request
     *
     * @throws \Exception
     * @throws \Throwable
     * @return News
     */
    public function store()
    {
        if($image = request('image'))
        {
            $article = News::create(request(['title:en', 'title:ar', 'content:en', 'content:ar']));
            $this->saveImage(request('image'), $article);

            $article->save();
        }
    }

    /**
     * @param News  $article
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return News
     */
    public function update($article)
    {
        $article->update(request(['title:en', 'title:ar', 'content:en', 'content:ar']));

        if (request('image'))
        {
            if($article->image)
            {
                $this->deleteImage($article);
                $this->saveImage(request('image'), $article);
            }
            else
            {
                $this->saveImage(request('image'), $article);
            }
        }

    }

    /**
     * @param News $article
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return News
     */
    public function destroy($article)
    {
        if($article->image)
        {
            $this->deleteImage($article);
        }

        $article->delete();
    }

    public function saveImage($image, $article)
    {
        $article->image  = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('/img/backend/media/news/'),$article->image );

        $article->save();
    }

    public function deleteImage($article)
    {
        $cover_path = public_path('/img/backend/media/news/').$article->image;
        unlink($cover_path);
    }
}
