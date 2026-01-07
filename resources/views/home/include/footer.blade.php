<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Connect</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.8.0/fonts/remixicon.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white">

    <div class="mt-8 border-t border-b border-[#00000027] px-4 py-8 md:px-6 md:py-10 bg-gray-50 md:bg-white">

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-y-8 gap-x-4 max-w-7xl mx-auto">

            <div class="flex flex-col sm:flex-row items-center sm:items-center justify-center sm:justify-start text-center sm:text-left gap-2 sm:gap-3">
                <i class="text-[#24272C] text-3xl md:text-5xl ri-medal-line"></i>
                <div class="flex flex-col">
                    <h1 class="text-base md:text-xl text-[#f75d34] font-bold leading-tight">India’s #1</h1>
                    <p class="text-xs md:text-sm text-[#24272ca9]">Largest Auto portal</p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center sm:items-center justify-center sm:justify-start text-center sm:text-left gap-2 sm:gap-3">
                <i class="text-[#24272C] text-3xl md:text-5xl ri-roadster-line"></i>
                <div class="flex flex-col">
                    <h1 class="text-base md:text-xl text-[#f75d34] font-bold leading-tight">Car Sold</h1>
                    <p class="text-xs md:text-sm text-[#24272ca9]">Every 4 minute</p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center sm:items-center justify-center sm:justify-start text-center sm:text-left gap-2 sm:gap-3">
                <i class="text-[#24272C] text-3xl md:text-5xl ri-discount-percent-line"></i>
                <div class="flex flex-col">
                    <h1 class="text-base md:text-xl text-[#f75d34] font-bold leading-tight">Offers</h1>
                    <p class="text-xs md:text-sm text-[#24272ca9]">Stay updated pay less</p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center sm:items-center justify-center sm:justify-start text-center sm:text-left gap-2 sm:gap-3">
                <i class="text-[#24272C] text-3xl md:text-5xl ri-map-line"></i>
                <div class="flex flex-col">
                    <h1 class="text-base md:text-xl text-[#f75d34] font-bold leading-tight">Compare</h1>
                    <p class="text-xs md:text-sm text-[#24272ca9]">Decode the right car</p>
                </div>
            </div>

        </div>
    </div>
    
    <div class="px-6 py-10 md:px-10 lg:px-20 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-12">

            <div class="w-full">
                <a href="/" class="block mb-4">
                    <img class="w-40 h-auto object-cover" src="{{ asset('storage/logo/carConnect.png') }}" alt="Logo">
                </a>
                <div class="flex flex-col">
                    <p class="text-[#24272c] text-sm leading-6 w-full md:w-[90%]">
                        Driving your dreams into reality. Explore a wide range of the latest and most searched cars tailored to your lifestyle at Car Connect.
                    </p>
                </div>
            </div>

            <div class="w-full">
                <h1 class="text-lg mb-4 text-[#24272C] font-bold">Quicklinks</h1>
                <div class="flex flex-col gap-2">
                    <a class="text-[#24272cb0] hover:text-[#f75d34] duration-150 text-sm" href="#">About us</a>
                    <a class="text-[#24272cb0] hover:text-[#f75d34] duration-150 text-sm" href="#">Career with us</a>
                    <a class="text-[#24272cb0] hover:text-[#f75d34] duration-150 text-sm" href="#">Investors</a>
                    <a class="text-[#24272cb0] hover:text-[#f75d34] duration-150 text-sm" href="#">Services</a>
                    <a class="text-[#24272cb0] hover:text-[#f75d34] duration-150 text-sm" href="#">Contact us</a>
                </div>
            </div>

            <div class="w-full">
                <h1 class="text-lg mb-4 text-[#24272C] font-bold">Connect with us</h1>
                <div class="flex flex-col gap-2">
                    <a class="text-[#24272cb0] hover:text-[#f75d34] duration-150 text-sm" href="#">Facebook</a>
                    <a class="text-[#24272cb0] hover:text-[#f75d34] duration-150 text-sm" href="#">Instagram</a>
                    <a class="text-[#24272cb0] hover:text-[#f75d34] duration-150 text-sm" href="#">Twitter</a>
                    <a class="text-[#24272cb0] hover:text-[#f75d34] duration-150 text-sm" href="#">Youtube</a>
                    <a class="text-[#24272cb0] hover:text-[#f75d34] duration-150 text-sm" href="#">Linkedin</a>
                </div>
            </div>

            <div class="w-full">
                <h1 class="text-lg mb-4 text-[#24272C] font-bold">Others</h1>
                <div class="flex flex-col gap-2">
                    <a class="text-[#24272cb0] hover:text-[#f75d34] duration-150 text-sm" href="#">Terms & conditions</a>
                    <a class="text-[#24272cb0] hover:text-[#f75d34] duration-150 text-sm" href="#">Privacy Policy</a>
                    <a class="text-[#24272cb0] hover:text-[#f75d34] duration-150 text-sm" href="#">Faq</a>
                </div>
            </div>

        </div>
    </div>

    <div class="border-t border-[#00000027] px-6 py-6 bg-gray-50">
        <div class="max-w-7xl mx-auto flex flex-col-reverse md:flex-row items-center justify-between gap-4">

            <div class="text-center md:text-left">
                <h1 class="text-sm text-gray-500">© 2026 Copyright reserved <b class="cursor-pointer text-[#24272c] hover:text-[#f75d34]">Car Connect</b></h1>
            </div>

            <div class="flex gap-6">
                <i class="text-[#24272c] hover:text-[#f75d34] cursor-pointer text-xl ri-facebook-fill transition"></i>
                <i class="text-[#24272c] hover:text-[#f75d34] cursor-pointer text-xl ri-instagram-line transition"></i>
                <i class="text-[#24272c] hover:text-[#f75d34] cursor-pointer text-xl ri-twitter-x-line transition"></i>
                <i class="text-[#24272c] hover:text-[#f75d34] cursor-pointer text-xl ri-youtube-line transition"></i>
                <i class="text-[#24272c] hover:text-[#f75d34] cursor-pointer text-xl ri-linkedin-fill transition"></i>
            </div>
        </div>
    </div>

</body>

</html>