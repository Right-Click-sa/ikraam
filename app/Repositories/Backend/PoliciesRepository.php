<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\Policy;

/**
 * Class PoliciesRepository.
 */
class PoliciesRepository extends BaseRepository
{
    public function __construct(Policy $model)
    {
        $this->model = $model;
    }

    /**
     * @param Request $request
     *
     * @throws \Exception
     * @throws \Throwable
     * @return Policy
     */
    public function store()
    {
      // dd(request());
        $policy = Policy::create(request(['policy:en', 'policy:ar', 'content:en', 'content:ar']));

        if($file = request('file'))
        {
          $this->saveFile(request('file'), $policy);
        }
    }

    /**
     * @param Policy  $policy
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Policy
     */
    public function update($policy)
    {
        $policy->update(request(['policy:en', 'policy:ar', 'content:en', 'content:ar']));

        if (request('file'))
        {
            if($policy->file)
            {
                $this->deleteFile($policy);
                $this->saveFile(request('file'), $policy);
            }
            else
            {
                $this->saveFile(request('file'), $policy);
            }
        }

    }

    /**
     * @param Policy $policy
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return Policy
     */
    public function destroy($policy)
    {
        if($policy->file)
        {
            $this->deleteFile($policy);
        }

        $policy->delete();
    }

    public function saveFile($file, $policy)
    {
        $policy->file  = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('/img/backend/about/policies/'),$policy->file );

        $policy->save();
    }

    public function deleteFile($policy)
    {
        $file_path = public_path('/img/backend/about/policies/').$policy->file;

        if (\File::exists($file_path)) {
          unlink($file_path);
        }
    }
}
