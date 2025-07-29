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
                                            <video class="w-full rounded-2xl" src="{{url('frontend/images/spirec-video.mp4')}}" width="586" height="316" autoplay muted playsinline id="video"></video>
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
                                                Spirec.World is a private, custom-built operations platform developed exclusively for <strong>Spirec AB</strong> to streamline and scale their e-commerce workflows. It integrates deeply with Shopify’s API to provide a real-time order dashboard, optimized packing workflows, and detailed business intelligence reports. Additionally, it connects to Meta’s (Facebook) Marketing API, enabling true ad-to-sale attribution within a single internal system.
                                            </p>
                                            <p>
                                                Tailored to Spirec AB’s exact operational needs, Spirec.World replaces fragmented tools and spreadsheets with a centralized interface designed to support warehouse staff, marketing teams, and business leadership alike.
                                            </p>

                                            <h2>How it works</h2>
                                            <p>
                                                Spirec.World communicates with Shopify using both GraphQL and REST endpoints to retrieve and manage real-time data on orders, inventory, customer info, and product metafields. The platform’s backend, built in Laravel, drives a responsive frontend optimized for speed and clarity across desktop and warehouse devices.
                                            </p>
                                            <p>
                                                The system also pulls data from Meta’s Ads API, matching campaigns, ad sets, and ads to product performance and customer purchases. This internal tool gives Spirec AB full visibility into which marketing efforts drive results, with no need to rely on third-party dashboards.
                                            </p>

                                            <h2>Phase 1: Discovery & Architecture</h2>
                                            <p>
                                                Our work began with a detailed technical audit of Spirec AB’s fulfillment and marketing processes. We identified major pain points in scattered order management, time-consuming packing, and siloed ad analytics. From this, we defined a feature roadmap aligned to their team’s internal workflows.
                                            </p>
                                            <p>
                                                The architecture was built to prioritize reliability, scalability, and user-specific customization. Using Laravel for the backend and Shopify’s high-performance APIs, we ensured the system could handle high order volume without latency or downtime.
                                            </p>

                                            <h2>Phase 2: Order Management</h2>
                                            <p>
                                                A live dashboard allows Spirec AB’s team to manage incoming orders efficiently. Key features include:
                                            </p>
                                            <ul>
                                                <li>Custom order filters (status, customer, tags)</li>
                                                <li>Support for merging multiple orders from the same customer</li>
                                                <li>Readout of product metafields like bin location and handling instructions</li>
                                                <li>Tagging and status tracking (packed, partially packed, skipped)</li>
                                            </ul>
                                            <p>
                                                We tackled API throttling and query optimization early on, implementing caching layers and smart batching to keep response times fast, even during high-volume sales periods.
                                            </p>

                                            <h2>Phase 3: Packing & Fulfillment Tools</h2>
                                            <p>
                                                Packing speed and accuracy were critical for the warehouse team. Spirec.World includes features like:
                                            </p>
                                            <ul>
                                                <li>Pick list generation to streamline item collection</li>
                                                <li>Split fulfillment workflows for partial shipments</li>
                                                <li>Packing status indicators and user logs</li>
                                            </ul>
                                            <p>
                                                The UI was tested on various screen sizes to ensure fluid use on mobile devices and warehouse terminals. This phase helped reduce packing errors and improve team productivity across shifts.
                                            </p>

                                            <h2>Phase 4: Business Insights & Analytics</h2>
                                            <p>
                                                The insights module provides real-time visibility into Shopify sales and operational metrics. Spirec AB can now view:
                                            </p>
                                            <ul>
                                                <li>Sales trends by product and timeframe</li>
                                                <li>Customer behavior (returning vs new)</li>
                                                <li>Conversion rate breakdowns</li>
                                                <li>Revenue forecasting based on historical data</li>
                                            </ul>
                                            <p>
                                                The dashboard replaces the need for daily exports and fragmented tools, putting business-critical information in one place.
                                            </p>

                                            <h2>Phase 5: Meta Ads Integration</h2>
                                            <p>
                                                We built a custom integration with the Meta Ads API to bring full ad visibility inside Spirec.World. This allows Spirec AB to:
                                            </p>
                                            <ul>
                                                <li>View campaign, ad set, and ad performance in real time</li>
                                                <li>Track spend, ROAS, clicks, and impressions</li>
                                                <li>Map ad clicks and views to Shopify order events</li>
                                            </ul>
                                            <p>
                                                One major challenge was handling attribution consistency across Meta’s models and Shopify’s checkout events. We implemented a robust mapping system using UTM parameters, pixel signals, and purchase timestamps to bridge the gap.
                                            </p>

                                            <h2>Challenges & Solutions</h2>
                                            <ul>
                                                <li><strong>API rate limits:</strong> Shopify’s usage limits were mitigated by batching calls and queuing via Laravel jobs.</li>
                                                <li><strong>Data attribution across systems:</strong> Custom logic tied ad events to order data with fallback scenarios and confidence scoring.</li>
                                                <li><strong>Warehouse UX:</strong> We developed mobile-first, distraction-free screens for packing tasks with keyboard shortcuts and gesture support.</li>
                                            </ul>

                                            <h2>Results</h2>
                                            <p>
                                                Spirec.World has become an essential internal tool for Spirec AB, powering both their warehouse fulfillment and strategic sales analysis. It has significantly reduced manual work, improved operational speed, and enabled smarter advertising decisions.
                                            </p>
                                            <p>
                                                The platform continues to evolve with future phases planned, including webhook-triggered updates, deeper customer segmentation, and additional export/reporting capabilities.
                                            </p>

                                            <p>
                                                This project exemplifies how tightly scoped, business-specific software can deliver massive efficiency gains and empower teams to scale with clarity and control.
                                            </p>
                                        </div>


                                        <div class="w-full flex gap-4 justify-between items-center pt-12">
                                            <figure class="bg-slate-700/20 border w-full border-slate-300/10 p-2 rounded-md mb-8" style="overflow:visible;">
                                                <img class="w-full rounded-md cursor-pointer transition-shadow duration-200 hover:shadow-xl hover:shadow-purple-500/30" src="{{url('frontend/images/spirec-stats.png')}}" alt="" onclick="openLaravelModal('{{url('frontend/images/spirec-stats.png')}}')">
                                            </figure>
                                            <figure class="bg-slate-700/20 border w-full border-slate-300/10 p-2 rounded-md mb-8" style="overflow:visible;">
                                                <img class="w-full rounded-md cursor-pointer transition-shadow duration-200 hover:shadow-xl hover:shadow-purple-500/30" src="{{url('frontend/images/spirec-info.png')}}" alt="" onclick="openLaravelModal('{{url('frontend/images/spirec-info.png')}}')">
                                            </figure>
                                        </div>


                                    </article>

                                    <aside class="pl-6 border-l-2 [border-image:linear-gradient(to_bottom,theme(colors.purple.500),theme(colors.pink.500),theme(colors.purple.500))_1]">
                                        <p class="inline-flex font-medium italic text-slate-100 pb-4">“ This custom system has completely changed how we work. It connects our Shopify store with Meta ads, tracks stock, orders, and performance — all in one place. It’s super intuitive, saves us hours every week, and just makes everything run smoother. Honestly, I don’t know how we managed before. ”</p>
                                        <footer class="flex items-center space-x-4">
                                            <img class="shrink-0 rounded-full" src="{{url('frontend/images/axel.jpeg')}}" width="32" height="32" alt="Author" />
                                            <div class="text-sm font-medium text-slate-300">
                                                <strong class="text-slate-100">Axel Björkqvist</strong> - CEO at Spirec
                                            </div>
                                        </footer>
                                    </aside>
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
                                                    <div class="w-40 p-1 rounded-md flex items-center justify-center bg-black">
                                                        <img class="w-full" src="{{url('frontend/images/spirec-logo.png')}}" alt="Icon 08"/>
                                                    </div>
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
                                                <span class="text-slate-300 font-medium">Private Application</span>
                                            </li>
                                            <li class="flex items-center justify-between space-x-2 py-3 border-t [border-image:linear-gradient(to_right,--theme(--color-slate-700/.3),--theme(--color-slate-700),--theme(--color-slate-700/.3))1]">
                                                <span class="text-slate-400">Created</span>
                                                <span class="text-slate-300 font-medium">May 2025</span>
                                            </li>
                                            <li class="flex items-center justify-between space-x-2 py-3 border-t [border-image:linear-gradient(to_right,--theme(--color-slate-700/.3),--theme(--color-slate-700),--theme(--color-slate-700/.3))1]">
                                                <span class="text-slate-400">Active Users</span>
                                                <span class="text-slate-300 font-medium">All of Spirec</span>
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
