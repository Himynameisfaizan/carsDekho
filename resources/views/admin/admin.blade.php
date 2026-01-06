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
    @include('admin.include.header')
        <div class="w-[80%] float-right mt-20 flex justify-between px-8 py-5">
            <div>
                @foreach($car as $data)
                <h1>{{ $data->name }}</h1>
                @endforeach
            </div>
            <div>
                <a href="#" class="bg-[#f75d34] text-white text-sm px-4 py-2 rounded">Add Car</a>
            </div>
        </div>

    </body>

    </html>