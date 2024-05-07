<?php
namespace App\Service\Admin;

use App\Models\Slider;
use App\Http\Helpers\UploadImage;


class SliderService {
    
    public function index()
    {
        return view('admin.home.slider.index',[
            'slides' => Slider::all(),
        ]);
    }

    public function create()
    {
        return view('admin.home.slider.create');
    }

    public function store($attribuets)
    {

        if(array_key_exists($attribuets, 'photo'))
            $attribuets['photo'] = UploadImage::saveImage($attribuets['photo'],'/home/slider');
        Slider::create($attribuets);
        return back()->with('sucsses','added sucssesfuly');
    }

    public function show(Slider $slider)
    {
        return view('admin.home.slider.show', [
            'slider' => $slider
        ]);
    }

    public function edit(Slider $slider)
    {
        return view('admin.home.slider.edit',[
            'slider' => $slider
        ]);
    }

    public function update($attribuets, Slider $slider)
    {
        if(array_key_exists($attribuets, 'photo')) {
            $attribuets['photo'] = UploadImage::saveImage($attribuets['photo'],'/home/slider');;
        }
        
        $slider->update($attribuets);
        return back()->with('sucsses','updated sucssesfuly');
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();
        return back()->with('sucsses','deleted sucssesfuly');
    }
}