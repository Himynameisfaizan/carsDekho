<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.8.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="relative">
        <div class="w-full bg-[#f75e342d] p-4 absolute top-0 left-0 -z-10">
            <div class="h-full flex items-center justify-between pr-6">
                <div class="w-40">
                    <img class="w-full h-10 object-cover" src="{{ asset('storage/logo/carConnect.png') }}" alt="">
                </div>
                <div class="active:scale-95">
                    <i class="text-[#24272C] text-2xl cursor-pointer rounded-full p-2 bg-white ri-user-line"></i>
                </div>
            </div>
        </div>

        <div class="w-full h-screen flex absolute top-18 left-0 -z-10">
            <div class="w-[15%] h-[90vh] bg-[#24272C]">
                <div class="flex flex-col justify-around items-center pt-15">
                    <ul class="flex flex-col gap-5 w-full px-3">
                        <a href="{{ url('admin') }}">
                            <li class="text-xl font-[roboto-medium] hover:bg-[#f75d34] duration-200 text-white rounded cursor-pointer p-1.5 {{ Request::is('admin') ? 'bg-[#f75d34]' : 'hover:bg-[#f75d34]'}}"><i class="ri-contacts-line mr-2"></i> Home</li>
                        </a>
                        <a href="{{ url('admin/banner') }}">
                            <li class="text-xl font-[roboto-medium] hover:bg-[#f75d34] duration-200 text-white rounded cursor-pointer p-1.5  {{ Request::is('admin/banner*') ? 'bg-[#f75d34]' : 'hover:bg-[#f75d34]'}}"><i class="ri-image-line mr-2"></i> Banner</li>
                        </a>
                        <a href="{{ url('admin/latest-car') }}">
                            <li class="text-xl font-[roboto-medium] hover:bg-[#f75d34] duration-200 text-white rounded cursor-pointer p-1.5 {{ Request::is('admin/latest-car*') ? 'bg-[#f75d34]' : 'hover:bg-[#f75d34]'}}"><i class="ri-roadster-line mr-2"></i>Cars</li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</body>

</html>