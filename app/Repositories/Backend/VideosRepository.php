<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\Video;

/**
 * Class VideosRepository.
 */
class VideosRepository extends BaseRepository
{
    public function __construct(Video $model)
    {
        $this->model = $model;
    }

    /**
     * @param Request $request
     *
     * @throws \Exception
     * @throws \Throwable
     * @return Video
     */
    public function store()
    {
        $video = Video::create(request(['title:en', 'title:ar', 'link']));
    }

    /**
     * @param Video  $video
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Video
     */
    public function update($video)
    {
        $video->update(request(['title:en', 'title:ar', 'link']));
    }

    /**
     * @param Video $video
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Video
     */
    public function destroy($video)
    {
        $video->delete();
    }

}
