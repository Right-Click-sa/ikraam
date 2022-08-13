<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\Value;

/**
 * Class ValuesRepository.
 */
class ValuesRepository extends BaseRepository
{
    public function __construct(Value $model)
    {
        $this->model = $model;
    }

    /**
     * @param Request $request
     *
     * @throws \Exception
     * @throws \Throwable
     * @return Value
     */
    public function store()
    {
        $value = Value::create(request(['title:en', 'title:ar', 'content:en', 'content:ar']));

        if(request('include_title:en')[0] != null && request('include_title:ar')[0] != null && request('description:en')[0] != null && request('description:ar')[0] != null){
            foreach(request('include_title:en') as $title_en_key => $include_titleEn ){
              foreach (request('include_title:ar') as $title_ar_key => $include_titleAr) {
                foreach(request('description:en') as $description_en_key => $include_descriptionEn ){
                  foreach (request('description:ar') as $description_ar_key => $include_descriptionAr) {
                    if($title_en_key == $title_ar_key && $title_en_key == $description_en_key && $title_en_key == $description_ar_key){
                      $value->includes()->create([
                        'title:en' => $include_titleEn,
                        'title:ar' => $include_titleAr,
                        'description:en' => $include_descriptionEn,
                        'description:ar' => $include_descriptionAr
                      ]);
                    }
                  }
                }
              }
            }
          }

    }

    /**
     * @param Value  $value
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Value
     */
    public function update($value)
    {
        $value->update(request(['title:en', 'title:ar', 'content:en', 'content:ar']));

        // Update Value Includes

        foreach(request('include_title:en') as $title_en_key => $include_titleEn ){
            foreach (request('include_title:ar') as $title_ar_key => $include_titleAr) {
              foreach(request('description:en') as $description_en_key => $include_descriptionEn ){
                foreach (request('description:ar') as $description_ar_key => $include_descriptionAr) {
                    foreach (array_values($value->includes->all()) as $include_key => $include) {
                      if($title_en_key == $title_ar_key && $title_en_key == $description_en_key && $title_en_key == $description_ar_key && $title_en_key == $include_key){
                        $include->update([
                          'title:en' => $include_titleEn,
                          'title:ar' => $include_titleAr,
                          'description:en' => $include_descriptionEn,
                          'description:ar' => $include_descriptionAr
                        ]);
                      }
                    }
                  }
                }
            }
        }
        $newInclude_titleEn = array_diff_key(request('include_title:en'), array_values($value->includes->all()));
        $newInclude_titleAr = array_diff_key(request('include_title:ar'), array_values($value->includes->all()));
        $newInclude_descriptionEn = array_diff_key(request('description:en'), array_values($value->includes->all()));
        $newInclude_descriptionAr = array_diff_key(request('description:ar'), array_values($value->includes->all()));

        if($newInclude_titleEn[0] != null && $newInclude_titleAr[0] != null && $newInclude_descriptionEn[0] != null && $newInclude_descriptionAr[0] != null){
            foreach($newInclude_titleEn as $title_en_key => $include_titleEn ){
              foreach ($newInclude_titleAr as $title_ar_key => $include_titleAr) {
                foreach($newInclude_descriptionEn as $description_en_key => $include_descriptionEn ){
                  foreach ($newInclude_descriptionAr as $description_ar_key => $include_descriptionAr) {
                    if($title_en_key == $title_ar_key && $title_en_key == $description_en_key && $title_en_key == $description_ar_key){
                        $value->includes()->create([
                          'title:en' => $include_titleEn,
                          'title:ar' => $include_titleAr,
                          'description:en' => $include_descriptionEn,
                          'description:ar' => $include_descriptionAr
                        ]);
                    }
                  }
                }
              }
            }
        }

    }

    /**
     * @param Value $value
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Value
     */
    public function destroy($value)
    {
        $value->delete();
    }

}
