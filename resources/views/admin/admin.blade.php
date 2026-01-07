<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.8.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Admin Panel | Leads</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    @include('admin.include.header')

    <div class="p-4 md:ml-64 mt-16 md:px-10 md:py-5 transition-all duration-300">
        
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-5 gap-3">
            <h1 class="text-2xl md:text-3xl font-bold text-gray-800">Customer Leads</h1>
            <div class="bg-white px-4 py-2 border rounded shadow-sm w-full md:w-auto text-center md:text-left">
                <span class="font-bold text-gray-700">Total: {{ count($car) }}</span>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
            
            <div class="overflow-x-auto">
                <table class="w-full text-left whitespace-nowrap">
                    <thead class="bg-[#f75d34] text-white">
                        <tr>
                            <th class="p-3 font-semibold">Date</th>
                            <th class="p-3 font-semibold">Name</th>
                            <th class="p-3 font-semibold">Phone & Email</th>
                            <th class="p-3 font-semibold">Address</th>
                            <th class="p-3 font-semibold">Interested In</th>
                            <th class="p-3 text-center font-semibold">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        
                        @foreach($car as $data)
                        <tr class="hover:bg-gray-50">
                            <td class="p-3 text-sm text-gray-600">
                                {{ $data->created_at->format('d-m-Y') }}
                            </td>

                            <td class="p-3 font-semibold text-gray-800">
                                {{ $data->name }}
                            </td>

                            <td class="p-3">
                                <div class="flex flex-col">
                                    <span class="text-sm font-medium text-gray-700">
                                        <i class="ri-phone-fill text-orange-500 mr-1"></i> {{ $data->phone }}
                                    </span>
                                    @if($data->email)
                                    <span class="text-xs text-gray-500 mt-1">
                                        <i class="ri-mail-line mr-1"></i> {{ $data->email }}
                                    </span>
                                    @endif
                                </div>
                            </td>

                            <td class="p-3 text-sm text-gray-600 max-w-xs truncate">
                                {{ $data->address ?? '-' }}
                            </td>

                            <td class="p-3">
                                <div class="flex gap-1">
                                    @foreach($data->preferences as $pref)
                                        <span class="bg-gray-100 border border-gray-200 text-gray-600 text-xs px-2 py-1 rounded">
                                            {{ $pref->car_type }}
                                        </span>
                                    @endforeach
                                </div>
                            </td>

                            <td class="p-3 text-center">
                                <a href="tel:{{ $data->phone }}" class="inline-block bg-green-100 text-green-600 p-2 rounded-full hover:bg-green-200 transition">
                                    <i class="ri-phone-fill"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach

                        @if(count($car) == 0)
                        <tr>
                            <td colspan="6" class="p-8 text-center text-gray-500">
                                <div class="flex flex-col items-center">
                                    <i class="ri-inbox-line text-4xl text-gray-300 mb-2"></i>
                                    <span>No leads found yet.</span>
                                </div>
                            </td>
                        </tr>
                        @endif

                    </tbody>
                </table>
            </div>
        </div>

    </div>

</body>
</html>