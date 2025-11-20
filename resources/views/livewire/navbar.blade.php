<nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <div class="text-2xl font-bold text-gray-800">
                Portfolio<span class="text-blue-600">.</span>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8">
                <a href="#home" class="text-gray-600 hover:text-blue-600 transition">Home</a>
                <a href="#about" class="text-gray-600 hover:text-blue-600 transition">About</a>
                <a href="#projects" class="text-gray-600 hover:text-blue-600 transition">Projects</a>
                <a href="#contact" class="text-gray-600 hover:text-blue-600 transition">Contact</a>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="open = !open" class="md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div x-show="open" class="md:hidden pb-4" x-cloak>
            <a href="#home" class="block py-2 text-gray-600 hover:text-blue-600">Home</a>
            <a href="#about" class="block py-2 text-gray-600 hover:text-blue-600">About</a>
            <a href="#projects" class="block py-2 text-gray-600 hover:text-blue-600">Projects</a>
            <a href="#contact" class="block py-2 text-gray-600 hover:text-blue-600">Contact</a>
        </div>
    </div>
</nav>