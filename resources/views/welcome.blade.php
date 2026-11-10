<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloom Abroad | Spring Student Courses</title>
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>
<body>
    <header class="topbar">
        <div class="brand-wrap">
            <img class="brand-logo" src="{{ asset('images/logo.png') }}" alt="Bloom Abroad logo">
            <div class="brand-meta">
                <span class="brand-name">BEST Courses</span>
                <small>Spring student programs</small>
            </div>
        </div>

        <nav class="main-nav" aria-label="Main navigation">
            <a href="#top">Home</a>
            <a href="https://www.best.eu.org/courses/frequentlyAskedQuestions.jsp" target="_blank" rel="noreferrer">FAQ</a>
            <a href="#testimonials">Testimonials</a>
        </nav>
    </header>

    <main class="page-shell" id="top">
        <section class="hero">
            <div class="hero-copy">
                <img class="titleimage" src="{{ asset('images/title.png') }}">

            </div>

            <div class="hero-visual" aria-label="Featured cities and spring vibes">
                <!-- 1 -->
                <div class="scene-card scene-card-large">
                    <div class="scene-badge">Paris</div>
                    <h2>How to TrAIn Your Grid</h2>
                </div>

                <div class="scene-grid">
                    <!-- 2 -->
                    <div class="scene-card scene-card-small scene-card-mint">
                        <div class="scene-badge">Lisbon</div>
                        <h3>Beyond the taste</h3>
                    </div>
                    <!-- 3 -->
                    <div class="scene-card scene-card-small scene-card-lavender">
                        <div class="scene-badge">Kyoto</div>
                        <h3>Project Piltover</h3>
                    </div>
                    <!-- 4 -->
                    <div class="scene-card scene-card-small scene-card-peach">
                        <div class="scene-badge">Barcelona</div>
                        <h3>The Physics of Boo!</h3>
                    </div>
                    <!-- 5 -->
                    <div class="scene-card scene-card-small scene-card-sky">
                        <div class="scene-badge">Seoul</div>
                        <h3>AI need a hero</h3>
                    </div>
                </div>

                <div class="cta-row">
                    <a href="#courses" class="primary-btn">Explore the courses</a>
                    <a href="#testimonials" class="secondary-btn">See students' testimonials</a>
                </div>
            </div>
        </section>
        <img class="arrow" src="{{ asset('images/arrow.png') }}">
        <p class="deadline">Applications end on November 29, 2026.</p>
        <div class="countdown-wrap">
                 <div class="progress-block" aria-label="Registration countdown">
                    <div class="progress-meta">
                        <span>Hurry and sign up!</span>
                        <strong id="days-left-text">18 days left</strong>
                    </div>
                    <div id="my-progress-bar" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" data-deadline="2026-11-29T23:00:00">
                        <span class="progress-fill" style="width: 0%"></span>
                    </div>
                 </div>
                </div>

        <section id="courses" class="courses-section">
            <div class="section-heading">
                
                <h2>Explore the courses you can attend this spring.</h2>
            </div>
            
            <div class="board-stringd">
                <article class="polaroid photo-one">
                    <div class="board-stringm"></div>
                    <img src="{{ asset('images/pinlightblue.png') }}" class="pin">
                    <div class="course-photo photo-1"></div>
                    <div class="course-info">
                        <p class="course-location">Zagreb, Croatia</p>
                        <h3>How to TrAIn Your Grid: The Hidden World of Sustainable Energy</h3>
                        <p class="course-blurb">Design your own visual stories and build a bold spring portfolio.</p>
                    </div>
                    <button type="button" class="course-button" data-course="zagreb">Learn more!</button>
                </article>

                <article class="polaroid photo-two">
                    <img src="{{ asset('images/washitapemov.png') }}" class="washi-tape1">
                    <div class="course-photo photo-2"></div>
                    <div class="course-info">
                        <p class="course-location">Thessaloniki, Greece</p>
                        <h3>Beyond the taste: Fermentation, Innovation and Sustainability</h3>
                        <p class="course-blurb">Blend art, sustainability, and digital creativity in a vibrant coastal city.</p>
                    </div>
                    <button type="button" class="course-button" data-course="thessaloniki">Learn more!</button>
                </article>

                <article class="polaroid photo-three">
                    <div class="board-stringm"></div>
                    <img src="{{ asset('images/pinpink.png') }}" class="pin">
                    <div class="course-photo photo-3"></div>
                    <div class="course-info">
                        <p class="course-location">Athens, Greece</p>
                        <h3>Project Piltover: Engineering Sustainable Smart Cities</h3>
                        <p class="course-blurb">Explore identity, community, and communication through local stories.</p>
                    </div>
                    <button type="button" class="course-button" data-course="athens">Learn more!</button>
                </article>

                <article class="polaroid photo-four">
                    <img src="{{ asset('images/washitapecarouri.png') }}" class="washi-tape2">
                    <div class="course-photo photo-4"></div>
                    <div class="course-info">
                        <p class="course-location">Valencia, Spain</p>
                        <h3>The Physics of Boo! Science has never been this scary</h3>
                        <p class="course-blurb">Build ideas, test concepts, and pitch projects in a social innovation setting.</p>
                    </div>
                    <button type="button" class="course-button" data-course="valencia">Learn more!</button>
                </article>

                <article class="polaroid photo-five">
                    <img src="{{ asset('images/washitapeverde.png') }}" class="washi-tape3">
                    <div class="course-photo photo-5"></div>
                    <div class="course-info">
                        <p class="course-location">Turin, Italy</p>
                        <h3>AI need a hero: Innovating the Future with AI</h3>
                        <p class="course-blurb">Create inspiring multimedia work with focus on storytelling and community.</p>
                    </div>
                    <button type="button" class="course-button" data-course="turin">Learn more!</button>
                    <img src="{{ asset('images/washitapeverde.png') }}" class="washi-tape4">
                </article>
            </div>
        </section>

        <section class="detail-panel" id="detail-panel" aria-live="polite">
            <div class="detail-header">
                <p class="eyebrow">Selected course</p>
                <h3 id="detail-title">Creative storytelling</h3>
            </div>

            <div class="detail-layout">
                <div class="detail-photo" id="detail-photo"></div>
                <div class="detail-copy">
                    <p class="detail-location" id="detail-location">Zagreb, Croatia</p>
                    <p id="detail-summary">
                        Learn how to shape vibrant stories through visual language, creative practice, and personal expression.
                    </p>
                    <ul id="detail-list">
                        <li>4-12 April 2027</li>
                        <li>Creative workshops</li>
                        <li>90.0€</li>
                    </ul>
                    <a class="primary-btn" href="https://example.com/apply" target="_blank" rel="noreferrer">Apply now</a>
                </div>
            </div>
        </section>

        <section class="testimonials-section" id="testimonials">
            <div class="section-heading center-heading">
                <p class="eyebrow">Student voices</p>
                <h2>Past students still carry the spring magic with them.</h2>
            </div>

            <div class="envelope-shell">
                <button type="button" class="testimonial-arrow left" aria-label="Previous testimonial">&#8249;</button>

                <div class="envelope" aria-live="polite">
                    <div class="envelope-top"></div>
                    <div class="paper" id="testimonial-paper">
                        <div class="quote-mark">“</div>
                        <p id="testimonial-text">
                            I came home with more confidence, stronger ideas, and friends from all over the world.
                        </p>
                        <div class="person-row">
                            <strong id="testimonial-name">Lina M.</strong>
                            <span id="testimonial-course">Paris Creative Storytelling</span>
                        </div>
                    </div>
                </div>

                <button type="button" class="testimonial-arrow right" aria-label="Next testimonial">&#8250;</button>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="footer-wrap">
            <div>
                <div class="brand-wrap footer-brand">
                    <img class="brand-logo" src="{{ asset('images/logo.png') }}" alt="Bloom Abroad logo">
                    <div class="brand-meta">
                        <span class="brand-name">Bloom Abroad</span>
                        <small>Study with joy</small>
                    </div>
                </div>
                <p>Spring learning experiences designed for curious students who want to grow globally.</p>
            </div>

            <div>
                <h4>Explore</h4>
                <ul>
                    <li><a href="#top">Home</a></li>
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                </ul>
            </div>

            <div>
                <h4>Support</h4>
                <ul>
                    <li><a href="https://example.com/faq" target="_blank" rel="noreferrer">FAQ</a></li>
                    <li><a href="https://example.com/contact" target="_blank" rel="noreferrer">Contact</a></li>
                    <li><a href="https://example.com/privacy" target="_blank" rel="noreferrer">Privacy</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script>
        const courseData = {
            zagreb: {
                title: 'How to TrAIn Your Grid: The Hidden World of Sustainable Energy',
                location: 'Zagreb, Croatia',
                summary: 'Turn ideas into meaningful stories through visual communication, collaborative practice, and creative confidence.',
                points: ['4-12 April 2027', 'Creative workshops', '90.0€'],
                photo: "linear-gradient(rgba(27, 23, 53, 0.15), rgba(27, 23, 53, 0.28)), url('https://images.unsplash.com/photo-1502602898657-3e91760cbb34?auto=format&fit=crop&w=900&q=80')"
            },
            thessaloniki: {
                title: 'Beyond the taste: Fermentation, Innovation and Sustainability',
                location: 'Thessaloniki, Greece',
                summary: 'Explore how design, sustainability, and creativity can address real cultural and environmental challenges.',
                points: ['11-19 April 2027', 'Sustainability focus', '90.0€'],
                photo: "linear-gradient(rgba(27, 23, 53, 0.15), rgba(27, 23, 53, 0.28)), url('https://images.unsplash.com/photo-1511818966892-d7d671e672a2?auto=format&fit=crop&w=900&q=80')"
            },
            athens: {
                title: 'Project Piltover: Engineering Sustainable Smart Cities',
                location: 'Athens, Greece',
                summary: 'Discover how culture, identity, and language shape the way people connect across borders and generations.',
                points: ['18-26 April 2027', 'Field-based learning', '72.0€'],
                photo: "linear-gradient(rgba(27, 23, 53, 0.15), rgba(27, 23, 53, 0.28)), url('https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?auto=format&fit=crop&w=900&q=80')"
            },
            valencia: {
                title: 'The Physics of Boo! Science has never been this scary',
                location: 'Valencia, Spain',
                summary: 'Build your own future-focused ideas with entrepreneurial tools, fast feedback cycles, and collaborative energy.',
                points: ['25 April- 2 May 2027', 'Pitch practice', '80.0€'],
                photo: "linear-gradient(rgba(27, 23, 53, 0.15), rgba(27, 23, 53, 0.28)), url('https://images.unsplash.com/photo-1583422409516-2895a77efded?auto=format&fit=crop&w=900&q=80')"
            },
            turin: {
                title: 'AI need a hero: Innovating the Future with AI',
                location: 'Turin, Italy',
                summary: 'Create meaningful media projects that combine storytelling, audience insight, and social awareness.',
                points: ['2-9 May 2027', 'Community storytelling', '80.0€'],
                photo: "linear-gradient(rgba(27, 23, 53, 0.15), rgba(27, 23, 53, 0.28)), url('https://images.unsplash.com/photo-1526772662000-3f88f10405ff?auto=format&fit=crop&w=900&q=80')"
            }
        };

        const detailPanel = document.getElementById('detail-panel');
        const detailTitle = document.getElementById('detail-title');
        const detailLocation = document.getElementById('detail-location');
        const detailSummary = document.getElementById('detail-summary');
        const detailList = document.getElementById('detail-list');
        const detailPhoto = document.getElementById('detail-photo');

        document.querySelectorAll('.course-button').forEach((button) => {
            button.addEventListener('click', () => {
                const course = courseData[button.dataset.course];

                if (!course) {
                    return;
                }

                detailTitle.textContent = course.title;
                detailLocation.textContent = course.location;
                detailSummary.textContent = course.summary;
                detailList.innerHTML = course.points.map((point) => `<li>${point}</li>`).join('');
                detailPhoto.style.backgroundImage = course.photo;
                detailPanel.classList.add('active');
                detailPanel.scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        });

        const testimonials = [
            {
                name: 'Lina M.',
                course: 'Paris Creative Storytelling',
                text: 'I came home with more confidence, stronger ideas, and friends from all over the world.'
            },
            {
                name: 'Ahmed R.',
                course: 'Lisbon Coastal Design Lab',
                text: 'The course felt joyful and creative from day one. I learned so much while enjoying every moment.'
            },
            {
                name: 'Sora H.',
                course: 'Kyoto Culture & Language',
                text: 'It was one of the most meaningful experiences I have had as a student. The support was incredible.'
            },
            {
                name: 'Mila C.',
                course: 'Barcelona Startup Thinking',
                text: 'The projects were exciting, practical, and full of energy. I left with a stronger vision for my future.'
            },
            {
                name: 'Noah K.',
                course: 'Seoul Media & Impact',
                text: 'I found my voice, created a portfolio piece I am proud of, and made lasting memories.'
            },
            {
                name: 'Amelia S.',
                course: 'Paris Creative Storytelling',
                text: 'The experience was inspiring, international, and deeply empowering. I would do it again in a heartbeat.'
            }
        ];

        const testimonialText = document.getElementById('testimonial-text');
        const testimonialName = document.getElementById('testimonial-name');
        const testimonialCourse = document.getElementById('testimonial-course');
        let currentTestimonial = 0;

        function renderTestimonial(index) {
            const item = testimonials[index];
            testimonialText.textContent = item.text;
            testimonialName.textContent = item.name;
            testimonialCourse.textContent = item.course;
        }

        document.querySelector('.testimonial-arrow.left').addEventListener('click', () => {
            currentTestimonial = (currentTestimonial - 1 + testimonials.length) % testimonials.length;
            renderTestimonial(currentTestimonial);
        });

        document.querySelector('.testimonial-arrow.right').addEventListener('click', () => {
            currentTestimonial = (currentTestimonial + 1) % testimonials.length;
            renderTestimonial(currentTestimonial);
        });

        renderTestimonial(currentTestimonial);
    </script>
</body>
</html>
