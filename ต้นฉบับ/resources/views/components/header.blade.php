<!-- Header -->
<header class="bg-white shadow-md">
    <div class="flex justify-between items-center px-6 py-4">
        <div class="flex items-center space-x-3">
            <h2 class="text-xl font-semibold text-gray-800">@yield('header_title', 'Home')</h2>
        </div>
        
        <div class="flex items-center space-x-4">
            <!-- User Profile -->
            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center">
                    <span class="text-white font-semibold">MA</span>
                </div>
                <div>
                    <p class="text-sm font-semibold text-gray-800">Master Admin</p>
                    <p class="text-xs text-gray-500">Administrator</p>
                </div>
            </div>
            
            <!-- Logout -->
            <a href="#" class="text-gray-600 hover:text-red-600">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                </svg>
            </a>
        </div>
    </div>
</header>
