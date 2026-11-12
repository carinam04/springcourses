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
      <div class="topbar-inner">
        <div class="brand-wrap">
            <img class="brand-logo" src="{{ asset('images/logo.png') }}" alt="Bloom Abroad logo">
            <div class="brand-meta">
                <span class="brand-name">BEST Spring Courses</span>
            </div>
        </div>

        <nav class="main-nav" aria-label="Main navigation">
            <a href="#top">Home</a>
            <a href="https://www.best.eu.org/courses/frequentlyAskedQuestions.jsp" target="_blank" rel="noreferrer">FAQ</a>
            <a href="#testimonials">Testimonials</a>
        </nav>
</div>
    </header>

    <main class="page-shell" id="top">
        <section class="hero">
            <div class="hero-copy">
                <img class="titleimage" src="{{ asset('images/title.png') }}">

            </div>

            <div class="hero-visual" aria-label="Featured cities and spring vibes">
                <!-- 1 -->

                 <a href="#pol1">
                 <div class="scene-card scene-card-large">
                    <div class="scene-badge">Zagreb</div>
                    <h2>How to TrAIn Your Grid</h2>
                  </div>
                </a>

                <div class="scene-grid">
                    <!-- 2 -->
                     <a href="#pol2">
                    <div class="scene-card scene-card-small scene-card-mint">
                        <div class="scene-badge">Thessaloniki</div>
                        <h3>Beyond the taste</h3>
                    </div>
                    </a>
                    <!-- 3 -->
                     <a href="#pol3">
                    <div class="scene-card scene-card-small scene-card-lavender">
                        <div class="scene-badge">Athens</div>
                        <h3>Project Piltover</h3>
                    </div>
                    </a>
                    <!-- 4 -->
                     <a href="#pol4">
                    <div class="scene-card scene-card-small scene-card-peach">
                        <div class="scene-badge">Valencia</div>
                        <h3>The Physics of Boo!</h3>
                    </div>
                    </a>
                    <!-- 5 -->
                     <a href="#pol5">
                    <div class="scene-card scene-card-small scene-card-sky">
                        <div class="scene-badge">Turin</div>
                        <h3>AI need a hero</h3>
                    </div>
                    </a>
                </div>

                <div class="cta-row">
                    <a href="#courses" class="primary-btn1">Explore the courses</a>
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
                <article id="pol1" class="polaroid photo-one">
                    <div class="board-stringm"></div>
                    <img src="{{ asset('images/pinlightblue.png') }}" class="pin">
                    <img class="course-photo photo-1"  src="{{ asset('images/zagreb1.jpg') }}">
                    <div class="course-info">
                        <p class="course-location">Zagreb, Croatia</p>
                        <h3>How to TrAIn Your Grid: The Hidden World of Sustainable Energy</h3>
                        <ul id="detail-list" class="detailpolaroid">
                        <li>4-12 April 2027</li>
                        <li>90.0€</li>
                       </ul>
                    </div>
                    <button type="button" class="course-button" data-course="zagreb">Learn more!</button>
                </article>

                <article id="pol2" class="polaroid photo-two">
                    <img src="{{ asset('images/washitapemov.png') }}" class="washi-tape1">
                    <img class="course-photo photo-2"  src="{{ asset('images/thessaloniki1.jpg') }}">
                    <div class="course-info">
                        <p class="course-location">Thessaloniki, Greece</p>
                        <h3>Beyond the taste: Fermentation, Innovation and Sustainability</h3>
                        <ul id="detail-list" class="detailpolaroid">
                        <li>11-19 April 2027</li>
                        <li>90.0€</li>
                       </ul>
                    </div>
                    <button type="button" class="course-button" data-course="thessaloniki">Learn more!</button>
                </article>

                <article id="pol3" class="polaroid photo-three">
                    <div class="board-stringm"></div>
                    <img src="{{ asset('images/pinpink.png') }}" class="pin">
                    <img class="course-photo photo-3"  src="{{ asset('images/athens1.jpg') }}">
                    <div class="course-info">
                        <p class="course-location">Athens, Greece</p>
                        <h3>Project Piltover: Engineering Sustainable Smart Cities</h3>
                        <ul id="detail-list" class="detailpolaroid">
                        <li>18-26 April 2027</li>
                        <li>72.0€</li>
                       </ul>
                    </div>
                    <button type="button" class="course-button" data-course="athens">Learn more!</button>
                </article>

                <article id="pol4" class="polaroid photo-four">
                    <img src="{{ asset('images/washitapecarouri.png') }}" class="washi-tape2">
                    <img class="course-photo photo-4"  src="{{ asset('images/valencia1.jpg') }}">
                    <div class="course-info">
                        <p class="course-location">Valencia, Spain</p>
                        <h3>The Physics of Boo! Science has never been this scary</h3>
                        <ul id="detail-list" class="detailpolaroid">
                        <li>25 April- 2 May 2027</li>
                        <li>80.0€</li>
                       </ul>
                    </div>
                    <button type="button" class="course-button" data-course="valencia">Learn more!</button>
                </article>

                <article id="pol5" class="polaroid photo-five">
                    <img src="{{ asset('images/washitapeverde.png') }}" class="washi-tape3">
                    <img class="course-photo photo-5"  src="{{ asset('images/turin1.jpg') }}">
                    <div class="course-info">
                        <p class="course-location">Turin, Italy</p>
                        <h3>AI need a hero: Innovating the Future with AI</h3>
                        <ul id="detail-list" class="detailpolaroid">
                        <li>2-9 May 2027</li>
                        <li>80.0€</li>
                       </ul>
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
                    <p> Description </p>
                    <p id="detail-summary">
                        Learn how to shape vibrant stories through visual language, creative practice, and personal expression.
                    </p>
                    <ul id="detail-list">
                        <li>4-12 April 2027</li>
                        <li>90.0€</li>
                    </ul>
                    <a class="primary-btn2" href="https://www.best.eu.org/event/apply/approveResponsibilities.jsp?activity=k3bk10u&season=ic31f0m&type=500" target="_blank" rel="noreferrer">Apply now</a>
                </div>
            </div>
        </section>

        <section class="testimonials-section" id="testimonials">
            <div class="section-heading center-heading">
                <p class="eyebrow">Testimonials</p>
                <h2>Past students still carry the courses' magic with them.</h2>
            </div>

            <div class="envelope-shell">
                <button type="button" class="testimonial-arrow left" aria-label="Previous testimonial">&#8249;</button>

                <div class="envelope" aria-live="polite">
                    <div class="envelope-top"></div>
                </div>
                <div class="paper" id="testimonial-paper">
                        <div class="quote-mark">“</div>
                        <p id="testimonial-text">
                            I came home with more confidence, stronger ideas, and friends from all over the world.
                        </p>
                        <div class="person-row">
                            <strong id="testimonial-name">Lina M.</strong>
                            <span id="testimonial-course">Paris Creative Storytelling</span>
                            <img class="testimonial-photo" id="testimonial-photo" src="" >
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
                        <span class="brand-name">BEST</span>
                    </div>
                </div>
            </div>

            <div>
                
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
                summary: 'Lorem ipsum dolor sit amet consectetur adipiscing elit mollit, nisi laboris. Duis do laborum enim dolore iusto. Ipsum sit aute accusamus ipsum amet veniam labore, proident reprehenderit aliquip at ullamco anim. Occaecat exercitation ut sed laborum veniam commodo et. Sed dolore qui, at exercitation cillum sunt esse esse ex occaecat. Proident adipiscing occaecat nisi eos sint. Qui magna sed quis amet cillum est. Eu sunt laborum dolore ipsum iusto. Exercitation nostrud duis eos cillum nulla lorem mollit, non laborum. Cillum ea deserunt officia eu velit iusto. Sint eos velit nisi sed occaecat at deserunt, laborum incididunt non. Fugiat laboris qui iusto id pariatur ex anim ut, est commodo magna. Nostrud ipsum pariatur ullamco eu elit cillum ipsum incididunt, eu lorem. Occaecat sunt dignissimos ut pariatur sed deserunt ea.',
                points: ['4-12 April 2027', '90.0€'],
                photo: "linear-gradient(rgba(27, 23, 53, 0.15), rgba(27, 23, 53, 0.28)), url('/images/zagreb2.jpg')"
            },
            thessaloniki: {
                title: 'Beyond the taste: Fermentation, Innovation and Sustainability',
                location: 'Thessaloniki, Greece',
                summary: 'Lorem ipsum dolor sit amet consectetur adipiscing elit mollit, nisi laboris. Duis do laborum enim dolore iusto. Ipsum sit aute accusamus ipsum amet veniam labore, proident reprehenderit aliquip at ullamco anim. Occaecat exercitation ut sed laborum veniam commodo et. Sed dolore qui, at exercitation cillum sunt esse esse ex occaecat. Proident adipiscing occaecat nisi eos sint. Qui magna sed quis amet cillum est. Eu sunt laborum dolore ipsum iusto. Exercitation nostrud duis eos cillum nulla lorem mollit, non laborum. Cillum ea deserunt officia eu velit iusto. Sint eos velit nisi sed occaecat at deserunt, laborum incididunt non. Fugiat laboris qui iusto id pariatur ex anim ut, est commodo magna. Nostrud ipsum pariatur ullamco eu elit cillum ipsum incididunt, eu lorem. Occaecat sunt dignissimos ut pariatur sed deserunt ea.',
                points: ['11-19 April 2027', '90.0€'],
                photo: "linear-gradient(rgba(27, 23, 53, 0.15), rgba(27, 23, 53, 0.28)), url('/images/thessaloniki2.jpg')"
            },
            athens: {
                title: 'Project Piltover: Engineering Sustainable Smart Cities',
                location: 'Athens, Greece',
                summary: 'Lorem ipsum dolor sit amet consectetur adipiscing elit mollit, nisi laboris. Duis do laborum enim dolore iusto. Ipsum sit aute accusamus ipsum amet veniam labore, proident reprehenderit aliquip at ullamco anim. Occaecat exercitation ut sed laborum veniam commodo et. Sed dolore qui, at exercitation cillum sunt esse esse ex occaecat. Proident adipiscing occaecat nisi eos sint. Qui magna sed quis amet cillum est. Eu sunt laborum dolore ipsum iusto. Exercitation nostrud duis eos cillum nulla lorem mollit, non laborum. Cillum ea deserunt officia eu velit iusto. Sint eos velit nisi sed occaecat at deserunt, laborum incididunt non. Fugiat laboris qui iusto id pariatur ex anim ut, est commodo magna. Nostrud ipsum pariatur ullamco eu elit cillum ipsum incididunt, eu lorem. Occaecat sunt dignissimos ut pariatur sed deserunt ea.',
                points: ['18-26 April 2027', '72.0€'],
                photo: "linear-gradient(rgba(27, 23, 53, 0.15), rgba(27, 23, 53, 0.28)), url('/images/athens2.jpg')"
            },
            valencia: {
                title: 'The Physics of Boo! Science has never been this scary',
                location: 'Valencia, Spain',
                summary: 'Lorem ipsum dolor sit amet consectetur adipiscing elit mollit, nisi laboris. Duis do laborum enim dolore iusto. Ipsum sit aute accusamus ipsum amet veniam labore, proident reprehenderit aliquip at ullamco anim. Occaecat exercitation ut sed laborum veniam commodo et. Sed dolore qui, at exercitation cillum sunt esse esse ex occaecat. Proident adipiscing occaecat nisi eos sint. Qui magna sed quis amet cillum est. Eu sunt laborum dolore ipsum iusto. Exercitation nostrud duis eos cillum nulla lorem mollit, non laborum. Cillum ea deserunt officia eu velit iusto. Sint eos velit nisi sed occaecat at deserunt, laborum incididunt non. Fugiat laboris qui iusto id pariatur ex anim ut, est commodo magna. Nostrud ipsum pariatur ullamco eu elit cillum ipsum incididunt, eu lorem. Occaecat sunt dignissimos ut pariatur sed deserunt ea.',
                points: ['25 April- 2 May 2027', '80.0€'],
                photo: "linear-gradient(rgba(27, 23, 53, 0.15), rgba(27, 23, 53, 0.28)), url('/images/valencia2.jpg')"
            },
            turin: {
                title: 'AI need a hero: Innovating the Future with AI',
                location: 'Turin, Italy',
                summary: 'Lorem ipsum dolor sit amet consectetur adipiscing elit mollit, nisi laboris. Duis do laborum enim dolore iusto. Ipsum sit aute accusamus ipsum amet veniam labore, proident reprehenderit aliquip at ullamco anim. Occaecat exercitation ut sed laborum veniam commodo et. Sed dolore qui, at exercitation cillum sunt esse esse ex occaecat. Proident adipiscing occaecat nisi eos sint. Qui magna sed quis amet cillum est. Eu sunt laborum dolore ipsum iusto. Exercitation nostrud duis eos cillum nulla lorem mollit, non laborum. Cillum ea deserunt officia eu velit iusto. Sint eos velit nisi sed occaecat at deserunt, laborum incididunt non. Fugiat laboris qui iusto id pariatur ex anim ut, est commodo magna. Nostrud ipsum pariatur ullamco eu elit cillum ipsum incididunt, eu lorem. Occaecat sunt dignissimos ut pariatur sed deserunt ea.',
                points: ['2-9 May 2027', '80.0€'],
                photo: "linear-gradient(rgba(27, 23, 53, 0.15), rgba(27, 23, 53, 0.28)), url('/images/turin2.jpg')"
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
                name: 'Anda Bodea',
                course: 'Skopje, North Macedonia',
                text: 'Pe mine, participarea la un curs BEST m-a ajutat să ies din zona de confort foarte mult, mi-am făcut o mulțime de prieteni noi peste tot în Europa și mi-am exersat engleza. Aș recomanda 100% experiența, mai ales dacă ești pasionat de travelling și îți place să experimentezi culturi noi.',
                image: '/images/student1.jpg'

            },
            {
                name: 'Raul Petruț',
                course: 'Torino, Italy',
                text: 'Cursul din Torino a fost primul meu curs și o experiență grozavă. Am cunoscut o mulțime de oameni cu care încă vorbesc. Am stat mai mult de o săptămână și am explorat orașul pentru un preț foarte mic. De-abia aștept următoarea dată când merg la un curs!',
                image: '/images/student2.jpg'
            },
            {
                name: 'Patricia Fătu',
                course: 'Valladolid, Spain',
                text: 'Nu cunoșteam pe nimeni, nu au fost alți participanți din România și a fost prima dată când am călătorit singură. În ciuda acestor lucruri, m-am simțit ca acasă încă din prima zi! Mi-am făcut mulți prieteni, am vizitat mai multe orașe și am rămas cu amintiri la care mă gândesc cu drag.',
                image: '/images/student3.jpg'
            },
            {
                name: 'Riana Horvath',
                course: 'Istanbul, Turkyie',
                text: 'A fost highlight-ul verii mele!! Combinația perfectă între fun și util. E imposibil să nu-ți faci prieteni când ești înconjurat de oameni atât de faini. Pur și simplu trăiești momentul, te bucuri de tot și ajungi să faci o grămadă de lucruri pe care, în mod normal, nu le-ai fi făcut.',
                image: '/images/student4.jpg'
            },
            {
                name: 'Bianca Lungu',
                course: 'Vienna, Austria',
                text: 'Toată experiența cursului se simte exact ca o pauză din orice rutină obișnuită. Nu se pot descrie în cuvinte toate lucrurile noi pe care le experimentezi, cunoștințele pe care le câștigi și interacțiunea cu oamenii. Aș recomanda oricui să își pregătească curajul și entuziasmul de a aplica la cursuri.',
                image: '/images/student5.jpg'
            },
            {
                name: 'Raul Modi',
                course: 'Skopje, North Macedonia',
                text: 'Pentru mine, să particip la un curs BEST a fost o experiență mai plăcută decât mă așteptam. În fiecare zi simțeam că mă distrez tot mai bine și nicio secundă nu a fost lipsită de activitate. Consider că e o experiență pe care toată lumea trebuie să o încerce măcar o dată, pentru că poți descoperi o nouă latură a ta.',
                image: '/images/student6.jpg'
            }
        ];

        const testimonialText = document.getElementById('testimonial-text');
        const testimonialName = document.getElementById('testimonial-name');
        const testimonialCourse = document.getElementById('testimonial-course');
        const testimonialPhoto = document.getElementById('testimonial-photo');
        let currentTestimonial = 0;

        function renderTestimonial(index) {
            const item = testimonials[index];
            testimonialText.textContent = item.text;
            testimonialName.textContent = item.name;
            testimonialCourse.textContent = item.course;
            testimonialPhoto.src = item.image;
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
