<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Edit Car</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.8.0/fonts/remixicon.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    @include('admin.include.header')

    <div class="p-4 md:ml-64 mt-16 transition-all duration-300">
        
        <div class="mb-6 flex items-center gap-2">
            <a href="/admin/latest-car" class="bg-white p-2 rounded-full shadow-sm text-gray-600 hover:text-[#f75e34] transition">
                <i class="ri-arrow-left-line text-xl"></i>
            </a>
            <h1 class="text-2xl font-bold text-gray-800">Edit Car Details</h1>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            
            <div class="lg:col-span-2 bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                <h2 class="text-lg font-bold text-gray-800 mb-4 border-b pb-2">Update Information</h2>
                
                <form action="/admin/edit-cars/{{ $cars->id }}" method="post" enctype="multipart/form-data" class="flex flex-col gap-4">
                    @csrf
                    @method('PUT')
                    
                    <div class="flex flex-col gap-2">
                        <label class="font-medium text-gray-700">Car Name (Model)</label>
                        <select name="name" class="border border-gray-300 p-2.5 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-[#f75e34]">
                            <option value="sedan" {{ $cars->car_name == 'sedan' ? 'selected' : '' }}>Sedan</option>
                            <option value="suv" {{ $cars->car_name == 'suv' ? 'selected' : '' }}>SUV</option>
                            <option value="hatchback" {{ $cars->car_name == 'hedbatch' || $cars->car_name == 'hatchback' ? 'selected' : '' }}>Hatchback</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="font-medium text-gray-700">Update Price (₹)</label>
                        <input class="border border-gray-300 p-2.5 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-[#f75e34]" 
                               required type="number" name="price" value="{{ $cars->price }}">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="font-medium text-gray-700">Update Category</label>
                        <select name="category" class="border border-gray-300 p-2.5 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-[#f75e34]">
                            <option value="latest" {{ $cars->category == 'latest' ? 'selected' : '' }}>Latest Car Section</option>
                            <option value="most_searched" {{ $cars->category == 'most_searched' ? 'selected' : '' }}>Most Searched Car Section</option>
                        </select>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="font-medium text-gray-700">Update Car Image <span class="text-xs text-gray-400 font-normal">(Leave empty to keep current)</span></label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none p-2" 
                               type="file" name="imageUpload">
                    </div>

                    <div class="mt-4">
                        <input class="px-6 py-2.5 bg-[#f75e34] hover:bg-orange-600 text-white font-bold rounded-lg cursor-pointer transition-colors shadow-sm w-full md:w-auto" 
                               type="submit" value="Update Car Details">
                    </div>
                </form>
            </div>


            <div class="lg:col-span-1 bg-gray-50 rounded-lg border border-gray-200 p-6 h-fit">
                <h2 class="text-lg font-bold text-gray-800 mb-4 border-b pb-2">Current Status</h2>
                
                <div class="flex flex-col gap-4">
                    <div class="w-full h-48 rounded-lg overflow-hidden border border-gray-300 bg-white">
                        <img class="w-full h-full object-cover" src="{{ asset('storage/'.$cars->car_image_path) }}" alt="Current Car Image">
                    </div>
                    
                    <div class="space-y-3">
                        <div>
                            <span class="text-xs text-gray-500 uppercase tracking-wider">Current Name</span>
                            <div class="font-medium text-gray-800 capitalize">{{ $cars->car_name }}</div>
                        </div>
                        
                        <div>
                            <span class="text-xs text-gray-500 uppercase tracking-wider">Current Price</span>
                            <div class="font-medium text-gray-800">₹ {{ number_format($cars->price) }}</div>
                        </div>

                        <div>
                            <span class="text-xs text-gray-500 uppercase tracking-wider">Current Category</span>
                            <div class="font-medium text-gray-800">
                                <span class="bg-gray-200 px-2 py-1 rounded text-xs">{{ $cars->category }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>