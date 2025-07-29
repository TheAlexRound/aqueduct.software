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
                                            <video class="w-full rounded-2xl" src="{{url('frontend/images/autovis.mp4')}}" width="586" height="316" autoplay muted playsinline id="dinkar-video"></video>
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

                                        <!-- Post content -->
                                        <div class="prose max-w-none text-slate-400 prose-headings:text-slate-50 prose-h2:text-xl prose-h2:mt-8 prose-h2:mb-4 prose-p:leading-relaxed prose-a:text-purple-500 prose-a:no-underline hover:prose-a:underline prose-strong:text-slate-50 prose-strong:font-medium prose-blockquote:pl-5 prose-blockquote:xl:-ml-5 prose-blockquote:border-l-2 prose-blockquote:border-purple-500 prose-blockquote:font-medium prose-blockquote:text-slate-300 prose-blockquote:italic">
                                        <h2>Overview</h2>
                                        <p>
                                            This project is a background integration that connects <strong>Autotask</strong>—a professional services automation platform—with <strong>Visma</strong>—a leading Nordic accounting system. The integration ensures seamless synchronization of invoices, companies, products, and services between the two systems, eliminating manual data entry and reducing the risk of financial discrepancies.
                                        </p>
                                        <p>
                                            Designed for reliability and accuracy, the system automatically creates invoices in Visma when they are generated in Autotask. Once the invoice is updated or marked as paid in Visma, that information is sent back to Autotask to keep both platforms in sync. Additionally, company data, service items, and product listings are regularly synced to maintain consistency across systems.
                                        </p>

                                        <h2>How it works</h2>
                                        <p>
                                            The integration operates on a scheduled timer and performs regular sync checks in both directions. No webhooks are used—instead, the system polls for changes at defined intervals and processes any updates or new records found.
                                        </p>
                                        <ul>
                                            <li><strong>Forward Sync:</strong> When an invoice, company, product, or service is created or updated in Autotask, it is pushed to Visma with all relevant data. Articles are created dynamically in Visma based on line item types.</li>
                                            <li><strong>Reverse Sync:</strong> When an invoice is updated in Visma—e.g., marked as paid—the new status is fetched and sent back to Autotask to reflect the correct financial state.</li>
                                        </ul>
                                        <p>
                                            Communication is handled using REST APIs, with Laravel queue jobs and scheduling ensuring reliable, periodic execution of all sync tasks.
                                        </p>

                                        <h2>Phase 1: Mapping & Schema Design</h2>
                                        <p>
                                            A detailed mapping exercise aligned Autotask's data structures with Visma's API requirements. This included handling customer accounts (companies), various invoice line items (services, products, materials), and ensuring consistent article creation rules in Visma.
                                        </p>
                                        <p>
                                            Products and services from Autotask were translated into Visma articles with appropriate tax codes, price levels, and categories. Customer records were normalized and matched using unique identifiers or email addresses.
                                        </p>

                                        <h2>Phase 2: Sync Engine Development</h2>
                                        <p>
                                            We built a Laravel-based sync engine that runs on a scheduled timer. The engine handles:
                                        </p>
                                        <ul><strong>
                                            <li>Invoice creation and updates</li>
                                            <li>Customer creation and syncing</li>
                                            <li>Product and service syncing as Visma articles</li>
                                            <li>Status polling for payment and invoice updates</li>
                                        </ul></strong>
                                        <p>
                                            Sync operations are logged and retried on failure, with an internal dashboard for audit tracking and manual re-processing when needed.
                                        </p>

                                        <h2>Phase 3: Testing & Edge Case Handling</h2>
                                        <p>
                                            Testing focused on edge cases like partially paid invoices, split payments, company name collisions, and article mismatches. All scenarios were addressed through conflict resolution logic and fallback handling.
                                        </p>
                                        <p>
                                            The system also includes validation to ensure only complete and valid data is pushed between systems, avoiding silent failures or incomplete records.
                                        </p>

                                        <h2>Challenges & Solutions</h2>
                                        <ul>
                                            <li><strong>Multiple data types:</strong> Syncing invoices, companies, products, and services required careful separation of responsibilities and API call batching to avoid overload.</li>
                                            <li><strong>Polling-only model:</strong> Without webhooks, we used timed intervals with diff-checking logic to detect changes and avoid unnecessary processing.</li>
                                            <li><strong>Data integrity:</strong> Ensuring accurate cross-referencing of IDs between platforms required maintaining a synced relationship table internally.</li>
                                        </ul>

                                        <h2>Results</h2>
                                        <p>
                                            The Autotask–Visma integration now provides a fully automated background sync for all key financial and business data. Manual entry is no longer needed, and teams on both sides can trust their data is always accurate and up to date.
                                        </p>
                                        <p>
                                            By operating quietly in the background, this integration has become a reliable bridge between operations and finance, enabling better reporting, fewer errors, and faster workflows.
                                        </p>
                                        </div>



                                    </article>

                                    <!--<aside class="pl-6 border-l-2 [border-image:linear-gradient(to_bottom,theme(colors.purple.500),theme(colors.pink.500),theme(colors.purple.500))_1]">
                                        <p class="inline-flex font-medium italic text-slate-100 pb-4">“ Dinkår has made our job so much easier. We handle memberships, sell tickets, and check people in at events – all in the same system. Super easy to use and saves us a ton of time. Wouldn’t go back. ”</p>
                                        <footer class="flex items-center space-x-4">
                                            <img class="shrink-0 rounded-full" src="{{url('frontend/images/einar.png')}}" width="32" height="32" alt="Author" />
                                            <div class="text-sm font-medium text-slate-300">
                                                <strong class="text-slate-100">Einar Arnell</strong> - User of DinKår
                                            </div>
                                        </footer>
                                    </aside>-->
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
                                        <div class="text-center flex flex-col justify-center items-center mb-8">
                                            <img src="{{url('frontend/images/at-logo.png')}}" class="w-40" alt="">
                                            <div class="relative flex flex-col items-center" style="height: 48px; width: 4px;">
                                                <!-- Pulsing vertical gradient bar -->
                                                <div class="absolute left-1/2 -translate-x-1/2 w-1 h-full rounded-full overflow-hidden z-0"
                                                     style="background: linear-gradient(to bottom, #a78bfa 0%, #f472b6 100%); opacity: 0.7; animation: energy-pulse 3s infinite;">
                                                </div>
                                                <!-- Moving energy blob -->
                                                <div class="absolute left-1/2 -translate-x-1/2 w-1 h-3 rounded-full blur-xs z-10"
                                                     style="background: linear-gradient(to bottom, #a78bfa 0%, #f472b6 100%); opacity: 1; animation: energy-flow 1.5s infinite cubic-bezier(.4,0,.2,1);">
                                                </div>
                                            </div>
                                            <style>
                                            @keyframes energy-pulse {
                                                0%, 100% { opacity: 0.8; }
                                                50% { opacity: 1; }
                                            }
                                            @keyframes energy-flow {
                                                0% { top: -0.3rem; opacity: 0; }
                                                20% { opacity: 1; }
                                                80% { opacity: 1; }
                                                100% { top: 2.3rem; opacity: 0; }
                                            }
                                            </style>
                                            <img src="{{url('frontend/images/vs-logo.png')}}" class="w-36" alt="">
                                        </div>
                                        <ul class="text-sm">
                                            <li class="flex items-center justify-between space-x-2 py-3 border-t [border-image:linear-gradient(to_right,--theme(--color-slate-700/.3),--theme(--color-slate-700),--theme(--color-slate-700/.3))1]">
                                                <span class="text-slate-400">Type</span>
                                                <span class="text-slate-300 font-medium">Third-party integration</span>
                                            </li>
                                            <li class="flex items-center justify-between space-x-2 py-3 border-t [border-image:linear-gradient(to_right,--theme(--color-slate-700/.3),--theme(--color-slate-700),--theme(--color-slate-700/.3))1]">
                                                <span class="text-slate-400">Status</span>
                                                <span class="text-slate-300 font-medium">Active</span>
                                            </li>
                                            <li class="flex items-center justify-between space-x-2 py-3 border-t [border-image:linear-gradient(to_right,--theme(--color-slate-700/.3),--theme(--color-slate-700),--theme(--color-slate-700/.3))1]">
                                                <span class="text-slate-400">Created</span>
                                                <span class="text-slate-300 font-medium">Jun 2025</span>
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
