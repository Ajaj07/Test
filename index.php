<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Design Portfolio</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Loader -->
    <div class="loader">
        <div class="loader-content">
            <div class="loader-circle"></div>
            <h2>Loading Creative Space</h2>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <h1>Design<span>Studio</span></h1>
        </div>
        <div class="nav-links">
            <a href="#home" class="active">Home</a>
            <a href="#gallery">Gallery</a>
            <a href="#categories">Categories</a>
            <a href="#contact">Contact</a>
        </div>
        <div class="menu-btn">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Crafting Beautiful Moments</h1>
            <p>Specializing in Invitation Cards, Greeting Cards & Birthday Cards</p>
            <button class="cta-btn">View Gallery</button>
        </div>
        <div class="floating-cards">
            <div class="card card-1"></div>
            <div class="card card-2"></div>
            <div class="card card-3"></div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery" id="gallery">
        <h2>Featured Designs</h2>
        <div class="swiper-container gallery-swiper">
            <div class="swiper-wrapper">
                <!-- Wedding Cards -->
                <div class="swiper-slide">
                    <div class="card-wrapper">
                        <div class="card-3d">
                            <div class="card-front">
                                <img src="https://picsum.photos/400/600?random=1" alt="Wedding Card">
                                <h3>Elegant Wedding Invitation</h3>
                            </div>
                            <div class="card-back">
                                <h4>Wedding Collection</h4>
                                <p>Luxurious designs for your special day</p>
                                <button>View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Birthday Cards -->
                <div class="swiper-slide">
                    <div class="card-wrapper">
                        <div class="card-3d">
                            <div class="card-front">
                                <img src="https://picsum.photos/400/600?random=2" alt="Birthday Card">
                                <h3>Birthday Celebration</h3>
                            </div>
                            <div class="card-back">
                                <h4>Birthday Collection</h4>
                                <p>Colorful and fun designs for all ages</p>
                                <button>View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Festival Cards -->
                <div class="swiper-slide">
                    <div class="card-wrapper">
                        <div class="card-3d">
                            <div class="card-front">
                                <img src="https://picsum.photos/400/600?random=3" alt="Festival Card">
                                <h3>Festival Greetings</h3>
                            </div>
                            <div class="card-back">
                                <h4>Festival Collection</h4>
                                <p>Spread joy with our festive designs</p>
                                <button>View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories" id="categories">
        <h2>Design Categories</h2>
        <div class="categories-grid">
            <div class="category-card" data-category="wedding">
                <div class="category-content">
                    <i class="fas fa-ring"></i>
                    <h3>Wedding Cards</h3>
                    <p>Elegant & Customizable</p>
                </div>
            </div>
            <div class="category-card" data-category="birthday">
                <div class="category-content">
                    <i class="fas fa-birthday-cake"></i>
                    <h3>Birthday Cards</h3>
                    <p>Fun & Creative</p>
                </div>
            </div>
            <div class="category-card" data-category="festival">
                <div class="category-content">
                    <i class="fas fa-star"></i>
                    <h3>Festival Cards</h3>
                    <p>Traditional & Modern</p>
                </div>
            </div>
            <div class="category-card" data-category="corporate">
                <div class="category-content">
                    <i class="fas fa-building"></i>
                    <h3>Corporate Cards</h3>
                    <p>Professional & Sleek</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <h2>Get In Touch</h2>
        <div class="contact-container">
            <div class="contact-info">
                <h3>Let's Create Something Beautiful</h3>
                <p>Have a design in mind? Let's bring it to life!</p>
                <div class="contact-details">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <p><a href="mailto:saiyadajaj7@gmail.com">saiyadajaj7@gmail.com</a></p>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <p><a href="tel:9499761653">9499761653</a></p>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-location-dot"></i>
                        <p>high-court road bhavnagar</p>
                    </div>
                </div>
            </div>
            <form class="contact-form" action="submit.php" method="POST">
    <input type="text" name="name" placeholder="Your Name" id="name" required>
    <input type="email" name="email" placeholder="Your Email" id="email" required>
    <select name="design" id="design" required>
        <option value="" disabled selected>Select Design Category</option>
        <option value="Wedding Cards">Wedding Cards</option>
        <option value="Birthday Cards">Birthday Cards</option>
        <option value="Festival Cards">Festival Cards</option>
        <option value="Corporate Cards">Corporate Cards</option>
    </select>
    <textarea name="message" id="message" placeholder="Your Message" required></textarea>
    <button type="submit" id="send">Send Message</button>
</form>

        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Design Studio</h3>
                <p>Creating memorable designs for your special moments</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <a href="#home">Home</a>
                <a href="#gallery">Gallery</a>
                <a href="#categories">Categories</a>
                <a href="#contact">Contact</a>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fab fa-behance"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Design Studio. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>

<?php include 'contact-form.php'; ?>

