<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\Initiative;

/**
 * Class InitiativesRepository.
 */
class InitiativesRepository extends BaseRepository
{
    public function __construct(Initiative $model)
    {
        $this->model = $model;
    }

    /**
     * @param Request $request
     *
     * @throws \Exception
     * @throws \Throwable
     * @return Initiative
     */
    public function store()
    {
        $initiative = Initiative::create(request(['title:en', 'title:ar', 'initiative:en', 'initiative:ar']));

        foreach(request('output:en') as $en_key => $outputEn )
        {
          foreach (request('output:ar') as $ar_key => $outputAr) {
              if($en_key == $ar_key){
                $initiative->outputs()->create([
                  'output:en' => $outputEn,
                  'output:ar' => $outputAr
                ]);
              }
            }
        }
    }

    /**
     * @param Initiative  $initiative
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Initiative
     */
    public function update($initiative)
    {
        $initiative->update(request(['title:en', 'title:ar', 'initiative:en', 'initiative:ar']));

        // Update Initiative Outputs
        foreach (request('output:en') as $en_key => $outputEn) {
            foreach (request('output:ar') as $ar_key => $outputAr) {
              foreach (array_values($initiative->outputs->all()) as $output_key => $output) {
                if($en_key == $ar_key && $en_key == $output_key){
                  // dd($outputEn);
                  $output->update([
                    'output:en' => $outputEn,
                    'output:ar' => $outputAr
                  ]);
                }
              }
            }
        }

        $newOutputsEn = array_diff_key(request('output:en'), array_values($initiative->outputs->all()));
        $newOutputsAr = array_diff_key(request('output:ar'), array_values($initiative->outputs->all()));

        foreach($newOutputsEn as $en_key => $outputEn )
        {
          foreach ($newOutputsAr as $ar_key => $outputAr) {
              if($en_key == $ar_key){
                $initiative->outputs()->create([
                  'output:en' => $outputEn,
                  'output:ar' => $outputAr
                ]);
              }
            }
        }
    }

    /**
     * @param Initiative $initiative
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Initiative
     */
    public function destroy($initiative)
    {
        $initiative->delete();
    }

}
