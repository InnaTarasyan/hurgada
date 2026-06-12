import './bootstrap';

import Alpine from 'alpinejs';
import $ from 'jquery';
import Masonry from 'masonry-layout';
import imagesLoaded from 'imagesloaded';
import 'lightbox2/dist/css/lightbox.css';
import lightbox from 'lightbox2';

// Lightweight Leaflet loader and weather widget via Alpine
window.hurghada = {
	loadLeaflet: async () => {
		if (window.L) return window.L;
		await Promise.all([
			import('leaflet/dist/leaflet.css'),
			import('leaflet')
		]);
		return window.L;
	},
	weather: async (lat, lon) => {
		const url = `https://api.open-meteo.com/v1/forecast?latitude=${lat}&longitude=${lon}&current=temperature_2m,relative_humidity_2m,weather_code&timezone=auto`;
		const res = await fetch(url);
		if (!res.ok) throw new Error('Weather fetch failed');
		return res.json();
	}
};

window.Alpine = Alpine;

Alpine.start();

// Fish cursor companion — desktop only, respects reduced motion
if (window.matchMedia('(pointer: fine) and (prefers-reduced-motion: no-preference)').matches) {
	const companion = document.createElement('div');
	companion.className = 'fish-cursor-companion';
	companion.setAttribute('aria-hidden', 'true');
	companion.textContent = '🐠';
	document.body.appendChild(companion);

	let mouseX = -100;
	let mouseY = -100;
	let posX = -100;
	let posY = -100;

	document.addEventListener('mousemove', (e) => {
		mouseX = e.clientX;
		mouseY = e.clientY;
	});

	const animate = () => {
		posX += (mouseX - posX) * 0.15;
		posY += (mouseY - posY) * 0.15;
		const flip = mouseX < posX ? 'scaleX(-1)' : 'scaleX(1)';
		companion.style.transform = `translate(${posX + 14}px, ${posY + 14}px) ${flip}`;
		requestAnimationFrame(animate);
	};
	requestAnimationFrame(animate);
}

// Initialize Masonry + ImagesLoaded + Lightbox2 when a gallery exists on the page
document.addEventListener('DOMContentLoaded', () => {
    const gallery = document.querySelector('.gallery[data-masonry]');
    if (!gallery) return;

    const msnry = new Masonry(gallery, {
        itemSelector: '.gallery-item',
        columnWidth: '.gallery-sizer',
        gutter: 16,
        percentPosition: true,
        transitionDuration: '0.3s'
    });

    imagesLoaded(gallery).on('progress', () => {
        msnry.layout();
    });

    // Lightbox2 defaults
    lightbox.option({
        fadeDuration: 200,
        resizeDuration: 200,
        imageFadeDuration: 200,
        wrapAround: true,
        albumLabel: "%1 of %2"
    });
});
