<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Manage Cars</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.8.0/fonts/remixicon.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    @include('admin.include.header')

    <div class="p-4 md:ml-64 mt-16 transition-all duration-300">
        
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-8">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 border-b pb-2">Upload Car Details</h1>
            
            <form action="/admin/latest-car" method="post" enctype="multipart/form-data" class="flex flex-col gap-4">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="flex flex-col gap-2">
                        <label class="font-medium text-gray-700">Car Name (Model)</label>
                        <select name="name" class="border border-gray-300 p-2.5 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-[#f75e34]">
                            <option value="" disabled selected>Select Car Model</option>
                            <option value="sedan">Sedan</option>
                            <option value="suv">SUV</option>
                            <option value="hatchback">Hatchback</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="font-medium text-gray-700">Car Price (₹)</label>
                        <input class="border border-gray-300 p-2.5 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-[#f75e34]" 
                               required type="number" name="price" placeholder="E.g. 1200000">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="font-medium text-gray-700">Category Section</label>
                        <select name="category" class="border border-gray-300 p-2.5 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-[#f75e34]">
                            <option value="latest">Latest Car Section</option>
                            <option value="most_searched">Most Searched Car Section</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="font-medium text-gray-700">Car Image</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none p-2" 
                               required type="file" name="imageUpload">
                    </div>
                </div>

                <div class="mt-4">
                    <input class="px-6 py-2.5 bg-[#f75e34] hover:bg-orange-600 text-white font-bold rounded-lg cursor-pointer transition-colors shadow-sm w-full md:w-auto" 
                           type="submit" value="Upload Car Details">
                </div>
            </form>
        </div>

        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold text-gray-800">Uploaded Cars</h2>
            <span class="bg-gray-200 text-gray-700 text-xs font-bold px-2 py-1 rounded-full">Total: {{ count($car) }}</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            @foreach($car as $data)
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow flex flex-col">
                
                <div class="h-48 overflow-hidden relative bg-gray-100">
                    <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" 
                         src="{{ asset('storage/'.$data->car_image_path) }}" alt="Car Image">
                    
                    <div class="absolute bottom-2 right-2 bg-black bg-opacity-70 text-white text-xs font-bold px-2 py-1 rounded">
                        ₹ {{ number_format($data->price) }}
                    </div>
                </div>

                <div class="p-4 flex flex-col gap-2 grow">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-lg font-bold text-gray-800 capitalize">{{ $data->car_name }}</h3>
                            <span class="text-xs text-gray-500 bg-gray-100 px-2 py-0.5 rounded border border-gray-200 capitalize">
                                {{ str_replace('_', ' ', $data->category) }}
                            </span>
                        </div>
                    </div>
                </div>

                <div class="p-3 border-t bg-gray-50 flex justify-between items-center">
                    <a href="/admin/edit-cars/{{ $data->id }}" class="flex items-center gap-1 text-blue-600 hover:text-blue-800 text-sm font-medium">
                        <i class="ri-edit-2-line"></i> Edit
                    </a>

                    <form action="/admin/latest-car/{{ $data->id }}" method="post" onsubmit="return confirm('Delete this car permanently?')">
                        @csrf
                        @method('DELETE')
                        <button class="flex items-center gap-1 text-red-500 hover:text-red-700 text-sm font-medium" type="submit">
                            <i class="ri-delete-bin-5-line"></i> Delete
                        </button>
                    </form>
                </div>

            </div>
            @endforeach

        </div>

        @if(count($car) == 0)
        <div class="w-full py-10 text-center bg-white rounded-lg border border-dashed border-gray-300 mt-4">
            <i class="ri-roadster-line text-4xl text-gray-300 mb-2 block"></i>
            <span class="text-gray-500">No cars uploaded yet. Add one above!</span>
        </div>
        @endif

    </div>

</body>
</html>