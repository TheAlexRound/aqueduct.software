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

                                        <figure class="bg-slate-700/20 border border-slate-300/10 p-4 rounded-3xl mb-8">
                                            <video class="w-full rounded-2xl" src="{{url('frontend/images/musteri-video.mp4')}}" width="586" height="316" autoplay muted playsinline id="video"></video>
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
                                        <div class="prose max-w-none text-slate-400 prose-headings:text-slate-50 prose-h2:text-xl prose-h2:mt-8 prose-h2:mb-4 prose-p:leading-relaxed prose-a:text-purple-500 prose-a:no-underline hover:prose-a:underline prose-strong:text-slate-50 prose-strong:font-medium prose-blockquote:pl-5 prose-blockquote:xl:-ml-5 prose-blockquote:border-l-2 prose-blockquote:border-purple-500 prose-blockquote:font-medium prose-blockquote:text-slate-300 prose-blockquote:italic">
                                            <h2>Overview</h2>
                                            <p>
                                                Sätila Musteri is a small-scale, community-driven apple cider brewery based in Sweden that rents out professional pressing equipment to its members during the harvest season. We developed a clean, minimalistic web application to help them manage memberships, equipment bookings, and day-to-day operations—offering a modern solution to replace their previous manual processes.
                                            </p>
                                            <p>
                                                With a strong focus on usability and simplicity, the platform allows both the organisers and members to interact with the system in a frictionless way. The app prioritises clarity over complexity and supports the seasonal nature of the business.
                                            </p>

                                            <h2>How it works</h2>
                                            <p>
                                                Members can create an account, renew or manage their membership, and book available machines directly through a self-service dashboard. Organisers have access to a private admin interface where they can:
                                            </p>
                                            <ul><strong>
                                                <li>View and manage all members</li>
                                                <li>Track machine availability and current holders</li>
                                                <li>Oversee incoming bookings in a clear calendar view</li>
                                            </strong>
                                            </ul>
                                            <p>
                                                The booking interface has an integrated calendar for a smooth, intuitive drag-and-drop experience, allowing users to see real-time availability and make bookings with just a few clicks.
                                            </p>

                                            <h2>Phase 1: Planning & Discovery</h2>
                                            <p>
                                                The project began with a workshop involving Sätila Musteri’s organisers to understand their seasonal workflows, operational pain points, and future needs. We outlined key user roles (organiser and member) and designed simple permission rules to keep the system lightweight.
                                            </p>
                                            <p>
                                                Since the musteri operates primarily during autumn, the design had to emphasize ease-of-use and require no training. Organisers needed to easily keep track of who had access to the machines and when.
                                            </p>

                                            <h2>Phase 2: Development</h2>
                                            <p>
                                                Built with Laravel and Tailwind CSS, the web app features a minimalistic UI focused on speed and clarity. We designed the admin dashboard for desktop use and member pages to be fully responsive for mobile access during harvest.
                                            </p>
                                            <p>
                                                The biggest focus was simplicity. Rather than loading the platform with advanced features, we worked to make every action clear and fast. Booking a machine or renewing a membership takes just a few seconds.
                                            </p>

                                            <h2>Calendar & Booking Flow</h2>
                                            <p>
                                                The booking system uses it own integrated calendar system. It displays machine availability in a monthly and weekly view, with colour-coded slots and integrated validation to prevent double-bookings.
                                            </p>
                                            <p>
                                                Members can select available time slots, and admins can manage all bookings with a clean override interface. Calendar entries link directly to member profiles and machine inventory.
                                            </p>

                                            <h2>Challenges & Solutions</h2>
                                            <ul>
                                                <li><strong>Minimal tech stack:</strong> The project intentionally avoided third-party integrations. This meant carefully designing the database schema and user flows to support all business needs internally.</li>
                                                <li><strong>Booking collisions:</strong> We added server-side validation and real-time feedback to ensure members could never book overlapping time slots.</li>
                                                <li><strong>Usability across age groups:</strong> Since users range from young farmers to elderly hobbyists, we prioritised large buttons, clear labels, and mobile responsiveness throughout the UI.</li>
                                            </ul>

                                            <h2>Results</h2>
                                            <p>
                                                Sätila Musteri now has a reliable digital tool that serves both its members and its organisers. The platform has eliminated manual paperwork, reduced double-bookings, and made it easier for members to engage with the brewery.
                                            </p>
                                            <p>
                                                The system runs with virtually no maintenance and requires no technical knowledge to operate. It’s a simple tool that supports a meaningful local tradition, and its success lies in its elegance and restraint.
                                            </p>

                                            <p>
                                                This project highlights how small, intentional software can have a big impact when it fits perfectly into the rhythm of a local organisation.
                                            </p>
                                        </div>



                                        <div class="w-full flex gap-4 justify-between items-center pt-12">
                                            <figure class="bg-slate-700/20 border w-full border-slate-300/10 p-2 rounded-md mb-8" style="overflow:visible;">
                                                <img class="w-full rounded-md cursor-pointer transition-shadow duration-200 hover:shadow-xl hover:shadow-purple-500/30" src="{{ url('frontend/images/musteri-screenshot1.png') }}" alt="" onclick="openLaravelModal('{{ url('frontend/images/musteri-screenshot1.png') }}')">
                                            </figure>
                                            <figure class="bg-slate-700/20 border w-full border-slate-300/10 p-2 rounded-md mb-8" style="overflow:visible;">
                                                <img class="w-full rounded-md cursor-pointer transition-shadow duration-200 hover:shadow-xl hover:shadow-purple-500/30" src="{{ url('frontend/images/musteri-screenshot2.png') }}" alt="" onclick="openLaravelModal('{{ url('frontend/images/musteri-screenshot2.png') }}')">
                                            </figure>
                                        </div>


                                    </article>

                                    <aside class="pl-6 border-l-2 [border-image:linear-gradient(to_bottom,theme(colors.purple.500),theme(colors.pink.500),theme(colors.purple.500))_1]">
                                        <p class="inline-flex font-medium italic text-slate-100 pb-4">“ Super simple and solves our problems perfectly! ”</p>
                                        <footer class="flex items-center space-x-4">
                                            <img class="shrink-0 rounded-full" src="{{url('frontend/images/darren.jpg')}}" width="32" height="32" alt="Author" />
                                            <div class="text-sm font-medium text-slate-300">
                                                <strong class="text-slate-100">Darren Round</strong> – Board member at Sätila Musteri
                                            </div>
                                        </footer>
                                    </aside>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Sidebar -->
                    <aside class="md:w-64 lg:w-80 z-50 md:shrink-0 md:pt-[3.75rem] lg:pt-0 pb-12 md:pb-20">
                        <div class="sticky top-28 md:pl-6 lg:pl-10">

                            <!-- Sidebar content -->
                            <div class="space-y-6">

                                <!-- Widget -->
                                <div class="bg-linear-to-tr from-slate-800 to-slate-800/40 rounded-3xl border border-slate-800 backdrop-blur-md bg-opacity-70">
                                    <div class="px-5 py-6">
                                        <div class="text-center mb-5">
                                            <div class="mb-4">
                                                <div class="relative inline-flex ">
                                                    <img class="w-40" src="{{url('frontend/images/satilamusteri-logo.png')}}" alt="Icon 08"/>
                                                    <!--<img class="absolute top-0 -right-1" src="{{url('frontend/images/star.svg')}}" width="24" height="24" alt="Star" aria-hidden="true" />-->
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="text-sm">
                                            <li class="flex items-center justify-between space-x-2 py-3 border-t [border-image:linear-gradient(to_right,--theme(--color-slate-700/.3),--theme(--color-slate-700),--theme(--color-slate-700/.3))1]">
                                                <span class="text-slate-400">Type</span>
                                                <span class="text-slate-300 font-medium">Custom webapp</span>
                                            </li>
                                            <li class="flex items-center justify-between space-x-2 py-3 border-t [border-image:linear-gradient(to_right,--theme(--color-slate-700/.3),--theme(--color-slate-700),--theme(--color-slate-700/.3))1]">
                                                <span class="text-slate-400">URL</span>
                                                <a class="text-purple-500 font-medium flex items-center space-x-1" href="https://satilamusteri.se/" target="_blank" >
                                                    <span>satilamusteri.se</span>
                                                    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="9" height="9">
                                                        <path d="m1.285 8.514-.909-.915 5.513-5.523H1.663l.01-1.258h6.389v6.394H6.794l.01-4.226z" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="flex items-center justify-between space-x-2 py-3 border-t [border-image:linear-gradient(to_right,--theme(--color-slate-700/.3),--theme(--color-slate-700),--theme(--color-slate-700/.3))1]">
                                                <span class="text-slate-400">Created</span>
                                                <span class="text-slate-300 font-medium">September 2024</span>
                                            </li>
                                            <li class="flex items-center justify-between space-x-2 py-3 border-t [border-image:linear-gradient(to_right,--theme(--color-slate-700/.3),--theme(--color-slate-700),--theme(--color-slate-700/.3))1]">
                                                <span class="text-slate-400">Active Users</span>
                                                <span class="text-slate-300 font-medium">25+</span>
                                            </li>
                                        </ul>
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
