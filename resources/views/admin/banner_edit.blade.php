<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('admin.include.header')
    <div class="w-[80%] float-right mt-20 flex justify-between px-8 py-5">

        <div class="w-full">
            <form action="/admin/banner/{{ $banner->id }}" method="post" enctype="multipart/form-data" class="mt-5 flex flex-col gap-2">
                @csrf
                @method('PUT')
                <label class="mt-5 font-[roboto-medium]">Update Banner title</label>
                <input class="border border-[#0000005d] p-2 rounded w-[40%] outline outline-[#f75e348a]" name="title" type="text" value="{{ $banner->title }}">
                <label class="font-bold">Current Image</label>
                <img src="{{ asset('storage/'.$banner->image_path) }}" class="w-40 h-24 object-cover border">

                <label class="font-bold">Select New Image (Optional)</label>
                <input class="border border-[#0000005d] p-2 rounded w-[40%] outline outline-[#f75e348a]" type="file" name="imageUpload">

                <div class="flex gap-4 mt-4">
                    <input class="px-4 py-2 bg-[#f75e34] text-white rounded cursor-pointer font-bold hover:bg-orange-600" type="submit" value="Update Banner">
                    <a href="/admin/banner" class="px-4 py-2 bg-gray-500 text-white rounded font-bold">Cancel</a>
                </div>
            </form>
        </div>

    </div>

</body>

</html>