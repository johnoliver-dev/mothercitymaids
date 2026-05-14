<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mother City Maids | Professional Cleaning Cape Town</title>
    <link rel="icon" href="/favicon.png" type="image/png" />
    <meta name="description" content="Mother City Maids offers professional home and commercial cleaning services in Cape Town, including regular, deep, move-in/out, and Airbnb cleans." />
    <meta name="keywords" content="Cape Town cleaning service, professional cleaning Cape Town, maid service Cape Town, deep clean, move out cleaning, Airbnb cleaning, home cleaning" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="Mother City Maids" />
    <meta name="theme-color" content="#D6336C" />
    <link rel="canonical" href="https://www.mothercitymaids.co.za/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Mother City Maids | Professional Cleaning Cape Town" />
    <meta property="og:description" content="Professional cleaning services across Cape Town for homes, offices, Airbnbs, and move in/out cleans. Book a vetted, reliable cleaner fast." />
    <meta property="og:url" content="https://www.mothercitymaids.co.za/" />
    <meta property="og:image" content="https://www.mothercitymaids.co.za/images/image_8a0254.jpg" />
    <meta property="og:image:alt" content="Mother City Maids professional cleaning service" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Mother City Maids | Professional Cleaning Cape Town" />
    <meta name="twitter:description" content="Professional cleaning services across Cape Town for homes, offices, Airbnbs, and move in/out cleans. Book a vetted, reliable cleaner fast." />
    <meta name="twitter:image" content="https://www.mothercitymaids.co.za/images/image_8a0254.jpg" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; scroll-behavior: smooth; }
        [x-cloak] { display: none !important; }
        .text-mc-magenta { color: #D6336C; }
        .bg-mc-magenta { background-color: #D6336C; }
        .bg-mc-pink-light { background-color: #FDF7F9; }
        .border-mc-pink { border-color: #F2A2B9; }
        
        .logo-bounce:hover { transform: scale(1.05) translateY(-2px); }
        .transition-soft { transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); }
    </style>
</head>
<body class="bg-white text-gray-800" x-data="{ 
    activeTab: 'home', 
    isMenuOpen: false,
    bookingStep: 1,
    openFaqId: null,
    contactStatus: '',
    bookingStatus: ''
}">

    <!-- Navigation Bar -->
    <nav class="fixed w-full z-50 bg-white/90 backdrop-blur-md border-b border-gray-100 h-20">
        <div class="max-w-7xl mx-auto px-4 h-full flex items-center justify-between">
            <!-- Brand Logo -->
            <div class="flex items-center gap-3 cursor-pointer logo-bounce transition-soft" @click="activeTab = 'home'">
                <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-mc-pink shadow-sm">
                    <img src="images/image_8a0254.jpg" alt="MCM Logo" class="w-full h-full object-cover">
                </div>
                <div class="hidden sm:block">
                    <h1 class="text-lg font-black leading-none text-gray-900 uppercase">Mother City</h1>
                    <p class="text-mc-magenta font-bold text-sm tracking-[0.2em] uppercase">Maids</p>
                </div>
            </div>

            <!-- Desktop Links -->
            <div class="hidden md:flex items-center gap-8">
                <template x-for="link in ['home', 'about', 'services', 'booking', 'gallery', 'faq', 'contact']">
                    <button @click="activeTab = link" 
                        class="text-sm font-bold uppercase tracking-wider transition-colors"
                        :class="activeTab === link ? 'text-mc-magenta border-b-2 border-mc-magenta' : 'text-gray-500 hover:text-mc-magenta'"
                        x-text="link">
                    </button>
                </template>
                <button @click="activeTab = 'booking'" class="bg-mc-magenta text-white px-7 py-2.5 rounded-full font-bold shadow-md hover:bg-black transition-all transform hover:-translate-y-0.5">
                    Book Now
                </button>
            </div>

            <!-- Mobile Toggle -->
            <button @click="isMenuOpen = !isMenuOpen" class="md:hidden p-2 text-gray-600">
                <svg x-show="!isMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                <svg x-show="isMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div x-show="isMenuOpen" x-cloak class="md:hidden bg-white border-b shadow-xl p-6 flex flex-col gap-4">
            <template x-for="link in ['home', 'about', 'services', 'booking', 'gallery', 'faq', 'contact']">
                <button @click="activeTab = link; isMenuOpen = false" class="text-left font-bold text-gray-700 uppercase tracking-widest text-sm py-2" x-text="link"></button>
            </template>
        </div>
    </nav>

    <main class="pt-20">
        <!-- Hero Section -->
        <section x-show="activeTab === 'home'" class="relative min-h-[90vh] flex items-center overflow-hidden bg-mc-pink-light">
            <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-12 items-center py-12 md:py-0">
                <div class="text-center md:text-left z-10">
                    <span class="inline-block bg-white text-mc-magenta px-4 py-1.5 rounded-full text-xs font-black uppercase tracking-[0.2em] mb-6 shadow-sm">Cape Town's Premium Cleaning</span>
                    <h2 class="text-5xl md:text-7xl font-black text-gray-900 leading-[1.1] mb-6">
                        Fresh Homes, <br> <span class="text-mc-magenta">Big Smiles.</span>
                    </h2>
                    <p class="text-lg text-gray-600 mb-10 max-w-md mx-auto md:mx-0 font-medium">
                        Experience the gold standard in Cape Town home care. Professional, vetted, and always with a heart.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                        <button @click="activeTab = 'booking'" class="bg-mc-magenta text-white px-10 py-4 rounded-full text-lg font-black shadow-xl hover:bg-black hover:scale-105 transition-all">
                            Book A Maid
                        </button>
                        <button @click="activeTab = 'about'" class="bg-white text-gray-800 border-2 border-gray-100 px-10 py-4 rounded-full text-lg font-black hover:bg-gray-50 transition-all">
                            Our Story
                        </button>
                    </div>
                </div>

                <!-- Main Logo Visual -->
                <div class="relative flex justify-center">
                    <div class="absolute inset-0 bg-mc-magenta/5 rounded-full blur-[100px]"></div>
                    <div class="relative z-10 group">
                        <img src="images/image_8a0254.jpg" alt="MCM Hero" class="w-full max-w-[500px] rounded-full border-[15px] border-white shadow-2xl transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute -bottom-5 -right-5 bg-white p-6 rounded-3xl shadow-2xl hidden lg:block border border-gray-50">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-green-500 rounded-2xl flex items-center justify-center text-white">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2H7a1 1 0 100-2h.01zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                                </div>
                                <div>
                                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Verified Cleaners</p>
                                    <p class="text-sm font-bold text-gray-900 leading-none">100% Secure Team</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
      <section id="about" x-show="activeTab === 'about' || activeTab === 'home'" class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid md:grid-cols-2 gap-16">
                    <div class="relative">
                        <img src="images/image_8a0254.jpg" alt="MCM Team" class="rounded-[3rem] shadow-2xl border-4 border-white w-full">
                        <!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
                        <div class="absolute -bottom-8 -left-8 bg-mc-magenta text-white p-8 rounded-3xl shadow-xl hidden md:block">
                            <p class="text-4xl font-black mb-1">5★</p>
                            <p class="text-[10px] font-black uppercase tracking-widest opacity-80">Rating in CT</p>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xs font-black text-mc-magenta uppercase tracking-[0.3em] mb-4">Who We Are</h3>
                        <h2 class="text-4xl font-black text-gray-900 mb-8 uppercase">Hello to all my old, new and possible clients and staff.</h2>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed font-medium">
                            At Mother City Maids, cleaning is more than just a service — it’s a story of resilience, passion, and heart.
                        </p>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed font-medium">
                            Founded by Shana, the proud “mother” behind Mother City Maids, our company was built on over 15 years of hands-on experience in the cleaning industry. Shana’s journey began humbly as a cleaner, where she learned the true meaning of hard work, dedication, and attention to detail. Through determination and excellence, she worked her way up from Cleaner to Driver, then Branch Manager, eventually becoming Director and proudly purchasing the company she had devoted so many years to building.
                        </p>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed font-medium">
                            Over the years, Shana dedicated her life to transforming thousands of homes, offices, Airbnbs, and commercial spaces into places people could truly feel proud of. Her commitment to quality service and genuine care for both clients and staff became the foundation of her success.
                        </p>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed font-medium">
                            But life tested her strength.
                        </p>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed font-medium">
                            After triles and tribulations, many would have given up. Shana chose differently. With courage in her heart, faith in her future, and the support of her village behind her, she rose again and gave birth to Mother City Maids — a company built not only on experience, but on integrity, perseverance, and purpose.
                        </p>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed font-medium">
                            If anyone knows how to grow a seed into a tree, it’s Shana.
                        </p>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed font-medium">
                            Today, Mother City Maids stands proudly as a reflection of her journey: resilient, strong, and deeply committed to excellence. We continue to provide professional, reliable, and affordable cleaning services with carefully selected staff who share the same passion for quality and care.
                        </p>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed font-medium">
                            Whether we’re cleaning a family home, preparing an Airbnb for guests, maintaining office spaces, or offering specialised cleaning solutions, we believe every client deserves exceptional service delivered with warmth and professionalism.
                        </p>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed font-medium">
                            Because at Mother City Maids, we don’t just clean spaces — we care for people
                        </p>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed font-medium">
                            <a href="tel:+27763763986" class="text-mc-magenta hover:underline">076 376 3986</a><br>
                            <a href="tel:+27730574102" class="text-mc-magenta hover:underline">073 057 4102</a><br>
                            <a href="mailto:shana@mothercitymaids.co.za" class="text-mc-magenta hover:underline">shana@mothercitymaids.co.za</a><br>
                            <a href="https://www.mothercitymaids.co.za" target="_blank" rel="noopener noreferrer" class="text-mc-magenta hover:underline">www.mothercitymaids.co.za</a><br>

                        </p>


                        <div class="grid grid-cols-2 gap-6">
                            <div class="p-6 bg-gray-50 rounded-2xl">
                                <p class="text-2xl font-black text-gray-900">800+</p>
                                <p class="text-xs font-bold text-gray-400 uppercase">Homes Loved</p>
                            </div>
                            <div class="p-6 bg-gray-50 rounded-2xl">
                                <p class="text-2xl font-black text-gray-900">12k+</p>
                                <p class="text-xs font-bold text-gray-400 uppercase">Hours Scrubbed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" x-show="activeTab === 'services' || activeTab === 'home'" class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4">
                <div class="grid md:grid-cols-2 gap-16">
                    <div class="relative">
                        <img src="images/image_8a0254.jpg" alt="MCM Team" class="rounded-[3rem] shadow-2xl border-4 border-white w-full">
                        <!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
                        <div class="absolute -bottom-8 -left-8 bg-mc-magenta text-white p-8 rounded-3xl shadow-xl hidden md:block">
                            <p class="text-4xl font-black mb-1">5★</p>
                            <p class="text-[10px] font-black uppercase tracking-widest opacity-80">Rating in CT</p>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-4xl font-black text-gray-900 mb-8 uppercase">Our Services</h2>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed font-medium">
                            At Mother City Maids, we offer professional, reliable, and personalised solutions tailored to your home, office, property, or business needs. No job is too big or too small — if you need it, we do it!
                        </p>
                        <h3 class="text-xs font-black text-mc-magenta uppercase tracking-[0.3em] mb-4">✨ Ad-Hoc Char Service</h3>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed font-medium">
                            Need a once-off clean or occasional helping hand? Our ad-hoc cleaning services are flexible, convenient, and perfect for busy lifestyles.
                        </p>
                        <h3 class="text-xs font-black text-mc-magenta uppercase tracking-[0.3em] mb-4">🏡 Contract Services</h3>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed font-medium">
                            Enjoy peace of mind with scheduled cleaning services tailored to your specific requirements, whether for residential, commercial, or hospitality spaces.
                        </p>

                        <h3 class="text-xs font-black text-mc-magenta uppercase tracking-[0.3em] mb-4">👩‍🍳 Permanent Placements</h3>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed font-medium">
                            We carefully source and place trustworthy, experienced domestic workers and cleaning staff to suit your household or business needs.
                        </p>
                         <h3 class="text-xs font-black text-mc-magenta uppercase tracking-[0.3em] mb-4">🧼 Pre &amp; Post-Occupation Cleaning </h3>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed font-medium">
                            Moving in or out? We provide deep, detailed cleaning services to leave properties spotless and ready for their next chapter.
                        </p>
                         <h3 class="text-xs font-black text-mc-magenta uppercase tracking-[0.3em] mb-4">🛋 Upholstery &amp; Carpet Cleaning </h3>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed font-medium">
                            Refresh and restore your furniture and carpets with our professional cleaning services that remove dirt, stains, and odours.

                        </p>
                         <h3 class="text-xs font-black text-mc-magenta uppercase tracking-[0.3em] mb-4">🔧 Maintenance - Home & Office </h3>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed font-medium">
                            From small repairs to general maintenance, we help keep your home or workspace running smoothly and looking its best.
                        </p>
                         <h3 class="text-xs font-black text-mc-magenta uppercase tracking-[0.3em] mb-4">Airbnb Cleaning &amp; Management </h3>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed font-medium">
                            We help Airbnb hosts maintain exceptional standards with reliable cleaning, guest-ready preparation, and management support.
                        </p>
                         <h3 class="text-xs font-black text-mc-magenta uppercase tracking-[0.3em] mb-4">🌿 Garden Services </h3>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed font-medium">
                            Keep your outdoor spaces neat, tidy, and beautiful with our garden maintenance and care services.
                        </p>
                         <h3 class="text-xs font-black text-mc-magenta uppercase tracking-[0.3em] mb-4">&quot;You need it, we do it.&quot; </h3>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed font-medium">
                            t Mother City Maids, we pride ourselves on delivering quality service with care, professionalism, and attention to detail — every single time. 💗
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Booking Section -->
        <section id="booking" x-show="activeTab === 'booking'" class="py-24 bg-mc-pink-light min-h-screen">
            <div class="max-w-4xl mx-auto px-4">
                <div class="text-center mb-12">
                    <div class="w-20 h-20 bg-white rounded-full mx-auto mb-6 p-1 shadow-lg overflow-hidden border-2 border-mc-magenta">
                        <img src="images/image_8a0254.jpg" class="w-full h-full object-cover rounded-full">
                    </div>
                    <h2 class="text-4xl font-black text-gray-900 uppercase">Instant Booking</h2>
                    <p class="text-gray-500 font-bold uppercase tracking-widest text-sm mt-2">Secure Your Slot in 60 Seconds</p>
                </div>

                <div class="bg-white rounded-[2.5rem] shadow-2xl overflow-hidden">
                    <!-- Steps Header -->
                    <div class="flex border-b text-center">
                        <div class="flex-1 py-5 text-xs font-black uppercase tracking-widest transition-all" :class="bookingStep >= 1 ? 'bg-mc-magenta text-white' : 'bg-gray-50 text-gray-400'">Details</div>
                        <div class="flex-1 py-5 text-xs font-black uppercase tracking-widest transition-all" :class="bookingStep >= 2 ? 'bg-mc-magenta text-white' : 'bg-gray-50 text-gray-400'">Schedule</div>
                        <div class="flex-1 py-5 text-xs font-black uppercase tracking-widest transition-all" :class="bookingStep >= 3 ? 'bg-mc-magenta text-white' : 'bg-gray-50 text-gray-400'">Finish</div>
                    </div>

                    <div class="p-8 md:p-12">
                        <!-- Step 1 Content -->
                        <form id="bookingForm" class="space-y-8">
                            <div x-show="bookingStep === 1" class="space-y-8">
                                <div class="grid md:grid-cols-2 gap-8">
                                    <div class="space-y-3">
                                        <label class="text-xs font-black text-gray-400 uppercase tracking-widest">Customer Name</label>
                                        <input type="text" name="customer_name" required class="w-full p-4 bg-gray-50 border-2 border-gray-100 rounded-2xl font-bold focus:border-mc-magenta outline-none" placeholder="First and last name">
                                    </div>
                                    <div class="space-y-3">
                                        <label class="text-xs font-black text-gray-400 uppercase tracking-widest">Email Address</label>
                                        <input type="email" name="email" required class="w-full p-4 bg-gray-50 border-2 border-gray-100 rounded-2xl font-bold focus:border-mc-magenta outline-none" placeholder="you@example.com">
                                    </div>
                                </div>
                                <div class="grid md:grid-cols-2 gap-8">
                                    <div class="space-y-3">
                                        <label class="text-xs font-black text-gray-400 uppercase tracking-widest">Residential Address</label>
                                        <input type="text" name="address" required class="w-full p-4 bg-gray-50 border-2 border-gray-100 rounded-2xl font-bold focus:border-mc-magenta outline-none" placeholder="Street address">
                                    </div>
                                    <div class="space-y-3">
                                        <label class="text-xs font-black text-gray-400 uppercase tracking-widest">Town</label>
                                        <input type="text" name="town" required class="w-full p-4 bg-gray-50 border-2 border-gray-100 rounded-2xl font-bold focus:border-mc-magenta outline-none" placeholder="City or suburb">
                                    </div>
                                </div>
                                <div class="space-y-3">
                                    <label class="text-xs font-black text-gray-400 uppercase tracking-widest">Property Size</label>
                                    <select name="property_size" required class="w-full p-4 bg-gray-50 border-2 border-gray-100 rounded-2xl font-bold focus:border-mc-magenta outline-none appearance-none">
                                        <option>Studio / 1 Bedroom</option>
                                        <option>2 Bedroom House</option>
                                        <option>3 Bedroom House</option>
                                        <option>4+ Bedroom Mansion</option>
                                    </select>
                                </div>
                                <div class="space-y-3">
                                    <label class="text-xs font-black text-gray-400 uppercase tracking-widest">Clean Type</label>
                                    <select name="clean_type" required class="w-full p-4 bg-gray-50 border-2 border-gray-100 rounded-2xl font-bold focus:border-mc-magenta outline-none appearance-none">
                                        <option>Standard Clean</option>
                                        <option>Deep Clean</option>
                                        <option>Move In / Out</option>
                                    </select>
                                </div>
                                <button @click="bookingStep = 2" class="w-full bg-mc-magenta text-white py-5 rounded-2xl font-black text-lg shadow-xl hover:bg-black transition-all uppercase tracking-widest">Next Step</button>
                            </div>

                            <!-- Step 2/3 Placeholders -->
                            <div x-show="bookingStep === 2" class="space-y-8 text-center py-10">
                                <p class="text-xl font-bold">Select Your Preferred Date</p>
                                <input type="date" name="preferred_date" required class="w-full max-w-sm p-4 bg-gray-50 border-2 border-gray-100 rounded-2xl font-bold text-center">
                                <div class="flex gap-4">
                                    <button @click="bookingStep = 1" class="flex-1 border-2 border-gray-100 py-4 rounded-2xl font-bold">Back</button>
                                    <button @click="bookingStep = 3; submitBookingForm()" class="flex-1 bg-mc-magenta text-white py-4 rounded-2xl font-bold">Confirm</button>
                                </div>
                            </div>

                            <div x-show="bookingStep === 3" class="text-center py-10">
                                <div class="w-20 h-20 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <h3 class="text-2xl font-black mb-4">Request Sent!</h3>
                                <p class="text-gray-500 font-bold mb-8">We'll call you shortly to confirm the details.</p>
                                <p id="bookingStatus" class="text-sm font-bold text-gray-600 mb-4"></p>
                                <button @click="activeTab = 'home'; bookingStep = 1; bookingStatus = ''" class="bg-black text-white px-8 py-3 rounded-xl font-bold">Return Home</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section id="gallery" x-show="activeTab === 'gallery'" class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-black text-gray-900 uppercase">Work Gallery</h2>
                    <div class="h-1.5 w-20 bg-mc-magenta mx-auto rounded-full mt-4"></div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <template x-for="src in ['images/gallery/01.png','images/gallery/02.png','images/gallery/03.png','images/gallery/04.png','images/gallery/05.png','images/gallery/06.png','images/gallery/07.png','images/gallery/08.png']">
                        <div class="aspect-square bg-gray-100 rounded-3xl overflow-hidden border-4 border-mc-pink-light group relative">
                            <img :src="src" class="w-full h-full object-cover grayscale opacity-20 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500">
                            <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-50 group-hover:opacity-0 transition-opacity">
                                <span class="font-black text-mc-magenta text-xs tracking-widest uppercase">MCM Clean</span>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section id="faq" x-show="activeTab === 'faq'" class="py-24 bg-white">
            <div class="max-w-4xl mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-black text-gray-900 uppercase">Frequently Asked Questions</h2>
                    <p class="text-gray-500 font-bold uppercase tracking-widest text-sm mt-4">Everything you need to know about our services</p>
                </div>

                <div class="space-y-4">
                    <!-- FAQ Item 1 -->
                    <div class="border-2 border-gray-100 rounded-2xl overflow-hidden transition-all">
                        <button @click="openFaqId = openFaqId === 1 ? null : 1" class="w-full p-6 md:p-8 flex items-center justify-between hover:bg-gray-50 transition-colors">
                            <h3 class="text-lg font-black text-gray-900 text-left uppercase">Will she know what to do?</h3>
                            <svg :class="{'rotate-180': openFaqId === 1}" class="w-6 h-6 text-mc-magenta transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                        </button>
                        <div x-show="openFaqId === 1" class="px-6 md:px-8 pb-6 md:pb-8 bg-gray-50 border-t-2 border-gray-100">
                            <p class="text-gray-600 font-medium leading-relaxed">It is better to leave a list of instructions, rather than to assume that they will do something (i.e cleaning the fridge – that will only be done if specifically requested).</p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="border-2 border-gray-100 rounded-2xl overflow-hidden transition-all">
                        <button @click="openFaqId = openFaqId === 2 ? null : 2" class="w-full p-6 md:p-8 flex items-center justify-between hover:bg-gray-50 transition-colors">
                            <h3 class="text-lg font-black text-gray-900 text-left uppercase">What if I am not happy with her work?</h3>
                            <svg :class="{'rotate-180': openFaqId === 2}" class="w-6 h-6 text-mc-magenta transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                        </button>
                        <div x-show="openFaqId === 2" class="px-6 md:px-8 pb-6 md:pb-8 bg-gray-50 border-t-2 border-gray-100">
                            <p class="text-gray-600 font-medium leading-relaxed">We request that you please inspect her work before letting her go for the day. Clients standards and expectations can vary hugely so it’s best if you’re not happy, to tell the lady whilst she is there so that she can fix the problem immediately. Our Manager and Supervisor are available at all times, so please contact the office if you require assistance.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="border-2 border-gray-100 rounded-2xl overflow-hidden transition-all">
                        <button @click="openFaqId = openFaqId === 3 ? null : 3" class="w-full p-6 md:p-8 flex items-center justify-between hover:bg-gray-50 transition-colors">
                            <h3 class="text-lg font-black text-gray-900 text-left uppercase">What are the chars working hours?</h3>
                            <svg :class="{'rotate-180': openFaqId === 3}" class="w-6 h-6 text-mc-magenta transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                        </button>
                        <div x-show="openFaqId === 3" class="px-6 md:px-8 pb-6 md:pb-8 bg-gray-50 border-t-2 border-gray-100">
                            <p class="text-gray-600 font-medium leading-relaxed">Our staff work for a maximum of 6 hours including their 30 minute break.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="border-2 border-gray-100 rounded-2xl overflow-hidden transition-all">
                        <button @click="openFaqId = openFaqId === 4 ? null : 4" class="w-full p-6 md:p-8 flex items-center justify-between hover:bg-gray-50 transition-colors">
                            <h3 class="text-lg font-black text-gray-900 text-left uppercase">Must I supply lunch?</h3>
                            <svg :class="{'rotate-180': openFaqId === 4}" class="w-6 h-6 text-mc-magenta transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                        </button>
                        <div x-show="openFaqId === 4" class="px-6 md:px-8 pb-6 md:pb-8 bg-gray-50 border-t-2 border-gray-100">
                            <p class="text-gray-600 font-medium leading-relaxed">Our char’s do take their own packed lunch with to work, however you are always more than welcome to provide them with something small should you be able to. We also ask that you offer access to a cup of coffee, tea or water to drink during her lunch break.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="border-2 border-gray-100 rounded-2xl overflow-hidden transition-all">
                        <button @click="openFaqId = openFaqId === 5 ? null : 5" class="w-full p-6 md:p-8 flex items-center justify-between hover:bg-gray-50 transition-colors">
                            <h3 class="text-lg font-black text-gray-900 text-left uppercase">How does she get home?</h3>
                            <svg :class="{'rotate-180': openFaqId === 5}" class="w-6 h-6 text-mc-magenta transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                        </button>
                        <div x-show="openFaqId === 5" class="px-6 md:px-8 pb-6 md:pb-8 bg-gray-50 border-t-2 border-gray-100">
                            <p class="text-gray-600 font-medium leading-relaxed">We make sure our chars have transport money and know the route to the taxis and busses. You are not required to give her transport money.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 6 -->
                    <div class="border-2 border-gray-100 rounded-2xl overflow-hidden transition-all">
                        <button @click="openFaqId = openFaqId === 6 ? null : 6" class="w-full p-6 md:p-8 flex items-center justify-between hover:bg-gray-50 transition-colors">
                            <h3 class="text-lg font-black text-gray-900 text-left uppercase">If I book your service regularly, will you send the same char every time?</h3>
                            <svg :class="{'rotate-180': openFaqId === 6}" class="w-6 h-6 text-mc-magenta transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                        </button>
                        <div x-show="openFaqId === 6" class="px-6 md:px-8 pb-6 md:pb-8 bg-gray-50 border-t-2 border-gray-100">
                            <p class="text-gray-600 font-medium leading-relaxed">We try our utmost best to send you the same char where possible. However, we cannot guarantee that the char you request is always available. We definitely guarantee that no matter what happens, we will bring a char and make sure you have your service on your booked day.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 7 -->
                    <div class="border-2 border-gray-100 rounded-2xl overflow-hidden transition-all">
                        <button @click="openFaqId = openFaqId === 7 ? null : 7" class="w-full p-6 md:p-8 flex items-center justify-between hover:bg-gray-50 transition-colors">
                            <h3 class="text-lg font-black text-gray-900 text-left uppercase">What can your char NOT do?</h3>
                            <svg :class="{'rotate-180': openFaqId === 7}" class="w-6 h-6 text-mc-magenta transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                        </button>
                        <div x-show="openFaqId === 7" class="px-6 md:px-8 pb-6 md:pb-8 bg-gray-50 border-t-2 border-gray-100">
                            <p class="text-gray-600 font-medium leading-relaxed">You can request your char to do anything in the remit of Domestic duties. Your char cannot be asked to wash cars, clean pools, do gardening, wash pets. If this is something you may require, please ask for a House Man. Our chars can do laundry, but please show them how to use your washing machine as she may never have used your type of washing machine before. They cannot get up onto anything higher than a two-step ladder.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 8 -->
                    <div class="border-2 border-gray-100 rounded-2xl overflow-hidden transition-all">
                        <button @click="openFaqId = openFaqId === 8 ? null : 8" class="w-full p-6 md:p-8 flex items-center justify-between hover:bg-gray-50 transition-colors">
                            <h3 class="text-lg font-black text-gray-900 text-left uppercase">Is there anything else I should know?</h3>
                            <svg :class="{'rotate-180': openFaqId === 8}" class="w-6 h-6 text-mc-magenta transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                        </button>
                        <div x-show="openFaqId === 8" class="px-6 md:px-8 pb-6 md:pb-8 bg-gray-50 border-t-2 border-gray-100">
                            <p class="text-gray-600 font-medium leading-relaxed">Our chars are only human, please bare in mind that there is only so much one person can do or clean in 6 hours.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-16 text-center">
                    <p class="text-gray-600 font-bold mb-6">Still have questions?</p>
                    <button @click="activeTab = 'contact'" class="bg-mc-magenta text-white px-8 py-4 rounded-full font-black shadow-lg hover:bg-black transition-all uppercase tracking-widest">
                        Contact Us
                    </button>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" x-show="activeTab === 'contact'" class="py-24 bg-mc-pink-light">
            <div class="max-w-7xl mx-auto px-4">
                <div class="bg-white rounded-[3rem] shadow-2xl overflow-hidden grid md:grid-cols-2">
                    <div class="p-12 md:p-20 bg-mc-magenta text-white flex flex-col justify-between">
                        <div>
                            <h2 class="text-4xl font-black uppercase mb-6 leading-tight">Let's Keep It <br> Spotless.</h2>
                            <p class="text-lg opacity-80 font-bold mb-12">Reach out via email, phone, or fill in the form. We're here for you.</p>
                            
                            <div class="space-y-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    </div>
                                    <span class="font-bold">+27 (0)76 376 3986 </span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    </div>
                                    <span class="font-bold">+27 (0)73 057 4102</span>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    </div>
                                    <span class="font-bold">shana@mothercitymaids.co.za</span>
                                </div>

                                
                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                    </div>
                                    <span class="font-bold">Unit 17 East End, Prime Business Park, Printers Way, Marconi Beam, 7441</span>
                                </div>



                            </div>
                        </div>
                        <div class="mt-12">
                            <img src="images/image_8a0254.jpg" class="w-20 h-20 rounded-full border-2 border-white/30 grayscale contrast-125 brightness-150">
                        </div>
                    </div>
                    
                    <div class="p-12 md:p-20">
                        <form id="contactForm" @submit.prevent="submitContactForm" class="space-y-6">
                            <div class="space-y-2">
                                <label class="text-xs font-black text-gray-400 uppercase tracking-widest">Full Name</label>
                                <input type="text" name="name" required class="w-full p-4 bg-gray-50 rounded-2xl outline-none focus:ring-2 focus:ring-mc-magenta font-bold" placeholder="Your name">
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-black text-gray-400 uppercase tracking-widest">Email</label>
                                <input type="email" name="email" required class="w-full p-4 bg-gray-50 rounded-2xl outline-none focus:ring-2 focus:ring-mc-magenta font-bold" placeholder="you@example.com">
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-black text-gray-400 uppercase tracking-widest">Message</label>
                                <textarea name="message" rows="4" required class="w-full p-4 bg-gray-50 rounded-2xl outline-none focus:ring-2 focus:ring-mc-magenta font-bold" placeholder="How can we help?"></textarea>
                            </div>
                            <p id="contactStatus" class="text-sm font-bold text-gray-600"></p>
                            <button type="submit" class="w-full bg-black text-white py-4 rounded-2xl font-black uppercase tracking-widest hover:bg-mc-magenta transition-all">Send Inquiry</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Privacy Policy Section -->
    <section id="privacy" x-show="activeTab === 'privacy'" class="py-24 bg-white min-h-screen">
        <div class="max-w-4xl mx-auto px-4">
            <div class="mb-12">
                <h1 class="text-4xl font-black text-gray-900 uppercase mb-4">Privacy Policy</h1>
                <p class="text-gray-500 font-bold uppercase tracking-widest text-sm">Last Updated: May 2026</p>
            </div>

            <div class="prose prose-lg max-w-none space-y-8">
                <div>
                    <h2 class="text-2xl font-black text-gray-900 uppercase mb-4">1. Introduction</h2>
                    <p class="text-gray-600 leading-relaxed font-medium">Mother City Maids ("we," "us," "our," or "Company") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website and use our services.</p>
                </div>

                <div>
                    <h2 class="text-2xl font-black text-gray-900 uppercase mb-4">2. Information We Collect</h2>
                    <p class="text-gray-600 leading-relaxed font-medium mb-4">We collect information you provide directly to us, such as:</p>
                    <ul class="list-disc pl-6 text-gray-600 font-medium space-y-2">
                        <li>Name, email address, and phone number</li>
                        <li>Residential address and booking preferences</li>
                        <li>Payment and billing information</li>
                        <li>Any communications or feedback you send us</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl font-black text-gray-900 uppercase mb-4">3. How We Use Your Information</h2>
                    <p class="text-gray-600 leading-relaxed font-medium mb-4">We use the information we collect to:</p>
                    <ul class="list-disc pl-6 text-gray-600 font-medium space-y-2">
                        <li>Process and fulfill your booking requests</li>
                        <li>Communicate with you about your service</li>
                        <li>Send you updates and promotional content (with your consent)</li>
                        <li>Improve our services and website</li>
                        <li>Comply with legal obligations</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl font-black text-gray-900 uppercase mb-4">4. Data Security</h2>
                    <p class="text-gray-600 leading-relaxed font-medium">We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
                </div>

                <div>
                    <h2 class="text-2xl font-black text-gray-900 uppercase mb-4">5. Your Rights</h2>
                    <p class="text-gray-600 leading-relaxed font-medium">You have the right to access, correct, or delete your personal information. To exercise these rights, please contact us at shana@mothercitymaids.co.za</p>
                </div>

                <div>
                    <h2 class="text-2xl font-black text-gray-900 uppercase mb-4">6. Contact Us</h2>
                    <p class="text-gray-600 leading-relaxed font-medium">If you have any questions about this Privacy Policy, please contact us at shana@mothercitymaids.co.za or +27 (0)76 376 3986</p>
                </div>
            </div>

            <div class="mt-12">
                <button @click="activeTab = 'home'" class="bg-mc-magenta text-white px-8 py-3 rounded-xl font-bold hover:bg-black transition-all uppercase tracking-widest">
                    Return Home
                </button>
            </div>
        </div>
    </section>

    <!-- Terms of Service Section -->
    <section id="terms" x-show="activeTab === 'terms'" class="py-24 bg-white min-h-screen">
        <div class="max-w-4xl mx-auto px-4">
            <div class="mb-12">
                <h1 class="text-4xl font-black text-gray-900 uppercase mb-4">Terms of Service</h1>
                <p class="text-gray-500 font-bold uppercase tracking-widest text-sm">Last Updated: May 2026</p>
            </div>

            <div class="prose prose-lg max-w-none space-y-8">
                <div>
                    <h2 class="text-2xl font-black text-gray-900 uppercase mb-4">DISCLAIMER</h2>
                    <p class="text-gray-600 leading-relaxed font-medium">Whereas every effort is made to ensure that the person working in your home is honest and competent and does not have a history of negligence or clumsiness, accidents do occur. Mother City Maids does not accept liability for any act or omission or delict which might result in loss of or damage to your property.</p>
                </div>

                <div>
                    <h2 class="text-2xl font-black text-gray-900 uppercase mb-4">Service Inspection</h2>
                    <p class="text-gray-600 leading-relaxed font-medium">Please inspect their work before letting them go for the day. Client’s standards and expectations can vary hugely so it's best if you're not happy, to tell the lady whilst she is there so that she can fix the problem so that you end the day happy.</p>
                </div>

                <div>
                    <h2 class="text-2xl font-black text-gray-900 uppercase mb-4">Cancellation Policy</h2>
                    <p class="text-gray-600 leading-relaxed font-medium">In terms of cancellations, you can cancel a booking as long as you do so at least 24 hours in advance. We reserve the right to charge our full rate for bookings cancelled without adequate notice.</p>
                </div>

                <div>
                    <h2 class="text-2xl font-black text-gray-900 uppercase mb-4">Contact Information</h2>
                    <p class="text-gray-600 leading-relaxed font-medium">For questions regarding these Terms of Service, please contact us at shana@mothercitymaids.co.za or +27 (0)76 376 3986</p>
                </div>
            </div>

            <div class="mt-12">
                <button @click="activeTab = 'home'" class="bg-mc-magenta text-white px-8 py-3 rounded-xl font-bold hover:bg-black transition-all uppercase tracking-widest">
                    Return Home
                </button>
            </div>
        </div>
    </section>

    <!-- Main Footer -->
    <footer class="bg-black text-white pt-24 pb-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-start gap-12 mb-20">
                <div class="max-w-xs">
                    <div class="flex items-center gap-3 mb-8">
                        <img src="images/image_8a0254.jpg" class="w-10 h-10 rounded-full border border-white/20">
                        <span class="text-xl font-black uppercase tracking-widest">Mother City <span class="text-mc-magenta">Maids</span></span>
                    </div>
                    <p class="text-gray-400 font-bold leading-relaxed mb-8">Providing Cape Town with professional cleaning services that care about your home as much as you do.</p>
                    <div class="flex gap-4">
                        <a href="https://www.facebook.com/profile.php?id=61589383179585" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-white/5 rounded-xl flex items-center justify-center hover:bg-mc-magenta transition-colors">
                            <svg class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.675 0H1.325C.593 0 0 .593 0 1.326v21.348C0 23.407.593 24 1.325 24H12.82v-9.294H9.692V11.31h3.128V8.414c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.464.099 2.795.143v3.24h-1.918c-1.504 0-1.796.715-1.796 1.763v2.313h3.592l-.468 3.397h-3.124V24h6.127C23.407 24 24 23.407 24 22.674V1.326C24 .593 23.407 0 22.675 0Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-3 gap-16">
                    <div class="space-y-6">
                        <h4 class="text-xs font-black text-mc-magenta uppercase tracking-widest">Pages</h4>
                        <ul class="space-y-4 font-bold text-gray-400">
                            <li><button @click="activeTab = 'home'" class="hover:text-white transition-colors">Home</button></li>
                            <li><button @click="activeTab = 'about'" class="hover:text-white transition-colors">About</button></li>
                            <li><button @click="activeTab = 'booking'" class="hover:text-white transition-colors">Booking</button></li>
                        </ul>
                    </div>
                    <div class="space-y-6">
                        <h4 class="text-xs font-black text-mc-magenta uppercase tracking-widest">Support</h4>
                        <ul class="space-y-4 font-bold text-gray-400">
                            <li><button @click="activeTab = 'faq'" class="hover:text-white transition-colors">FAQ</button></li>
                            <li><button @click="activeTab = 'privacy'" class="hover:text-white transition-colors">Privacy Policy</button></li>
                            <li><button @click="activeTab = 'terms'" class="hover:text-white transition-colors">Terms</button></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border-t border-white/5 pt-12 flex flex-col md:flex-row justify-between items-center gap-6 font-bold text-xs text-gray-600 uppercase tracking-widest">
                <p>&copy; 2026 Mother City Maids (Pty) Ltd. Cape Town, ZA.</p>
                <div class="flex items-center gap-2">
                    <span>Designed with</span>
                    <svg class="w-4 h-4 text-mc-magenta fill-current" viewBox="0 0 20 20"><path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"></path></svg>
                    <span>in the Mother City</span>
                    
                </div>
            </div>
        </div>
    </footer>

    <!-- Simple WhatsApp Bubble -->
    <div class="fixed bottom-6 right-6 z-[100] group">
        <div class="absolute -top-12 right-0 bg-black text-white px-4 py-2 rounded-xl text-xs font-black uppercase tracking-widest opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap shadow-xl">Chat with a Maid</div>
        <button onclick="window.open('https://wa.me/27763763986', '_blank')" class="bg-[#25D366] text-white p-4 rounded-full shadow-2xl transform transition-transform hover:scale-110 active:scale-95">
            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.284l-.539 2.01 2.13-.549c.902.503 1.956.848 3.159.849h.001c3.181 0 5.767-2.586 5.768-5.766 0-3.181-2.587-5.766-5.77-5.766zm3.393 8.203c-.146.411-.849.757-1.171.802-.322.046-.644.073-1.036-.057-.233-.077-.923-.332-1.742-.871-1.077-.711-1.761-1.849-1.815-1.921-.054-.072-.439-.584-.439-1.129 0-.545.284-.813.386-.921.102-.108.223-.135.297-.135h.213c.074 0 .174-.028.271.205.097.233.332.812.361.87.029.058.049.126.01.204-.039.078-.059.126-.118.195-.059.068-.124.152-.177.204-.059.058-.121.121-.052.24.069.12.307.507.659.819.453.402.833.527.952.587.119.06.189.049.259-.031.07-.08.297-.348.377-.466.08-.118.158-.098.266-.058s.684.322.802.38c.118.058.196.088.225.137.029.049.029.284-.117.695z"></path></svg>
        </button>
    </div>

    <script>
        async function submitContactForm(event) {
            const form = document.getElementById('contactForm');
            const status = document.getElementById('contactStatus');
            const submitButton = form.querySelector('button[type="submit"]');
            const originalLabel = submitButton.textContent;

            status.textContent = '';
            submitButton.disabled = true;
            submitButton.textContent = 'Sending...';

            const formData = new FormData(form);

            try {
                const response = await fetch('contact-submit.php', {
                    method: 'POST',
                    body: formData,
                });

                const data = await response.json();

                if (!response.ok) {
                    throw new Error(data.message || 'Failed to send message');
                }

                status.textContent = data.message || 'Your message has been sent successfully.';
                status.className = 'text-sm font-bold text-green-600';
                form.reset();
            } catch (error) {
                status.textContent = error.message || 'Unable to send your message right now.';
                status.className = 'text-sm font-bold text-red-600';
            } finally {
                submitButton.disabled = false;
                submitButton.textContent = originalLabel;
            }
        }

        async function submitBookingForm() {
            const form = document.getElementById('bookingForm');
            const status = document.getElementById('bookingStatus');
            const confirmButton = form.querySelector('button:last-child');
            const originalLabel = confirmButton.textContent;

            status.textContent = '';
            confirmButton.disabled = true;
            confirmButton.textContent = 'Sending...';

            const formData = new FormData(form);

            try {
                const response = await fetch('booking-submit.php', {
                    method: 'POST',
                    body: formData,
                });

                const data = await response.json();

                if (!response.ok) {
                    throw new Error(data.message || 'Failed to send booking request');
                }

                status.textContent = data.message || 'Your booking request has been sent successfully.';
                status.className = 'text-sm font-bold text-green-600';
            } catch (error) {
                status.textContent = error.message || 'Unable to send your booking request right now.';
                status.className = 'text-sm font-bold text-red-600';
            } finally {
                confirmButton.disabled = false;
                confirmButton.textContent = originalLabel;
            }
        }
    </script>
</body>
</html>