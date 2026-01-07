<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Connect | Home</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-50">

    @include('home.include.header')

    <div class="relative w-full mb-16 md:mb-0"> 
        
        <div class="h-70 md:h-150 w-full relative z-0">
            <div class="swiper bannerSwiper w-full h-full">
                <div class="swiper-wrapper">
                    @foreach($banner as $data)
                    <div class="swiper-slide">
                        <img class="w-full h-full object-cover" src="{{ asset('storage/'.$data->image_path) }}" alt="{{ $data->title }}">
                        <div class="absolute inset-0 bg-linear-to-b from-transparent to-black/10 md:hidden"></div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination hidden md:block"></div>
            </div>
        </div>

        <div class="relative z-10 w-[92%] mx-auto -mt-20 
                    md:absolute md:top-1/2 md:-translate-y-1/2 md:left-16 md:mt-0 md:w-100 md:mx-0">
            
            <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 p-6 md:p-8">
                
                <h1 class="text-[#24272C] text-2xl font-extrabold mb-6">Find your right car</h1>
                
                <form action="{{ route('submit.lead') }}" method="POST" class="flex flex-col gap-4">
                    @csrf
                    
                    <div class="space-y-3">
                        <input class="w-full bg-gray-50 text-gray-900 text-sm rounded-lg border border-gray-200 focus:ring-[#f75e34] focus:border-[#f75e34] block p-3 outline-none transition-all" 
                               type="text" name="name" placeholder="Name" required>
                        
                        <input class="w-full bg-gray-50 text-gray-900 text-sm rounded-lg border border-gray-200 focus:ring-[#f75e34] focus:border-[#f75e34] block p-3 outline-none transition-all" 
                               type="number" name="phone" placeholder="Phone Number" required>
                        
                        <input class="w-full bg-gray-50 text-gray-900 text-sm rounded-lg border border-gray-200 focus:ring-[#f75e34] focus:border-[#f75e34] block p-3 outline-none transition-all" 
                               type="email" name="email" placeholder="Email (Optional)">
                        
                        <input class="w-full bg-gray-50 text-gray-900 text-sm rounded-lg border border-gray-200 focus:ring-[#f75e34] focus:border-[#f75e34] block p-3 outline-none transition-all" 
                               type="text" name="address" placeholder="City / Address">
                    </div>

                    <div class="flex items-center justify-between py-2 mt-1">
                        <label class="flex items-center cursor-pointer group">
                            <input type="checkbox" name="car_type[]" value="SUV" class="w-4 h-4 text-[#f75e34] border-gray-300 rounded focus:ring-[#f75e34] accent-[#f75e34]">
                            <span class="ml-2 text-xs font-bold text-gray-500 group-hover:text-[#f75e34] transition">SUV</span>
                        </label>
                        
                        <label class="flex items-center cursor-pointer group">
                            <input type="checkbox" name="car_type[]" value="SEDAN" class="w-4 h-4 text-[#f75e34] border-gray-300 rounded focus:ring-[#f75e34] accent-[#f75e34]">
                            <span class="ml-2 text-xs font-bold text-gray-500 group-hover:text-[#f75e34] transition">SEDAN</span>
                        </label>
                        
                        <label class="flex items-center cursor-pointer group">
                            <input type="checkbox" name="car_type[]" value="HATCHBACK" class="w-4 h-4 text-[#f75e34] border-gray-300 rounded focus:ring-[#f75e34] accent-[#f75e34]">
                            <span class="ml-2 text-xs font-bold text-gray-500 group-hover:text-[#f75e34] transition">HATCH</span>
                        </label>
                    </div>

                    @error('car_type')
                    <span class="text-red-500 text-xs font-medium">{{ $message }}</span>
                    @enderror
                    
                    <button class="w-full text-white bg-[#f75e34] hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-bold rounded-lg text-sm px-5 py-3.5 text-center shadow-lg shadow-orange-500/30 transition-all transform active:scale-95" type="submit">
                        Search Car
                    </button>
                </form>
            </div>
        </div>
    </div>


    <div class="max-w-7xl mx-auto px-4 md:px-8 mb-16 mt-24 md:mt-10">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-xl md:text-3xl text-[#24272C] font-bold">The most searched car</h1>

            <div class="hidden md:flex gap-3">
                <div class="prev-searched cursor-pointer text-gray-400 hover:text-[#f75e34] transition">
                    <i class="ri-arrow-left-circle-fill text-4xl"></i>
                </div>
                <div class="next-searched cursor-pointer text-gray-400 hover:text-[#f75e34] transition">
                    <i class="ri-arrow-right-circle-fill text-4xl"></i>
                </div>
            </div>
        </div>

        <div class="swiper mostSearchedSwiper w-full py-4 px-1">
            <div class="swiper-wrapper">
                @foreach($searched_cars as $car)
                <div class="swiper-slide bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition duration-300">
                    <div class="h-48 w-full overflow-hidden relative group">
                        <img class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                            src="{{ asset('storage/'.$car->car_image_path) }}" alt="{{ $car->car_name }}">
                        <div class="absolute inset-0 bg-linear-to-t from-black/20 to-transparent"></div>
                    </div>

                    <div class="p-4 flex flex-col gap-2">
                        <div>
                            <h3 class="font-bold text-lg text-gray-800 capitalize truncate">{{ $car->car_name }}</h3>
                            <p class="text-xs text-gray-500 uppercase tracking-wide">{{ $car->category }} • Petrol</p>
                        </div>
                        <div class="flex justify-between items-center mt-3 border-t border-gray-100 pt-3">
                            <span class="text-[#f75e34] font-bold text-lg">₹ {{ number_format($car->price) }}</span>
                            <button class="text-xs bg-black hover:bg-gray-800 text-white px-4 py-2 rounded-lg transition font-medium">Details</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


    <div class="max-w-7xl mx-auto px-4 md:px-8 mb-20">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-xl md:text-3xl text-[#24272C] font-bold">Latest Cars</h1>

            <div class="hidden md:flex gap-3">
                <div class="prev-latest cursor-pointer text-gray-400 hover:text-[#f75e34] transition">
                    <i class="ri-arrow-left-circle-fill text-4xl"></i>
                </div>
                <div class="next-latest cursor-pointer text-gray-400 hover:text-[#f75e34] transition">
                    <i class="ri-arrow-right-circle-fill text-4xl"></i>
                </div>
            </div>
        </div>

        <div class="swiper latestCarSwiper w-full py-4 px-1">
            <div class="swiper-wrapper">
                @foreach($latest_cars as $car)
                <div class="swiper-slide bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition duration-300">
                    <div class="h-48 w-full overflow-hidden relative group">
                        <img class="w-full h-full object-cover group-hover:scale-110 transition duration-700"
                            src="{{ asset('storage/'.$car->car_image_path) }}" alt="{{ $car->car_name }}">
                    </div>

                    <div class="p-4 flex flex-col gap-2">
                        <div>
                            <h3 class="font-bold text-lg text-gray-800 capitalize truncate">{{ $car->car_name }}</h3>
                            <p class="text-xs text-gray-500 uppercase tracking-wide">{{ $car->category }} • Diesel</p>
                        </div>
                        <div class="flex justify-between items-center mt-3 border-t border-gray-100 pt-3">
                            <span class="text-[#f75e34] font-bold text-lg">₹ {{ number_format($car->price) }}</span>
                            <button class="text-xs bg-black hover:bg-gray-800 text-white px-4 py-2 rounded-lg transition font-medium">Details</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('home.include.footer')

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    
</body>

</html>