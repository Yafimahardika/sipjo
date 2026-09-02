<header class="bg-red-800 text-white flex justify-between items-center p-4 relative overflow-hidden">
    <div class="flex items-center space-x-3">
        <img src="{{ asset('images/logo/logo-kpu.png') }}" alt="Logo KPU" class="h-12 w-12">
        <h1 class="text-lg md:text-2xl font-bold text-orange-400">
            KOMISI PEMILIHAN UMUM <br> KAB. JOMBANG
        </h1>
    </div>
    <div class="flex flex-col text-sm md:text-base items-center">
        <span class="time font-bold" id="clock"></span>
        <span class="time" id="date"></span>
    </div>
</header>

<style>
header::before {
    content: "";
    position: absolute;
    inset: 0;
    background: 
        radial-gradient(circle at 30% 50%, rgba(255,215,0,0.10), transparent 70%),
        linear-gradient(135deg, rgba(255,215,0,0.15) 0%, transparent 60%);
    z-index: 0;
}

header::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(120deg, transparent 40%, rgba(255,215,0,0.35) 50%, transparent 60%);
    background-size: 200% 200%;
    animation: shimmer 12s linear infinite;
    z-index: 1;
    pointer-events: none;
}

header > * {
    position: relative;
    z-index: 2;
}

@keyframes shimmer {
    0% {
        background-position: -200% 0;
        opacity: 0;
    }
    40% {
        opacity: 0;
    }
    50% {
        background-position: 0% 0;
        opacity: 1;
    }
    60% {
        background-position: 200% 0;
        opacity: 0;
    }
    100% {
        opacity: 0;
    }
}
</style>


<!-- Banner Info -->
<div class="w-full bg-black text-white py-2 overflow-hidden relative">
    <div id="banner-slide" class="text-center text-sm md:text-base font-medium"></div>
</div>

<script>
    // Fungsi Jam
    function updateClock() {
        const now = new Date();
        document.getElementById('clock').innerText = now.toLocaleTimeString();
        document.getElementById('date').innerText = now.toLocaleDateString('id-ID', { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' });
    }
    setInterval(updateClock, 1000);
    updateClock();

    // Fungsi Banner (Rotator)
    const messages = [
        "📢 Selamat Datang di Layar Informasi Layanan KPU Kabupaten Jombang",
        "📢 Dirgahayu ke-81 Republik Indonesia! Terus melangkah, pantang menyerah untuk Indonesia maju.",
    ];

    let index = 0;
    const banner = document.getElementById("banner-slide");

    function showMessage() {
        banner.style.transition = "none";
        banner.style.transform = "translateX(100%)"; // mulai dari kanan
        banner.style.opacity = 0;

        setTimeout(() => {
            banner.textContent = messages[index];
            banner.style.transition = "transform 1s ease, opacity 1s ease";
            banner.style.transform = "translateX(0)"; // masuk ke tengah
            banner.style.opacity = 1;

            setTimeout(() => {
                banner.style.transform = "translateX(-100%)"; // keluar ke kiri
                banner.style.opacity = 0;
            }, 8000); // tampil selama 3.5 detik sebelum keluar
        }, 200);

        index = (index + 1) % messages.length;
    }

    // tampilkan pertama kali
    showMessage();
    // ganti setiap 5 detik
    setInterval(showMessage, 10000);
</script>
