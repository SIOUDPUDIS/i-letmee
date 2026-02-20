window.addEventListener('load', () => {
    const introBox = document.getElementById('intro-box');
    const overlay = document.getElementById('intro-overlay');

    // Intro ekranını karart ve yukarı kaydır
    setTimeout(() => { introBox.classList.add('apply-blur'); }, 4000);
    setTimeout(() => {
        overlay.classList.add('exit-intro');
        document.body.style.overflow = 'auto';
    }, 5500);
});

// Başlangıçta kaydırmayı engelle
document.body.style.overflow = 'hidden';
