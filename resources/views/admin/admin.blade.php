    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
            href="https://cdn.jsdelivr.net/npm/remixicon@4.8.0/fonts/remixicon.css"
            rel="stylesheet" />
        <title>Admin Panel | Cars Dekho</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <div class="w-full bg-[#F75D34] p-4">
            <div class="h-full flex items-center justify-between px-6">
                <div>
                    <h1 class="text-white text-3xl font-[roboto-bold]">Faizan Dashboard </h1>
                </div>
                <div class="active:scale-95">
                    <i class="text-[#24272C] text-2xl cursor-pointer rounded-full p-2 bg-white ri-user-line"></i>
                </div>
            </div>
        </div>

        <div class="w-full h-screen flex">
            <div class="w-[15%] h-[90vh] bg-[#24272C]">
            <div class="flex flex-col justify-around items-center pt-15">
                <ul class="flex flex-col gap-5 w-full px-3">
                    <li class="text-xl font-[roboto-medium] hover:bg-[#f75d34] duration-200 text-white rounded-lg cursor-pointer p-1.5"><i class="ri-contacts-line mr-2"></i> Home</li>
                    <li class="text-xl font-[roboto-medium] hover:bg-[#f75d34] duration-200 text-white rounded-lg cursor-pointer p-1.5"><i class="ri-image-line mr-2"></i> Banner</li>
                    <li class="text-xl font-[roboto-medium] hover:bg-[#f75d34] duration-200 text-white rounded-lg cursor-pointer p-1.5"><i class="ri-car-line mr-2"></i> Searched Car</li>
                    <li class="text-xl font-[roboto-medium] hover:bg-[#f75d34] bg-[#f75d34] duration-200 text-white rounded-lg cursor-pointer p-1.5"><i class="ri-roadster-line mr-2"></i> Latest Car</li>
                </ul>
            </div>
        </div>

        <div class="w-[85%] m-auto text-center">

            @foreach($car as $data)

            <h1>{{ $data->name }}</h1>

            @endforeach
        </div>

        </div>
    </body>

    </html>