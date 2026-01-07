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

    <nav class="bg-white border-b border-[#00000023] fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                
                <div class="shrink-0 flex items-center">
                    <a href="/" class="w-32 md:w-40">
                        <img class="w-full object-cover" src="{{ asset('storage/logo/carConnect.png') }}" alt="Car Connect Logo">
                    </a>
                </div>

                <div class="hidden md:flex space-x-8 items-center">
                    <a href="/" class="text-[#24272C] hover:text-[#f75e34] font-medium transition duration-200">Home</a>
                    <a href="#" class="text-[#24272C] hover:text-[#f75e34] font-medium transition duration-200">About</a>
                    <a href="#" class="text-[#24272C] hover:text-[#f75e34] font-medium transition duration-200">Services</a>
                    <a href="#" class="text-[#24272C] hover:text-[#f75e34] font-medium transition duration-200">Contact</a>
                </div>

                <div class="flex items-center gap-4">
                    <i class="cursor-pointer text-[#24272C] hover:text-[#f75e34] text-xl md:text-2xl ri-search-line"></i>
                    
                    <i class="cursor-pointer text-[#24272C] hover:text-[#f75e34] text-xl md:text-2xl ri-user-line"></i>

                    <button id="mobile-menu-btn" class="md:hidden text-[#24272C] focus:outline-none">
                        <i class="text-2xl ri-menu-line"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 absolute w-full left-0">
            <div class="px-4 pt-2 pb-4 space-y-1 flex flex-col shadow-lg">
                <a href="/" class="block px-3 py-2 text-base font-medium text-[#24272C] hover:text-[#f75e34] hover:bg-gray-50 rounded-md">Home</a>
                <a href="#" class="block px-3 py-2 text-base font-medium text-[#24272C] hover:text-[#f75e34] hover:bg-gray-50 rounded-md">About</a>
                <a href="#" class="block px-3 py-2 text-base font-medium text-[#24272C] hover:text-[#f75e34] hover:bg-gray-50 rounded-md">Services</a>
                <a href="#" class="block px-3 py-2 text-base font-medium text-[#24272C] hover:text-[#f75e34] hover:bg-gray-50 rounded-md">Contact</a>
            </div>
        </div>
    </nav>

    <div class="h-16"></div>

    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>

</body>
</html>