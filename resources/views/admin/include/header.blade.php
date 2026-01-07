<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.8.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Admin Panel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">
    <nav class="fixed top-0 z-50 w-full bg-[#fae8e3] border-b border-gray-200 h-16">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">

                <div class="flex items-center justify-start rtl:justify-end">
                    <button id="sidebar-toggle" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                        <i class="ri-menu-2-line text-2xl text-[#f75d34]"></i>
                    </button>

                    <a href="#" class="flex ms-2 md:ms-4">
                        <img src="{{ asset('storage/logo/carConnect.png') }}" class="h-10 w-auto object-cover md:h-10 me-3" alt="Car Connect Logo" />
                    </a>
                </div>

                <div class="flex items-center gap-3">

                    <div class="hidden md:flex items-center justify-center bg-white rounded-full p-1 border">
                        <i class="text-[#24272C] text-xl ri-user-line"></i>
                    </div>

                    <span class="text-gray-600 font-medium hidden md:block">
                        {{ Auth::user()->name ?? 'Admin' }}
                    </span>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="flex items-center gap-2 bg-red-50 text-red-500 hover:bg-red-100 px-3 py-1.5 rounded-lg transition text-sm font-bold" title="Logout">
                            <i class="ri-logout-box-r-line"></i> <span class="hidden md:inline">Logout</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-[#24272C] border-r border-gray-200 md:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-[#24272C]">
            <ul class="space-y-2 font-medium mt-5">

                <li>
                    <a href="{{ url('admin') }}" class="flex items-center p-2 rounded-lg group {{ Request::is('admin') ? 'bg-[#f75d34] text-white' : 'text-gray-300 hover:bg-[#f75d34] hover:text-white' }}">
                        <i class="ri-contacts-line text-xl transition duration-75"></i>
                        <span class="ms-3 font-[roboto-medium]">Home</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/banner') }}" class="flex items-center p-2 rounded-lg group {{ Request::is('admin/banner*') ? 'bg-[#f75d34] text-white' : 'text-gray-300 hover:bg-[#f75d34] hover:text-white' }}">
                        <i class="ri-image-line text-xl transition duration-75"></i>
                        <span class="ms-3 font-[roboto-medium]">Banner</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/latest-car') }}" class="flex items-center p-2 rounded-lg group {{ Request::is('admin/latest-car*') ? 'bg-[#f75d34] text-white' : 'text-gray-300 hover:bg-[#f75d34] hover:text-white' }}">
                        <i class="ri-roadster-line text-xl transition duration-75"></i>
                        <span class="ms-3 font-[roboto-medium]">Cars</span>
                    </a>
                </li>

            </ul>
        </div>
    </aside>

    <div id="sidebar-overlay" class="fixed inset-0 z-30 bg-gray-900 bg-opacity-50 hidden md:hidden"></div>

    <script>
        const sidebar = document.getElementById('logo-sidebar');
        const toggleBtn = document.getElementById('sidebar-toggle');
        const overlay = document.getElementById('sidebar-overlay');
        if (sidebar && toggleBtn && overlay) {
            function toggleSidebar() {
                sidebar.classList.toggle('-translate-x-full');
                overlay.classList.toggle('hidden');
            }

            toggleBtn.addEventListener('click', toggleSidebar);
            overlay.addEventListener('click', toggleSidebar);
        }
    </script>

</body>

</html>