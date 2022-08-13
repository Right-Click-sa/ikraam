<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

/**
 * Class SettingRepository.
 */
class SettingRepository extends BaseRepository
{
    public function model()
    {
        return Setting::class;
    }

    public function settings()
    {
    	$settings = Setting::all()->pluck('value', 'key')->toArray();
    	return $settings;
    }

    public function update(Request $request)
    {
        $data = $request->except('_method', '_token');

        $all = collect($data)->map(function($value, $key){
            global $request;
            /*=== Check If input request is file ===*/
            if($request->hasFile($key)) {

                $oldValue = Setting::where('key',$key)->first();

                if ($oldValue != null) {
                    $cover_path = public_path('/img/backend/settings/').$oldValue->value;
                    unlink($cover_path);
                }

                /*==== get file name from input request ====*/
                $img = $request->file($key);
                /*==== Rename file ====*/
                $filename = time() . '.' . $img->getClientOriginalExtension();
                /*==== Move Image to folder Images====*/
                $img->move( public_path('/img/backend/settings/') , $filename);
                /*==== Save Or Upadate file input ====*/
                Setting::updateOrCreate(
                    ['key' => $key],
                    ['value' => $filename]
                );
            }else {
                Setting::updateOrCreate(
                    ['key' => $key],
                    ['value' => $value]
                );
            }
        });

    }

}
