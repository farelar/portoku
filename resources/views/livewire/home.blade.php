<div>
    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center bg-gradient-to-br from-blue-50 to-indigo-100">
        <div class="max-w-7xl mx-auto px-4 py-16 text-center">
            <img src="/images/profile.jpg" alt="Profile" class="w-32 h-32 rounded-full mx-auto mb-6 border-4 border-white shadow-lg">
            <h1 class="text-5xl font-bold text-gray-800 mb-4">
                Halo, Saya <span class="text-blue-600"> Farel Ar-Rizieq</span>
            </h1>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                Junior programmer dengan passion di web development. 
                Selamat datang di portfolio saya!
            </p>
            <div class="space-x-4">
                <button class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition shadow-lg">
                    Lihat Projects
                </button>
                <button class="border border-blue-600 text-blue-600 px-8 py-3 rounded-lg hover:bg-blue-600 hover:text-white transition">
                    Download CV
                </button>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Tentang Saya</h2>
            
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Cerita Singkat</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        [Isi dengan cerita tentang background, passion, dan experience kamu]
                    </p>
                    
                    <h3 class="text-2xl font-semibold mb-4">Skills</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full">Laravel</span>
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full">Livewire</span>
                        <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full">JavaScript</span>
                        <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full">Tailwind CSS</span>
                    </div>
                </div>
                
                <div class="bg-gray-100 p-8 rounded-xl">
                    <h3 class="text-2xl font-semibold mb-6">Experience</h3>
                    <!-- Timeline experience -->
                    <div class="space-y-4">
                        <div class="border-l-4 border-blue-500 pl-4">
                            <h4 class="font-semibold">Job Title</h4>
                            <p class="text-gray-600">Company Name • 2022 - Present</p>
                        </div>
                        <!-- Tambah experience lain -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Projects Saya</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project Card -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
                    <img src="/images/project1.jpg" alt="Project" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Nama Project</h3>
                        <p class="text-gray-600 mb-4">Deskripsi singkat tentang project ini.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-blue-600 font-medium">Lihat Detail</span>
                            <span class="text-gray-400">2023</span>
                        </div>
                    </div>
                </div>
                
                <!-- Tambah project cards lainnya -->
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Mari Terhubung!</h2>
            <p class="text-gray-600 mb-8">Saya terbuka untuk peluang dan kolaborasi baru.</p>
            
            <div class="flex justify-center space-x-6 mb-8">
                <a href="#" class="text-gray-600 hover:text-blue-600 transition">
                    <i class="fab fa-github text-2xl"></i> GitHub
                </a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition">
                    <i class="fab fa-linkedin text-2xl"></i> LinkedIn
                </a>
                <a href="#" class="text-gray-600 hover:text-blue-600 transition">
                    <i class="fab fa-instagram text-2xl"></i> Instagram
                </a>
            </div>
            
            <livewire:contact-form />
        </div>
    </section>
</div>