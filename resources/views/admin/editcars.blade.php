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
            <form action="/admin/edit-cars/{{ $cars->id }}" method="post" enctype="multipart/form-data" class="mt-5 w-full flex flex-col gap-2">
                @csrf
                @method('PUT')
                <label class="mt-5 font-[roboto-medium]">Update Car title</label>
                <select name="name" class="border border-[#0000005d] p-2 rounded w-[50%] outline outline-[#f75e348a]">
                    <option value="sadn">Sadan</option>
                    <option value="suv">suv</option>
                    <option value="hedbatch">hedbacth</option>
                </select>
                <label class="mt-5 font-[roboto-medium]">Update Car Price</label>
                <input class="border border-[#0000005d] p-2 rounded w-[50%] outline outline-[#f75e348a]" required type="number" name="price" value="{{ $cars->price }}">


                <label class="mt-5 font-[roboto-medium]">Update Category</label>
                <select name="category" class="border border-[#0000005d] p-2 rounded w-[50%] outline outline-[#f75e348a]">
                    <option value="latest">Latest Car Section</option>
                    <option value="most_searched">Most Searched Car Section</option>
                </select>

                <label class="mt-5 font-[roboto-medium]">Update Car Image</label>
                <input class="border border-[#0000005d] p-2 rounded w-[50%] outline outline-[#f75e348a]" required type="file" name="imageUpload">
                <input class="border border-[#0000005d] px-1 py-2 active:scale-95 cursor-pointer font-[roboto-bold] rounded bg-[#f75e34] text-white w-[15%] outline outline-[#f75e348a]" type="submit" value="Upload image">

            </form><br>
            <div class="mt-5 w-full flex flex-col gap-2">
                <h1 class="font-[roboto-bold] text-3xl text-center">Current status</h1>
                <label class="mt-5 font-[roboto-medium]">Car title</label>
                <input class="border border-[#0000005d] p-2 rounded w-[50%] outline outline-[#f75e348a]" type="text" value="{{ $cars->car_name }}">
                <label class="mt-5 font-[roboto-medium]">Update Car Price</label>
                <input class="border border-[#0000005d] p-2 rounded w-[50%] outline outline-[#f75e348a]" required type="number" name="price" value="{{ $cars->price }}">


                <label class="mt-5 font-[roboto-medium]">Category</label>
                <input class="border border-[#0000005d] p-2 rounded w-[50%] outline outline-[#f75e348a]" type="text" value="{{ $cars->category }}">

                <label class="mt-5 font-[roboto-medium]">Car Image</label>
                <img class="w-40 h-24 object-cover border" src="{{ asset('storage/'.$cars->car_image_path) }}" alt="">

            </div>
        </div>

    </div>
</body>

</html>