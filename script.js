// Register GSAP ScrollTrigger
gsap.registerPlugin(ScrollTrigger);

// Loader Animation
window.addEventListener('load', () => {
    const loader = document.querySelector('.loader');
    gsap.to(loader, {
        opacity: 0,
        duration: 1,
        onComplete: () => {
            loader.style.display = 'none';
        }
    });

    // Animate hero content
    gsap.from('.hero-content h1', {
        duration: 1,
        y: 100,
        opacity: 0,
        ease: 'power4.out',
        delay: 0.5
    });

    gsap.from('.hero-content p', {
        duration: 1,
        y: 50,
        opacity: 0,
        ease: 'power4.out',
        delay: 0.8
    });

    gsap.from('.cta-btn', {
        duration: 1,
        y: 50,
        opacity: 0,
        ease: 'power4.out',
        delay: 1.1
    });

    // Animate floating cards
    gsap.from('.card', {
        duration: 1,
        opacity: 0,
        x: 100,
        stagger: 0.2,
        ease: 'power4.out',
        delay: 1.4
    });
});

// Floating Cards Animation
const cards = document.querySelectorAll('.card');
cards.forEach(card => {
    gsap.to(card, {
        y: 20,
        duration: 2,
        yoyo: true,
        repeat: -1,
        ease: 'power1.inOut',
        delay: Math.random()
    });
});

// Initialize Swiper
const swiper = new Swiper('.gallery-swiper', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    }
});

// Gallery Cards Animation
gsap.from('.card-wrapper', {
    scrollTrigger: {
        trigger: '.gallery',
        start: 'top center',
        toggleActions: 'play none none reverse'
    },
    duration: 0.8,
    y: 100,
    opacity: 0,
    stagger: 0.2,
    ease: 'power4.out'
});

// Categories Animation
gsap.from('.category-card', {
    scrollTrigger: {
        trigger: '.categories',
        start: 'top center',
        toggleActions: 'play none none reverse'
    },
    duration: 0.8,
    y: 50,
    opacity: 0,
    stagger: 0.2,
    ease: 'power4.out'
});

// Category Cards Hover Effect
document.querySelectorAll('.category-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        
        const rotateX = (y - centerY) / 10;
        const rotateY = -(x - centerX) / 10;
        
        gsap.to(card, {
            duration: 0.5,
            rotateX: rotateX,
            rotateY: rotateY,
            ease: 'power2.out'
        });
    });
    
    card.addEventListener('mouseleave', () => {
        gsap.to(card, {
            duration: 0.5,
            rotateX: 0,
            rotateY: 0,
            ease: 'power2.out'
        });
    });
});

// Contact Form Animation
gsap.from('.contact-info', {
    scrollTrigger: {
        trigger: '.contact',
        start: 'top center',
        toggleActions: 'play none none reverse'
    },
    duration: 0.8,
    x: -100,
    opacity: 0,
    ease: 'power4.out'
});

gsap.from('.contact-form', {
    scrollTrigger: {
        trigger: '.contact',
        start: 'top center',
        toggleActions: 'play none none reverse'
    },
    duration: 0.8,
    x: 100,
    opacity: 0,
    ease: 'power4.out'
});

// Mobile Menu Toggle
const menuBtn = document.querySelector('.menu-btn');
const navLinks = document.querySelector('.nav-links');

menuBtn.addEventListener('click', () => {
    menuBtn.classList.toggle('active');
    navLinks.classList.toggle('active');
});

// Smooth Scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        
        if (target) {
            window.scrollTo({
                top: target.offsetTop - 100,
                behavior: 'smooth'
            });
            
            // Close mobile menu if open
            menuBtn.classList.remove('active');
            navLinks.classList.remove('active');
        }
    });
});

// Form Submit Handler
const contactForm = document.querySelector('.contact-form');
contactForm.addEventListener('submit', (e) => {
    e.preventDefault();
    
    // Add your form submission logic here
    
    // Show success message
    const button = contactForm.querySelector('button');
    const originalText = button.textContent;
    button.textContent = 'Message Sent!';
    button.style.backgroundColor = '#4ecdc4';
    
    setTimeout(() => {
        button.textContent = originalText;
        button.style.backgroundColor = '';
        contactForm.reset();
    }, 3000);
});
