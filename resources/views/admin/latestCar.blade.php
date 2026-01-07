<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    @include('admin.include.header')
    <div class="w-[80%] float-right left-20 mt-20 flex flex-col justify-between px-8 py-5">
        <div>
            <h1 class="text-3xl font-[roboto-bold] text-center">Upload Latest car</h1>
        </div>
        <div>
            <form action="/admin/latest-car" method="post" enctype="multipart/form-data" class="mt-5 w-full flex flex-col gap-2">
                @csrf
                <label class="mt-5 font-[roboto-medium]">Enter Car title</label>
                <select name="name" class="border border-[#0000005d] p-2 rounded w-[50%] outline outline-[#f75e348a]">
                    <option value="sadn">Sadan</option>
                    <option value="suv">suv</option>
                    <option value="hedbatch">hedbacth</option>
                </select>
                <label class="mt-5 font-[roboto-medium]">Ente Car Price</label>
                <input class="border border-[#0000005d] p-2 rounded w-[50%] outline outline-[#f75e348a]" required type="number" name="price" placeholder="Enter car price...">


                <label class="mt-5 font-[roboto-medium]">Select Category</label>
                <select name="category" class="border border-[#0000005d] p-2 rounded w-[50%] outline outline-[#f75e348a]">
                    <option value="latest">Latest Car Section</option>
                    <option value="most_searched">Most Searched Car Section</option>
                </select>

                <label class="mt-5 font-[roboto-medium]">Select Car Image</label>
                <input class="border border-[#0000005d] p-2 rounded w-[50%] outline outline-[#f75e348a]" required type="file" name="imageUpload">
                <input class="border border-[#0000005d] px-1 py-2 active:scale-95 cursor-pointer font-[roboto-bold] rounded bg-[#f75e34] text-white w-[15%] outline outline-[#f75e348a]" type="submit" value="Upload image">
            </form><br>
        </div>
        <div class="flex gap-4 flex-wrap">
            @foreach($car as $data)

            <div class="p-3 w-full bg-[#f75e348a] flex flex-col items-center">
                <div class="flex items-center justify-around w-full">
                    <div class="flex justify-around w-full">
                        <h1 class=""><span class="font-bold">Car Name: </span>{{ $data->car_name }}</h1>
                        <h1 class=""><span class="font-bold">Car Price: </span>₹{{ $data->price }}</h1>
                        <h1 class=""><span class="font-bold">Car Category: </span>{{ $data->category }}</h1>

                    </div>
                    <div class="w-50">
                        <div class="flex items-center justify-around">
                            <a href="/admin/edit-cars/{{ $data->id }}"><i class="ri-edit-2-line"></i>Edit</a>
                            <form action="/admin/latest-car/{{ $data->id }}" method="post" onsubmit="return confirm('Are you sure you want to delete this?')">
                                @csrf
                                @method('DELETE')
                                <button class="cursor-pointer" type="submit"><i class="ri-delete-bin-5-line"></i>Delete</button>
                            </form>
                        </div>
                        <img class="w-full h-30 mt-2 object-cover" src="{{ asset('storage/'.$data->car_image_path) }}" alt="{{ asset('storage/'.$data->car_image_path) }}">

                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</body>

</html>