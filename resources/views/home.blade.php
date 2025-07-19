<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Svarnex - Your Bridge to Service Excellence</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

</head>
<body>
    <nav class="fixed w-full py-4 shadow-lg">
        <div class="container flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <img src="{{ asset('images/svarnex-logo.png') }}" alt="Svarnex Logo" class="h-8 w-auto">
                <a href="#home" class="text-2xl font-bold text-white">Svarnex</a>
            </div>

            <button id="mobileMenuButton" class="md:hidden text-white focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>

            <div id="navigationLinks" class="hidden md:flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-8 items-center md:static md:w-auto md:bg-transparent md:p-0 md:shadow-none absolute top-full left-0 w-full bg-black p-4 shadow-lg">
                <a href="#about" class="font-medium">About Us</a>
                <a href="#services" class="font-medium">Services</a>
                <a href="#consultation" class="font-medium">Consultation</a>
                <a href="#contact" class="font-medium">Contact Us</a>
            </div>
        </div>
    </nav>

    <section id="home" class="hero-section">
        <div class="container hero-content">
            <div class="md:w-1/2 flex justify-center">
                <img src="{{ asset('images/banner.jpeg') }}" alt="Coding and Innovation" class="hero-image">
            </div>
            <div class="md:w-1/2 p-4">
                <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Svarnex: Your Bridge to Service Excellence</h1>
                <p class="text-lg md:text-xl text-white">Svarnex is a digital solutions agency helping businesses grow through modern web, app, SEO, and data services. We are a company that finds service providers and service seekers and become a bridge between them. For service providers, we act as an agency that brings them leads, and for the seeker, we act as an agency that searches for providers based on their requirements.</p>
            </div>
        </div>
    </section>

    <section id="about" class="section-padding bg-black">
        <div class="container">
            <h2 class="section-heading">About Us</h2>
            <div class="text-center max-w-3xl mx-auto text-lg text-white">
                <p class="mb-4">At Svarnex, we empower businesses to thrive in the digital world through smart, scalable tech solutions.</p>
                <p class="mb-4">From web and mobile app development to digital marketing and data analytics, we deliver tailored services that bridge the gap between ideas and execution.</p>
                <p>Built on trust, innovation, and performance, Svarnex is your partner in long-term digital growth. Whether you're a startup or an established brand, we help you grow, the smart way. We are a completely remote company based in India.</p>
            </div>
        </div>
    </section>

    <section id="services" class="section-padding bg-black">
        <div class="container">
            <h2 class="section-heading">Our Services</h2>
            <div class="carousel-container">
                <div class="carousel-track" id="servicesCarouselTrack">
                    <div class="carousel-item">
                        <div class="service-card" data-service="Web-Development">
                            <img src="{{ asset('images/web.jpeg') }}" alt="Web Development">
                            <h3>Web-Development</h3>
                            <p>Crafting responsive and dynamic web solutions tailored to your needs, ensuring a strong online presence.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="service-card" data-service="Data Management (Data Analytics)">
                            <img src="{{ asset('images/data.jpg') }}" alt="Data Management">
                            <h3>Data Management (Data Analytics)</h3>
                            <p>Transforming raw data into actionable insights for informed decisions and strategic growth.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="service-card" data-service="Android / Flutter Development">
                            <img src="{{ asset('images/app.png') }}" alt="Android / Flutter Development">
                            <h3>Android / Flutter Development</h3>
                            <p>Building high-performance, cross-platform mobile applications for both Android and iOS.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="service-card" data-service="Digital Marketing">
                            <img src="{{ asset('images/market.jpg') }}" alt="Digital Marketing">
                            <h3>Digital Marketing</h3>
                            <p>Boosting your online presence through comprehensive strategies including SEO, SEM, and content marketing.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-nav-button carousel-prev" onclick="moveCarousel(-1)">&#10094;</button>
                <button class="carousel-nav-button carousel-next" onclick="moveCarousel(1)">&#10095;</button>
            </div>
            <div class="carousel-dots" id="carouselDots">
                </div>
        </div>
    </section>

     <section id="consultation" class="section-padding bg-black text-center">
        <div class="container">
            <h2 class="section-heading">Get Your Free Consultation</h2>
            <p class="text-lg text-white mb-8 max-w-2xl mx-auto">Ready to take your business to the next level? Schedule a free consultation with us to discuss your needs and how Svarnex can help you achieve your goals.</p>
            <button onclick="openConsultationModal()" class="submit-button text-xl px-8 py-3 rounded-full">Book a Consultation</button>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2025 Svarnex. All rights reserved. Made with ❤️ in India.</p>
            <div class="social-icons-footer">
                <a href="https://www.instagram.com/svarnex/" target="_blank" aria-label="Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                </a>
                <a href="https://www.linkedin.com/company/svarnex/" target="_blank" aria-label="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucude-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg>
                </a>
            </div>
        </div>
    </footer>

    <div id="messageBox" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-white p-8 rounded-lg shadow-lg text-center max-w-sm mx-auto">
            <p id="messageContent" class="text-gray-800 text-lg mb-4"></p>
            <button onclick="hideMessageBox()" class="bg-DAA520 text-white px-6 py-2 rounded-md hover:bg-B8860B transition">Close</button>
        </div>
    </div>

    <div id="consultationModal" class="modal-overlay hidden">
        <div class="modal-content">
            <button class="modal-close-button" onclick="closeModal('consultationModal')">&times;</button>
            <h3 class="section-heading !text-3xl !mb-4">Book Your Free Consultation</h3>
            <form id="consultationForm" method="POST" action="{{ route('client.store') }}">
                @csrf
                <div class="form-group mb-4">
                    <label for="name">Name</label>
                    <input id="consultation_name" type="text" name="name" required>
                </div>
                <div class="form-group mb-4">
                    <label for="email">Email</label>
                    <input id="consultation_email" type="email" name="email" required>
                </div>
                <div class="form-group mb-4">
                    <label for="phone">Description</label>
                    <input id="consultation_phone" type="text" name="phone" required>
                </div>
                <div class="form-group mb-4">
                    <label for="date_time">Preferred Date and Time</label>
                    <input id="consultation_date_time" type="text" name="date_time" required>
                </div>
                <button type="submit" class="submit-button w-full">Book Now</button>
                <div id="consultationMessage" class="success-message hidden"></div>
            </form>
        </div>
    </div>


    <div id="serviceSamplesModal" class="modal-overlay hidden">
       <div class="modal-content">
           <button class="modal-close-button" onclick="closeModal('serviceSamplesModal')">&times;</button>
           <h3 class="section-heading !text-3xl !mb-4">Web Development Samples & Pricing</h3>
           <p class="service-modal-description">Explore our flexible web development packages designed to fit your business needs and budget.</p>
           <div class="modal-body">
               <div class="flex flex-wrap justify-around">
                   <div class="border border-gray-700 p-5 m-2 rounded-lg flex-1 min-w-[250px] max-w-[300px] text-center bg-gray-800 shadow-lg">
                       <h3 class="text-xl font-semibold mb-3 text-DAA520">Static Website</h3>
                       <ul class="text-white text-left mb-4 list-disc list-inside">
                           <li>2-4 Pages</li>
                           <li>Basic Hosting</li>
                           <li>Responsive Design</li>
                           <li><strong class="text-2xl font-bold text-white">Price: $XXX</strong></li>
                       </ul>
                       <button class="bg-DAA520 hover:bg-B8860B text-white py-2 px-4 rounded-md transition duration-300">Select Plan</button>
                   </div>

                   <div class="border border-gray-700 p-5 m-2 rounded-lg flex-1 min-w-[250px] max-w-[300px] text-center bg-gray-800 shadow-lg">
                       <h3 class="text-xl font-semibold mb-3 text-DAA520">Dynamic Website</h3>
                       <ul class="text-white text-left mb-4 list-disc list-inside">
                           <li>8-10 Pages</li>
                           <li>Advanced Hosting</li>
                           <li>CMS Integration</li>
                           <li>Basic SEO</li>
                           <li><strong class="text-2xl font-bold text-white">Price: $YYY</strong></li>
                       </ul>
                       <button class="bg-DAA520 hover:bg-B8860B text-white py-2 px-4 rounded-md transition duration-300">Select Plan</button>
                   </div>

                   <div class="border border-gray-700 p-5 m-2 rounded-lg flex-1 min-w-[250px] max-w-[300px] text-center bg-gray-800 shadow-lg">
                       <h3 class="text-xl font-semibold mb-3 text-DAA520">E-commerce Website</h3>
                       <ul class="text-white text-left mb-4 list-disc list-inside">
                           <li>Product Catalog</li>
                           <li>Payment Gateway</li>
                           <li>Inventory Management</li>
                           <li>Advanced Security</li>
                           <li><strong class="text-2xl font-bold text-white">Price: $ZZZ</strong></li>
                       </ul>
                       <button class="bg-DAA520 hover:bg-B8860B text-white py-2 px-4 rounded-md transition duration-300">Select Plan</button>
                   </div>
               </div>
           </div>
       </div>
    </div>

    <div id="templateDemoModal" class="modal-overlay hidden">
    <div class="modal-content">
        <button class="modal-close-button" onclick="closeModal('templateDemoModal')">&times;</button>
        <div class="modal-body">
            <p>AI-suggested templates will appear here.</p>
        </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        // Mobile Menu Toggle
        document.getElementById('mobileMenuButton').addEventListener('click', function () {
            const navLinks = document.getElementById('navigationLinks');
            navLinks.classList.toggle('hidden');
            navLinks.classList.toggle('flex');
            navLinks.classList.toggle('absolute');
            navLinks.classList.toggle('top-full');
            navLinks.classList.toggle('left-0');
            navLinks.classList.toggle('w-full');
            navLinks.classList.toggle('bg-black');
            navLinks.classList.toggle('p-4');
            navLinks.classList.toggle('shadow-lg');
            // Remove desktop classes if present
            if (navLinks.classList.contains('md:flex')) {
                navLinks.classList.remove('md:flex');
            }
        });

        // Close mobile menu when a link is clicked
        document.querySelectorAll('#navigationLinks a').forEach(link => {
            link.addEventListener('click', () => {
                const navLinks = document.getElementById('navigationLinks');
                if (!navLinks.classList.contains('hidden')) { // Only hide if it's currently open
                    navLinks.classList.add('hidden');
                    navLinks.classList.remove('flex', 'absolute', 'top-full', 'left-0', 'w-full', 'bg-black', 'p-4', 'shadow-lg');
                    navLinks.classList.add('md:flex'); // Restore desktop class
                }
            });
        });

        // Carousel Functionality
        let currentSlide = 0;
        const carouselTrack = document.getElementById('servicesCarouselTrack');
        const carouselItems = document.querySelectorAll('.carousel-item');
        const totalSlides = carouselItems.length;
        const carouselDotsContainer = document.getElementById('carouselDots');

        function updateCarousel() {
            carouselTrack.style.transform = `translateX(-${currentSlide * 100}%)`;
            updateDots();
        }

        function moveCarousel(direction) {
            currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
            updateCarousel();
        }

        function createDots() {
            carouselDotsContainer.innerHTML = ''; // Clear existing dots
            for (let i = 0; i < totalSlides; i++) {
                const dot = document.createElement('span');
                dot.classList.add('dot');
                if (i === currentSlide) {
                    dot.classList.add('active');
                }
                dot.addEventListener('click', () => {
                    currentSlide = i;
                    updateCarousel();
                });
                carouselDotsContainer.appendChild(dot);
            }
        }

        function updateDots() {
            const dots = document.querySelectorAll('.dot');
            dots.forEach((dot, index) => {
                if (index === currentSlide) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }

        // Initialize carousel on page load
        document.addEventListener('DOMContentLoaded', () => {
            createDots();
            updateCarousel(); // Ensure correct initial position and dot
        });

        // Automatic carousel advance (optional)
        // setInterval(() => {
        //     moveCarousel(1);
        // }, 5000); // Change slide every 5 seconds


        // Modal Functions
        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Prevent scrolling background
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
            document.body.style.overflow = ''; // Restore scrolling
        }

        function showMessage(message, isSuccess = true) {
            const messageBox = document.getElementById('messageBox');
            const messageContent = document.getElementById('messageContent');
            messageContent.textContent = message;
            messageContent.classList.toggle('text-green-800', isSuccess);
            messageContent.classList.toggle('bg-green-100', isSuccess);
            messageContent.classList.toggle('text-red-800', !isSuccess);
            messageContent.classList.toggle('bg-red-100', !isSuccess);
            messageBox.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function hideMessageBox() {
            document.getElementById('messageBox').classList.add('hidden');
            document.body.style.overflow = '';
        }

        // Service Samples Modal logic (now opens from service cards)
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('click', function() {
                // In a real application, you might fetch specific details based on data-service
                // For this example, we just open the general service samples modal.
                openModal('serviceSamplesModal');
            });
        });

        // Consultation Modal Functions
        function openConsultationModal() {
            openModal('consultationModal');
            // Initialize flatpickr when the modal is opened
            const now = new Date();
            const minDateTime = new Date(now.getTime() + 3 * 60 * 60 * 1000); // Add 3 hours
            flatpickr("#consultation_date_time", {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
                minDate: minDateTime,
                altInput: true,
                altFormat: "F j, Y h:i K",
            });
            // Clear any previous success/error messages
            document.getElementById('consultationMessage').classList.add('hidden');
            document.getElementById('consultationMessage').textContent = '';
            document.getElementById('consultationForm').reset(); // Clear form fields
        }

        async function submitConsultationForm() {
            const form = document.getElementById('consultationForm');
            const formData = new FormData(form);
            const consultationMessageDiv = document.getElementById('consultationMessage');

            // Simulate API call for demonstration
            // In a real Laravel application, you would make an AJAX request here
            // e.g., using fetch or Axios:
            // const response = await fetch('/api/client/bookings', {
            //     method: 'POST',
            //     body: JSON.stringify(Object.fromEntries(formData)),
            //     headers: {
            //         'Content-Type': 'application/json',
            //         'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // For Laravel CSRF
            //     }
            // });

            // Simulating a delay and success/error
            consultationMessageDiv.classList.remove('hidden');
            consultationMessageDiv.textContent = 'Submitting your request...';
            consultationMessageDiv.classList.remove('success-message', 'text-red-700', 'bg-red-100');
            consultationMessageDiv.classList.add('text-gray-500', 'bg-gray-800'); // Neutral loading style

            await new Promise(resolve => setTimeout(resolve, 1500)); // Simulate network delay

            const success = Math.random() > 0.1; // 90% chance of success for demo

            if (success) {
                consultationMessageDiv.textContent = 'Your consultation request has been successfully submitted! We will contact you soon.';
                consultationMessageDiv.classList.remove('text-gray-500', 'bg-gray-800', 'text-red-700', 'bg-red-100');
                consultationMessageDiv.classList.add('success-message');
                form.reset(); // Reset form on success
            } else {
                consultationMessageDiv.textContent = 'Failed to submit your request. Please try again.';
                consultationMessageDiv.classList.remove('text-gray-500', 'bg-gray-800', 'success-message');
                consultationMessageDiv.classList.add('text-red-700', 'bg-red-100');
            }
        }
    </script>
</body>
</html>
