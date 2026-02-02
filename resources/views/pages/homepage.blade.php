<x-layouts::app.header>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

</head>
<body class="antialiased">
{{--    <main>
        <!-- =========== Hero Section =========== -->
        <section class="min-h-[90vh] flex items-center">
            <div class="container mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-4">
                    Experience Design
                    <span class="block text-gradient">Redefined.</span>
                </h1>
                <p class="max-w-3xl mx-auto text-lg md:text-xl mb-12">
                    AuraUI brings a fresh, tactile feel to your digital interfaces. Discover the beauty of neomorphism and create stunning, intuitive user experiences.
                </p>
                <div class="flex justify-center items-center gap-4">
                    <a href="#features" class="px-8 py-4 rounded-full text-lg font-bold neumorphic-flat hover:neumorphic-pressed">Learn More</a>
                </div>
            </div>
        </section>

        <!-- =========== Features Section =========== -->
        <section id="features" class="py-20">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold">Why AuraUI?</h2>
                    <p class="mt-2 text-lg">The next generation of user interface design is here.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">

                    <!-- Feature Card 1 -->
                    <div class="p-8 text-center rounded-2xl neumorphic-flat hover:-translate-y-2">
                        <div class="inline-flex p-5 rounded-full neumorphic-inset">
                            <i data-lucide="layers" class="w-10 h-10 text-gradient"></i>
                        </div>
                        <h3 class="text-2xl font-bold mt-6 mb-2">Soft & Tactile</h3>
                        <p>Our components feel like they're extruded from the screen, providing a unique, physical-like interaction.</p>
                    </div>

                    <!-- Feature Card 2 -->
                    <div class="p-8 text-center rounded-2xl neumorphic-flat hover:-translate-y-2">
                        <div class="inline-flex p-5 rounded-full neumorphic-inset">
                            <i data-lucide="smartphone" class="w-10 h-10 text-gradient"></i>
                        </div>
                        <h3 class="text-2xl font-bold mt-6 mb-2">Fully Responsive</h3>
                        <p>Beautifully crafted to look and work perfectly on any screen size, from mobile phones to large desktops.</p>
                    </div>

                    <!-- Feature Card 3 -->
                    <div class="p-8 text-center rounded-2xl neumorphic-flat hover:-translate-y-2">
                        <div class="inline-flex p-5 rounded-full neumorphic-inset">
                            <i data-lucide="settings-2" class="w-10 h-10 text-gradient"></i>
                        </div>
                        <h3 class="text-2xl font-bold mt-6 mb-2">Easy to Customize</h3>
                        <p>Built with clean HTML and Tailwind CSS, making it incredibly simple to adapt and extend to your needs.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========== Testimonials Section =========== -->
        <section id="testimonials" class="py-20">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold">Loved by Creatives</h2>
                    <p class="mt-2 text-lg">Don't just take our word for it. Here's what others are saying.</p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                    <!-- Testimonial Card 1 -->
                    <div class="p-8 rounded-2xl neumorphic-flat">
                        <p class="italic text-lg">"This is a game-changer. The neomorphic design adds a level of sophistication I haven't seen before. My users love the new feel of my app."</p>
                        <div class="flex items-center mt-6">
                            <img src="https://i.pravatar.cc/150?img=11" alt="Avatar" class="w-14 h-14 rounded-full neumorphic-flat p-1">
                            <div class="ml-4">
                                <p class="font-bold text-lg">Sarah Johnson</p>
                                <p class="text-sm">Lead Designer, TechCorp</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Card 2 -->
                    <div class="p-8 rounded-2xl neumorphic-flat">
                        <p class="italic text-lg">"I was skeptical about neomorphism, but AuraUI made me a believer. It's clean, modern, and surprisingly easy to implement. Highly recommended!"</p>
                        <div class="flex items-center mt-6">
                            <img src="https://i.pravatar.cc/150?img=32" alt="Avatar" class="w-14 h-14 rounded-full neumorphic-flat p-1">
                            <div class="ml-4">
                                <p class="font-bold text-lg">Michael Chen</p>
                                <p class="text-sm">Freelance Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========== CTA Section =========== -->
        <section id="contact" class="py-20">
            <div class="container mx-auto px-6">
                <div class="max-w-3xl mx-auto text-center p-12 rounded-3xl neumorphic-flat">
                    <h2 class="text-4xl font-bold mb-4">Ready to Elevate Your Design?</h2>
                    <p class="text-lg mb-8">Join our newsletter to get the latest updates, design tips, and exclusive access to new components.</p>
                    <form class="flex flex-col md:flex-row gap-4 max-w-xl mx-auto">
                        <input type="email" placeholder="Enter your email" class="w-full px-6 py-4 rounded-full neumorphic-inset focus:outline-none focus:ring-2 focus:ring-[var(--accent-color-start)]">
                        <button type="submit" class="w-full md:w-auto px-8 py-4 rounded-full font-bold text-lg neumorphic-flat hover:neumorphic-pressed whitespace-nowrap">Sign Up</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- =========== Footer =========== -->
    <footer class="py-12">
        <div class="container mx-auto px-6 text-center">
            <div class="flex justify-center space-x-6 mb-6">
                <a href="#" class="p-3 rounded-full neumorphic-flat hover:neumorphic-pressed">
                    <i data-lucide="twitter" class="w-6 h-6"></i>
                </a>
                <a href="#" class="p-3 rounded-full neumorphic-flat hover:neumorphic-pressed">
                    <i data-lucide="github" class="w-6 h-6"></i>
                </a>
                <a href="#" class="p-3 rounded-full neumorphic-flat hover:neumorphic-pressed">
                    <i data-lucide="dribbble" class="w-6 h-6"></i>
                </a>
            </div>
            <p>© 2024 AuraUI. All Rights Reserved. Designed with <i data-lucide="heart" class="inline-block w-4 h-4 text-red-500"></i>.</p>
        </div>
    </footer>


    <!-- JavaScript for Mobile Menu and Icons -->
    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script> --}}

</body>
</html>
</x-layouts::app.header>
