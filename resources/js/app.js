// Hestia's Restaurant — Interactive JavaScript

document.addEventListener('DOMContentLoaded', () => {
    'use strict';

    // === NAVBAR SCROLL ===
    const navbar = document.getElementById('navbar');
    let lastScroll = 0;
    if (navbar) {
        window.addEventListener('scroll', () => {
            navbar.classList.toggle('scrolled', window.scrollY > 50);
            lastScroll = window.scrollY;
        }, { passive: true });
    }

    // === MOBILE MENU TOGGLE ===
    const mobileToggle = document.getElementById('mobile-toggle');
    const mobileDrawer = document.getElementById('mobile-drawer');

    if (mobileToggle && mobileDrawer) {
        function toggleMobileMenu(open) {
            const isOpen = open !== undefined ? open : !mobileDrawer.classList.contains('active');
            mobileToggle.classList.toggle('active', isOpen);
            mobileDrawer.classList.toggle('active', isOpen);
            document.body.style.overflow = isOpen ? 'hidden' : '';
        }

        mobileToggle.addEventListener('click', () => toggleMobileMenu());

        mobileDrawer.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => toggleMobileMenu(false));
        });
    }

    // === SCROLL REVEAL ===
    const revealEls = document.querySelectorAll('.reveal');
    if (revealEls.length > 0) {
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -60px 0px' });

        revealEls.forEach(el => revealObserver.observe(el));
    }

    // === SMOOTH SCROLL ===
    document.querySelectorAll('a[href^="#"]').forEach(a => {
        a.addEventListener('click', e => {
            const targetId = a.getAttribute('href');
            if (targetId && targetId !== '#') {
                const targetEl = document.querySelector(targetId);
                if (targetEl) {
                    e.preventDefault();
                    targetEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }
        });
    });

    // === 3D FOOD SHOWCASE CAROUSEL ===
    const showcaseCarousel = document.getElementById('showcase-carousel');
    const showcaseDots = document.getElementById('showcase-dots');
    const showcaseScene = document.getElementById('showcase-scene');

    if (showcaseCarousel && showcaseDots) {
        const cards = showcaseCarousel.querySelectorAll('.showcase-card');
        const dots = showcaseDots.querySelectorAll('.showcase-dot');
        const totalCards = cards.length;
        let currentIndex = 0;
        let autoRotateTimer = null;
        const AUTO_ROTATE_INTERVAL = 4000;

        // Position cards in a 3D ring
        function positionCards(activeIndex) {
            const angleStep = 360 / totalCards;

            cards.forEach((card, i) => {
                // Calculate relative position from active
                let offset = i - activeIndex;
                if (offset > totalCards / 2) offset -= totalCards;
                if (offset < -totalCards / 2) offset += totalCards;

                const angle = offset * angleStep;
                const radians = (angle * Math.PI) / 180;
                const radius = 220; // Distance from center
                const translateX = Math.sin(radians) * radius;
                const translateZ = Math.cos(radians) * radius - radius;
                const rotateY = angle * 0.4;

                // Active card is front and center
                const isActive = offset === 0;
                const scale = isActive ? 1.08 : 0.75 - Math.abs(offset) * 0.05;
                const opacity = isActive ? 1 : Math.max(0.3, 0.7 - Math.abs(offset) * 0.15);
                const zIndex = isActive ? 10 : 5 - Math.abs(offset);
                const brightness = isActive ? 1 : 0.6;

                card.style.transform = `
                    translateX(${translateX}px)
                    translateZ(${translateZ}px)
                    rotateY(${rotateY}deg)
                    scale(${scale})
                `;
                card.style.opacity = opacity;
                card.style.zIndex = zIndex;
                card.style.filter = `brightness(${brightness})`;
                card.style.pointerEvents = isActive ? 'auto' : 'none';
            });

            // Update dots
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === activeIndex);
            });
        }

        // Go to a specific card
        function goToCard(index) {
            currentIndex = ((index % totalCards) + totalCards) % totalCards;
            positionCards(currentIndex);
        }

        // Auto-rotate
        function startAutoRotate() {
            stopAutoRotate();
            autoRotateTimer = setInterval(() => {
                goToCard(currentIndex + 1);
            }, AUTO_ROTATE_INTERVAL);
        }

        function stopAutoRotate() {
            if (autoRotateTimer) {
                clearInterval(autoRotateTimer);
                autoRotateTimer = null;
            }
        }

        // Dot click navigation
        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                const index = parseInt(dot.dataset.index, 10);
                goToCard(index);
                stopAutoRotate();
                startAutoRotate();
            });
        });

        // Card click to bring to front
        cards.forEach(card => {
            card.addEventListener('click', () => {
                const index = parseInt(card.dataset.index, 10);
                if (index !== currentIndex) {
                    goToCard(index);
                    stopAutoRotate();
                    startAutoRotate();
                }
            });
        });

        // Mouse-follow tilt on the showcase scene (desktop only)
        if (showcaseScene && window.matchMedia('(min-width: 768px)').matches) {
            const showcase = document.getElementById('hero-showcase');
            if (showcase) {
                showcase.addEventListener('mousemove', e => {
                    const rect = showcase.getBoundingClientRect();
                    const x = (e.clientX - rect.left) / rect.width - 0.5;
                    const y = (e.clientY - rect.top) / rect.height - 0.5;
                    const tiltX = y * -8; // vertical mouse → X rotation
                    const tiltY = x * 8;  // horizontal mouse → Y rotation

                    showcaseCarousel.style.transform = `rotateX(${tiltX}deg) rotateY(${tiltY}deg)`;
                });

                showcase.addEventListener('mouseleave', () => {
                    showcaseCarousel.style.transform = 'rotateX(0) rotateY(0)';
                });

                // Pause auto-rotate on hover
                showcase.addEventListener('mouseenter', stopAutoRotate);
                showcase.addEventListener('mouseleave', startAutoRotate);
            }
        }

        // Touch swipe support (mobile)
        let touchStartX = 0;
        let touchEndX = 0;

        showcaseCarousel.addEventListener('touchstart', e => {
            touchStartX = e.changedTouches[0].screenX;
            stopAutoRotate();
        }, { passive: true });

        showcaseCarousel.addEventListener('touchend', e => {
            touchEndX = e.changedTouches[0].screenX;
            const swipeDistance = touchEndX - touchStartX;
            if (Math.abs(swipeDistance) > 50) {
                if (swipeDistance < 0) {
                    goToCard(currentIndex + 1);
                } else {
                    goToCard(currentIndex - 1);
                }
            }
            startAutoRotate();
        }, { passive: true });

        // Initialize
        positionCards(0);
        startAutoRotate();
    }

    // === ANIMATED COUNTERS ===
    const counters = document.querySelectorAll('.hero-stat-number[data-count]');
    if (counters.length > 0) {
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const target = parseFloat(el.dataset.count);
                    const isDecimal = el.dataset.decimal === 'true';
                    const duration = 2000;
                    const startTime = performance.now();

                    function animate(currentTime) {
                        const elapsed = currentTime - startTime;
                        const progress = Math.min(elapsed / duration, 1);
                        const eased = 1 - Math.pow(1 - progress, 3); // easeOutCubic
                        const current = target * eased;

                        if (isDecimal) {
                            el.textContent = current.toFixed(1);
                        } else {
                            el.textContent = Math.floor(current).toLocaleString() + (target >= 1000 ? '+' : '+');
                        }

                        if (progress < 1) requestAnimationFrame(animate);
                    }
                    requestAnimationFrame(animate);
                    counterObserver.unobserve(el);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(c => counterObserver.observe(c));
    }

    // === 3D TILT EFFECT ON CARDS ===
    const tiltCards = document.querySelectorAll('[data-tilt]');
    tiltCards.forEach(card => {
        card.addEventListener('mousemove', e => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const rotateX = ((y - centerY) / centerY) * -6;
            const rotateY = ((x - centerX) / centerX) * 6;

            card.style.transform = `perspective(800px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-4px)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(800px) rotateX(0) rotateY(0) translateY(0)';
            card.style.transition = 'transform 0.5s cubic-bezier(0.34, 1.56, 0.64, 1)';
            setTimeout(() => { card.style.transition = ''; }, 500);
        });

        card.addEventListener('mouseenter', () => {
            card.style.transition = 'none';
        });
    });

    // === COUNTDOWN TIMERS ===
    function startTimer(hoursId, minsId, secsId) {
        function update() {
            const now = new Date();
            const midnight = new Date(now);
            midnight.setHours(23, 59, 59, 999);
            const diff = midnight - now;

            if (diff <= 0) return;

            const h = Math.floor(diff / 3600000);
            const m = Math.floor((diff % 3600000) / 60000);
            const s = Math.floor((diff % 60000) / 1000);

            const hEl = document.getElementById(hoursId);
            const mEl = document.getElementById(minsId);
            const sEl = document.getElementById(secsId);

            if (hEl) hEl.textContent = String(h).padStart(2, '0');
            if (mEl) mEl.textContent = String(m).padStart(2, '0');
            if (sEl) sEl.textContent = String(s).padStart(2, '0');
        }
        update();
        setInterval(update, 1000);
    }

    startTimer('timer-hours-1', 'timer-mins-1', 'timer-secs-1');
    startTimer('timer-hours-2', 'timer-mins-2', 'timer-secs-2');

    // === SCROLL INDICATOR HIDE ON SCROLL ===
    const scrollIndicator = document.getElementById('hero-scroll-indicator');
    if (scrollIndicator) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                scrollIndicator.style.opacity = '0';
                scrollIndicator.style.pointerEvents = 'none';
            } else {
                scrollIndicator.style.opacity = '';
                scrollIndicator.style.pointerEvents = '';
            }
        }, { passive: true });
    }
});
