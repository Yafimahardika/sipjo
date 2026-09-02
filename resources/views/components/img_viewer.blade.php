<div class="flex flex-1 justify-center items-center overflow-hidden">
    <img 
        id="zoomable" 
        class="max-w-md h-auto rounded-lg shadow-lg cursor-pointer transform transition-transform duration-600 ease-in-out" 
        src="{{ $infografis }}" 
        alt="Desain Grafis"
    >
</div>

<script>
    const img = document.getElementById('zoomable');
    let zoomed = false;

    // Klik sekali → zoom ke titik klik
    img.addEventListener('click', (e) => {
        zoomed = !zoomed;

        if (zoomed) {
            const rect = img.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / rect.width) * 100;
            const y = ((e.clientY - rect.top) / rect.height) * 100;

            img.style.transformOrigin = `${x}% ${y}%`;
            img.style.transform = 'scale(1.5)';
        } else {
            img.style.transformOrigin = 'center center';
            img.style.transform = 'scale(1)';
        }
    });

    // Double klik → reset ke normal dengan animasi halus
    img.addEventListener('dblclick', () => {
        zoomed = false;
        img.style.transformOrigin = 'center center';
        img.style.transform = 'scale(1)';
    });
</script>