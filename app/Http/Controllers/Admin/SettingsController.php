<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\Admin\SettingsService;
use App\Http\Requests\Admin\SettingsUpdateRequest;

class SettingsController extends Controller
{

    private SettingsService $settingsService;

    public function __construct(SettingsService $settingsService) {
         $this->settingsService = $settingsService;
    }

    public function index()
    {
        return $this->settingsService->index();
    }

    public function update(SettingsUpdateRequest $request)
    {
        return $this->settingsService->update($request->validated());
    }

   
}
