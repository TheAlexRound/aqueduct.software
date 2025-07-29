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
                                            <video class="w-full rounded-2xl" src="{{url('frontend/images/shopify.mp4')}}" width="586" height="316" autoplay muted playsinline id="dinkar-video"></video>
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
                                            For Spirec AB, a growing in-person & e-commerce brand, we developed a deep, two-way integration between Shopify and a custom-built stock, order, and fulfillment management system. This solution automates the entire operational flow—from incoming Shopify orders to warehouse packing and shipment processing—while keeping inventory and order statuses perfectly synchronized.
                                        </p>
                                        <p>
                                            The goal was to create a single internal interface that supports Spirec’s team in managing high volumes of sales efficiently, with full clarity on every order, product, and shipment across their workflow.
                                        </p>

                                        <h2>How it works</h2>
                                        <p>
                                            The integration uses Shopify’s API to pull real-time data into the internal Spirec system. Updates are bi-directional—changes made in the custom app (such as packing status or stock adjustments) are pushed back to Shopify to ensure consistency for customers and staff.
                                        </p>
                                        <ul>
                                            <li><strong>Orders:</strong> New orders from Shopify are synced instantly, including all line items, shipping details, and notes.</li>
                                            <li><strong>Inventory:</strong> Stock levels are tracked and updated automatically, reflecting pack-outs and returns.</li>
                                            <li><strong>Shipments:</strong> Fulfillment statuses and tracking numbers are pushed back to Shopify once an order is packed and ready.</li>
                                            <li><strong>Metafields:</strong> Product-specific data such as storage location and packaging instructions are used to guide the warehouse workflow.</li>
                                        </ul>

                                        <h2>Phase 1: Planning & Inventory Structure</h2>
                                        <p>
                                            We began by mapping Spirec’s warehouse logic and product catalog. A flexible data model was created to represent bins, products, bundles, and their associated Shopify SKUs.
                                        </p>
                                        <p>
                                            Shopify product metafields were used to hold custom data such as storage notes or ideal packaging methods—making every step of packing smarter and faster.
                                        </p>

                                        <h2>Phase 2: Order Lifecycle Management</h2>
                                        <p>
                                            Each order is tracked from the moment it’s created in Shopify. The system supports:
                                        </p>
                                        <ul><strong>
                                            <li>Live order queue with filtering and prioritization</li>
                                            <li>Pick list and packing slip generation</li>
                                            <li>Status updates (new, partially packed, packed, shipped)</li>
                                            <li>Real-time visibility into each order's progress</li>
                                        </ul></strong>
                                        <p>
                                            As items are marked packed, the system updates the order record and deducts the inventory. When shipping is confirmed, the tracking number is pushed back to Shopify.
                                        </p>

                                        <h2>Phase 3: Inventory Sync</h2>
                                        <p>
                                            Spirec’s internal system is the source of truth for inventory. The integration regularly pushes updated stock counts to Shopify to ensure accurate product availability.
                                        </p>
                                        <p>
                                            Bulk imports, adjustments, and returns are all managed internally and reflected externally within minutes.
                                        </p>

                                        <h2>Phase 4: Shipment Handling</h2>
                                        <p>
                                            When an order is fully packed, shipping labels and tracking numbers are generated. These are synced back to Shopify to notify the customer and mark the order as fulfilled.
                                        </p>
                                        <p>
                                            The internal system supports partial shipments, backorders, and merging orders from the same customer—features not natively supported by Shopify but essential for Spirec’s workflow.
                                        </p>

                                        <h2>Challenges & Solutions</h2>
                                        <ul>
                                            <li><strong>Handling partial fulfillments:</strong> Shopify doesn't support partial shipments out-of-the-box. We implemented a workaround where our system tracks fulfillment state and breaks updates into multiple fulfillment records.</li>
                                            <li><strong>Stock accuracy during sales peaks:</strong> To prevent overselling, we introduced temporary stock locks and real-time inventory write-backs to Shopify.</li>
                                            <li><strong>Metafield scalability:</strong> Shopify metafields were managed using structured namespaces to keep custom data clean and scalable.</li>
                                        </ul>

                                        <h2>Results</h2>
                                        <p>
                                            The custom integration has transformed Spirec AB’s operations. Staff now work from one streamlined system that provides real-time updates, minimizes packing errors, and handles complex logistics with ease.
                                        </p>
                                        <p>
                                            With order sync, stock control, and shipment tracking now automated and aligned with Shopify, Spirec has reduced its admin workload and improved customer experience during peak campaigns.
                                        </p>

                                        <p>
                                            This project demonstrates how custom systems, when deeply integrated with Shopify, can give fast-growing in-person & e-commerce businesses a competitive operational edge.
                                        </p>
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
                    <aside class="md:w-64  lg:w-80 z-50 md:shrink-0 md:pt-[3.75rem] lg:pt-0 pb-12 md:pb-20">
                        <div class="sticky top-28 md:pl-6 lg:pl-10">

                            <!-- Sidebar content -->
                            <div class="space-y-6">

                                <!-- Widget -->
                                <div class="bg-linear-to-tr from-slate-800 to-slate-800/40 rounded-3xl border border-slate-800 backdrop-blur-md bg-opacity-70">
                                    <div class="px-5 py-6">
                                        <div class="text-center flex flex-col justify-center items-center mb-8">
                                            <img src="{{url('frontend/images/sh-logo.png')}}" class="w-34" alt="">
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
                                            <img src="{{url('frontend/images/client-spirec.png')}}" class="w-30" alt="">
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
                                                <span class="text-slate-300 font-medium">May 2025</span>
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
