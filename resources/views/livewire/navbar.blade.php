<nav class="bg-white shadow-lg sticky top-0 z-50" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <div class="text-2xl font-bold text-gray-800">
                Farel Ar<span class="text-blue-600">.</span>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8">
                <a href="#home" class="text-gray-600 hover:text-blue-600 transition">Home</a>
                <a href="#about" class="text-gray-600 hover:text-blue-600 transition">About</a>
                <a href="#projects"  class="text-gray-600 hover:text-blue-600 transition">Projects</a>
                <a href="#contact"  class="text-gray-600 hover:text-blue-600 transition">Contact</a>
            </div>

            <!-- Mobile Menu Button -->
            <button 
            class="md:hidden p-2 rounded-lg hover:bg-gray-100"
            @click="open = !open"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                 <path stroke-linecap="round" stroke-linejoin="round"
                       stroke-width="2"
                       d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        </div>
        <div 
                class="md:hidden bg-white shadow-inner"
                x-show="open"
                x-transition
                @click.outside="open = false"
            >
            <div class="flex flex-col px-4 py-4 space-y-3">
                <a @click="open = false" href="#home" class="hover:text-blue-600">Home</a>
                <a @click="open = false" href="#about" class="hover:text-blue-600">About</a>
                <a @click="open = false" href="#projects" class="hover:text-blue-600">Projects</a>
                <a @click="open = false" href="#contact" class="hover:text-blue-600">Contact</a>
            </div>
        </div>
    </div>
</nav>
