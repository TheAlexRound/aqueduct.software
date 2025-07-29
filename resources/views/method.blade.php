<x-layout>
    <!-- Content -->
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
            <img src="{{ url('frontend/images/page-illustration.svg') }}" class="max-w-none" width="1440" height="427" alt="Page Illustration">
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-32 pb-12 md:pt-40 md:pb-20">

                <!-- Page header -->
                <div class="text-center pb-12 md:pb-20">
                    <h1 class="h1 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">What's New</h1>
                    <div class="max-w-3xl mx-auto">
                        <p class="text-lg text-slate-400">New updates and improvements to Stellar.</p>
                    </div>
                </div>

                <!-- Content -->
                <div class="max-w-3xl mx-auto">
                    <div class="relative">
                        <div class="absolute h-full top-4 left-[2px] w-0.5 bg-slate-800 [mask-image:linear-gradient(0deg,transparent,var(--color-white)_150px,var(--color-white))] -z-10 overflow-hidden after:absolute after:h-4 after:top-0 after:-translate-y-full after:left-0 after:w-0.5 after:bg-[linear-gradient(180deg,transparent,--theme(--color-purple-500/.65)_25%,--theme(--color-purple-200)_50%,--theme(--color-purple-500/.65)_75%,transparent)] after:animate-shine" aria-hidden="true"></div>
                        <!-- Post -->
                        <article class="pt-12 first-of-type:pt-0 group">
                            <div class="md:flex">
                                <div class="w-48 shrink-0">
                                    <time class="text-sm inline-flex items-center bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 md:leading-8 before:w-1.5 before:h-1.5 before:rounded-full before:bg-purple-500 before:ring-4 before:ring-purple-500/30 mb-3">
                                        <span class="ml-[1.625rem] md:ml-5">Nov 27, 2024</span>
                                    </time>
                                </div>
                                <div class="grow ml-8 md:ml-0 pb-12 group-last-of-type:pb-0 border-b [border-image:linear-gradient(to_right,--theme(--color-slate-700/.3),--theme(--color-slate-700),--theme(--color-slate-700/.3))1] group-last-of-type:border-none">
                                    <header>
                                        <h2 class="text-2xl font-bold bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 leading-8 pb-6">Weekly Update: Stellar X</h2>
                                    </header>
                                    <figure class="bg-linear-to-b from-slate-300/20 to-transparent rounded-3xl p-px mb-8">
                                        <img class="w-full rounded-[inherit]" src="{{ url('frontend/images/changelog-01.png') }}" width="574" height="326" alt="Changelog 01">
                                    </figure>
                                    <div class="prose max-w-none text-slate-400 prose-p:leading-relaxed prose-a:text-purple-500 prose-a:no-underline hover:prose-a:underline prose-strong:text-slate-50 prose-strong:font-medium">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident.</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Post -->
                        <article class="pt-12 first-of-type:pt-0 group">
                            <div class="md:flex">
                                <div class="w-48 shrink-0">
                                    <time class="text-sm inline-flex items-center bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 md:leading-8 before:w-1.5 before:h-1.5 before:rounded-full before:bg-purple-500 before:ring-4 before:ring-purple-500/30 mb-3">
                                        <span class="ml-[1.625rem] md:ml-5">Nov 22, 2024</span>
                                    </time>
                                </div>
                                <div class="grow ml-8 md:ml-0 pb-12 group-last-of-type:pb-0 border-b [border-image:linear-gradient(to_right,--theme(--color-slate-700/.3),--theme(--color-slate-700),--theme(--color-slate-700/.3))1] group-last-of-type:border-none">
                                    <header>
                                        <h2 class="text-2xl font-bold bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 leading-8 pb-6">Refreshed main menu navigation</h2>
                                    </header>
                                    <figure class="bg-linear-to-b from-slate-300/20 to-transparent rounded-3xl p-px mb-8">
                                        <img class="w-full rounded-[inherit]" src="{{ url('frontend/images/changelog-02.png') }}" width="574" height="326" alt="Changelog 02">
                                    </figure>
                                    <div class="prose max-w-none text-slate-400 prose-p:leading-relaxed prose-a:text-purple-500 prose-a:no-underline hover:prose-a:underline prose-strong:text-slate-50 prose-strong:font-medium">
                                        <p>Better align your teams and partners around standardized product principles and consistent implementation standards using the latest architecture shape pack.</p>
                                        <ul>
                                            <li>Streamline intake with workflows, templates, and automations</li>
                                            <li>See realtime updates in Slack and get notified when your task is complete</li>
                                            <li>Receive requests in Stellar in a shared team inbox</li>
                                        </ul>
                                        <p>Subscribe to get notified of key changes in the views you care about most. Opt-in to <a href="#0">receive a notification</a> when tasks are added to the view or when issues are completed or canceled.</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Post -->
                        <article class="pt-12 first-of-type:pt-0 group">
                            <div class="md:flex">
                                <div class="w-48 shrink-0">
                                    <time class="text-sm inline-flex items-center bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 md:leading-8 before:w-1.5 before:h-1.5 before:rounded-full before:bg-purple-500 before:ring-4 before:ring-purple-500/30 mb-3">
                                        <span class="ml-[1.625rem] md:ml-5">Nov 4, 2024</span>
                                    </time>
                                </div>
                                <div class="grow ml-8 md:ml-0 pb-12 group-last-of-type:pb-0 border-b [border-image:linear-gradient(to_right,--theme(--color-slate-700/.3),--theme(--color-slate-700),--theme(--color-slate-700/.3))1] group-last-of-type:border-none">
                                    <header>
                                        <h2 class="text-2xl font-bold bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 leading-8 pb-6">New cloud architecture</h2>
                                    </header>
                                    <figure class="bg-linear-to-b from-slate-300/20 to-transparent rounded-3xl p-px mb-8">
                                        <img class="w-full rounded-[inherit]" src="{{ url('frontend/images/changelog-03.png') }}" width="574" height="326" alt="Changelog 03">
                                    </figure>
                                    <div class="prose max-w-none text-slate-400 prose-p:leading-relaxed prose-a:text-purple-500 prose-a:no-underline hover:prose-a:underline prose-strong:text-slate-50 prose-strong:font-medium">
                                        <p>Newly created diagrams are now editable, full screen mode for more editing real estate, and both apps are updated to the latest version supporting new diagram types (eg. C4 architecture).</p>
                                        <p>Create professional-looking diagrams with line jumps, making it easy to navigate complex diagrams with ease. You can also apply jumps to individual lines or the entire diagram.</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Post -->
                        <article class="pt-12 first-of-type:pt-0 group">
                            <div class="md:flex">
                                <div class="w-48 shrink-0">
                                    <time class="text-sm inline-flex items-center bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 md:leading-8 before:w-1.5 before:h-1.5 before:rounded-full before:bg-purple-500 before:ring-4 before:ring-purple-500/30 mb-3">
                                        <span class="ml-[1.625rem] md:ml-5">Oct 31, 2024</span>
                                    </time>
                                </div>
                                <div class="grow ml-8 md:ml-0 pb-12 group-last-of-type:pb-0 border-b [border-image:linear-gradient(to_right,--theme(--color-slate-700/.3),--theme(--color-slate-700),--theme(--color-slate-700/.3))1] group-last-of-type:border-none">
                                    <header>
                                        <h2 class="text-2xl font-bold bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 leading-8 pb-6">Updates to the Filtering API</h2>
                                    </header>
                                    <figure class="bg-linear-to-b from-slate-300/20 to-transparent rounded-3xl p-px mb-8">
                                        <img class="w-full rounded-[inherit]" src="{{ url('frontend/images/changelog-04.png') }}" width="574" height="326" alt="Changelog 04">
                                    </figure>
                                    <div class="prose max-w-none text-slate-400 prose-p:leading-relaxed prose-a:text-purple-500 prose-a:no-underline hover:prose-a:underline prose-strong:text-slate-50 prose-strong:font-medium">
                                        <p>We understand that who you've worked with in the past is often who you'll work with in the future, and are now placing a higher emphasis on making your past mentions more accessible. This means your previous collaborators will be front and center, ready for future collaboration.</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="max-w-3xl mx-auto">
                    <ul class="flex items-center justify-between mt-12 pl-8 md:pl-48">
                        <li>
                            <span class="btn-sm text-slate-700 transition duration-150 ease-in-out group [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-full before:pointer-events-none cursor-not-allowed">
                                <span class="relative inline-flex items-center">
                                    <span class="tracking-normal text-slate-700 mr-1">&lt;-</span> Previous Page
                                </span>
                            </span>
                        </li>
                        <li>
                            <a class="btn-sm text-slate-300 hover:text-white transition duration-150 ease-in-out group [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-full before:pointer-events-none" href="#0">
                                <span class="relative inline-flex items-center">
                                    Next Page <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </section>


    <!-- Features #3 -->
    <section class="relative">

        <!-- Blurred shape -->
        <div class="absolute top-0 -translate-y-1/4 left-1/2 -translate-x-1/2 blur-2xl opacity-50 pointer-events-none -z-10" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" width="434" height="427">
                <defs>
                    <linearGradient id="bs3-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                        <stop offset="0%" stop-color="#6366F1" />
                        <stop offset="100%" stop-color="#6366F1" stop-opacity="0" />
                    </linearGradient>
                </defs>
                <path fill="url(#bs3-a)" fill-rule="evenodd" d="m410 0 461 369-284 58z" transform="matrix(1 0 0 -1 -410 427)" />
            </svg>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-12 md:pt-20">

                <!-- Section header -->
                <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                    <div>
                        <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">The security first platform</div>
                    </div>
                    <h2 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">Spot issues faster</h2>
                    <p class="text-lg text-slate-400">All the lorem ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                </div>

                <div class="max-w-3xl mx-auto">
                    <div data-aos="fade-down">
                        <div class="group" data-highlighter>
                            <div class="relative bg-slate-800 rounded-3xl p-px before:absolute before:w-96 before:h-96 before:-left-48 before:-top-48 before:bg-purple-500 before:rounded-full before:opacity-0 before:pointer-events-none before:transition-opacity before:duration-500 before:translate-x-[var(--mouse-x)] before:translate-y-[var(--mouse-y)] hover:before:opacity-20 before:z-30 before:blur-[100px] after:absolute after:inset-0 after:rounded-[inherit] after:opacity-0 after:transition-opacity after:duration-500 after:[background:radial-gradient(250px_circle_at_var(--mouse-x)_var(--mouse-y),var(--color-slate-400),transparent)] group-hover:after:opacity-100 after:z-10 overflow-hidden">
                                <div class="relative h-full bg-slate-900 rounded-[inherit] z-20 overflow-hidden">
                                    <!-- Radial gradient -->
                                    <div class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/2 aspect-square" aria-hidden="true">
                                        <div class="absolute inset-0 translate-z-0 bg-purple-500 rounded-full blur-[120px]"></div>
                                    </div>
                                    <img src="{{url('frontend/images/feature-image-04.png')}}" width="768" height="400" alt="Feature 04">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Features #4 -->
    <section class="relative">
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6">

            <!-- Blurred shape -->
            <div class="absolute top-0 -mt-24 left-0 -ml-16 blur-2xl opacity-70 pointer-events-none -z-10" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" width="434" height="427">
                    <defs>
                        <linearGradient id="bs4-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                            <stop offset="0%" stop-color="#A855F7" />
                            <stop offset="100%" stop-color="#6366F1" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                    <path fill="url(#bs4-a)" fill-rule="evenodd" d="m0 0 461 369-284 58z" transform="matrix(1 0 0 -1 0 427)" />
                </svg>
            </div>

            <div class="pt-16 pb-12 md:pt-32 md:pb-20">

                <!-- Section header -->
                <div class="max-w-3xl pb-12 md:pb-20">
                    <h2 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">Why trust us?</h2>
                    <p class="text-lg text-slate-400">Many desktop publishing packages and web page editors now use lorem ipsum as their default model text, and a search will uncover many web sites still in their infancy.</p>
                </div>

                <!-- Rows -->
                <div class="divide-y divide-slate-800">
                    <!-- Row -->
                    <div class="py-8 first-of-type:pt-0 last-of-type:pb-0">
                        <div>
                            <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-6">API Authorization</div>
                        </div>
                        <div class="grid md:grid-cols-3 gap-8 md:gap-12 mb-2">
                            <!-- Feature -->
                            <div>
                                <div class="flex items-center space-x-2 mb-1">
                                    <svg class="shrink-0 fill-slate-300" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                        <path d="M13 16c-.153 0-.306-.035-.447-.105l-3.851-1.926c-.231.02-.465.031-.702.031-4.411 0-8-3.14-8-7s3.589-7 8-7 8 3.14 8 7c0 1.723-.707 3.351-2 4.63V15a1.003 1.003 0 0 1-1 1Zm-4.108-4.054c.155 0 .308.036.447.105L12 13.382v-2.187c0-.288.125-.562.341-.752C13.411 9.506 14 8.284 14 7c0-2.757-2.691-5-6-5S2 4.243 2 7s2.691 5 6 5c.266 0 .526-.02.783-.048a1.01 1.01 0 0 1 .109-.006Z" />
                                    </svg>
                                    <h4 class="font-medium text-slate-50">Discussions</h4>
                                </div>
                                <p class="text-sm text-slate-400">Login box must find the right balance for the user convenience, privacy and security.</p>
                            </div>
                            <!-- Feature -->
                            <div>
                                <div class="flex items-center space-x-2 mb-1">
                                    <svg class="shrink-0 fill-slate-300" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                        <path d="M15 9a3.841 3.841 0 0 0-2.661 1.545A2.524 2.524 0 0 0 10 9a1 1 0 1 0 0 2c.361 0 .57.279.89 1.284C10.243 13.08 9.441 14 9 14a1 1 0 0 0 0 2 3.841 3.841 0 0 0 2.661-1.545A2.524 2.524 0 0 0 14 16a1 1 0 0 0 0-2c-.361 0-.571-.279-.89-1.284C13.757 11.92 14.559 11 15 11a1 1 0 0 0 0-2Z"/><path d="M10 8a1 1 0 0 0 0-2H7.825c.432-2.421.983-4 2.175-4a1 1 0 0 1 1 1 1 1 0 0 0 2 0 3 3 0 0 0-3-3C7.193 0 6.313 2.9 5.793 6H3a1 1 0 1 0 0 2h2.49c-.506 3.52-1 6-2.49 6a1 1 0 0 1-1-1 1 1 0 0 0-2 0 3 3 0 0 0 3 3c3.367 0 3.964-4.175 4.49-7.858L7.51 8H10Z" />
                                    </svg>
                                    <h4 class="font-medium text-slate-50">Team views</h4>
                                </div>
                                <p class="text-sm text-slate-400">Login box must find the right balance for the user convenience, privacy and security.</p>
                            </div>
                            <!-- Feature -->
                            <div>
                                <div class="flex items-center space-x-2 mb-1">
                                    <svg class="shrink-0 fill-slate-300" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                        <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7ZM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5ZM15.707 14.293 13.314 11.9a8.019 8.019 0 0 1-1.414 1.414l2.393 2.393a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414Z" />
                                    </svg>
                                    <h4 class="font-medium text-slate-50">Powerful search</h4>
                                </div>
                                <p class="text-sm text-slate-400">Login box must find the right balance for the user convenience, privacy and security.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
                    <div class="py-8">
                        <div>
                            <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-6">User Management</div>
                        </div>
                        <div class="grid md:grid-cols-3 gap-8 md:gap-12 mb-2">
                            <!-- Feature -->
                            <div>
                                <div class="flex items-center space-x-2 mb-1">
                                    <svg class="shrink-0 fill-slate-300" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                        <path d="M2 6H0V2a2 2 0 0 1 2-2h4v2H2v4ZM16 6h-2V2h-4V0h4a2 2 0 0 1 2 2v4ZM14 16h-4v-2h4v-4h2v4a2 2 0 0 1-2 2ZM6 16H2a2 2 0 0 1-2-2v-4h2v4h4v2Z" />
                                    </svg>
                                    <h4 class="font-medium text-slate-50">Analytics</h4>
                                </div>
                                <p class="text-sm text-slate-400">Login box must find the right balance for the user convenience, privacy and security.</p>
                            </div>
                            <!-- Feature -->
                            <div>
                                <div class="flex items-center space-x-2 mb-1">
                                    <svg class="shrink-0 fill-slate-300" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                        <path d="M6.974 14c-.3 0-.7-.2-.9-.5l-2.2-3.7-2.1 2.8c-.3.4-1 .5-1.4.2-.4-.3-.5-1-.2-1.4l3-4c.2-.3.5-.4.9-.4.3 0 .6.2.8.5l2 3.3 3.3-8.1c0-.4.4-.7.8-.7s.8.2.9.6l4 8c.2.5 0 1.1-.4 1.3-.5.2-1.1 0-1.3-.4l-3-6-3.2 7.9c-.2.4-.6.6-1 .6Z" />
                                    </svg>
                                    <h4 class="font-medium text-slate-50">Notifications</h4>
                                </div>
                                <p class="text-sm text-slate-400">Login box must find the right balance for the user convenience, privacy and security.</p>
                            </div>
                            <!-- Feature -->
                            <div>
                                <div class="flex items-center space-x-2 mb-1">
                                    <svg class="shrink-0 fill-slate-300" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                        <path d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1ZM3 2h10v8H9v4H3V2Z" />
                                    </svg>
                                    <h4 class="font-medium text-slate-50">Integrations</h4>
                                </div>
                                <p class="text-sm text-slate-400">Login box must find the right balance for the user convenience, privacy and security.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
                    <div class="py-8">
                        <div>
                            <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-6">Standard Security</div>
                        </div>
                        <div class="grid md:grid-cols-3 gap-8 md:gap-12 mb-2">
                            <!-- Feature -->
                            <div>
                                <div class="flex items-center space-x-2 mb-1">
                                    <svg class="shrink-0 fill-slate-300" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                        <path d="M15.5 11H13a5.022 5.022 0 0 1-3.453-1.4l-1.2 1.607A7.065 7.065 0 0 0 12 12.92v1.586a.5.5 0 0 0 .853.349l3-3A.5.5 0 0 0 15.5 11ZM1 5a5.022 5.022 0 0 1 3.453 1.4l1.205-1.61A7.028 7.028 0 0 0 1 3a1 1 0 1 0 0 2ZM13 5h2.5a.5.5 0 0 0 .354-.853l-3-3A.5.5 0 0 0 12 1.5v1.58a7.032 7.032 0 0 0-4.6 2.72L5 9a5.025 5.025 0 0 1-4 2 1 1 0 0 0 0 2 7.034 7.034 0 0 0 5.6-2.8L9 7a5.025 5.025 0 0 1 4-2Z" />
                                    </svg>
                                    <h4 class="font-medium text-slate-50">Privacy</h4>
                                </div>
                                <p class="text-sm text-slate-400">Login box must find the right balance for the user convenience, privacy and security.</p>
                            </div>
                            <!-- Feature -->
                            <div>
                                <div class="flex items-center space-x-2 mb-1">
                                    <svg class="shrink-0 fill-slate-300" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                        <path d="M14 14H2a1 1 0 0 0 0 2h12a1 1 0 0 0 0-2ZM7.293 11.707a1 1 0 0 0 1.414 0l5-5a1 1 0 1 0-1.414-1.414L9 8.586V1a1 1 0 1 0-2 0v7.586L3.707 5.293a1 1 0 0 0-1.414 1.414l5 5Z" />
                                    </svg>
                                    <h4 class="font-medium text-slate-50">Data export</h4>
                                </div>
                                <p class="text-sm text-slate-400">Login box must find the right balance for the user convenience, privacy and security.</p>
                            </div>
                            <!-- Feature -->
                            <div>
                                <div class="flex items-center space-x-2 mb-1">
                                    <svg class="shrink-0 fill-slate-300" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                        <path d="M14.6.085 8 2.885 1.4.085c-.5-.2-1.4-.1-1.4.9v11c0 .4.2.8.6.9l7 3c.3.1.5.1.8 0l7-3c.4-.2.6-.5.6-.9v-11c0-1-.9-1.1-1.4-.9ZM2 2.485l5 2.1v8.8l-5-2.1v-8.8Zm12 8.8-5 2.1v-8.7l5-2.1v8.7Z" />
                                    </svg>
                                    <h4 class="font-medium text-slate-50">Real-time sync</h4>
                                </div>
                                <p class="text-sm text-slate-400">Login box must find the right balance for the user convenience, privacy and security.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Testimonials -->
    <section>
        <div class="max-w-3xl mx-auto px-4 sm:px-6">
            <div class="relative pb-12 md:pb-20">

                <!-- Particles animation -->
                <div class="absolute left-1/2 -translate-x-1/2 top-0 -z-10 w-80 h-80 -mt-6">
                    <div class="absolute inset-0 -z-10" aria-hidden="true">
                        <canvas data-particle-animation data-particle-quantity="10" data-particle-staticity="30"></canvas>
                    </div>
                </div>

                <!-- Carousel -->
                <div class="text-center" x-data="carousel">
                    <!-- Testimonial image -->
                    <div class="relative h-32 [mask-image:linear-gradient(0deg,transparent,var(--color-white)_40%,var(--color-white))]">
                        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[480px] h-[480px] -z-10 pointer-events-none before:rounded-full rounded-full before:absolute before:inset-0 before:bg-linear-to-b before:from-slate-400/20 before:to-transparent before:to-20% after:rounded-full after:absolute after:inset-0 after:bg-slate-900 after:m-px before:-z-20 after:-z-20">
                            <!-- Alpine.js template for testimonial images: https://github.com/alpinejs/alpine#x-for -->
                            <template x-for="(item, index) in items" :key="index">
                                <div
                                    x-show="active === index"
                                    class="absolute inset-0 -z-10"
                                    x-transition:enter="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 order-first"
                                    x-transition:enter-start="opacity-0 -rotate-[60deg]"
                                    x-transition:enter-end="opacity-100 rotate-0"
                                    x-transition:leave="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700"
                                    x-transition:leave-start="opacity-100 rotate-0"
                                    x-transition:leave-end="opacity-0 rotate-[60deg]"
                                >
                                    <img class="relative top-11 left-1/2 -translate-x-1/2 rounded-full" :src="item.img" width="56" height="56" :alt="item.name">
                                </div>
                            </template>
                        </div>
                    </div>
                    <!-- Text -->
                    <div class="mb-10">
                        <div class="relative flex flex-col transition-all duration-150 delay-300 ease-in-out" x-ref="testimonials">
                            <!-- Alpine.js template for testimonials: https://github.com/alpinejs/alpine#x-for -->
                            <template x-for="(item, index) in items" :key="index">
                                <div
                                    x-show="active === index"
                                    x-transition:enter="transition ease-in-out duration-500 delay-200 order-first"
                                    x-transition:enter-start="opacity-0 -translate-x-4"
                                    x-transition:enter-end="opacity-100 translate-x-0"
                                    x-transition:leave="transition ease-out duration-300 delay-300 absolute"
                                    x-transition:leave-start="opacity-100 translate-x-0"
                                    x-transition:leave-end="opacity-0 translate-x-4"
                                >
                                    <div class="text-xl font-bold bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60" x-text="item.quote"></div>
                                </div>
                            </template>
                        </div>
                    </div>
                    <!-- Buttons -->
                    <div class="flex flex-wrap justify-center -m-1.5">
                        <!-- Alpine.js template for buttons: https://github.com/alpinejs/alpine#x-for -->
                        <template x-for="(item, index) in items" :key="index">
                            <button
                                class="btn-sm m-1.5 text-xs py-1.5 text-slate-300 transition duration-150 ease-in-out [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-full before:pointer-events-none"
                                :class="active === index ? 'opacity-100' : 'opacity-30 hover:opacity-60'"
                                @click="active = index; stopAutorotate();"
                            >
                                <span class="relative">
                                    <span class="text-slate-50" x-text="item.name"></span> <span class="text-slate-600">-</span> <span x-text="item.role"></span>
                                </span>
                            </button>
                        </template>
                    </div>
                </div>
                <!-- Carousel data and functionality: https://github.com/alpinejs/alpine -->
                <script>
                    document.addEventListener('alpine:init', () => {
                        Alpine.data('carousel', () => ({
                            active: 0,
                            autorotate: true,
                            autorotateTiming: 7000,
                            items: [
                                {
                                    img: './images/testimonial-01.jpg',
                                    quote: "The ability to capture responses is a game-changer. If a user gets tired of the sign up and leaves, that data is still persisted. Additionally, it's great to be able to select between formats.",
                                    name: 'Jessie J',
                                    role: 'Ltd Head of Product'
                                },
                                {
                                    img: './images/testimonial-02.jpg',
                                    quote: "I have been using this product for a few weeks now and I am blown away by the results. My skin looks visibly brighter and smoother, and I have received so many compliments on my complexion.",
                                    name: 'Mark Luk',
                                    role: 'Spark Founder & CEO'
                                },
                                {
                                    img: './images/testimonial-03.jpg',
                                    quote: "As a busy professional, I don't have a lot of time to devote to working out. But with this fitness program, I have seen amazing results in just a few short weeks. The workouts are efficient and effective.",
                                    name: 'Jeff Kahl',
                                    role: 'Appy Product Lead'
                                },
                            ],
                            init() {
                                if (this.autorotate) {
                                    this.autorotateInterval = setInterval(() => {
                                        this.active = this.active + 1 === this.items.length ? 0 : this.active + 1
                                    }, this.autorotateTiming)
                                }
                                this.$watch('active', callback => this.heightFix())
                            },
                            stopAutorotate() {
                                clearInterval(this.autorotateInterval)
                                this.autorotateInterval = null
                            },
                            heightFix() {
                                this.$nextTick(() => {
                                    this.$refs.testimonials.style.height = this.$refs.testimonials.children[this.active + 1].offsetHeight + 'px'
                                })
                            }
                        }))
                    })
                </script>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section>
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="relative px-8 py-12 md:py-20 rounded-[3rem] overflow-hidden">
                <!-- Radial gradient -->
                <div class="absolute flex items-center justify-center top-0 -translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/3 aspect-square" aria-hidden="true">
                    <div class="absolute inset-0 translate-z-0 bg-purple-500 rounded-full blur-[120px] opacity-70"></div>
                    <div class="absolute w-1/4 h-1/4 translate-z-0 bg-purple-400 rounded-full blur-[40px]"></div>
                </div>
                <!-- Blurred shape -->
                <div class="absolute bottom-0 translate-y-1/2 left-0 blur-2xl opacity-50 pointer-events-none -z-10" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="434" height="427">
                        <defs>
                            <linearGradient id="bs5-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                                <stop offset="0%" stop-color="#A855F7" />
                                <stop offset="100%" stop-color="#6366F1" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                        <path fill="url(#bs5-a)" fill-rule="evenodd" d="m0 0 461 369-284 58z" transform="matrix(1 0 0 -1 0 427)" />
                    </svg>
                </div>
                <!-- Content -->
                <div class="max-w-3xl mx-auto text-center">
                    <div>
                        <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">Never miss an update</div>
                    </div>
                    <h2 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">Take control of your business</h2>
                    <p class="text-lg text-slate-400 mb-8">Find out about our latest product changes as we continue improving Stellar to enable your team to collaborate better.</p>
                    <form class="inline-flex max-w-sm w-full">
                        <div class="w-full flex flex-col sm:flex-row justify-center max-w-xs mx-auto sm:max-w-none">
                            <input type="email" class="form-input py-1.5 w-full mb-3 sm:mb-0 sm:mr-2 rounded-full bg-slate-800/30 border-slate-700" placeholder="Your email" aria-label="Your email" />
                            <button class="btn text-slate-900 bg-linear-to-r from-white/80 via-white to-white/80 hover:bg-white transition duration-150 ease-in-out group" type="submit">Subscribe <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-layout>
