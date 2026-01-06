<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="relative">
        <div class="w-full bg-[#f75e342d] p-4 absolute top-0 left-0">
            <div class="h-full flex items-center justify-between pr-6">
                <div class="w-40">
                    <img class="w-full h-10 object-cover" src="storage/logo/carConnect.png" alt="">
                </div>
                <div class="active:scale-95">
                    <i class="text-[#24272C] text-2xl cursor-pointer rounded-full p-2 bg-white ri-user-line"></i>
                </div>
            </div>
        </div>

        <div class="w-full h-screen flex absolute top-18 left-0">
            <div class="w-[15%] h-[90vh] bg-[#24272C]">
                <div class="flex flex-col justify-around items-center pt-15">
                    <ul class="flex flex-col gap-5 w-full px-3">
                        <li class="text-xl font-[roboto-medium] hover:bg-[#f75d34] duration-200 text-white rounded cursor-pointer p-1.5"><i class="ri-contacts-line mr-2"></i> Home</li>
                        <li class="text-xl font-[roboto-medium] hover:bg-[#f75d34] duration-200 text-white rounded cursor-pointer p-1.5"><i class="ri-image-line mr-2"></i> Banner</li>
                        <li class="text-xl font-[roboto-medium] hover:bg-[#f75d34] duration-200 text-white rounded cursor-pointer p-1.5"><i class="ri-car-line mr-2"></i> Searched Car</li>
                        <li class="text-xl font-[roboto-medium] hover:bg-[#f75d34] bg-[#f75d34] duration-200 text-white rounded cursor-pointer p-1.5"><i class="ri-roadster-line mr-2"></i> Latest Car</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</body>

</html>