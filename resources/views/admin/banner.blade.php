<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Manage Banners</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.8.0/fonts/remixicon.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    @include('admin.include.header')

    <div class="p-4 md:ml-64 mt-16 transition-all duration-300">
        
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-8">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 border-b pb-2">Upload New Banner</h1>
            
            <form action="/admin/banner" method="post" enctype="multipart/form-data" class="flex flex-col gap-4">
                @csrf
                
                <div class="flex flex-col gap-2">
                    <label class="font-medium text-gray-700">Banner Title</label>
                    <input class="border border-gray-300 p-2.5 rounded-lg w-full md:w-1/2 focus:outline-none focus:ring-2 focus:ring-[#f75e34] focus:border-transparent" 
                           type="text" placeholder="Enter title here..." name="title" required>
                </div>

                <div class="flex flex-col gap-2">
                    <label class="font-medium text-gray-700">Select Banner Image</label>
                    <input class="block w-full md:w-1/2 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none p-2" 
                           required type="file" name="imageUpload">
                </div>

                <div class="mt-2">
                    <input class="px-6 py-2.5 bg-[#f75e34] hover:bg-orange-600 text-white font-bold rounded-lg cursor-pointer transition-colors shadow-sm w-full md:w-auto" 
                           type="submit" value="Upload Banner">
                </div>
            </form>
        </div>

        <h2 class="text-xl font-bold text-gray-800 mb-4">Current Banners</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            @foreach($banners as $data)
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden flex flex-col group hover:shadow-md transition-shadow">
                
                <div class="h-48 overflow-hidden relative">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" 
                         src="{{ asset('storage/'.$data->image_path) }}" alt="{{ $data->title }}">
                </div>

                <div class="p-4 flex flex-col gap-3">
                    <div>
                        <span class="text-xs text-gray-500 uppercase tracking-wider">Title</span>
                        <h3 class="text-lg font-bold text-gray-800 truncate">{{ $data->title }}</h3>
                    </div>

                    <div class="flex justify-between items-center border-t pt-3 mt-auto">
                        
                        <a href="/admin/banner-edit/{{ $data->id }}" class="flex items-center gap-1 text-blue-600 hover:text-blue-800 font-medium text-sm">
                            <i class="ri-edit-2-line text-lg"></i> Edit
                        </a>

                        <form action="/admin/banner/{{ $data->id }}" method="post" onsubmit="return confirm('Are you sure you want to delete this banner?')">
                            @csrf
                            @method('DELETE')
                            <button class="flex items-center gap-1 text-red-500 hover:text-red-700 font-medium text-sm" type="submit">
                                <i class="ri-delete-bin-5-line text-lg"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        @if(count($banners) == 0)
        <div class="w-full py-10 text-center bg-white rounded-lg border border-dashed border-gray-300">
            <i class="ri-image-add-line text-4xl text-gray-300 mb-2 block"></i>
            <span class="text-gray-500">No banners uploaded yet.</span>
        </div>
        @endif

    </div>

</body>
</html>