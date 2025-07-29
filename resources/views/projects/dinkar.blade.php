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
                                            <video class="w-full rounded-2xl" src="{{url('frontend/images/dinkar-mockup-video1.mp4')}}" width="586" height="316" autoplay muted playsinline id="dinkar-video"></video>
                                            <script>
                                                const video = document.getElementById('dinkar-video');
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

                                        <div class="prose max-w-none text-slate-400 prose-headings:text-slate-50 prose-h2:text-xl prose-h2:mt-8 prose-h2:mb-4 prose-p:leading-relaxed prose-a:text-purple-500 prose-a:no-underline hover:prose-a:underline prose-strong:text-slate-50 prose-strong:font-medium prose-blockquote:pl-5 prose-blockquote:xl:-ml-5 prose-blockquote:border-l-2 prose-blockquote:border-purple-500 prose-blockquote:font-medium prose-blockquote:text-slate-300 prose-blockquote:italic">
                                        <h2>Overview</h2>
                                        <p>
                                            Dinkår is a comprehensive platform built specifically for Swedish student unions (elevkårer), allowing them to manage memberships, host and sell tickets for events, and synchronize member data with Sveriges Elevkårer’s Ebas system. Designed as a SaaS platform from the ground up, Dinkår simplifies what has traditionally been a fragmented and manual workflow for student union boards.
                                        </p>
                                        <p>
                                            With deep integrations to national systems, automated payment flows through Stripe Connect, and a real-time QR ticketing system, Dinkår provides student unions with a modern, mobile-first tool to streamline operations and engage with their members.
                                        </p>

                                        <h2>Phase 1: Research & Planning</h2>
                                        <p>
                                            The project began with in-depth research into the workflows and pain points experienced by student unions across Sweden. Interviews and surveys were conducted with several elevkår representatives to understand their day-to-day needs. From this, we defined key user roles—students, board members, and administrators—and mapped out the core features needed to support each.
                                        </p>
                                        <p>
                                            Technical planning involved architecting a Laravel-based backend with a scalable database structure, anticipating eventual multi-union support and complex financial flows. Compliance with GDPR and integration readiness for both Skolverket’s API and Ebas were considered from day one.
                                        </p>

                                        <h2>Phase 2: Core Development</h2>
                                        <p>
                                            We implemented a Laravel + Tailwind CSS stack for rapid development and clean UI. The core system included a robust authentication system, role-based access, union management, and membership handling.
                                        </p>
                                        <p>
                                            One of the major early challenges was building a flexible database structure that could handle many unions while isolating their data securely. We overcame this by designing a multi-tenant-aware schema using Laravel policies and scoped Eloquent queries.
                                        </p>

                                        <h2>Phase 3: Integrations</h2>
                                        <p>
                                            The platform features several key integrations:
                                        </p>
                                        <ul>
                                            <li><strong>Stripe Connect (Express accounts):</strong> To handle ticket sales, each union is onboarded via Stripe’s hosted onboarding. Funds are sent directly to their account with a platform fee retained via application fees.</li>
                                            <li><strong>Sveriges Elevkårer Ebas API:</strong> Membership lists are synced with Ebas to avoid manual reentry, ensuring compliance and reducing admin time.</li>
                                            <li><strong>Skolverket API:</strong> Used to autofill and verify school data during student signup and elevkår registration.</li>
                                        </ul>
                                        <p>
                                            Each of these integrations required custom middleware and error-handling logic to ensure data consistency and security. Stripe Connect, in particular, required careful management of webhook events to update statuses in real-time across multiple accounts.
                                        </p>

                                        <h2>Phase 4: Ticketing System</h2>
                                        <p>
                                            One of the standout features of Dinkår is its QR code ticketing system. When a student purchases a ticket, a secure QR code is generated and stored. At the event, board members use their mobile device to scan and invalidate tickets in real time.
                                        </p>
                                        <p>
                                            This required building a custom QR generation and validation system, backed by a secure token-based verification process. We ensured compatibility with a wide range of mobile browsers and devices.
                                        </p>

                                        <h2>Phase 5: Testing, Deployment & Launch</h2>
                                        <p>
                                            The platform was deployed on a Linux vServer hosted by Strato, using Plesk for server management. Storage permissions and server configurations had to be carefully adjusted to support Laravel’s filesystem and queue operations.
                                        </p>
                                        <p>
                                            Extensive testing was carried out to simulate different user flows including edge cases in payments, role changes, expired tickets, and API failure fallbacks. We also tested for concurrency issues across multi-union actions.
                                        </p>

                                        <h2>Challenges & How We Solved Them</h2>
                                        <ul>
                                            <li><strong>Stripe payout routing:</strong> Correctly routing funds to different unions without error was complex. We solved this using Stripe’s Direct Charges and Express accounts model, carefully logging every transaction and status update.</li>
                                            <li><strong>Multi-tenancy:</strong> Maintaining isolation between unions while sharing a codebase required strict policy enforcement, custom middleware, and dynamic database scoping.</li>
                                            <li><strong>Mobile QR scanning performance:</strong> Scanning delays were an issue on some devices. We optimized this by reducing payload size in QR codes and adding local caching for scan verification.</li>
                                        </ul>

                                        <h2>Results</h2>
                                        <p>
                                            Dinkår is now live and used by multiple student unions across Sweden. It has saved hours of administrative work per week per organization, improved accuracy in member data, and provided a secure and easy-to-use interface for students to buy and manage their tickets.
                                        </p>
                                        <p>
                                            The app continues to evolve, with upcoming plans for a mobile app wrapper for iOS and Android, enhanced analytics dashboards for unions, and further automation features.
                                        </p>

                                        <p>
                                            Dinkår is a prime example of how thoughtful, custom-built software can dramatically improve the operations of niche organizations—by handling the complexity under the hood and presenting a seamless experience to the end user.
                                        </p>
                                        </div>

                                        <div class="w-full flex gap-4 justify-between items-center pt-12">
                                            <figure class="bg-slate-700/20 border w-full border-slate-300/10 p-2 rounded-md mb-8" style="overflow:visible;">
                                                <img class="w-full rounded-md cursor-pointer transition-shadow duration-200 hover:shadow-xl hover:shadow-purple-500/30" src="{{url('frontend/images/dinkar-members.png')}}" alt="" onclick="openLaravelModal('{{url('frontend/images/dinkar-members.png')}}')">
                                            </figure>
                                            <figure class="bg-slate-700/20 border w-full border-slate-300/10 p-2 rounded-md mb-8" style="overflow:visible;">
                                                <img class="w-full rounded-md cursor-pointer transition-shadow duration-200 hover:shadow-xl hover:shadow-purple-500/30" src="{{url('frontend/images/dinkar-event.png')}}" alt="" onclick="openLaravelModal('{{url('frontend/images/dinkar-event.png')}}')">
                                            </figure>
                                        </div>
                                        <div class=" w-full flex items-center justify-center">
                                            <button onclick="window.open('https://www.dinkar.se', '_blank')" class="btn-sm text-slate-300 hover:cursor-pointer hover:text-white transition duration-150 ease-in-out group [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/70 before:rounded-full before:pointer-events-none">
                                                <span class="relative inline-flex items-center">
                                                    See live webpage <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1"><i class="fas fa-arrow-up-right-from-square"></i></span>
                                                </span>
                                            </button>
                                        </div>


                                    </article>

                                    <aside class="pl-6 border-l-2 [border-image:linear-gradient(to_bottom,theme(colors.purple.500),theme(colors.pink.500),theme(colors.purple.500))_1]">
                                        <p class="inline-flex font-medium italic text-slate-100 pb-4">“ Dinkår has made our job so much easier. We handle memberships, sell tickets, and check people in at events – all in the same system. Super easy to use and saves us a ton of time. Wouldn’t go back. ”</p>
                                        <footer class="flex items-center space-x-4">
                                            <img class="shrink-0 rounded-full" src="{{url('frontend/images/einar.png')}}" width="32" height="32" alt="Author" />
                                            <div class="text-sm font-medium text-slate-300">
                                                <strong class="text-slate-100">Einar Arnell</strong> - User of DinKår
                                            </div>
                                        </footer>
                                    </aside>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Sidebar -->
                    <aside class="md:w-64  lg:w-80 z-50 md:shrink-0 md:pt-[3.75rem] lg:pt-0 pb-12 md:pb-20">
                        <div class="sticky top-28 md:pl-6 lg:pl-10">

                            <!-- Sidebar content -->
                            <div class="space-y-6">

                                <!-- Widget -->
                                <div class="bg-linear-to-tr from-slate-800 to-slate-800/40 rounded-3xl border border-slate-800 backdrop-blur-md bg-opacity-70">
                                    <div class="px-5 py-6">
                                        <div class="text-center mb-5">
                                            <div class="mb-4">
                                                <div class="relative inline-flex ">
                                                    <img class="w-40" src="{{url('frontend/images/dinkar-color.png')}}" alt="Icon 08"/>
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
                                                <a class="text-purple-500 font-medium flex items-center space-x-1" href="https://www.dinkar.se" target="_blank" >
                                                    <span>dinkar.se</span>
                                                    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="9" height="9">
                                                        <path d="m1.285 8.514-.909-.915 5.513-5.523H1.663l.01-1.258h6.389v6.394H6.794l.01-4.226z" />
                                                    </svg>
                                                </a>
                                            </li>
                                            <li class="flex items-center justify-between space-x-2 py-3 border-t [border-image:linear-gradient(to_right,--theme(--color-slate-700/.3),--theme(--color-slate-700),--theme(--color-slate-700/.3))1]">
                                                <span class="text-slate-400">Created</span>
                                                <span class="text-slate-300 font-medium">Oct 2024</span>
                                            </li>
                                            <li class="flex items-center justify-between space-x-2 py-3 border-t [border-image:linear-gradient(to_right,--theme(--color-slate-700/.3),--theme(--color-slate-700),--theme(--color-slate-700/.3))1]">
                                                <span class="text-slate-400">Active Users</span>
                                                <span class="text-slate-300 font-medium">350+</span>
                                            </li>
                                        </ul>
                                        <div class="flex items-center justify-center mt-6">
                                            <button onclick="window.open('https://www.dinkar.se', '_blank')" class="btn-sm text-slate-300 hover:cursor-pointer hover:text-white transition duration-150 ease-in-out group [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/70 before:rounded-full before:pointer-events-none">
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
