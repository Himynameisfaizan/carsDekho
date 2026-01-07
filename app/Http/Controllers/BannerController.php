<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banner', ['banners' => $banners]);
    }

    public function store(Request $request)
    {


        $path = $request->file('imageUpload')->store('banner', 'public');

        Banner::create([
            'title' => $request->title,
            'image_path' => $path
        ]);

        return redirect()->back()->with('success', 'banner upload successfully');
    }

    public function destroy($id)
    {

        $banner = Banner::find($id);

        if ($banner->image_path) {
            Storage::disk('public')->delete($banner->image_path);
        }

        $banner->delete();

        return redirect()->back()->with('success', 'Banner delete successfully');
    }

    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('admin.banner_edit', ['banner' => $banner]);
    }

    public function updateBanner(Request $request, $id)
    {
        $banner = Banner::find($id);

        if ($request->hasFile('imageUpload')) {
            Storage::disk('public')->delete($banner->image_path);

            $path = $request->file('imageUpload')->store('banner', 'public');

            $banner->image_path = $path;
        }

        $banner->title = $request->title;
        $banner->save();

        return redirect('/admin/banner')->with('success', 'banner edit successfully');
    }
}
