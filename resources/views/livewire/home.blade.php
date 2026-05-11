<div>

@section('style')
    <style>
        * { font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif; }
        html { scroll-behavior: smooth; }
        .bg-mesh {
            background-image: radial-gradient(circle at 25% 40%, rgba(255, 182, 255, 0.1) 0%, rgba(255, 203, 106, 0.05) 50%, transparent 80%);
        }
        .card-hover {
            transition: all 0.3s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }
        .card-hover:hover {
            transform: translateY(-8px) scale(1.01);
            box-shadow: 0 25px 35px -12px rgba(0, 0, 0, 0.2);
        }
        .floating {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-12px); }
            100% { transform: translateY(0px); }
        }
        .pulse-glow {
            animation: pulseGlow 2s infinite;
        }
        @keyframes pulseGlow {
            0% { box-shadow: 0 0 0 0 rgba(249, 115, 22, 0.5); }
            70% { box-shadow: 0 0 0 12px rgba(249, 115, 22, 0); }
            100% { box-shadow: 0 0 0 0 rgba(249, 115, 22, 0); }
        }
        .bg-blob {
            background: radial-gradient(ellipse at 70% 30%, rgba(249,115,22,0.12), rgba(236,72,153,0.08), transparent 70%);
        }
        .rotate-slow {
            animation: rotateSlow 20s linear infinite;
        }
        @keyframes rotateSlow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
    </style>
@endsection


<!-- ========== NAVBAR FRESH & PLAYFUL ========== -->
<nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-xl shadow-sm border-b border-orange-100/80">
    <div class="max-w-7xl mx-auto px-5 md:px-8 py-4 flex justify-between items-center">
        <div class="flex items-center gap-3">
            <div class="relative">
                <div class="w-11 h-11 bg-gradient-to-br from-orange-500 to-pink-500 rounded-2xl flex items-center justify-center shadow-lg rotate-3">
                    <span class="text-white font-black text-2xl">4B</span>
                </div>
                <div class="absolute -top-1 -right-1 w-3 h-3 bg-green-400 rounded-full border-2 border-white"></div>
            </div>
            <div>
                <span class="text-2xl font-black tracking-tight bg-gradient-to-r from-orange-700 to-pink-600 bg-clip-text text-transparent">FourBigi</span>
                <span class="text-xs font-semibold bg-orange-100 text-orange-700 ml-2 px-2 py-0.5 rounded-full">startup energy</span>
            </div>
        </div>
        <div class="hidden md:flex items-center gap-7 font-semibold">
            <a href="#home" class="text-gray-700 hover:text-orange-500 transition">🏠 Home</a>
            <a href="#about" class="text-gray-700 hover:text-orange-500 transition">📖 Cerita</a>
            <a href="#services" class="text-gray-700 hover:text-orange-500 transition">⚡ Layanan</a>
            <a href="#team" class="text-gray-700 hover:text-orange-500 transition">👥 The Bigi 4</a>
            <a href="#contact" class="text-gray-700 hover:text-orange-500 transition">💌 Kontak</a>
        </div>
        <div class="hidden md:block">
            <a href="#contact" class="bg-orange-500 hover:bg-orange-600 text-white px-5 py-2.5 rounded-full text-sm font-bold shadow-md transition-all flex items-center gap-2"><i class="fas fa-hand-peace"></i> Mulai Proyek</a>
        </div>
        <button id="menuToggle" class="md:hidden text-2xl text-orange-600"><i class="fas fa-burger"></i></button>
    </div>
    <!-- mobile panel -->
    <div id="mobilePanel" class="hidden md:hidden bg-white/95 backdrop-blur-lg px-5 pb-5 flex flex-col gap-3 border-t border-orange-100">
        <a href="#home" class="py-2 font-semibold">🏠 Home</a><a href="#about" class="py-2 font-semibold">📖 Cerita</a><a href="#services" class="py-2 font-semibold">⚡ Layanan</a><a href="#team" class="py-2 font-semibold">👥 Tim</a><a href="#contact" class="py-2 font-semibold">💌 Kontak</a>
        <a href="#contact" class="bg-orange-500 text-white text-center py-2 rounded-full">Mulai Proyek</a>
    </div>
</nav>

<main>
    <!-- ========== HERO SECTION = ceria, playful, ilustrasi dinamis ========== -->
    <section id="home" class="relative overflow-hidden pt-16 pb-24 md:pt-24 md:pb-32 bg-blob">
        <div class="absolute top-20 left-10 w-72 h-72 bg-orange-200 rounded-full opacity-30 blur-3xl floating"></div>
        <div class="absolute bottom-10 right-5 w-64 h-64 bg-pink-200 rounded-full opacity-30 blur-2xl floating"></div>
        <div class="max-w-7xl mx-auto px-5 md:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row gap-12 items-center">
                <div class="flex-1 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 bg-white/70 backdrop-blur-sm rounded-full px-4 py-1.5 text-orange-600 text-sm font-bold shadow-sm mb-5">
                        <span class="relative flex h-2 w-2"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-orange-400 opacity-75"></span><span class="relative inline-flex rounded-full h-2 w-2 bg-orange-500"></span></span>
                        <span>✨ 4 kreator · 1 misi besar</span>
                    </div>
                    <h1 class="text-5xl md:text-7xl font-black tracking-tighter leading-tight">
                        <span class="bg-gradient-to-r from-orange-600 via-amber-600 to-pink-600 bg-clip-text text-transparent">FourBigi</span><br>
                        <span class="text-gray-800">Bikin kode jadi</span>
                        <span class="relative inline-block"><span class="relative z-10 bg-gradient-to-r from-orange-200 to-pink-200 px-3 py-1 rounded-2xl rotate-1">🍿 seru!</span></span>
                    </h1>
                    <p class="text-lg text-gray-600 max-w-xl mx-auto lg:mx-0 mt-6 leading-relaxed">Startup software development yang beranggotakan 4 anak muda kreatif. Kami bikin website, mobile apps, dan sistem digital yang nggak cuma canggih, tapi juga asyik dipakai.</p>
                    <div class="flex flex-wrap gap-4 justify-center lg:justify-start mt-8">
                        <a href="#contact" class="group bg-orange-500 hover:bg-orange-600 text-white font-bold px-7 py-3.5 rounded-full shadow-lg transition flex items-center gap-2"><i class="fas fa-rocket"></i> Gaskeun Proyek <i class="fas fa-arrow-right group-hover:translate-x-1 transition"></i></a>
                        <a href="#team" class="bg-white border-2 border-orange-300 hover:border-orange-500 text-orange-700 font-bold px-7 py-3.5 rounded-full transition shadow-sm">Kenalan sama tim →</a>
                    </div>
                    <div class="flex flex-wrap gap-5 justify-center lg:justify-start mt-10 text-sm text-gray-500">
                        <span class="flex items-center gap-1"><i class="fas fa-code text-orange-400"></i> 30+ project completed</span>
                        <span class="flex items-center gap-1"><i class="fas fa-users text-orange-400"></i> 100% client satisfaction</span>
                        <span class="flex items-center gap-1"><i class="fas fa-coffee text-orange-400"></i> remote-first & kolaboratif</span>
                    </div>
                </div>
                <div class="flex-1 flex justify-center">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-orange-300 to-pink-300 rounded-full blur-2xl opacity-30 rotate-slow"></div>
                        <div class="relative bg-white rounded-3xl shadow-2xl p-4 border-4 border-orange-100/80 rotate-2 backdrop-blur-sm">
                            <div class="bg-orange-50 rounded-2xl p-5 w-72 md:w-80">
                                <div class="flex gap-2 text-2xl mb-3"><i class="fab fa-js text-yellow-500"></i><i class="fab fa-react text-sky-500"></i><i class="fab fa-laravel text-red-500"></i></div>
                                <p class="font-bold text-gray-800 text-lg">"Mau bikin aplikasi ? kita siap!"</p>
                                <div class="flex items-center gap-2 mt-3"><div class="w-8 h-8 rounded-full bg-orange-400 flex items-center justify-center text-white text-sm">4B</div><span class="text-xs text-gray-500">— tim FourBigi</span></div>
                                <div class="mt-4 h-2 w-full bg-orange-100 rounded-full"><div class="w-3/4 h-full bg-orange-500 rounded-full"></div></div>
                                <p class="text-xs text-gray-400 mt-2">progress produktif: 100% semangat</p>
                            </div>
                        </div>
                        <div class="absolute -bottom-5 -left-6 bg-white rounded-2xl shadow-xl p-2 flex items-center gap-2 border border-orange-200"><i class="fas fa-laptop-code text-orange-500 text-xl"></i><span class="font-mono text-xs font-bold">#buildwithFourBigi</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== ABOUT (cerita unik) ========== -->
    <section id="about" class="py-20 md:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1 space-y-5">
                    <div class="inline-block bg-amber-100 rounded-full px-3 py-1 text-amber-700 text-xs font-bold"><i class="fas fa-smile-wink mr-1"></i> gak kayak biasa</div>
                    <h2 class="text-3xl md:text-4xl font-black text-gray-900">Kami tim kecil yang <span class="bg-gradient-to-r from-orange-400 to-pink-400 bg-clip-text text-transparent">gede impact</span></h2>
                    <p class="text-gray-600 leading-relaxed">FourBigi didirikan oleh 4 orang developer dari latar belakang berbeda: backend, frontend, mobile, dan desain. Tapi kami punya satu obsesi: ngebangun software yang fungsional, estetik, dan bikin hidup lebih mudah.</p>
                    <div class="grid grid-cols-2 gap-4 pt-3">
                        <div class="bg-orange-50 p-4 rounded-2xl"><i class="fas fa-trophy text-orange-500 text-2xl"></i><p class="font-bold mt-2">4 tahun <span class="font-normal">perjalanan</span></p></div>
                        <div class="bg-pink-50 p-4 rounded-2xl"><i class="fas fa-globe text-pink-500 text-2xl"></i><p class="font-bold mt-2">15+ client <span class="font-normal">dari 3 negara</span></p></div>
                    </div>
                </div>
                <div class="order-1 md:order-2 relative">
                    <div class="relative bg-orange-100 rounded-3xl p-6 shadow-xl">
                        <div class="absolute -top-4 -right-4 text-6xl">🚀</div>
                        <div class="grid grid-cols-2 gap-4 text-center">
                            <div class="bg-white p-3 rounded-xl shadow"><i class="fab fa-github-alt text-3xl text-gray-800"></i><p class="text-xs font-bold mt-1">Open core</p></div>
                            <div class="bg-white p-3 rounded-xl shadow"><i class="fas fa-heart text-3xl text-red-400"></i><p class="text-xs font-bold mt-1">client first</p></div>
                            <div class="bg-white p-3 rounded-xl shadow col-span-2"><i class="fas fa-hand-peace text-3xl text-orange-500"></i><p class="text-xs font-bold mt-1">no ghosting, full amanah</p></div>
                        </div>
                        <p class="text-center text-gray-700 text-sm mt-4 italic">"bukan cuma ngoding, kita bangun hubungan"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== SERVICES (colourful & grid lucu) ========== -->
    <section id="services" class="py-24 bg-gradient-to-br from-amber-50 to-orange-50">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-orange-500 font-black text-sm uppercase tracking-wider bg-white/60 px-4 py-1.5 rounded-full">👾 our superpowers</span>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mt-3">layanan yang bikin <span class="bg-clip-text text-transparent bg-gradient-to-r from-orange-600 to-pink-600">senyum</span></h2>
                <p class="text-gray-500 mt-3">full-stack development, mobile apps, sampai konsultasi tech — kita kasih sentuhan kreatif.</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-7">
                <div class="bg-white rounded-2xl p-6 shadow-md card-hover border-b-4 border-orange-300"><div class="w-12 h-12 rounded-xl bg-orange-100 text-orange-500 flex items-center justify-center text-2xl"><i class="fas fa-laptop-code"></i></div><h3 class="text-xl font-extrabold mt-3">Web Dev kekinian</h3><p class="text-gray-500 text-sm">React, Vue, Laravel, Tailwind — website cepat & SEO friendly.</p><div class="mt-3 text-orange-400 text-xs"><i class="fas fa-arrow-right"></i> konsultasi gratis</div></div>
                <div class="bg-white rounded-2xl p-6 shadow-md card-hover border-b-4 border-pink-300"><div class="w-12 h-12 rounded-xl bg-pink-100 text-pink-500 flex items-center justify-center text-2xl"><i class="fas fa-mobile-alt"></i></div><h3 class="text-xl font-extrabold mt-3">Mobile Legends</h3><p class="text-gray-500 text-sm">Flutter, React Native, Swift. Aplikasi iOS & Android premium.</p><div class="mt-3 text-pink-400 text-xs">⭐ UI/UX friendly</div></div>
                <div class="bg-white rounded-2xl p-6 shadow-md card-hover border-b-4 border-amber-300"><div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-500 flex items-center justify-center text-2xl"><i class="fas fa-cloud-upload-alt"></i></div><h3 class="text-xl font-extrabold mt-3">Cloud & DevOps</h3><p class="text-gray-500 text-sm">AWS, CI/CD, Docker, biar aplikasimu selalu up & scalable.</p></div>
                <div class="bg-white rounded-2xl p-6 shadow-md card-hover border-b-4 border-emerald-300"><div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-500 flex items-center justify-center text-2xl"><i class="fas fa-robot"></i></div><h3 class="text-xl font-extrabold mt-3">AI & Automation</h3><p class="text-gray-500 text-sm">Integrasi pintar, chatbot, analitik prediktif untuk bisnis.</p></div>
                <div class="bg-white rounded-2xl p-6 shadow-md card-hover border-b-4 border-violet-300"><div class="w-12 h-12 rounded-xl bg-violet-100 text-violet-500 flex items-center justify-center text-2xl"><i class="fas fa-paint-brush"></i></div><h3 class="text-xl font-extrabold mt-3">UI/UX Magical</h3><p class="text-gray-500 text-sm">Desain antarmuka yang memorable, user-centric, dan interaktif.</p></div>
                <div class="bg-white rounded-2xl p-6 shadow-md card-hover border-b-4 border-rose-300"><div class="w-12 h-12 rounded-xl bg-rose-100 text-rose-500 flex items-center justify-center text-2xl"><i class="fas fa-chalkboard-user"></i></div><h3 class="text-xl font-extrabold mt-3">Tech Advisory</h3><p class="text-gray-500 text-sm">Bantu startup pilih teknologi & arsitektur yang tepat.</p></div>
            </div>
        </div>
    </section>

    <!-- ========== TEAM SECTION : 4 kreator dengan gaya lucu ========== -->
    <section id="team" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-14">
                <div class="inline-flex bg-gradient-to-r from-orange-200 to-pink-200 p-1 rounded-full px-4 py-1 text-orange-800 font-bold text-sm"><i class="fas fa-users mr-1"></i> the fantastic four</div>
                <h2 class="text-4xl md:text-5xl font-black mt-4">dibalik layar <span class="text-orange-500">FourBigi</span></h2>
                <p class="text-gray-500 max-w-xl mx-auto">Empat orang dengan segudang passion, siap bantu wujudin ide-ide gila kamu.</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="group text-center p-5 rounded-2xl bg-indigo-50 hover:bg-white transition shadow-sm hover:shadow-xl"><div class="w-28 h-28 mx-auto bg-gradient-to-br from-orange-400 to-red-400 rounded-full flex items-center justify-center text-white text-3xl font-black shadow-lg border-4 border-white overflow-hidden">
                        <img src="{{asset('img/ari.jpg')}}" alt="">
                    </div><h3 class="text-xl font-bold mt-4">Ari</h3><p class="text-indigo-500 text-sm font-semibold">Code Architec</p><p class="text-gray-500 text-xs px-2">"Clean code, clean soul" — sipaling open-source.</p><div class="flex justify-center gap-2 mt-3 text-indigo-400"><i class="fab fa-laravel"></i><i class="fab fa-linux"></i></div></div>

                <div class="group text-center p-5 rounded-2xl bg-pink-50 hover:bg-white transition"><div class="w-28 h-28 mx-auto bg-gradient-to-br from-pink-400 to-rose-400 rounded-full flex items-center justify-center text-white text-3xl font-black shadow-lg overflow-hidden">
                        <img src="{{asset('img/agym.png')}}" alt="">
                    </div><h3 class="text-xl font-bold mt-4">Agym</h3><p class="text-pink-500 text-sm font-semibold">Prince Data</p><p class="text-gray-500 text-xs">"Data bicara, kita eksekusi" — Data addict.</p><div class="flex justify-center gap-2 mt-3 text-pink-400"><i class="fab fa-python"></i><i class="fab fa-aws"></i></div></div>

                <div class="group text-center p-5 rounded-2xl bg-amber-50 hover:bg-white transition"><div class="w-28 h-28 mx-auto bg-gradient-to-br from-amber-400 to-yellow-500 rounded-full flex items-center justify-center text-white text-3xl font-black overflow-hidden">
                        <img src="{{asset('img/roy.jpeg')}}" alt="">
                    </div><h3 class="text-xl font-bold mt-4">Roy</h3><p class="text-amber-600 text-sm font-semibold">⚙Frontend Ninja</p><p class="text-gray-500 text-xs">"UI harus secepat kilat" — pecinta serverless & database.</p><div class="flex justify-center gap-2 mt-3 text-amber-500"><i class="fab fa-react"></i><i class="fab fa-node-js"></i></div></div>

                <div class="group text-center p-5 rounded-2xl bg-emerald-50 hover:bg-white transition"><div class="w-28 h-28 mx-auto bg-gradient-to-br from-emerald-400 to-teal-400 rounded-full flex items-center justify-center text-white text-3xl font-black overflow-hidden">
                        <img src="{{asset('img/fuad.png')}}" alt="">
                    </div><h3 class="text-xl font-bold mt-4">Fuad</h3><p class="text-emerald-600 text-sm font-semibold">📱 Code Magician</p><p class="text-gray-500 text-xs">"Ada kode ada saya" — Fullstack bumi.</p><div class="flex justify-center gap-2 mt-3 text-emerald-500"><i class="fab fa-php"></i><i class="fab fa-android"></i></div></div>
            </div>
            <div class="text-center mt-12 text-gray-400 text-sm italic">— 4 kepala, 1 sintesis kode yang epik —</div>
        </div>
    </section>

    <!-- ========== CONTACT & CTA (Friendly dan menghibur) ========== -->
    <section id="contact" class="py-24 relative overflow-hidden bg-gradient-to-r from-orange-500 to-pink-500">
        <div class="absolute top-0 left-0 w-full h-full bg-[url('https://placehold.co/1920x400/ffffff/white?text=pattern+dot')] opacity-10 bg-repeat"></div>
        <div class="max-w-5xl mx-auto px-5 md:px-8 relative z-10">
            <div class="bg-white/95 backdrop-blur-md rounded-3xl shadow-2xl overflow-hidden">
                <div class="grid md:grid-cols-2 divide-y md:divide-y-0 md:divide-x divide-gray-200">
                    <div class="p-8 md:p-10 space-y-5 text-center md:text-left">
                        <div class="inline-block mx-auto md:mx-0 bg-orange-100 rounded-full px-3 py-1 text-orange-700 text-xs font-bold"><i class="fas fa-comment-dots"></i> yuk ngobrol dulu</div>
                        <h3 class="text-2xl font-black text-gray-800">Kita seneng denger ide barumu!</h3>
                        <p class="text-gray-600">Nggak perlu ribet, konsultasi awal gratis. Tim FourBigi bakal balas dalam <strong class="text-orange-500">24 jam</strong>.</p>
                        <div class="space-y-2 text-gray-700 text-sm">
                            <p><i class="fas fa-envelope text-orange-400 w-6"></i> hello@fourbigi.id</p>
                            <p><i class="fab fa-whatsapp text-orange-400 w-6"></i> +62 812 8888 9640</p>
                            <p><i class="fas fa-map-pin text-orange-400 w-6"></i> Jogja & Jakarta (dan mana saja)</p>
                        </div>
                        <div class="flex gap-4 justify-center md:justify-start pt-2">
                            <div class="bg-orange-100 p-2 rounded-full w-9 h-9 flex items-center justify-center"><i class="fab fa-instagram text-orange-600"></i></div>
                            <div class="bg-orange-100 p-2 rounded-full w-9 h-9 flex items-center justify-center"><i class="fab fa-twitter text-orange-600"></i></div>
                            <div class="bg-orange-100 p-2 rounded-full w-9 h-9 flex items-center justify-center"><i class="fab fa-tiktok text-orange-600"></i></div>
                        </div>
                    </div>
                    <div class="p-8 md:p-10 bg-white/80">
                        <form class="space-y-4">
                            <input type="text" placeholder="Nama kamu" class="w-full border border-orange-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-orange-400">
                            <input type="email" placeholder="Email oke" class="w-full border border-orange-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-orange-400">
                            <textarea rows="3" placeholder="Ceritain dong kebutuhan / ide kamu..." class="w-full border border-orange-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-orange-400"></textarea>
                            <button class="w-full bg-gradient-to-r from-orange-500 to-pink-500 text-white font-bold py-3 rounded-xl transition hover:shadow-xl flex items-center justify-center gap-2"><i class="fas fa-paper-plane"></i> Kirim pesan <i class="fas fa-smile-wink"></i></button>
                            <p class="text-center text-xs text-gray-400">*tanpa spam, janji.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- ========== FOOTER CHEERFUL ========== -->
<footer class="bg-gray-900 text-gray-400 py-10">
    <div class="max-w-7xl mx-auto px-5 md:px-8 flex flex-col md:flex-row justify-between items-center gap-4">
        <div class="flex items-center gap-3"><div class="w-8 h-8 bg-orange-500 rounded-xl flex items-center justify-center"><span class="text-white font-black">4B</span></div><span class="font-bold text-white">FourBigi</span><span class="text-xs">© 2025 • built with ☕ & ❤️</span></div>
        <div class="flex gap-6 text-sm"><a href="#home" class="hover:text-orange-400">Home</a><a href="#services" class="hover:text-orange-400">Layanan</a><a href="#team" class="hover:text-orange-400">Tim</a><a href="#contact" class="hover:text-orange-400">Kontak</a></div>
        <div class="text-xs text-center">✨ "startup kecil, mimpi gede" ✨</div>
    </div>
</footer>

<script>
    const menuBtn = document.getElementById('menuToggle');
    const mobilePanel = document.getElementById('mobilePanel');
    if(menuBtn && mobilePanel){
        menuBtn.addEventListener('click', () => { mobilePanel.classList.toggle('hidden'); });
        document.querySelectorAll('#mobilePanel a').forEach(link => {
            link.addEventListener('click', () => mobilePanel.classList.add('hidden'));
        });
    }
</script>

</div>

