<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\About;

/**
 * Class AboutRepository.
 */
class AboutRepository extends BaseRepository
{
    public function __construct(About $model)
    {
        $this->model = $model;
    }

    /**
     * @param About  $about
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return About
     */
    public function update($about, $request)
    {
        $about->update(request(['about:en', 'about:ar', 'vision:en', 'vision:ar', 'message:en', 'message:ar', 'goals:en', 'goals:ar', 'strategy:en', 'strategy:ar']));

        if (count($request->allFiles()) != 0)
        {
          foreach ($request->allFiles() as $key => $image) {

            if($about[$key])
            {
              $this->deleteImage($about[$key]);
              $this->saveImage($image, $key, $about);
            }
            else
            {
              $this->saveImage($image, $key, $about);
            }
          }
        }

        // Update Values

        foreach(request('title:en') as $title_en_key => $value_titleEn ){
            foreach (request('title:ar') as $title_ar_key => $value_titleAr) {
              foreach(request('description:en') as $description_en_key => $value_descriptionEn ){
                foreach (request('description:ar') as $description_ar_key => $value_descriptionAr) {
                    foreach (array_values($about->values->all()) as $value_key => $value) {
                      if($title_en_key == $title_ar_key && $title_en_key == $description_en_key && $title_en_key == $description_ar_key && $title_en_key == $value_key){
                        $value->update([
                          'title:en' => $value_titleEn,
                          'title:ar' => $value_titleAr,
                          'description:en' => $value_descriptionEn,
                          'description:ar' => $value_descriptionAr
                        ]);
                      }
                    }
                  }
                }
            }
        }
        $newValue_titleEn = array_diff_key(request('title:en'), array_values($about->values->all()));
        $newValue_titleAr = array_diff_key(request('title:ar'), array_values($about->values->all()));
        $newValue_descriptionEn = array_diff_key(request('description:en'), array_values($about->values->all()));
        $newValue_descriptionAr = array_diff_key(request('description:ar'), array_values($about->values->all()));

        if(current($newValue_titleEn) != null && current($newValue_titleAr) != null && current($newValue_descriptionEn) != null && current($newValue_descriptionAr) != null){
            foreach($newValue_titleEn as $title_en_key => $value_titleEn ){
              foreach ($newValue_titleAr as $title_ar_key => $value_titleAr) {
                foreach($newValue_descriptionEn as $description_en_key => $value_descriptionEn ){
                  foreach ($newValue_descriptionAr as $description_ar_key => $value_descriptionAr) {
                    if($title_en_key == $title_ar_key && $title_en_key == $description_en_key && $title_en_key == $description_ar_key){
                        $about->values()->create([
                          'title:en' => $value_titleEn,
                          'title:ar' => $value_titleAr,
                          'description:en' => $value_descriptionEn,
                          'description:ar' => $value_descriptionAr
                        ]);
                    }
                  }
                }
              }
            }
        }

    }

    /**
     * @param AboutValue $about
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return AboutValue
     */
    public function destroy($about)
    {
        $about->delete();
    }

    public function update_enterprise_missions($about, $request)
    {
        if (count($request->allFiles()) != 0)
        {
          foreach ($request->allFiles() as $key => $image) {

            if($about[$key])
            {
              $this->deleteImage($about[$key]);
              $this->saveImage($image, $key, $about);
            }
            else
            {
              $this->saveImage($image, $key, $about);
            }
          }
        }
    }

    public function saveImage($image, $key, $about)
    {
        if ($key == 'about_image'){
          $about->about_image  = time() . uniqid().'.'.$image->getClientOriginalExtension();
          $image->move(public_path('/img/backend/about/'),$about->about_image );
          $about->save();
        }
        elseif ($key == 'goals_image'){
          $about->goals_image  = time() . uniqid().'.'.$image->getClientOriginalExtension();
          $image->move(public_path('/img/backend/about/'),$about->goals_image );
          $about->save();
        }
        elseif ($key == 'strategy_image'){
          $about->strategy_image  = time() . uniqid().'.'.$image->getClientOriginalExtension();
          $image->move(public_path('/img/backend/about/'),$about->strategy_image );
          $about->save();
        }
        elseif ($key == 'mission_image'){
          $about->mission_image  = time() . uniqid().'.'.$image->getClientOriginalExtension();
          $image->move(public_path('/img/backend/about/'),$about->mission_image );
          $about->save();
        }
        elseif ($key == 'work_image'){
          $about->work_image  = time() . uniqid().'.'.$image->getClientOriginalExtension();
          $image->move(public_path('/img/backend/about/'),$about->work_image );
          $about->save();
        }
        elseif ($key == 'structure_image'){
          $about->structure_image  = time() . uniqid().'.'.$image->getClientOriginalExtension();
          $image->move(public_path('/img/backend/about/'),$about->structure_image );
          $about->save();
        }
    }

    public function deleteImage($image)
    {
        $image_path = public_path('/img/backend/about/').$image;
        if (file_exists($image_path)) {
          unlink($image_path);
        }
    }

}
