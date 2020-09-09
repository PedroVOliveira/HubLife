const mobileElement = 768; 
const bodyElement = document.querySelector('body').offsetWidth;
if(bodyElement > mobileElement){

window.sr = ScrollReveal();
sr.reveal('.services-items', { duration: 400, origin: 'bottom', distance: '60px', easing: 'ease', scale: 0, delay: 600,  reset: true });
sr.reveal('.about-content', { duration: 400, origin: 'left', distance: '60px', easing: 'ease', scale: 0, delay: 600,  reset: true });
sr.reveal('.about-img', { duration: 400, origin: 'right', distance: '60px', easing: 'ease', scale: 0, delay: 600,  reset: true });
sr.reveal('.about-excelent-services', { duration: 400, origin: 'right', distance: '60px', easing: 'ease', scale: 0, delay: 600,  reset: true });
sr.reveal('.about-excelent-img', { duration: 400, origin: 'left', distance: '60px', easing: 'ease', scale: 0, delay: 600,  reset: true });
sr.reveal('.video-banner', { duration: 400, origin: 'bottom', distance: '60px', easing: 'ease', scale: 0, delay: 600,  reset: true });
sr.reveal('.blog-posts', { duration: 400, origin: 'bottom', distance: '60px', easing: 'ease', scale: 0, delay: 600,  reset: true });
sr.reveal('.blog-link', { duration: 400, origin: 'bottom', distance: '60px', easing: 'ease', scale: 0, delay: 600,  reset: true });
sr.reveal('footer', { duration: 400, origin: 'bottom', distance: '60px', easing: 'ease', scale: 0, delay: 200,  reset: true });

}