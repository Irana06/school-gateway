@include('partials.head')

<body class="min-h-screen bg-white dark:bg-zinc-800">
    <!-- =========== Header =========== -->
    <header class="sticky top-0 z-50">
        <nav
            class="container mx-auto px-6 py-4 flex justify-between items-center backdrop-blur-sm bg-white/30 rounded-b-xl neumorphic-flat">
            <a href="#" class="text-2xl font-bold text-gradient">{{ config('app.name') }}</a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#features" class="hover:text-gradient font-medium transition-colors">Features</a>
                <a href="#testimonials" class="hover:text-gradient font-medium transition-colors">Testimonials</a>
                <a href="#contact" class="hover:text-gradient font-medium transition-colors">Contact</a>
            </div>

            <a href="#contact"
                class="hidden md:block px-6 py-2 rounded-full font-semibold neumorphic-flat hover:neumorphic-pressed">Get
                Started</a>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden p-2 rounded-full neumorphic-flat hover:neumorphic-pressed">
                <i data-lucide="menu"></i>
            </button>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden container mx-auto px-6 pb-4">
            <div class="mt-4 p-4 neumorphic-flat rounded-xl">
                <a href="#features" class="block py-2 text-center hover:text-gradient font-medium">Features</a>
                <a href="#testimonials" class="block py-2 text-center hover:text-gradient font-medium">Testimonials</a>
                <a href="#contact" class="block py-2 text-center hover:text-gradient font-medium">Contact</a>
                <a href="#contact"
                    class="block mt-4 w-full text-center py-3 rounded-full font-semibold neumorphic-flat hover:neumorphic-pressed">Get
                    Started</a>
            </div>
        </div>
    </header>

    {{ $slot }}

    @fluxScripts
    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
