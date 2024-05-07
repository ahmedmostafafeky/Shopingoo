<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use App\Http\Controllers\Controller;
use App\Service\Admin\SliderService;
use App\Http\Requests\Admin\SliderSaveRequest;
use App\Http\Requests\Admin\SliderUpdateRequest;

class SliderController extends Controller
{

    private SliderService $sliderService;

    public function __construct(SliderService $sliderService) {
        $this->sliderService =  $sliderService;
    }

    public function index()
    {
        return $this->sliderService->index();
    }
    
    public function create()
    {
        return $this->sliderService->create();
    }

    public function store(SliderSaveRequest $request)
    {
        return $this->sliderService->store($request->validated());
    }

    public function show(Slider $slider)
    {
        return $this->sliderService->show($slider);
    }
    
    public function edit(Slider $slider)
    {
        return $this->sliderService->edit($slider);
    }

    public function update(SliderUpdateRequest $request, Slider $slider)
    {
        return $this->sliderService->update($request->validated(),$slider);
    }

    public function destroy(Slider $slider)
    {
        return $this->sliderService->destroy($slider);
    }
}
