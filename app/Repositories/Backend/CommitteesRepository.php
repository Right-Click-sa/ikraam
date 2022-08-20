<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\Committee;

/**
 * Class CommitteesRepository.
 */
class CommitteesRepository extends BaseRepository
{
    public function __construct(Committee $model)
    {
        $this->model = $model;
    }

    /**
     * @param Request $request
     *
     * @throws \Exception
     * @throws \Throwable
     * @return Committee
     */
    public function store()
    {
        if($image = request('image'))
        {
            $committee = Committee::create(request(['committee_name:en', 'committee_name:ar', 'goal:en', 'goal:ar', 'chairman:en', 'chairman:ar']));
            $this->saveImage(request('image'), $committee);

            $committee->save();

            foreach(request('task:en') as $en_key => $taskEn )
            {
              foreach (request('task:ar') as $ar_key => $taskAr) {
                  if($en_key == $ar_key){
                    $committee->tasks()->create([
                      'task:en' => $taskEn,
                      'task:ar' => $taskAr
                    ]);
                  }
                }
            }
        }

    }

    /**
     * @param Committee  $committee
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Committee
     */
    public function update($committee)
    {
        $committee->update(request(['committee_name:en', 'committee_name:ar', 'goal:en', 'goal:ar', 'chairman:en', 'chairman:ar']));

        if (request('image'))
        {
            if($committee->image)
            {
                $this->deleteImage($committee);
                $this->saveImage(request('image'), $committee);
            }
            else
            {
                $this->saveImage(request('image'), $committee);
            }
        }

        // Update Committee Tasks
        foreach (request('task:en') as $en_key => $taskEn) {
            foreach (request('task:ar') as $ar_key => $taskAr) {
              foreach (array_values($committee->tasks->all()) as $task_key => $task) {
                if($en_key == $ar_key && $en_key == $task_key){
                  $task->update([
                    'task:en' => $taskEn,
                    'task:ar' => $taskAr
                  ]);
                }
              }
            }
        }

        $newTasksEn = array_diff_key(request('task:en'), array_values($committee->tasks->all()));
        $newTasksAr = array_diff_key(request('task:ar'), array_values($committee->tasks->all()));

        foreach($newTasksEn as $en_key => $taskEn )
        {
          foreach ($newTasksAr as $ar_key => $taskAr) {
              if($en_key == $ar_key){
                $committee->tasks()->create([
                  'task:en' => $taskEn,
                  'task:ar' => $taskAr
                ]);
              }
            }
        }

    }

    /**
     * @param Committee $committee
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Committee
     */
    public function destroy($committee)
    {
        if($committee->image)
        {
            $this->deleteImage($committee);
        }

        $committee->delete();
    }

    public function saveImage($image, $committee)
    {
        $committee->image  = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('/img/backend/about/committees/'),$committee->image );

        $committee->save();
    }

    public function deleteImage($committee)
    {
        $cover_path = public_path('/img/backend/about/committees/').$committee->image;
        unlink($cover_path);
    }
}
