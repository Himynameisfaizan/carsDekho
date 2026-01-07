<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Connect</title>
       <link
            href="https://cdn.jsdelivr.net/npm/remixicon@4.8.0/fonts/remixicon.css"
            rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="flex p-4 items-center justify-between border-b border-[#00000023]">
        <div class="w-50 h-10 flex items-center">
            <a href="/"><img class="w-full object-cover" src="{{ asset('storage/logo/carConnect.png') }}" alt=""></a>
        </div>
        <div class="flex w-[30%] items-center justify-around">
            <a href="/">
                <li class="list-none text-[#24272C]">Home</li>
            </a>
            <a href="#">
                <li class="list-none text-[#24272C]">About</li>
            </a>
            <a href="#">
                <li class="list-none text-[#24272C]">Services</li>
            </a>
            <a href="#">
                <li class="list-none text-[#24272C]">Contact</li>
            </a>
        </div>
        <div>
            <i class="pr-5 cursor-pointer text-[#24272C] text-2xl ri-user-line"></i>
        </div>
    </div>
</body>

</html>