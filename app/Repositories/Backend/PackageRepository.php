<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\Package;

/**
 * Class PackageRepository.
 */
class PackageRepository extends BaseRepository
{
    public function __construct(Package $model)
    {
        $this->model = $model;
    }

    /**
     * @param Request $request
     *
     * @throws \Exception
     * @throws \Throwable
     * @return Package
     */
    public function store()
    {
        $package = Package::create(request(['title:en', 'title:ar', 'content:en', 'content:ar', 'price']));

        foreach(request('include:en') as $en_key => $includeEn )
        {
          foreach (request('include:ar') as $ar_key => $includeAr) {
              if($en_key == $ar_key){
                $package->includes()->create([
                  'include:en' => $includeEn,
                  'include:ar' => $includeAr
                ]);
              }
            }
        }
    }

    /**
     * @param Package  $package
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Package
     */
    public function update($package)
    {
        $package->update(request(['title:en', 'title:ar', 'content:en', 'content:ar', 'price']));

        // Update Package Includes
        foreach (request('include:en') as $en_key => $includeEn) {
            foreach (request('include:ar') as $ar_key => $includeAr) {
              foreach (array_values($package->includes->all()) as $include_key => $include) {
                if($en_key == $ar_key && $en_key == $include_key){
                  $include->update([
                    'include:en' => $includeEn,
                    'include:ar' => $includeAr
                  ]);
                }
              }
            }
        }

        $newIncludesEn = array_diff_key(request('include:en'), array_values($package->includes->all()));
        $newIncludesAr = array_diff_key(request('include:ar'), array_values($package->includes->all()));

        foreach($newIncludesEn as $en_key => $includeEn )
        {
          foreach ($newIncludesAr as $ar_key => $includeAr) {
              if($en_key == $ar_key){
                $package->includes()->create([
                  'include:en' => $includeEn,
                  'include:ar' => $includeAr
                ]);
              }
            }
        }
    }

    /**
     * @param Package $package
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Package
     */
    public function destroy($package)
    {
        $package->delete();
    }

}
