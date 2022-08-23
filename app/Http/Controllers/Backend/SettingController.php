<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\SettingRepository;
use App\Http\Requests\Backend\Settings\UpdateSettingsRequest;
use App\Models\Setting;

class SettingController extends Controller
{
    protected $settingRepository;

    public function __construct(SettingRepository $settingRepository)
    {
        $this->settingRepository = $settingRepository;
    }

    public function settings()
    {
        $settings = $this->settingRepository->settings();
        return view('backend.settings.edit')->withSettings($settings);
    }

    public function update(Request $request)
    {
    	$this->settingRepository->update($request);

    	return back()->withFlashSuccess(__('Settings Updated Successfully'));
    }
}
