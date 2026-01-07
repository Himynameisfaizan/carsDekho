<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 h-screen flex justify-center items-center">

    <div class="bg-white p-8 rounded-xl shadow-lg w-96 border border-gray-200">
        <div class="flex justify-center mb-6">
            <img src="{{ asset('storage/logo/carConnect.png') }}" class="w-40" alt="Logo">
        </div>
        
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Admin Login</h2>

        <form action="{{ route('login.post') }}" method="POST" class="flex flex-col gap-4">
            @csrf
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <input type="email" name="email" required 
                    class="w-full border border-gray-300 p-2.5 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#f75e34]">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" name="password" required 
                    class="w-full border border-gray-300 p-2.5 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#f75e34]">
            </div>

            @if(session('error'))
                <p class="text-red-500 text-sm text-center">{{ session('error') }}</p>
            @endif

            <button type="submit" 
                class="w-full bg-[#f75e34] hover:bg-orange-600 text-white font-bold py-2.5 rounded-lg transition shadow-md mt-2">
                Login
            </button>
        </form>
        
        <div class="mt-4 text-center">
            <a href="/" class="text-sm text-gray-500 hover:text-[#f75e34]">Back to Website</a>
        </div>
    </div>

</body>
</html>