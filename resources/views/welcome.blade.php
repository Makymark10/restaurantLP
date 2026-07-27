<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <!-- for ngrok to make the css and js included security something -->
     <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
     
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hestia's Restaurant — Comfort Food, Catering & Family Dining</title>
    <meta name="description" content="Welcome to Hestia's Restaurant. Enjoy comforting home-style meals, generous servings, party trays, and catering for every occasion. Dine in, take out, or let us cater your next gathering.">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vite CSS and JS Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-cream text-espresso antialiased overflow-x-hidden">

    <!-- ===== NAVIGATION ===== -->
    <nav class="navbar" id="navbar">
        <div class="navbar-inner">
            <a href="/" class="navbar-brand">
                <img src="/images/logo.png" alt="Hestia's Restaurant Logo" class="navbar-brand-logo" width="44" height="44">
                <span class="navbar-brand-text">Hestia's</span>
            </a>

            <div class="navbar-links">
                <a href="#home">Home</a>
                <a href="#offers">Offers</a>
                <a href="#menu">Menu</a>
                <a href="#about">About</a>
                <a href="#catering">Catering</a>
                <a href="#contact">Contact</a>
            </div>

            <div class="navbar-right">
                <div class="navbar-cta-wrap">
                    <a href="#contact" class="btn btn-sm btn-primary"><span>Reserve a Table</span></a>
                </div>
                <button class="mobile-toggle" id="mobile-toggle" aria-label="Toggle menu">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </nav>

    <!-- ===== MOBILE DRAWER MENU ===== -->
    <div class="mobile-drawer" id="mobile-drawer">
        <a href="#home">Home</a>
        <a href="#offers">Offers</a>
        <a href="#menu">Menu</a>
        <a href="#about">About</a>
        <a href="#catering">Catering</a>
        <a href="#contact">Contact</a>
        <a href="#contact" class="btn btn-md btn-primary mt-3"><span>Reserve a Table</span></a>
    </div>

    <!-- ===== HERO ===== -->
    <section class="hero" id="home">
        <!-- Background layers -->
        <div class="hero-bg-wrap" aria-hidden="true">
            <div class="hero-bg-gradient"></div>
            <div class="hero-bg-image">
                <img src="/images/hero-bg.png" alt="" loading="eager" width="1024" height="1024">
            </div>
            <div class="hero-bg-overlay"></div>
            <!-- Ambient glow orbs -->
            <div class="hero-orb hero-orb-1"></div>
            <div class="hero-orb hero-orb-2"></div>
            <div class="hero-orb hero-orb-3"></div>
        </div>

        <div class="hero-inner">
            <!-- LEFT COLUMN: Brand + Copy -->
            <div class="hero-left">
                <div class="hero-left-content">
                    <!-- Promo badge -->
                    <div class="hero-promo-badge" data-animate="fadeInDown" data-delay="0.2">
                        <span class="hero-promo-dot"></span>
                        <span>🔥 Free delivery on orders over $25</span>
                    </div>

                    <!-- Headline -->
                    <h1 class="hero-headline" data-animate="fadeInUp" data-delay="0.4">
                        Taste the <em>Art</em> of<br>Comfort Dining
                    </h1>

                    <!-- Subtitle -->
                    <p class="hero-subtitle" data-animate="fadeInUp" data-delay="0.6">
                        Handcrafted dishes made with love, served with warmth. Experience flavors that bring family and friends together.
                    </p>

                    <!-- CTAs -->
                    <div class="hero-ctas" data-animate="fadeInUp" data-delay="0.8">
                        <a href="#menu" class="hero-btn-primary" id="hero-order-btn">
                            <span class="hero-btn-text">Order Now</span>
                            <span class="hero-btn-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="m9 18 6-6-6-6"/></svg>
                            </span>
                        </a>
                        <a href="#menu" class="hero-btn-secondary" id="hero-menu-btn">
                            <span>View Menu</span>
                        </a>
                    </div>

                    <!-- Trust indicators -->
                    <div class="hero-trust" data-animate="fadeInUp" data-delay="1.0">
                        <div class="hero-trust-item">
                            <div class="hero-trust-stars">★★★★★</div>
                            <span class="hero-trust-label">4.9 · 2,500+ Reviews</span>
                        </div>
                        <div class="hero-trust-divider"></div>
                        <div class="hero-trust-item">
                            <span class="hero-trust-icon">⏱</span>
                            <span class="hero-trust-label">25 min delivery</span>
                        </div>
                        <div class="hero-trust-divider"></div>
                        <div class="hero-trust-item">
                            <span class="hero-trust-icon">🍽️</span>
                            <span class="hero-trust-label">85+ dishes</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: 3D Food Showcase -->
            <div class="hero-right">
                <div class="hero-showcase" id="hero-showcase">
                    <!-- Reflection/glow surface -->
                    <div class="showcase-glow" aria-hidden="true"></div>

                    <!-- 3D Carousel Scene -->
                    <div class="showcase-scene" id="showcase-scene">
                        <div class="showcase-carousel" id="showcase-carousel">
                            <!-- Food Item 1 -->
                            <div class="showcase-card" data-index="0">
                                <div class="showcase-card-inner">
                                    <div class="showcase-card-img">
                                        <img src="/images/dish-grilled.png" alt="Hestia's Grilled Chicken" loading="eager" width="600" height="450">
                                    </div>
                                    <div class="showcase-card-info">
                                        <span class="showcase-card-tag">🔥 Bestseller</span>
                                        <h3>Grilled Chicken</h3>
                                        <p class="showcase-card-price">$14.99</p>
                                    </div>
                                    <div class="showcase-card-shine"></div>
                                </div>
                            </div>
                            <!-- Food Item 2 -->
                            <div class="showcase-card" data-index="1">
                                <div class="showcase-card-inner">
                                    <div class="showcase-card-img">
                                        <img src="/images/dish-pasta.png" alt="Creamy Carbonara" loading="eager" width="600" height="450">
                                    </div>
                                    <div class="showcase-card-info">
                                        <span class="showcase-card-tag">⭐ Chef's Pick</span>
                                        <h3>Creamy Carbonara</h3>
                                        <p class="showcase-card-price">$12.99</p>
                                    </div>
                                    <div class="showcase-card-shine"></div>
                                </div>
                            </div>
                            <!-- Food Item 3 -->
                            <div class="showcase-card" data-index="2">
                                <div class="showcase-card-inner">
                                    <div class="showcase-card-img">
                                        <img src="/images/dish-dessert.png" alt="Chocolate Lava Cake" loading="eager" width="600" height="450">
                                    </div>
                                    <div class="showcase-card-info">
                                        <span class="showcase-card-tag">🍫 Sweet Treat</span>
                                        <h3>Lava Cake</h3>
                                        <p class="showcase-card-price">$8.99</p>
                                    </div>
                                    <div class="showcase-card-shine"></div>
                                </div>
                            </div>
                            <!-- Food Item 4 -->
                            <div class="showcase-card" data-index="3">
                                <div class="showcase-card-inner">
                                    <div class="showcase-card-img">
                                        <img src="/images/catering-tray.png" alt="Fiesta Party Tray" loading="eager" width="600" height="450">
                                    </div>
                                    <div class="showcase-card-info">
                                        <span class="showcase-card-tag">🎉 Party Size</span>
                                        <h3>Party Tray</h3>
                                        <p class="showcase-card-price">$39.99</p>
                                    </div>
                                    <div class="showcase-card-shine"></div>
                                </div>
                            </div>
                            <!-- Food Item 5 -->
                            <div class="showcase-card" data-index="4">
                                <div class="showcase-card-inner">
                                    <div class="showcase-card-img">
                                        <img src="/images/offer-combo.png" alt="Complete Combo Meal" loading="eager" width="600" height="450">
                                    </div>
                                    <div class="showcase-card-info">
                                        <span class="showcase-card-tag">💎 Premium</span>
                                        <h3>Combo Meal</h3>
                                        <p class="showcase-card-price">$16.99</p>
                                    </div>
                                    <div class="showcase-card-shine"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel dots -->
                    <div class="showcase-dots" id="showcase-dots">
                        <button class="showcase-dot active" data-index="0" aria-label="Show dish 1"></button>
                        <button class="showcase-dot" data-index="1" aria-label="Show dish 2"></button>
                        <button class="showcase-dot" data-index="2" aria-label="Show dish 3"></button>
                        <button class="showcase-dot" data-index="3" aria-label="Show dish 4"></button>
                        <button class="showcase-dot" data-index="4" aria-label="Show dish 5"></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="hero-scroll-indicator" id="hero-scroll-indicator">
            <span class="hero-scroll-text">Scroll to explore</span>
            <div class="hero-scroll-arrow">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 5v14M5 12l7 7 7-7"/></svg>
            </div>
        </div>
    </section>

    <!-- ===== SPECIAL OFFERS ===== -->
    <section class="sec-offers" id="offers">
        <div class="sec-offers-bg" aria-hidden="true">
            <div class="sec-offers-gradient"></div>
            <div class="sec-orb sec-orb-a"></div>
            <div class="sec-orb sec-orb-b"></div>
        </div>
        <div class="container">
            <div class="sec-header centered reveal">
                <span class="sec-label">Limited Time Offers</span>
                <h2 class="sec-title sec-title-light">Don't Miss These <em>Deals</em></h2>
                <p class="sec-desc sec-desc-light">Exclusive offers crafted to give you more of what you love. Grab them before they're gone!</p>
            </div>

            <div class="offers-row">
                <!-- Offer 1 -->
                <div class="offer-card reveal reveal-delay-1">
                    <div class="offer-card-img">
                        <img src="/images/offer-combo.png" alt="Complete Combo Meal Deal" loading="lazy" width="600" height="375">
                        <div class="offer-card-img-overlay"></div>
                        <span class="offer-badge">Save 30%</span>
                        <div class="offer-timer">
                            <div class="timer-unit"><span class="timer-num" id="timer-hours-1">23</span><span class="timer-lbl">Hrs</span></div>
                            <div class="timer-unit"><span class="timer-num" id="timer-mins-1">59</span><span class="timer-lbl">Min</span></div>
                            <div class="timer-unit"><span class="timer-num" id="timer-secs-1">59</span><span class="timer-lbl">Sec</span></div>
                        </div>
                    </div>
                    <div class="offer-card-body">
                        <h3>Complete Combo Meal</h3>
                        <p>Grilled steak with garlic rice, creamy soup, fresh salad, and a refreshing lemonade — all in one perfect meal.</p>
                        <div class="offer-tags">
                            <span>Main Dish</span><span>Soup</span><span>Salad</span><span>Drink</span>
                        </div>
                        <div class="offer-pricing">
                            <span class="offer-price-old">$24.99</span>
                            <span class="offer-price-now">$16.99</span>
                            <span class="offer-save-tag">Save $8</span>
                        </div>
                        <a href="#contact" class="sec-btn sec-btn-gold w-full">🔥 Claim This Offer</a>
                    </div>
                </div>

                <!-- Offer 2 -->
                <div class="offer-card reveal reveal-delay-2">
                    <div class="offer-card-img">
                        <img src="/images/offer-family.png" alt="Family Feast Bundle" loading="lazy" width="600" height="375">
                        <div class="offer-card-img-overlay"></div>
                        <span class="offer-badge offer-badge-alt">Best Value</span>
                        <div class="offer-timer">
                            <div class="timer-unit"><span class="timer-num" id="timer-hours-2">23</span><span class="timer-lbl">Hrs</span></div>
                            <div class="timer-unit"><span class="timer-num" id="timer-mins-2">59</span><span class="timer-lbl">Min</span></div>
                            <div class="timer-unit"><span class="timer-num" id="timer-secs-2">59</span><span class="timer-lbl">Sec</span></div>
                        </div>
                    </div>
                    <div class="offer-card-body">
                        <h3>Family Feast Bundle</h3>
                        <p>A feast for the whole family — roasted chicken, pasta, garlic bread, salad, rice, and drinks for 4.</p>
                        <div class="offer-tags">
                            <span>Roast Chicken</span><span>Pasta</span><span>Bread</span><span>4 Drinks</span>
                        </div>
                        <div class="offer-pricing">
                            <span class="offer-price-old">$69.99</span>
                            <span class="offer-price-now">$49.99</span>
                            <span class="offer-save-tag">Save $20</span>
                        </div>
                        <a href="#contact" class="sec-btn sec-btn-gold w-full">🎉 Get Family Deal</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHY CHOOSE US ===== -->
    <section class="sec-why">
        <div class="container">
            <div class="sec-header centered reveal">
                <span class="sec-label">Why Hestia's</span>
                <h2 class="sec-title">What Makes Us <em>Different</em></h2>
            </div>
            <div class="why-grid">
                <div class="why-card reveal reveal-delay-1" data-tilt>
                    <div class="why-card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2z"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><circle cx="9" cy="9" r="1" fill="currentColor"/><circle cx="15" cy="9" r="1" fill="currentColor"/></svg>
                    </div>
                    <h4>Fresh Ingredients</h4>
                    <p>Every dish starts with the finest locally-sourced, farm-fresh ingredients.</p>
                </div>
                <div class="why-card reveal reveal-delay-2" data-tilt>
                    <div class="why-card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 22 12 18.56 5.82 22 7 14.14l-5-4.87 6.91-1.01L12 2z"/></svg>
                    </div>
                    <h4>Quality Service</h4>
                    <p>Warm, attentive service that makes every visit feel like coming home.</p>
                </div>
                <div class="why-card reveal reveal-delay-3" data-tilt>
                    <div class="why-card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <h4>Fast Delivery</h4>
                    <p>Hot meals at your door in 25 minutes or less. Guaranteed fresh.</p>
                </div>
                <div class="why-card reveal reveal-delay-4" data-tilt>
                    <div class="why-card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2z"/><path d="M8 12h8M12 8v8"/></svg>
                    </div>
                    <h4>Signature Dishes</h4>
                    <p>Original recipes perfected over years, found nowhere else.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FEATURED MENU ===== -->
    <section class="sec-menu" id="menu">
        <div class="sec-menu-bg" aria-hidden="true">
            <div class="sec-menu-gradient"></div>
        </div>
        <div class="container">
            <div class="sec-header centered reveal">
                <span class="sec-label sec-label-light">Our Favorites</span>
                <h2 class="sec-title sec-title-light">Signature <em>Dishes</em></h2>
                <p class="sec-desc sec-desc-light">Hand-crafted with love using the freshest ingredients. Every plate tells a story of comfort and flavor.</p>
            </div>

            <div class="menu-grid">
                <div class="menu-card reveal reveal-delay-1" data-tilt>
                    <div class="menu-card-img">
                        <img src="/images/dish-grilled.png" alt="Hestia's Grilled Chicken" loading="lazy" width="600" height="450">
                        <span class="menu-card-tag">🔥 Bestseller</span>
                    </div>
                    <div class="menu-card-body">
                        <h3>Hestia's Grilled Chicken</h3>
                        <p>Golden-brown grilled chicken with garlic rice, sautéed veggies, and house sauce.</p>
                        <div class="menu-card-foot">
                            <span class="menu-card-price">$14.99</span>
                            <a href="#" class="menu-card-btn">Order <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m9 18 6-6-6-6"/></svg></a>
                        </div>
                    </div>
                </div>

                <div class="menu-card reveal reveal-delay-2" data-tilt>
                    <div class="menu-card-img">
                        <img src="/images/dish-pasta.png" alt="Creamy Carbonara" loading="lazy" width="600" height="450">
                        <span class="menu-card-tag">⭐ Chef's Pick</span>
                    </div>
                    <div class="menu-card-body">
                        <h3>Creamy Carbonara</h3>
                        <p>Rich pasta with crispy bacon, parmesan, and a touch of black pepper magic.</p>
                        <div class="menu-card-foot">
                            <span class="menu-card-price">$12.99</span>
                            <a href="#" class="menu-card-btn">Order <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m9 18 6-6-6-6"/></svg></a>
                        </div>
                    </div>
                </div>

                <div class="menu-card reveal reveal-delay-3" data-tilt>
                    <div class="menu-card-img">
                        <img src="/images/catering-tray.png" alt="Fiesta Party Tray" loading="lazy" width="600" height="450">
                        <span class="menu-card-tag">🎉 Party Size</span>
                    </div>
                    <div class="menu-card-body">
                        <h3>Fiesta Party Tray</h3>
                        <p>Grilled meats, spring rolls, rice noodles, and fresh sides. Perfect for groups.</p>
                        <div class="menu-card-foot">
                            <span class="menu-card-price">$39.99</span>
                            <a href="#" class="menu-card-btn">Order <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m9 18 6-6-6-6"/></svg></a>
                        </div>
                    </div>
                </div>

                <div class="menu-card reveal reveal-delay-1" data-tilt>
                    <div class="menu-card-img">
                        <img src="/images/dish-dessert.png" alt="Chocolate Lava Cake" loading="lazy" width="600" height="450">
                        <span class="menu-card-tag">🍫 Sweet Treat</span>
                    </div>
                    <div class="menu-card-body">
                        <h3>Chocolate Lava Cake</h3>
                        <p>Warm chocolate cake with molten center, vanilla ice cream, and caramel drizzle.</p>
                        <div class="menu-card-foot">
                            <span class="menu-card-price">$8.99</span>
                            <a href="#" class="menu-card-btn">Order <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m9 18 6-6-6-6"/></svg></a>
                        </div>
                    </div>
                </div>

                <div class="menu-card reveal reveal-delay-2" data-tilt>
                    <div class="menu-card-img">
                        <img src="/images/offer-combo.png" alt="Classic Steak Bowl" loading="lazy" width="600" height="450">
                        <span class="menu-card-tag">💎 Premium</span>
                    </div>
                    <div class="menu-card-body">
                        <h3>Classic Steak Bowl</h3>
                        <p>Tender grilled steak over seasoned rice with roasted veggies and chimichurri.</p>
                        <div class="menu-card-foot">
                            <span class="menu-card-price">$18.99</span>
                            <a href="#" class="menu-card-btn">Order <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m9 18 6-6-6-6"/></svg></a>
                        </div>
                    </div>
                </div>

                <div class="menu-card reveal reveal-delay-3" data-tilt>
                    <div class="menu-card-img">
                        <img src="/images/offer-family.png" alt="Garden Fresh Salad" loading="lazy" width="600" height="450">
                        <span class="menu-card-tag">🥗 Healthy</span>
                    </div>
                    <div class="menu-card-body">
                        <h3>Garden Fresh Salad</h3>
                        <p>Crisp greens, roasted nuts, dried cranberries, feta, and honey-lemon dressing.</p>
                        <div class="menu-card-foot">
                            <span class="menu-card-price">$10.99</span>
                            <a href="#" class="menu-card-btn">Order <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m9 18 6-6-6-6"/></svg></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sec-center-cta reveal">
                <a href="#" class="sec-btn sec-btn-outline-light">View Full Menu</a>
            </div>
        </div>
    </section>

    <!-- ===== ABOUT / STORY ===== -->
    <section class="sec-about" id="about">
        <div class="container">
            <div class="about-split">
                <div class="about-img-col reveal">
                    <div class="about-img-wrap">
                        <img src="/images/about-interior.png" alt="Inside Hestia's Restaurant" loading="lazy" width="600" height="450">
                        <div class="about-img-accent"></div>
                    </div>
                    <div class="about-float-card">
                        <div class="about-float-icon">⭐</div>
                        <div class="about-float-info">
                            <strong>4.9 / 5</strong>
                            <span>2,500+ Reviews</span>
                        </div>
                    </div>
                </div>

                <div class="about-text-col reveal reveal-delay-2">
                    <span class="sec-label">Our Story</span>
                    <h2 class="sec-title">A Place That Feels<br>Like <em>Home</em></h2>
                    <p>Hestia's Restaurant was born from a simple belief: that great food brings people together. Named after the Greek goddess of hearth and home, we craft every dish with warmth, care, and generous portions.</p>
                    <p>Whether you're gathering with family for a Sunday meal, ordering party trays for a celebration, or craving something comforting — Hestia's is your place.</p>

                    <div class="about-services">
                        <div class="about-svc">
                            <div class="about-svc-icon">🍽️</div>
                            <div><h4>Dine In</h4><p>Cozy ambiance for every occasion</p></div>
                        </div>
                        <div class="about-svc">
                            <div class="about-svc-icon">🥡</div>
                            <div><h4>Takeout</h4><p>Quick pickup, same great taste</p></div>
                        </div>
                        <div class="about-svc">
                            <div class="about-svc-icon">🎉</div>
                            <div><h4>Events</h4><p>Private dining & gatherings</p></div>
                        </div>
                        <div class="about-svc">
                            <div class="about-svc-icon">🚚</div>
                            <div><h4>Catering</h4><p>Party trays & bulk orders</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== GALLERY / EXPERIENCE ===== -->
    <section class="sec-gallery" id="gallery">
        <div class="sec-gallery-bg" aria-hidden="true">
            <div class="sec-gallery-gradient"></div>
        </div>
        <div class="container">
            <div class="sec-header centered reveal">
                <span class="sec-label sec-label-light">The Experience</span>
                <h2 class="sec-title sec-title-light">Step Inside <em>Hestia's</em></h2>
                <p class="sec-desc sec-desc-light">From the ambiance to the plate — every detail is crafted with care.</p>
            </div>
            <div class="gallery-grid reveal">
                <div class="gallery-item gallery-item-wide">
                    <img src="/images/about-interior.png" alt="Restaurant interior" loading="lazy" width="800" height="500">
                    <div class="gallery-item-overlay">
                        <span>Our Dining Room</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="/images/dish-grilled.png" alt="Grilled chicken plating" loading="lazy" width="600" height="450">
                    <div class="gallery-item-overlay">
                        <span>Chef's Plating</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="/images/dish-pasta.png" alt="Pasta close-up" loading="lazy" width="600" height="450">
                    <div class="gallery-item-overlay">
                        <span>Fresh Pasta</span>
                    </div>
                </div>
                <div class="gallery-item gallery-item-wide">
                    <img src="/images/hero-bg.png" alt="Warm restaurant atmosphere" loading="lazy" width="800" height="500">
                    <div class="gallery-item-overlay">
                        <span>Warm Atmosphere</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TESTIMONIALS ===== -->
    <section class="sec-testimonials" id="reviews">
        <div class="container">
            <div class="sec-header centered reveal">
                <span class="sec-label">What People Say</span>
                <h2 class="sec-title">Loved by <em>Families</em> Everywhere</h2>
            </div>

            <div class="testi-grid">
                <div class="testi-card reveal reveal-delay-1" data-tilt>
                    <div class="testi-stars">★★★★★</div>
                    <p class="testi-text">"The family feast bundle was incredible! More than enough food for six of us, and everything was hot and delicious. Our new go-to spot for family dinners."</p>
                    <div class="testi-author">
                        <div class="testi-avatar">MR</div>
                        <div class="testi-info"><strong>Maria R.</strong><span>Regular Customer</span></div>
                    </div>
                </div>

                <div class="testi-card reveal reveal-delay-2" data-tilt>
                    <div class="testi-stars">★★★★★</div>
                    <p class="testi-text">"We ordered catering trays for our office party and everyone was raving! The grilled chicken and pasta were absolute standouts. Will definitely order again."</p>
                    <div class="testi-author">
                        <div class="testi-avatar">JT</div>
                        <div class="testi-info"><strong>James T.</strong><span>Corporate Client</span></div>
                    </div>
                </div>

                <div class="testi-card reveal reveal-delay-3" data-tilt>
                    <div class="testi-stars">★★★★★</div>
                    <p class="testi-text">"Best comfort food in town! The chocolate lava cake alone is worth the trip. The staff is so warm and welcoming — it really does feel like eating at home."</p>
                    <div class="testi-author">
                        <div class="testi-avatar">SC</div>
                        <div class="testi-info"><strong>Sarah C.</strong><span>Food Blogger</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CTA / RESERVATION ===== -->
    <section class="sec-cta" id="contact">
        <div class="sec-cta-bg" aria-hidden="true">
            <div class="sec-cta-gradient"></div>
            <div class="sec-cta-img">
                <img src="/images/hero-bg.png" alt="" loading="lazy" width="1024" height="1024">
            </div>
            <div class="sec-cta-overlay"></div>
            <div class="sec-orb sec-orb-c"></div>
            <div class="sec-orb sec-orb-d"></div>
        </div>
        <div class="container">
            <div class="cta-inner centered reveal">
                <span class="sec-label sec-label-light">Reserve Your Spot</span>
                <h2 class="sec-cta-title">Ready to Dine<br>With <em>Us?</em></h2>
                <p class="sec-desc sec-desc-light">Book a table for your family, friends, or special event. Walk-ins welcome, but reservations guarantee your spot.</p>
                <div class="cta-buttons">
                    <a href="tel:+11234567890" class="sec-btn sec-btn-gold">📞 Call (123) 456-7890</a>
                    <a href="#" class="sec-btn sec-btn-outline-light">Book Online</a>
                </div>
                <div class="cta-info-row">
                    <div class="cta-info-card" data-tilt>
                        <div class="cta-info-icon">📍</div>
                        <h4>Location</h4>
                        <p>123 Hearth Street,<br>Foodville, CA 90210</p>
                    </div>
                    <div class="cta-info-card" data-tilt>
                        <div class="cta-info-icon">🕐</div>
                        <h4>Hours</h4>
                        <p>Mon–Sat: 11am – 10pm<br>Sunday: 10am – 9pm</p>
                    </div>
                    <div class="cta-info-card" data-tilt>
                        <div class="cta-info-icon">📧</div>
                        <h4>Email</h4>
                        <p>hello@hestias.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FOOTER ===== -->
    <footer class="sec-footer">
        <div class="container">
            <div class="footer-top">
                <div class="footer-brand-col">
                    <a href="/" class="footer-logo">
                        <img src="/images/logo.png" alt="Hestia's Restaurant Logo" class="footer-logo-img" width="40" height="40">
                        <span>Hestia's Restaurant</span>
                    </a>
                    <p>Comfort food, generous servings, and a warm atmosphere that brings people together.</p>
                    <div class="footer-social">
                        <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg></a>
                        <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="5"/><circle cx="17.5" cy="6.5" r="1.5" fill="currentColor" stroke="none"/></svg></a>
                        <a href="#" aria-label="Google Maps"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></a>
                    </div>
                </div>
                <div class="footer-links-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#offers">Offers</a></li>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#about">About</a></li>
                    </ul>
                </div>
                <div class="footer-links-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#">Dine In</a></li>
                        <li><a href="#">Takeout</a></li>
                        <li><a href="#">Party Trays</a></li>
                        <li><a href="#">Private Events</a></li>
                    </ul>
                </div>
                <div class="footer-hours-col">
                    <h4>Opening Hours</h4>
                    <ul class="footer-hours-list">
                        <li><span>Monday – Saturday</span><span>11:00 AM – 10:00 PM</span></li>
                        <li><span>Sunday</span><span>10:00 AM – 9:00 PM</span></li>
                    </ul>
                    <div class="footer-contact-line">
                        <span>📞 (123) 456-7890</span>
                        <span>📧 hello@hestias.com</span>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-bar">
                <p>&copy; {{ date('Y') }} Hestia's Restaurant. All rights reserved.</p>
                <p>Made with ❤️ for food lovers everywhere.</p>
            </div>
        </div>
    </footer>

</body>
</html>
