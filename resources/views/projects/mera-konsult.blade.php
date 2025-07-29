<x-layout>

    <section class="relative">

        <!-- Radial gradient -->
        <div class="absolute flex items-center justify-center top-0 -translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-[800px] aspect-square" aria-hidden="true">
            <div class="absolute inset-0 translate-z-0 bg-purple-500 rounded-full blur-[120px] opacity-30"></div>
            <div class="absolute w-64 h-64 translate-z-0 bg-purple-400 rounded-full blur-[80px] opacity-70"></div>
        </div>

        <!-- Particles animation -->
        <div class="absolute inset-0 h-96 -z-10" aria-hidden="true">
            <canvas data-particle-animation data-particle-quantity="15"></canvas>
        </div>

        <!-- Illustration -->
        <div class="md:block absolute left-1/2 -translate-x-1/2 -mt-16 blur-2xl opacity-90 pointer-events-none -z-10" aria-hidden="true">
            <img src="{{url('frontend/images/page-illustration.svg')}}" class="max-w-none" width="1440" height="427" alt="Page Illustration">
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-32 md:pt-40">

                <div class="md:flex md:justify-between">

                    <!-- Page content -->
                    <div class="md:grow pb-12 md:pb-20">
                        <div class="max-w-[720px]">

                            <div class="flex flex-col lg:flex-row space-y-6 lg:space-y-0 lg:space-x-16">

                                <!-- Back button -->
                                <div class="shrink-0">
                                    <div class="sticky top-6">
                                        <button type="button" onclick="window.history.back()" class="flex hover:cursor-pointer items-center justify-center w-9 h-9 group border border-transparent rounded-full [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-full before:pointer-events-none">
                                            <span class="sr-only">Go back</span>
                                            <svg class="w-4 h-4 fill-purple-500" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.7 14.7l1.4-1.4L3.8 9H16V7H3.8l4.3-4.3-1.4-1.4L0 8z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <!-- Content -->
                                <div>
                                    <article class="pb-12 mb-12 border-b [border-image:linear-gradient(to_right,transparent,var(--color-slate-800),transparent)1]">

                                        <figure class="bg-slate-700/20 border border-slate-300/10 p-4 rounded-3xl mb-4">
                                            <video class="w-full rounded-2xl" src="{{url('frontend/images/mera.mp4')}}" width="586" height="316" autoplay muted playsinline id="video"></video>
                                            <script>
                                                const video = document.getElementById('video');
                                                const canvas = document.createElement('canvas');
                                                const context = canvas.getContext('2d');

                                                video.addEventListener('ended', () => {
                                                    canvas.width = video.videoWidth;
                                                    canvas.height = video.videoHeight;
                                                    context.drawImage(video, 0, 0, canvas.width, canvas.height);
                                                    const lastFrame = canvas.toDataURL('image/png');
                                                    video.setAttribute('poster', lastFrame);
                                                    video.pause();
                                                });

                                            </script>
                                        </figure>

                                        <!-- Post content -->
                                        <div class="w-full flex gap-4 justify-between items-center">
                                            <figure class="bg-slate-700/20 border w-full border-slate-300/10 p-2 rounded-md mb-8" style="overflow:visible;">
                                                <img class="w-full rounded-md cursor-pointer transition-shadow duration-200 hover:shadow-xl hover:shadow-purple-500/30" src="{{url('frontend/images/mera-screenshot1.png')}}" alt="" onclick="openLaravelModal('{{url('frontend/images/mera-screenshot1.png')}}')">
                                            </figure>
                                            <figure class="bg-slate-700/20 border w-full border-slate-300/10 p-2 rounded-md mb-8" style="overflow:visible;">
                                                <img class="w-full rounded-md cursor-pointer transition-shadow duration-200 hover:shadow-xl hover:shadow-purple-500/30" src="{{url('frontend/images/mera-screenshot2.png')}}" alt="" onclick="openLaravelModal('{{url('frontend/images/mera-screenshot2.png')}}')">
                                            </figure>
                                        </div>
                                        <div class="prose max-w-none text-slate-400 prose-headings:text-slate-50 prose-h2:text-xl prose-h2:mt-8 prose-h2:mb-4 prose-p:leading-relaxed prose-a:text-purple-500 prose-a:no-underline hover:prose-a:underline prose-strong:text-slate-50 prose-strong:font-medium prose-blockquote:pl-5 prose-blockquote:xl:-ml-5 prose-blockquote:border-l-2 prose-blockquote:border-purple-500 prose-blockquote:font-medium prose-blockquote:text-slate-300 prose-blockquote:italic">
                                        <h2>Overview</h2>
                                        <p>
                                            <strong>merakonsult.se</strong> was created for MERA Konsultbyrå AB with one clear goal: to communicate professionalism and approachability through a digital presence that is as effective as it is elegant. The site serves as a first impression for potential clients, so every design decision centered around building trust and converting interest into action.
                                        </p>
                                        <p>
                                            While technically simple, the website was strategically designed to enhance user experience (UX), maximize conversion (CRO), and align with search engine best practices (SEO).
                                        </p>

                                        <h2>Design Philosophy</h2>
                                        <p>
                                            Simplicity and clarity guided the design. The use of white space, neutral tones, and confident typography gives the site a sense of calm and credibility—critical qualities for a firm offering financial and advisory services.
                                        </p>
                                        <p>
                                            Rather than overwhelming the visitor with flashy elements, the layout leads them gently through the content with clearly defined sections, intuitive navigation, and strategically placed call-to-actions.
                                        </p>

                                        <h2>UX and Conversion Strategy</h2>
                                        <p>
                                            Every click and scroll was considered from the user’s perspective. The navigation is streamlined to reduce decision fatigue. Service offerings are presented with clarity, making it easy for visitors to understand what the firm does and why it matters.
                                        </p>
                                        <p>
                                            The contact form is positioned at the ideal point in the journey—after trust has been built—and kept deliberately minimal to reduce barriers to entry. Subtle animations and smooth transitions create a sense of quality without slowing performance.
                                        </p>

                                        <h2>SEO and Performance</h2>
                                        <p>
                                            The site was built with SEO fundamentals in mind: semantic HTML, properly structured headings, meta descriptions, and fast load times. All images are optimized and all code is lightweight, resulting in strong performance scores and minimal bounce rates.
                                        </p>
                                        <p>
                                            Local SEO considerations were also taken into account to help the firm rank well within its geographic service area.
                                        </p>

                                        <h2>Challenges and Considerations</h2>
                                        <ul>
                                            <li><strong>Balancing simplicity with memorability:</strong> We wanted the site to be minimal, but not forgettable. We achieved this with strong typography and a distinct tone of voice in the content.</li>
                                            <li><strong>Trust-building design:</strong> As a consultancy, credibility is everything. Testimonials, structured content, and clean visual hierarchy all contribute to trust at a glance.</li>
                                            <li><strong>Spam prevention without friction:</strong> We added CAPTCHA to the contact form without compromising the visual flow of the page, ensuring both security and smooth user experience.</li>
                                        </ul>

                                        <h2>Outcome</h2>
                                        <p>
                                            The result is a fast, mobile-optimized website that communicates professionalism and clarity while supporting business growth. MERA Konsultbyrå AB now has a strong online presence that aligns with their brand values and invites potential clients to take the next step.
                                        </p>
                                        <p>
                                            This project demonstrates how smart design and thoughtful UX can turn a simple frontend site into a powerful conversion tool.
                                        </p>
                                        </div>
                                        <div class="flex items-center justify-center mt-8">
                                            <button onclick="window.open('https://www.merakonsult.se', '_blank')" class="btn-sm text-slate-300 hover:cursor-pointer hover:text-white transition duration-150 ease-in-out group [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/70 before:rounded-full before:pointer-events-none">
                                                <span class="relative inline-flex items-center">
                                                    See live webpage <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1"><i class="fas fa-arrow-up-right-from-square"></i></span>
                                                </span>
                                            </button>
                                        </div>
                                    </article>

                                    <!--<aside class="pl-6 border-l-2 [border-image:linear-gradient(to_bottom,theme(colors.purple.500),theme(colors.pink.500),theme(colors.purple.500))_1]">
                                        <p class="inline-flex font-medium italic text-slate-100 pb-4">“ This custom system has completely changed how we work. It connects our Shopify store with Meta ads, tracks stock, orders, and performance — all in one place. It’s super intuitive, saves us hours every week, and just makes everything run smoother. Honestly, I don’t know how we managed before. ”</p>
                                        <footer class="flex items-center space-x-4">
                                            <img class="shrink-0 rounded-full" src="{{url('frontend/images/axel.jpeg')}}" width="32" height="32" alt="Author" />
                                            <div class="text-sm font-medium text-slate-300">
                                                <strong class="text-slate-100">Axel Björkqvist</strong> - CEO at Spirec
                                            </div>
                                        </footer>
                                    </aside>-->

                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Sidebar -->
                    <aside class="md:w-64 lg:w-80 z-50 md:shrink-0 md:pt-[3.75rem] lg:pt-0">
                        <div class="sticky top-28 md:pl-6 lg:pl-10">

                            <!-- Sidebar content -->
                            <div class="space-y-6">

                                <!-- Widget -->
                                <div class="bg-linear-to-tr from-slate-800 to-slate-800/40 rounded-3xl border border-slate-800 backdrop-blur-md bg-opacity-70">
                                    <div class="px-5 py-6">
                                        <div class="text-center mb-5">
                                            <div class="mb-4">
                                                <div class="relative inline-flex ">
                                                    <div class="w-52 p-1 rounded-md flex items-center justify-center ">
                                                        <img class="w-full" src="{{url('frontend/images/client-mera.png')}}" alt="Icon 08"/>
                                                    </div>
                                                    <!--<img class="absolute top-0 -right-1" src="{{url('frontend/images/star.svg')}}" width="24" height="24" alt="Star" aria-hidden="true" />-->
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="text-sm">
                                            <li class="flex items-center justify-between space-x-2 py-3 border-t [border-image:linear-gradient(to_right,--theme(--color-slate-700/.3),--theme(--color-slate-700),--theme(--color-slate-700/.3))1]">
                                                <span class="text-slate-400">Type</span>
                                                <span class="text-slate-300 font-medium">Basic website</span>
                                            </li>
                                            <li class="flex items-center justify-between space-x-2 py-3 border-t [border-image:linear-gradient(to_right,--theme(--color-slate-700/.3),--theme(--color-slate-700),--theme(--color-slate-700/.3))1]">
                                                <span class="text-slate-400">URL</span>
                                                <a class="text-purple-500 font-medium flex items-center space-x-1" href="https://www.merakonsult.se" target="_blank" >
                                                    <span>merakonsult.se</span>
                                                    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="9" height="9">
                                                        <path d="m1.285 8.514-.909-.915 5.513-5.523H1.663l.01-1.258h6.389v6.394H6.794l.01-4.226z" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="flex items-center justify-between space-x-2 py-3 border-t [border-image:linear-gradient(to_right,--theme(--color-slate-700/.3),--theme(--color-slate-700),--theme(--color-slate-700/.3))1]">
                                                <span class="text-slate-400">Created</span>
                                                <span class="text-slate-300 font-medium">Apr 2025</span>
                                            </li>
                                        </ul>
                                        <div class="flex items-center justify-center mt-6">
                                            <button onclick="window.open('https://www.merakonsult.se', '_blank')" class="btn-sm text-slate-300 hover:cursor-pointer hover:text-white transition duration-150 ease-in-out group [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/70 before:rounded-full before:pointer-events-none">
                                                <span class="relative inline-flex items-center">
                                                    See live webpage <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1"><i class="fas fa-arrow-up-right-from-square"></i></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </aside>

                </div>

            </div>
        </div>
    </section>

    <!-- Modal Component -->
    <div id="laravelModal" class="fixed inset-0 z-50 bg-black/50 items-center justify-center hidden" onclick="closeLaravelModal()">
        <div class="bg-slate-700/20 border border-slate-300/20 rounded-md p-4 max-w-3xl w-full relative" onclick="event.stopPropagation()">
            <img id="modalImage" class="w-full rounded-md">
        </div>
    </div>

    <!-- JavaScript for Modal -->
    <script>
        function openLaravelModal(imageSrc) {
            const modal = document.getElementById('laravelModal');
            const modalImage = document.getElementById('modalImage');
            modalImage.src = imageSrc;
            modal.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
            modal.style.opacity = '0';
            modal.style.transform = 'scale(0.9)';
            modal.classList.add('flex');
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.style.opacity = '1';
                modal.style.transform = 'scale(1)';
            }, 10);
        }

        function closeLaravelModal() {
            const modal = document.getElementById('laravelModal');
            modal.style.opacity = '0';
            modal.style.transform = 'scale(0.9)';
            setTimeout(() => {
                modal.classList.remove('flex');
                modal.classList.add('hidden');
            }, 300);
        }
    </script>
</x-layout>
