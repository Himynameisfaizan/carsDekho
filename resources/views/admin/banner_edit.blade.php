<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Edit Banner</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.8.0/fonts/remixicon.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    @include('admin.include.header')

    <div class="p-4 md:ml-64 mt-16 transition-all duration-300">

        <div class="mb-6 flex items-center gap-2">
            <a href="/admin/banner" class="bg-white p-2 rounded-full shadow-sm text-gray-600 hover:text-[#f75e34] transition">
                <i class="ri-arrow-left-line text-xl"></i>
            </a>
            <h1 class="text-2xl font-bold text-gray-800">Edit Banner</h1>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <div class="lg:col-span-2 bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                <h2 class="text-lg font-bold text-gray-800 mb-4 border-b pb-2">Update Information</h2>

                <form action="/admin/banner/{{ $banner->id }}" method="post" enctype="multipart/form-data" class="flex flex-col gap-5">
                    @csrf
                    @method('PUT')

                    <div class="flex flex-col gap-2">
                        <label class="font-medium text-gray-700">Update Banner Title</label>
                        <input class="border border-gray-300 p-2.5 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-[#f75e34]" 
                               name="title" type="text" value="{{ $banner->title }}" placeholder="Enter banner title">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="font-medium text-gray-700">Select New Image <span class="text-xs text-gray-400 font-normal">(Optional)</span></label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none p-2" 
                               type="file" name="imageUpload">
                        <p class="text-xs text-gray-500">Supported formats: JPG, PNG, WEBP</p>
                    </div>

                    <div class="flex gap-3 mt-2">
                        <input class="px-6 py-2.5 bg-[#f75e34] hover:bg-orange-600 text-white font-bold rounded-lg cursor-pointer transition-colors shadow-sm w-full md:w-auto" 
                               type="submit" value="Update Banner">
                        
                        <a href="/admin/banner" class="px-6 py-2.5 bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold rounded-lg transition-colors text-center w-full md:w-auto">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>

            <div class="lg:col-span-1 bg-gray-50 rounded-lg border border-gray-200 p-6 h-fit">
                <h2 class="text-lg font-bold text-gray-800 mb-4 border-b pb-2">Current Banner</h2>
                
                <div class="flex flex-col gap-4">
                    <div class="w-full h-40 rounded-lg overflow-hidden border border-gray-300 bg-white relative group">
                        <img src="{{ asset('storage/'.$banner->image_path) }}" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all"></div>
                    </div>

                    <div>
                        <span class="text-xs text-gray-500 uppercase tracking-wider">Current Title</span>
                        <div class="font-medium text-gray-800 text-lg">{{ $banner->title }}</div>
                    </div>
                    
                    <div class="text-xs text-gray-400 flex items-center gap-1">
                        <i class="ri-information-line"></i>
                        <span>Uploading a new image will replace the current one.</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

</body>
</html>