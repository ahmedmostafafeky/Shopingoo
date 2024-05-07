<?php
namespace App\Service\Admin;

use App\Models\Settings;
use App\Http\Helpers\UploadImage;


class SettingsService {
    public function index()
    {
        return view('admin.pages.settings',[
            'settings' => Settings::first(),
        ]);
    }

    public function update($attribuets)
    {
        if(array_key_exists('site_logo',$attribuets))
            $attribuets['site_logo'] = UploadImage::saveImage($attribuets['site_logo'],'/admin/settings/logo');
        
        if(array_key_exists('fav_icon',$attribuets))
            $attribuets['fav_icon'] = UploadImage::saveImage($attribuets['fav_icon'],'/admin/settings/fav');

        Settings::first()->update($attribuets);
        return redirect()->route('settings.index');
    }
}