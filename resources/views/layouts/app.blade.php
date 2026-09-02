<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPU Jombang</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .cursor-zoom-in {
          cursor: zoom-in;
        }
        .cursor-zoom-out {
          cursor: zoom-out;
        }

    </style>
</head>
<body class="flex flex-col min-h-screen">
    <x-header />
    <x-content class="flex-1 h-screen items-center justify-center bg-red-500">
        <div class="absolute inset-0 bg-[url('/images/bg/kpu-ri.jpg')] bg-cover bg-center opacity-10 -z-10"></div>
        @yield('content')
    </x-content>
    
   <div class="flex-1 relative" style="margin: 10px;">
        <video style="object-fit: cover;" id="idle-video" class="absolute inset-0 w-full h-full object-cover hidden" src="{{ asset('videos/demo.mp4') }}" playsinline></video>
   </div>

   <x-footer/>
</body>

<script>
window.onload = () => {
const contentArea = document.getElementById("content-area");
const idleVideo = document.getElementById("idle-video");

let idleTimer;
const idleTime = 10000; // 10 detik

function resetIdleTimer() {
  clearTimeout(idleTimer);
  if (!idleVideo.classList.contains("hidden")) {
    idleVideo.pause();
    idleVideo.classList.add("hidden");
    contentArea.style.display = "block";
    window.location.href = "{{ route('home') }}";
  }
  idleTimer = setTimeout(showIdleVideo, idleTime);
}

function showIdleVideo() {
  contentArea.style.display = "none";
  idleVideo.classList.remove("hidden");
  idleVideo.play().catch(err => console.log("Autoplay diblokir:", err));
}

["mousemove","keydown","click","touchstart"].forEach(evt => {
  window.addEventListener(evt, resetIdleTimer);
});

idleVideo.addEventListener("ended", () => {
  idleVideo.classList.add("hidden");
  contentArea.style.display = "block";
  window.location.href = "{{ route('home') }}";
  resetIdleTimer();
});

resetIdleTimer();

};
</script>
</html>
