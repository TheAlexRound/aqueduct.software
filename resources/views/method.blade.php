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
                    <h1 class="h1 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">From Zero to Launch</h1>
                    <div class="max-w-3xl mx-auto">
                        <p class="text-lg text-slate-400">No tech headaches, no to-do lists. Just sit back while we design, build, and launch your product from scratch. It’s a done-for-you process from day one.</p>
                    </div>
                </div>

                <div class="md:block hidden max-w-6xl mx-auto px-4 sm:px-6">
                    <div class="pb-12 md:pb-20 border-t [border-image:linear-gradient(to_right,transparent,var(--color-slate-800),transparent)1]">

                        <!-- Icons with text -->
                        <div class="grid md:grid-cols-3 gap-6 lg:gap-10 max-w-xs mx-auto md:max-w-none -m-5">
                            <!-- Block #1 -->
                            <div class="text-center p-5">
                                <div class="inline-flex items-center justify-center h-12 w-12 rounded-full border border-transparent [background:linear-gradient(var(--color-slate-800),var(--color-slate-800))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                        <g fill="none" fill-rule="nonzero" opacity=".8">
                                            <path class="fill-slate-600" d="M11.5 1h1v4h-1V1ZM23 11.5v1h-4v-1h4ZM12.5 23h-1v-4h1v4ZM1 12.5v-1h4v1H1Z" />
                                            <path class="fill-slate-200" d="M12 23.5C5.649 23.5.5 18.351.5 12S5.649.5 12 .5 23.5 5.649 23.5 12 18.351 23.5 12 23.5Zm0-1c5.799 0 10.5-4.701 10.5-10.5S17.799 1.5 12 1.5 1.5 6.201 1.5 12 6.201 22.5 12 22.5Zm0-8a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5Zm0-1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="font-bold text-slate-100 mb-1">Clarify</div>
                                <p class="text-sm text-slate-400">We uncover your needs, how we can help and define a clear vision.</p>
                            </div>
                            <!-- Block #2 -->
                            <div class="text-center p-5">
                                <div class="inline-flex items-center justify-center h-12 w-12 rounded-full border border-transparent [background:linear-gradient(var(--color-slate-800),var(--color-slate-800))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24">
                                        <g fill="none" fill-rule="nonzero" opacity=".8">
                                            <path class="fill-slate-600" d="M14.416 3.527C13.841 4.39 13.5 5.242 13.5 6a1.5 1.5 0 1 0 3 0c0-.758-.34-1.61-.916-2.473A8.962 8.962 0 0 0 15 2.748c-.2.239-.398.5-.584.78ZM17.5 6a2.5 2.5 0 1 1-5 0c0-.992.41-2.015 1.084-3.027a9.979 9.979 0 0 1 1.062-1.327L15 1.293l.354.353a9.979 9.979 0 0 1 1.062 1.326C17.091 3.986 17.5 5.009 17.5 6ZM6 6.5c-1.374 0-2.5-1.055-2.5-2.375 0-.243.043-.492.125-.746.176-.548.523-1.108.99-1.672A9.774 9.774 0 0 1 5.677.62L6 .344l.323.275a9.774 9.774 0 0 1 1.061 1.089c.468.563.815 1.123.991 1.671.082.254.125.503.125.746C8.5 5.445 7.374 6.5 6 6.5Zm-.615-4.154c-.393.474-.678.933-.808 1.339-.051.16-.077.307-.077.44C4.5 4.877 5.164 5.5 6 5.5s1.5-.623 1.5-1.375c0-.133-.026-.28-.077-.44-.13-.406-.415-.865-.808-1.34A8.746 8.746 0 0 0 6 1.682c-.21.205-.42.43-.615.665Z" />
                                            <path class="fill-slate-200" d="M9.483 14.562A6.495 6.495 0 0 1 15 11.5h4.5v.5a8.5 8.5 0 0 1-8.5 8.5H9.5v3h-1v-7H7A6.5 6.5 0 0 1 .5 10v-.5H4c2.89 0 5.26 2.23 5.483 5.062Zm-.485.938H8.5v1h.174a6.45 6.45 0 0 1 .324-1Zm.502 4H11a7.5 7.5 0 0 0 7.484-7H15A5.5 5.5 0 0 0 9.5 18v1.5Zm-1-4V15A4.5 4.5 0 0 0 4 10.5H1.522A5.5 5.5 0 0 0 7 15.5h1.5Z" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="font-bold text-slate-100 mb-1">Code</div>
                                <p class="text-sm text-slate-400">Our team designs, builds and tests your tailored solution with precision.</p>
                            </div>
                            <!-- Block #3 -->
                            <div class="text-center p-5">
                                <div class="inline-flex items-center justify-center h-12 w-12 rounded-full border border-transparent [background:linear-gradient(var(--color-slate-800),var(--color-slate-800))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
                                        <path class="fill-slate-200" d="M9.423 12.278H.87L11.614.458l-1.037 7.264h8.553L8.386 19.542l1.037-7.264Zm-6.293-1h7.447l-.74 5.18 7.033-7.736H9.423l.74-5.18-7.033 7.736Z" opacity=".8" />
                                    </svg>
                                </div>
                                <div class="font-bold text-slate-100 mb-1">Convert</div>
                                <p class="text-sm text-slate-400">Live, optimized, and making an impact while you work. Its go-time!</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Content -->
                <div class="max-w-3xl mx-auto pt-12">
                    <div class="relative">
                        <div class="absolute h-full top-4 left-[2px] w-0.5 bg-slate-800 [mask-image:linear-gradient(0deg,transparent,var(--color-white)_150px,var(--color-white))] -z-10 overflow-hidden after:absolute after:h-4 after:top-0 after:-translate-y-full after:left-0 after:w-0.5 after:bg-[linear-gradient(180deg,transparent,--theme(--color-purple-500/.65)_25%,--theme(--color-purple-200)_50%,--theme(--color-purple-500/.65)_75%,transparent)] after:animate-shine" aria-hidden="true"></div>
                        <!-- Post -->
                        <article class="pt-12 first-of-type:pt-0 group">
                            <div class="md:flex">
                                <div class="w-48 shrink-0">
                                    <time class="text-sm inline-flex items-center bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 md:leading-8 before:w-1.5 before:h-1.5 before:rounded-full before:bg-purple-500 before:ring-4 before:ring-purple-500/30 mb-3">
                                        <span class="ml-[1.625rem] md:ml-5">Discovery call</span>
                                    </time>
                                </div>
                                <div class="grow ml-8 md:ml-0 pb-12 group-last-of-type:pb-0 border-b [border-image:linear-gradient(to_right,--theme(--color-slate-700/.3),--theme(--color-slate-700),--theme(--color-slate-700/.3))1] group-last-of-type:border-none">
                                    <header class="pb-6">
                                        <h2 class="text-3xl font-bold bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 pb-1 via-slate-200 to-slate-200/60 leading-8">What the real root issue?</h2>
                                        <p class="text-sm text-slate-400">Getting clear on the real challenge beneath the surface.</p>
                                    </header>
                                    <!-- Rings illustration -->
                                        <div class="text-center pb-8">
                                            <div class="inline-flex items-center justify-center relative">
                                                <!-- Particles animation -->
                                                <div class="absolute inset-0 -z-10" aria-hidden="true">
                                                    <canvas data-particle-animation data-particle-quantity="10"></canvas>
                                                </div>
                                                <div class="inline-flex">
                                                    <img src="{{ url('frontend/images/pricing-illustration.svg') }}" width="200" alt="Features illustration" />
                                                </div>
                                                <img class="absolute -mt-[40%]" src="{{ url('frontend/images/pricing-illustration-top.svg') }}" width="396" height="328" alt="Features illustration top" aria-hidden="true" />
                                                <div class="absolute w-[300%] flex items-center justify-center space-x-5">
                                                    <div class="-rotate-[4deg]">
                                                        <img class="w-11 h-11 drop-shadow-lg animate-[float_2.6s_ease-in-out_infinite] opacity-0" src="{{ url('frontend/images/pricing-icon-01.svg') }}" width="80" height="80" alt="Pricing icon 01" />
                                                    </div>
                                                    <div class="rotate-[4deg]">
                                                        <img class="w-14 h-14 opacity-0 drop-shadow-lg animate-[float_2.4s_ease-in-out_infinite] " src="{{ url('frontend/images/pricing-icon-02.svg') }}" width="80" height="80" alt="Pricing icon 02" />
                                                    </div>
                                                    <div class="-rotate-[4deg]">
                                                        <img class="w-16 h-16 drop-shadow-lg animate-[float_2.2s_ease-in-out_infinite] opacity-0" src="{{ url('frontend/images/pricing-icon-03.svg') }}" width="80" height="80" alt="Pricing icon 03" />
                                                    </div>
                                                    <img class="drop-shadow-lg animate-float" src="{{ url('frontend/images/pricing-icon-02.svg') }}" width="80" height="80" alt="Pricing icon 04" />
                                                    <div class="rotate-[4deg]">
                                                        <img class="w-16 h-16 drop-shadow-lg animate-[float_2.2s_ease-in-out_infinite] opacity-60" src="{{ url('frontend/images/pricing-icon-01.svg') }}" width="80" height="80" alt="Pricing icon 05" />
                                                    </div>
                                                    <div class="-rotate-[4deg]">
                                                        <img class="w-14 h-14 drop-shadow-lg animate-[float_2.4s_ease-in-out_infinite] opacity-25" src="{{ url('frontend/images/pricing-icon-05.svg') }}" width="80" height="80" alt="Pricing icon 06" />
                                                    </div>
                                                    <div class="rotate-[4deg]">
                                                        <img class="w-11 h-11 drop-shadow-lg animate-[float_2.6s_ease-in-out_infinite] opacity-10" src="{{ url('frontend/images/pricing-icon-07.svg') }}" width="80" height="80" alt="Pricing icon 07" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="prose max-w-none text-slate-400 prose-p:leading-relaxed prose-a:text-purple-500 prose-a:no-underline hover:prose-a:underline prose-strong:text-slate-50 prose-strong:font-medium">
                                        <p>Before writing a single line of code, we unpack the real problem worth solving over a discovery call. Whether it’s a bottleneck in your workflow, an outdated tool, or scattered systems that don’t talk to each other — this step is all about clarity. We ask the right questions, listen closely, and map out what’s truly holding things back, not just the symptoms.<br><br> <strong>This way, we build something that actually makes a difference</strong> — not just a prettier version of the same problems.</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Post -->
                        <article class="pt-12 first-of-type:pt-0 group">
                            <div class="md:flex">
                                <div class="w-48 shrink-0">
                                    <time class="text-sm inline-flex items-center bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 md:leading-8 before:w-1.5 before:h-1.5 before:rounded-full before:bg-purple-500 before:ring-4 before:ring-purple-500/30 mb-3">
                                        <span class="ml-[1.625rem] md:ml-5">Meeting</span>
                                    </time>
                                </div>
                                <div class="grow ml-8 md:ml-0 pb-12 group-last-of-type:pb-0 border-b [border-image:linear-gradient(to_right,--theme(--color-slate-700/.3),--theme(--color-slate-700),--theme(--color-slate-700/.3))1] group-last-of-type:border-none">
                                    <header class="pb-6">
                                        <h2 class="text-3xl pb-1 font-bold bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 leading-8">In a perfect world, what would the solution be?</h2>
                                        <p class="text-sm text-slate-400">We map your ideal outcome — no tech limits yet.</p>
                                    </header>
                                    <!-- Rings illustration -->
                                        <div class="text-center pb-8">
                                            <div class="inline-flex items-center justify-center relative">
                                                <!-- Particles animation -->
                                                <div class="absolute inset-0 -z-10" aria-hidden="true">
                                                    <canvas data-particle-animation data-particle-quantity="10"></canvas>
                                                </div>
                                                <div class="inline-flex">
                                                    <img src="{{ url('frontend/images/pricing-illustration.svg') }}" width="200" alt="Features illustration" />
                                                </div>
                                                <img class="absolute -mt-[40%]" src="{{ url('frontend/images/pricing-illustration-top.svg') }}" width="396" height="328" alt="Features illustration top" aria-hidden="true" />
                                                <div class="absolute w-[300%] flex items-center justify-center space-x-5">
                                                    <div class="-rotate-[4deg]">
                                                        <img class="w-11 h-11 drop-shadow-lg animate-[float_2.6s_ease-in-out_infinite] opacity-0" src="{{ url('frontend/images/pricing-icon-01.svg') }}" width="80" height="80" alt="Pricing icon 01" />
                                                    </div>
                                                    <div class="rotate-[4deg]">
                                                        <img class="w-14 h-14 opacity-0 drop-shadow-lg animate-[float_2.4s_ease-in-out_infinite] " src="{{ url('frontend/images/pricing-icon-02.svg') }}" width="80" height="80" alt="Pricing icon 02" />
                                                    </div>
                                                    <div class="-rotate-[4deg]">
                                                        <img class="w-16 h-16 drop-shadow-lg animate-[float_2.2s_ease-in-out_infinite] opacity-60" src="{{ url('frontend/images/pricing-icon-02.svg') }}" width="80" height="80" alt="Pricing icon 03" />
                                                    </div>
                                                    <img class="drop-shadow-lg animate-float" src="{{ url('frontend/images/pricing-icon-01.svg') }}" width="80" height="80" alt="Pricing icon 04" />
                                                    <div class="rotate-[4deg]">
                                                        <img class="w-16 h-16 drop-shadow-lg animate-[float_2.2s_ease-in-out_infinite] opacity-60" src="{{ url('frontend/images/pricing-icon-05.svg') }}" width="80" height="80" alt="Pricing icon 05" />
                                                    </div>
                                                    <div class="-rotate-[4deg]">
                                                        <img class="w-14 h-14 drop-shadow-lg animate-[float_2.4s_ease-in-out_infinite] opacity-25" src="{{ url('frontend/images/pricing-icon-07.svg') }}" width="80" height="80" alt="Pricing icon 06" />
                                                    </div>
                                                    <div class="rotate-[4deg]">
                                                        <img class="w-11 h-11 drop-shadow-lg animate-[float_2.6s_ease-in-out_infinite] opacity-10" src="{{ url('frontend/images/pricing-icon-04.svg') }}" width="80" height="80" alt="Pricing icon 07" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="prose max-w-none text-slate-400 prose-p:leading-relaxed prose-a:text-purple-500 prose-a:no-underline hover:prose-a:underline prose-strong:text-slate-50 prose-strong:font-medium">
                                        <p>This is where we imagine the cleanest, most effortless version of your workflow. Forget technical constraints for a moment — we focus on what should happen if everything just worked. <br><br>Whether it's automating repetitive tasks, syncing tools seamlessly, or simplifying how you and your team work day to day, we define what “better” actually looks like. <strong>This vision becomes the north star for the rest of the build.</strong></p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Post -->
                        <article class="pt-12 first-of-type:pt-0 group">
                            <div class="md:flex">
                                <div class="w-48 shrink-0">
                                    <time class="text-sm inline-flex items-center bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 md:leading-8 before:w-1.5 before:h-1.5 before:rounded-full before:bg-purple-500 before:ring-4 before:ring-purple-500/30 mb-3">
                                        <span class="ml-[1.625rem] md:ml-5">Development</span>
                                    </time>
                                </div>
                                <div class="grow ml-8 md:ml-0 pb-12 group-last-of-type:pb-0 border-b [border-image:linear-gradient(to_right,--theme(--color-slate-700/.3),--theme(--color-slate-700),--theme(--color-slate-700/.3))1] group-last-of-type:border-none">
                                    <header class="pb-6">
                                        <h2 class="text-3xl pb-1 font-bold bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 leading-8">What's the best way to build the solution?</h2>
                                        <p class="text-sm text-slate-400">Lay the technical foundation and begin development.</p>
                                    </header>
                                    <!-- Rings illustration -->
                                        <div class="text-center pb-8">
                                            <div class="inline-flex items-center justify-center relative">
                                                <!-- Particles animation -->
                                                <div class="absolute inset-0 -z-10" aria-hidden="true">
                                                    <canvas data-particle-animation data-particle-quantity="10"></canvas>
                                                </div>
                                                <div class="inline-flex">
                                                    <img src="{{ url('frontend/images/pricing-illustration.svg') }}" width="200" alt="Features illustration" />
                                                </div>
                                                <img class="absolute -mt-[40%]" src="{{ url('frontend/images/pricing-illustration-top.svg') }}" width="396" height="328" alt="Features illustration top" aria-hidden="true" />
                                                <div class="absolute w-[300%] flex items-center justify-center space-x-5">
                                                    <div class="-rotate-[4deg]">
                                                        <img class="w-11 h-11 drop-shadow-lg animate-[float_2.6s_ease-in-out_infinite] opacity-0" src="{{ url('frontend/images/pricing-icon-01.svg') }}" width="80" height="80" alt="Pricing icon 01" />
                                                    </div>
                                                    <div class="rotate-[4deg]">
                                                        <img class="w-14 h-14 drop-shadow-lg animate-[float_2.4s_ease-in-out_infinite] opacity-25" src="{{ url('frontend/images/pricing-icon-02.svg') }}" width="80" height="80" alt="Pricing icon 02" />
                                                    </div>
                                                    <div class="-rotate-[4deg]">
                                                        <img class="w-16 h-16 drop-shadow-lg animate-[float_2.2s_ease-in-out_infinite] opacity-60" src="{{ url('frontend/images/pricing-icon-01.svg') }}" width="80" height="80" alt="Pricing icon 03" />
                                                    </div>
                                                    <img class="drop-shadow-lg animate-float" src="{{ url('frontend/images/pricing-icon-05.svg') }}" width="80" height="80" alt="Pricing icon 04" />
                                                    <div class="rotate-[4deg]">
                                                        <img class="w-16 h-16 drop-shadow-lg animate-[float_2.2s_ease-in-out_infinite] opacity-60" src="{{ url('frontend/images/pricing-icon-07.svg') }}" width="80" height="80" alt="Pricing icon 05" />
                                                    </div>
                                                    <div class="-rotate-[4deg]">
                                                        <img class="w-14 h-14 drop-shadow-lg animate-[float_2.4s_ease-in-out_infinite] opacity-25" src="{{ url('frontend/images/pricing-icon-04.svg') }}" width="80" height="80" alt="Pricing icon 06" />
                                                    </div>
                                                    <div class="rotate-[4deg]">
                                                        <img class="w-11 h-11 drop-shadow-lg animate-[float_2.6s_ease-in-out_infinite] opacity-0" src="{{ url('frontend/images/pricing-icon-04.svg') }}" width="80" height="80" alt="Pricing icon 07" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="prose max-w-none text-slate-400 prose-p:leading-relaxed prose-a:text-purple-500 prose-a:no-underline hover:prose-a:underline prose-strong:text-slate-50 prose-strong:font-medium">
                                        <p>Now that we know what we're aiming for, we figure out how to get there. This is where we break down the solution into components, choose the right tools, and design a system that’s both scalable and simple to use. We make technical decisions based on real needs — not trends — and explain them in plain language so you're always in the loop.<br><br> <strong>You will get a clear picture of what’s being built, how it works, and why it matters. Without needing to be involved.</strong></p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Post -->
                        <article class="pt-12 first-of-type:pt-0 group">
                            <div class="md:flex">
                                <div class="w-48 shrink-0">
                                    <time class="text-sm inline-flex items-center bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 md:leading-8 before:w-1.5 before:h-1.5 before:rounded-full before:bg-purple-500 before:ring-4 before:ring-purple-500/30 mb-3">
                                        <span class="ml-[1.625rem] md:ml-5">Optimization</span>
                                    </time>
                                </div>
                                <div class="grow ml-8 md:ml-0 pb-12 group-last-of-type:pb-0 border-b [border-image:linear-gradient(to_right,--theme(--color-slate-700/.3),--theme(--color-slate-700),--theme(--color-slate-700/.3))1] group-last-of-type:border-none">
                                    <header class="pb-6">
                                        <h2 class="text-3xl pb-1 font-bold bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 leading-8">How can we optimize the soluton?</h2>
                                        <p class="text-sm text-slate-400">Refining the build for speed, clarity, and usability.</p>
                                    </header>
                                    <!-- Rings illustration -->
                                        <div class="text-center pb-8">
                                            <div class="inline-flex items-center justify-center relative">
                                                <!-- Particles animation -->
                                                <div class="absolute inset-0 -z-10" aria-hidden="true">
                                                    <canvas data-particle-animation data-particle-quantity="10"></canvas>
                                                </div>
                                                <div class="inline-flex">
                                                    <img src="{{ url('frontend/images/pricing-illustration.svg') }}" width="200" alt="Features illustration" />
                                                </div>
                                                <img class="absolute -mt-[40%]" src="{{ url('frontend/images/pricing-illustration-top.svg') }}" width="396" height="328" alt="Features illustration top" aria-hidden="true" />
                                                <div class="absolute w-[300%] flex items-center justify-center space-x-5">
                                                    <div class="-rotate-[4deg]">
                                                        <img class="w-11 h-11 drop-shadow-lg animate-[float_2.6s_ease-in-out_infinite] opacity-10" src="{{ url('frontend/images/pricing-icon-02.svg') }}" width="80" height="80" alt="Pricing icon 01" />
                                                    </div>
                                                    <div class="rotate-[4deg]">
                                                        <img class="w-14 h-14 drop-shadow-lg animate-[float_2.4s_ease-in-out_infinite] opacity-25" src="{{ url('frontend/images/pricing-icon-01.svg') }}" width="80" height="80" alt="Pricing icon 02" />
                                                    </div>
                                                    <div class="-rotate-[4deg]">
                                                        <img class="w-16 h-16 drop-shadow-lg animate-[float_2.2s_ease-in-out_infinite] opacity-60" src="{{ url('frontend/images/pricing-icon-05.svg') }}" width="80" height="80" alt="Pricing icon 03" />
                                                    </div>
                                                    <img class="drop-shadow-lg animate-float" src="{{ url('frontend/images/pricing-icon-07.svg') }}" width="80" height="80" alt="Pricing icon 04" />
                                                    <div class="rotate-[4deg]">
                                                        <img class="w-16 h-16 drop-shadow-lg animate-[float_2.2s_ease-in-out_infinite] opacity-60" src="{{ url('frontend/images/pricing-icon-04.svg') }}" width="80" height="80" alt="Pricing icon 05" />
                                                    </div>
                                                    <div class="-rotate-[4deg]">
                                                        <img class="w-14 h-14 drop-shadow-lg animate-[float_2.4s_ease-in-out_infinite] opacity-0" src="{{ url('frontend/images/pricing-icon-04.svg') }}" width="80" height="80" alt="Pricing icon 06" />
                                                    </div>
                                                    <div class="rotate-[4deg]">
                                                        <img class="w-11 h-11 drop-shadow-lg animate-[float_2.6s_ease-in-out_infinite] opacity-0" src="{{ url('frontend/images/pricing-icon-04.svg') }}" width="80" height="80" alt="Pricing icon 07" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="prose max-w-none text-slate-400 prose-p:leading-relaxed prose-a:text-purple-500 prose-a:no-underline hover:prose-a:underline prose-strong:text-slate-50 prose-strong:font-medium">
                                        <p>Once the core solution is in place, we fine-tune it. This means streamlining interactions, cutting out friction, and making sure everything runs fast and feels intuitive. We look at edge cases, real-world usage, and any opportunities to simplify further.<br><br> It's not just about clean code — it’s about making the experience feel effortless for you and your team. <strong>This is where a good solution becomes a great one.</strong></p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Post -->
                        <article class="pt-12 first-of-type:pt-0 group">
                            <div class="md:flex">
                                <div class="w-48 shrink-0">
                                    <time class="text-sm inline-flex items-center bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 md:leading-8 before:w-1.5 before:h-1.5 before:rounded-full before:bg-purple-500 before:ring-4 before:ring-purple-500/30 mb-3">
                                        <span class="ml-[1.625rem] md:ml-5">Lauch day</span>
                                    </time>
                                </div>
                                <div class="grow ml-8 md:ml-0 pb-12 group-last-of-type:pb-0 border-b [border-image:linear-gradient(to_right,--theme(--color-slate-700/.3),--theme(--color-slate-700),--theme(--color-slate-700/.3))1] group-last-of-type:border-none">
                                    <header class="pb-6">
                                        <h2 class="text-3xl pb-1 font-bold bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 leading-8">How shall we celebrate the success?</h2>
                                        <p class="text-sm text-slate-400">Go live, see results, and enjoy the win.</p>
                                    </header>
                                    <!-- Rings illustration -->
                                        <div class="text-center pb-8">
                                            <div class="inline-flex items-center justify-center relative">
                                                <!-- Particles animation -->
                                                <div class="absolute inset-0 -z-10" aria-hidden="true">
                                                    <canvas data-particle-animation data-particle-quantity="10"></canvas>
                                                </div>
                                                <div class="inline-flex">
                                                    <img src="{{ url('frontend/images/pricing-illustration.svg') }}" width="200" alt="Features illustration" />
                                                </div>
                                                <img class="absolute -mt-[40%]" src="{{ url('frontend/images/pricing-illustration-top.svg') }}" width="396" height="328" alt="Features illustration top" aria-hidden="true" />
                                                <div class="absolute w-[300%] flex items-center justify-center space-x-5">
                                                    <div class="-rotate-[4deg]">
                                                        <img class="w-11 h-11 drop-shadow-lg animate-[float_2.6s_ease-in-out_infinite] opacity-10" src="{{ url('frontend/images/pricing-icon-01.svg') }}" width="80" height="80" alt="Pricing icon 01" />
                                                    </div>
                                                    <div class="rotate-[4deg]">
                                                        <img class="w-14 h-14 drop-shadow-lg animate-[float_2.4s_ease-in-out_infinite] opacity-25" src="{{ url('frontend/images/pricing-icon-05.svg') }}" width="80" height="80" alt="Pricing icon 02" />
                                                    </div>
                                                    <div class="-rotate-[4deg]">
                                                        <img class="w-16 h-16 drop-shadow-lg animate-[float_2.2s_ease-in-out_infinite] opacity-60" src="{{ url('frontend/images/pricing-icon-07.svg') }}" width="80" height="80" alt="Pricing icon 03" />
                                                    </div>
                                                    <img class="drop-shadow-lg animate-float" src="{{ url('frontend/images/pricing-icon-04.svg') }}" width="80" height="80" alt="Pricing icon 04" />
                                                    <div class="rotate-[4deg]">
                                                        <img class="w-16 h-16 drop-shadow-lg animate-[float_2.2s_ease-in-out_infinite] opacity-0" src="{{ url('frontend/images/pricing-icon-04.svg') }}" width="80" height="80" alt="Pricing icon 05" />
                                                    </div>
                                                    <div class="-rotate-[4deg]">
                                                        <img class="w-14 h-14 drop-shadow-lg animate-[float_2.4s_ease-in-out_infinite] opacity-0" src="{{ url('frontend/images/pricing-icon-04.svg') }}" width="80" height="80" alt="Pricing icon 06" />
                                                    </div>
                                                    <div class="rotate-[4deg]">
                                                        <img class="w-11 h-11 drop-shadow-lg animate-[float_2.6s_ease-in-out_infinite] opacity-0" src="{{ url('frontend/images/pricing-icon-04.svg') }}" width="80" height="80" alt="Pricing icon 07" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="prose max-w-none text-slate-400 prose-p:leading-relaxed prose-a:text-purple-500 prose-a:no-underline hover:prose-a:underline prose-strong:text-slate-50 prose-strong:font-medium">
                                        <p>Once everything is built, tested, and refined, it’s time to launch. We handle the rollout smoothly — no stress, no surprises — and make sure you’re supported every step of the way. Whether it's better efficiency, time saved, or happier users, this is the moment it all pays off.<br><br> <strong>You get a working product that solves the real problem — and we get to celebrate a job well done together.</strong></p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

            </div>
        </div>

    </section>

        <!-- Our Projects -->
    <section class="relative pb-8">

        <!-- Particles animation -->
        <div class="absolute left-1/2 -translate-x-1/2 top-0 -z-10 w-80 h-80 -mt-24 -ml-32">
            <div class="absolute inset-0 -z-10" aria-hidden="true">
                <canvas data-particle-animation data-particle-quantity="6" data-particle-staticity="30"></canvas>
            </div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-12 md:pt-24">

                <!-- Section header -->
                <div class="w-full mx-auto text-center pb-6 md:pb-8">
                    <div>
                        <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">Our projects</div>
                    </div>
                    <h2 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">The results</h2>
                </div>

                <!-- Highlighted boxes -->
                <div class="relative pb-8 md:pb-12">
                    <!-- Blurred shape -->
                    <div class="absolute bottom-0 -mb-20 left-1/2 -translate-x-1/2 blur-2xl opacity-50 pointer-events-none" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="434" height="427">
                            <defs>
                                <linearGradient id="bs2-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                                    <stop offset="0%" stop-color="#6366F1" />
                                    <stop offset="100%" stop-color="#6366F1" stop-opacity="0" />
                                </linearGradient>
                            </defs>
                            <path fill="url(#bs2-a)" fill-rule="evenodd" d="m346 898 461 369-284 58z" transform="translate(-346 -898)" />
                        </svg>
                    </div>
                    <!-- Grid -->
                    <div class="grid md:grid-cols-12 gap-6" data-highlighter>
                        <!-- Box #1 -->
                        <div class="md:col-span-12" data-aos="fade-down">
                            <div class="relative group h-full bg-slate-800 rounded-3xl p-px before:absolute before:w-96 before:h-96 before:-left-48 before:-top-48 before:bg-purple-500 before:rounded-full before:opacity-0 before:pointer-events-none before:transition-opacity before:duration-500 before:translate-x-[var(--mouse-x)] before:translate-y-[var(--mouse-y)] hover:before:opacity-20 before:z-30 before:blur-[100px] after:absolute after:inset-0 after:rounded-[inherit] after:opacity-0 after:transition-opacity after:duration-500 after:[background:radial-gradient(250px_circle_at_var(--mouse-x)_var(--mouse-y),var(--color-slate-400),transparent)] group-hover:after:opacity-100 after:z-10 overflow-hidden">
                                <div class="relative h-full bg-slate-900 rounded-[inherit] z-20 overflow-hidden">
                                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                                        <!-- Blurred shape -->
                                        <div class="absolute right-0 top-0 blur-2xl" aria-hidden="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="342" height="393">
                                                <defs>
                                                    <linearGradient id="bs-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                                                        <stop offset="0%" stop-color="#6366F1" />
                                                        <stop offset="100%" stop-color="#6366F1" stop-opacity="0" />
                                                    </linearGradient>
                                                </defs>
                                                <path fill="url(#bs-a)" fill-rule="evenodd" d="m104 .827 461 369-284 58z" transform="translate(0 -112.827)" opacity=".7" />
                                            </svg>
                                        </div>
                                        <!-- Radial gradient -->
                                        <div class="absolute flex items-center justify-center bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 h-full aspect-square" aria-hidden="true">
                                            <div class="absolute inset-0 translate-z-0 bg-purple-500/50 md:bg-purple-500 rounded-full blur-[120px] opacity-70"></div>
                                            <div class="absolute w-1/4 h-1/4 translate-z-0 bg-purple-500/50 md:bg-purple-400 rounded-full blur-[40px]"></div>
                                        </div>


                                        <!-- Text -->
                                        <div class="md:max-w-[480px] w-full order-1 md:order-none p-6 pt-0 md:p-8 md:pr-0">
                                            <div class="mb-5">
                                                <div>
                                                    <img class="mb-2 w-full max-w-48 " src="{{url('frontend/images/client-dinkar.png')}}" alt="Feature 01">
                                                    <h3 class="inline-flex text-xl font-bold bg-clip-text text-transparent bg-linear-to-r from-slate-100/80 via-slate-100 to-slate-100/80 pb-1">Custom event managment system</h3>
                                                    <p class="text-slate-400">A complete event managment, CRM, ticket sales and dashboard suite with seamless integrations between the platform, payment proccessors and external databases through APIs. </p>
                                                </div>
                                            </div>
                                            <div>
                                                <a class="btn-sm text-slate-300 hover:text-white transition duration-150 ease-in-out group [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-full before:pointer-events-none" href="/projects/dinkar">
                                                    <span class="relative inline-flex items-center">
                                                        See project <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Image -->
                                        <div class="md:block hidden relative w-full min-h-64 md:h-auto max-h-72">
                                            <img class="absolute top-10 z-10 left-1/2 -translate-x-1/2 w-full max-w-[500px] mx-auto md:relative md:left-0 md:translate-x-0 rounded-md border border-gray-400/40 transition-all duration-500 ease-in-out transform group-hover:shadow-2xl group-hover:shadow-purple-500/50 group-hover:scale-103 group-hover:translate-y-[-5px]" src="{{url('frontend/images/dinkar-screenshot.jpg')}}" alt="Feature 01">
                                            <div class="relative w-full -mb-24 group">
                                                <div class="absolute z-0 hidden bg-purple-500 rounded-full opacity-50 sm:block size-24 blur-3xl bottom-64 left-48"></div>
                                                <div class="absolute z-0 hidden bg-purple-500 rounded-full opacity-50 sm:block size-24 blur-3xl bottom-64 right-48"></div>
                                                <img src="{{url('/frontend/images/ticket.png')}}" alt="Skärmdump av en biljett från Dinkår-appen som visar detaljerad biljettinformation för ett event" class="absolute md:block hidden inset-0 z-10 m-auto -rotate-12 w-32 bottom-12 right-48 transition-all duration-500 ease-in-out transform group-hover:translate-y-[-10px] group-hover:scale-110 group-hover:translate-x-[-20px]">
                                                <img src="{{url('/frontend/images/ticket.png')}}" alt="Skärmdump av en biljett från Dinkår-appen som visar detaljerad biljettinformation för ett evenemang" class="absolute md:block hidden inset-0 z-10 m-auto rotate-12 w-32 bottom-12 left-48 transition-all duration-500 ease-in-out transform group-hover:translate-y-[-10px] group-hover:scale-110 group-hover:translate-x-[20px]">
                                                <img src="{{url('/frontend/images/ticket.png')}}" alt="Skärmdump av Dinkår-appens evenemangssida med möjlighet att köpa biljetter" class="relative md:block hidden m-auto z-20 w-44 rounded-xl transition-all duration-500 ease-in-out transform group-hover:translate-y-[-20px] group-hover:scale-105">
                                            </div>
                                        </div>
                                        <div class="md:hidden relative pb-4">
                                            <img src="{{url('frontend/images/dinkar-screenshot.jpg')}}" class="rounded-t-md object-cover object-left-top border-gray-400/40 w-full z-20 transition-all max-h-64 duration-500 ease-in-out transform group-hover:shadow-2xl group-hover:shadow-purple-500 group-hover:scale-103 group-hover:translate-y-[-5px]" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Box #2 -->
                        <div class="md:col-span-7" data-aos="fade-down">
                            <div class="relative group h-full bg-slate-800 rounded-3xl p-px before:absolute before:w-96 before:h-96 before:-left-48 before:-top-48 before:bg-purple-500 before:rounded-full before:opacity-0 before:pointer-events-none before:transition-opacity before:duration-500 before:translate-x-[var(--mouse-x)] before:translate-y-[var(--mouse-y)] hover:before:opacity-20 before:z-30 before:blur-[100px] after:absolute after:inset-0 after:rounded-[inherit] after:opacity-0 after:transition-opacity after:duration-500 after:[background:radial-gradient(250px_circle_at_var(--mouse-x)_var(--mouse-y),var(--color-slate-400),transparent)] group-hover:after:opacity-100 after:z-10 overflow-hidden">
                                <div class="relative h-full bg-slate-900 rounded-[inherit] z-20 overflow-hidden">
                                    <div class="flex flex-col">
                                        <!-- Radial gradient -->
                                        <div class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/2 aspect-square" aria-hidden="true">
                                            <div class="absolute inset-0 translate-z-0 bg-slate-800 rounded-full blur-[80px]"></div>
                                        </div>
                                        <!-- Text -->
                                        <div class="w-full shrink-0 order-1 md:order-none p-6 pt-0 md:p-8">
                                            <div>
                                                <div class="w-full justify-between flex mb-2 items-center">
                                                    <img class=" w-full max-w-32 " src="{{url('frontend/images/autovis.png')}}" alt="Feature 01">
                                                    <a class="btn-sm text-slate-300 hover:text-white transition duration-150 ease-in-out group [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-full before:pointer-events-none" href="/projects/integrations/autotask-visma">
                                                        <span class="relative inline-flex items-center">
                                                            See Project <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <h3 class="inline-flex text-xl font-bold bg-clip-text text-transparent bg-linear-to-r from-slate-100/80 via-slate-100 to-slate-100/80 pb-1">Autotask/Visma financial integration</h3>
                                                <p class="text-slate-400">A robust two-way API integration that syncs invoicing, articles and customer data between Autotask & Visma.</p>
                                            </div>
                                        </div>
                                        <!-- Image -->
                                        <div class="md:block hidden relative w-full min-h-64 md:h-auto max-h-72">
                                            <img class="relative mx-auto md:absolute rounded-md border border-gray-400/40 md:top-0 md:left-24 max-w-[600px] z-20 transition-all duration-500 ease-in-out transform group-hover:shadow-2xl group-hover:shadow-purple-500 group-hover:scale-103 group-hover:translate-y-[-5px]" src="{{url('frontend/images/autovis2.png')}}" alt="Feature 03">
                                            <div class="absolute z-10 hidden bg-purple-500 rounded-full opacity-90 sm:block size-92 blur-3xl -bottom-32 left-24"></div>
                                        </div>
                                        <div class="md:hidden relative pb-4">
                                            <img src="{{url('frontend/images/autovis2.png')}}" class="rounded-t-md object-cover object-left-top border-gray-400/40 w-full z-20 transition-all max-h-64 duration-500 ease-in-out transform group-hover:shadow-2xl group-hover:shadow-purple-500 group-hover:scale-103 group-hover:translate-y-[-5px]" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Box #3 -->
                        <div class="md:col-span-5" data-aos="fade-down">
                            <div class="relative h-full group bg-slate-800 rounded-3xl p-px before:absolute before:w-96 before:h-96 before:-left-48 before:-top-48 before:bg-purple-500 before:rounded-full before:opacity-0 before:pointer-events-none before:transition-opacity before:duration-500 before:translate-x-[var(--mouse-x)] before:translate-y-[var(--mouse-y)] hover:before:opacity-20 before:z-30 before:blur-[100px] after:absolute after:inset-0 after:rounded-[inherit] after:opacity-0 after:transition-opacity after:duration-500 after:[background:radial-gradient(250px_circle_at_var(--mouse-x)_var(--mouse-y),var(--color-slate-400),transparent)] group-hover:after:opacity-100 after:z-10 overflow-hidden">
                                <div class="relative h-full bg-slate-900 rounded-[inherit] z-20 overflow-hidden">
                                    <div class="flex flex-col">
                                        <!-- Radial gradient -->
                                        <div class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/2 aspect-square" aria-hidden="true">
                                            <div class="absolute inset-0 translate-z-0 bg-slate-800 rounded-full blur-[80px]"></div>
                                        </div>
                                        <!-- Text -->
                                        <div class="md:max-w-[480px] order-1 md:order-none relative z-10 shrink-0 p-6 pt-0 md:p-8">
                                            <div>
                                                <div class="w-full justify-between flex mb-2 items-center">
                                                    <img class=" w-full max-w-32 " src="{{url('frontend/images/client-spirec.png')}}" alt="Feature 01">
                                                    <a class="btn-sm text-slate-300 hover:text-white transition duration-150 ease-in-out group [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-full before:pointer-events-none" href="/projects/spirec">
                                                        <span class="relative inline-flex items-center">
                                                            See Project <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <h3 class="inline-flex text-xl font-bold bg-clip-text text-transparent bg-linear-to-r from-slate-100/80 via-slate-100 to-slate-100/80 pb-1">Fully automated stock control system</h3>
                                                <p class="text-slate-400">Bespoke e-commerce order-fulfillment system that deeply integrates with Shopifys API.</p>
                                            </div>
                                        </div>
                                        <!-- Image -->
                                        <div class="md:block hidden relative w-full h-64 md:h-auto max-h-72 md:pb-8">
                                            <img class="absolute rounded-md border border-gray-400/40 bottom-0 left-1/2 -translate-x-1/2 mx-auto max-w-64 md:relative md:left-0 md:translate-x-0 z-20 transition-all duration-500 ease-in-out transform group-hover:shadow-2xl group-hover:shadow-purple-500/80 group-hover:scale-103 group-hover:translate-y-[-5px]" src="{{url('frontend/images/spirec2.png')}}" alt="Feature 03">
                                            <div class="absolute z-0 hidden bg-purple-500 rounded-full opacity-90 sm:block size-64 blur-3xl -bottom-24 left-1/2 -translate-x-1/2"></div>
                                        </div>
                                        <div class="md:hidden relative pb-4">
                                            <img src="{{url('frontend/images/spirec-screenshot.png')}}" class="rounded-t-md object-cover object-left-top border-gray-400/40 w-full z-20 transition-all max-h-64 duration-500 ease-in-out transform group-hover:shadow-2xl group-hover:shadow-purple-500 group-hover:scale-103 group-hover:translate-y-[-5px]" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center ">
                    <a class="btn-sm text-slate-300 hover:text-white transition duration-150 ease-in-out group [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-full before:pointer-events-none" href="/projects">
                        <span class="relative inline-flex items-center">
                            More projects <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Customers -->
    <section class="relative">
        <!-- Radial gradient -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none -z-10" aria-hidden="true">
            <div class="absolute flex items-center justify-center top-0 -translate-y-1/2 left-1/2 -translate-x-1/2 w-1/3 aspect-square">
                <div class="absolute inset-0 translate-z-0 bg-purple-500 rounded-full blur-[120px] opacity-50"></div>
            </div>
        </div>
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="py-12 md:py-20">
                <!-- Content -->
                <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                     <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">Our Clients</div>
                    <h2 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">Kind words from happy clients.</h2>
                    <p class="text-lg text-slate-400">Hear from our clients themselves - genuine feedback that reflects the ease, care and results we deliver with every project.</p>
                </div>
                <!-- Customers -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 max-w-md mx-auto md:max-w-none">
                    <!-- Customer #01 -->
                    <div class="relative p-5 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center justify-between space-x-2 mb-4">
                            <div class="flex items-center space-x-4">
                                <img class="shrink-0 rounded-full" src="{{ url('/frontend/images/axel.jpeg') }}" width="44" height="44" alt="Customer 01" />
                                <div class="grow truncate">
                                    <div class="font-bold text-slate-100 truncate">Axel Björkqvist</div>
                                    <p class="text-sm text-slate-500 font-medium truncate" >Spirec AB</p>
                                </div>
                            </div>
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                <path class="fill-purple-500" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z" />
                            </svg>
                        </div>
                        <p class="text-sm text-slate-400">Our custom system connects Shopify and Meta ads, tracks stock, orders, and ad performance – all in one place. It's fast, easy to use, and has saved us so much time. Couldn’t run the business without it.</p>
                    </div>
                    <!-- Customer #02 -->
                    <div class="relative p-5 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center justify-between space-x-2 mb-4">
                            <div class="flex items-center space-x-4">
                                <img class="shrink-0 rounded-full" src="{{ url('/frontend/images/darren.jpg') }}" width="44" height="44" alt="Customer 01" />
                                <div class="grow truncate">
                                    <div class="font-bold text-slate-100 truncate">Darren Round</div>
                                    <p class="text-sm text-slate-500 font-medium truncate" >AB Software</p>
                                </div>
                            </div>
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                <path class="fill-purple-500" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z" />
                            </svg>
                        </div>
                        <p class="text-sm text-slate-400">Aqueduct Software built us a custom financial integration that saved hours of manual work every week. Everything runs smoothly now across our systems, and their team made a complex process feel easy.</p>
                    </div>
                    <!-- Customer #03 -->
                    <div class="relative p-5 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center justify-between space-x-2 mb-4">
                            <div class="flex items-center space-x-4">
                                <img class="shrink-0 rounded-full" src="{{ url('/frontend/images/will.jpeg') }}" width="44" height="44" alt="Customer 01" />
                                <div class="grow truncate">
                                    <div class="font-bold text-slate-100 truncate">Will Rushmere</div>
                                    <p class="text-sm text-slate-500 font-medium truncate" >Good for Pets Co.</p>
                                </div>
                            </div>
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                <path class="fill-purple-500" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z" />
                            </svg>
                        </div>
                        <p class="text-sm text-slate-400">We had custom code added to our Shopify store and the difference is night and day. Everything feels faster, smoother, and more user-friendly. Our customers noticed it right away – and so did our conversion rate.</p>
                    </div>
                    <!-- Customer #04 -->
                    <div class="hidden md:block relative p-5 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center justify-between space-x-2 mb-4">
                            <div class="flex items-center space-x-4">
                                <img class="shrink-0 rounded-full" src="{{ url('/frontend/images/lucas.jpeg') }}" width="44" height="44" alt="Customer 01" />
                                <div class="grow truncate">
                                    <div class="font-bold text-slate-100 truncate">Lucas Dunberg</div>
                                    <p class="text-sm text-slate-500 font-medium truncate" >Intern at Aqueduct</p>
                                </div>
                            </div>
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                <path class="fill-purple-500" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z" />
                            </svg>
                        </div>
                        <p class="text-sm text-slate-400">Very professional websites! The support and assistance you receive, along with the knowledge and expertise behind every decision made, are extraordinary. Highly recommended!</p>
                    </div>
                    <!-- Customer #05 -->
                    <div class="hidden md:block relative p-5 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center justify-between space-x-2 mb-4">
                            <div class="flex items-center space-x-4">
                                <img class="shrink-0 rounded-full" src="{{ url('/frontend/images/vidar.png') }}" width="44" height="44" alt="Customer 01" />
                                <div class="grow truncate">
                                    <div class="font-bold text-slate-100 truncate">Vidar Lindblad</div>
                                    <p class="text-sm text-slate-500 font-medium truncate" >Beach Burgers</p>
                                </div>
                            </div>
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                <path class="fill-purple-500" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z" />
                            </svg>
                        </div>
                        <p class="text-sm text-slate-400">We needed a simple website, and Alex from Aqueduct delivered something that looks and feels amazing. It's clean, fast, and exactly what we wanted - just way better than we expected.</p>
                    </div>
                    <!-- Customer #06 -->
                    <div class=" hidden md:block relative p-5 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center justify-between space-x-2 mb-4">
                            <div class="flex items-center space-x-4">
                                <img class="shrink-0 rounded-full" src="{{ url('/frontend/images/einar.png') }}" width="44" height="44" alt="Customer 01" />
                                <div class="grow truncate">
                                    <div class="font-bold text-slate-100 truncate">Einar Arnell</div>
                                    <p class="text-sm text-slate-500 font-medium truncate" >User of DinKår</p>
                                </div>
                            </div>
                            <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="90" height="14">
                                <path class="fill-purple-500" d="M7 0 5.006 5.368H0l4.232 3.221L2.195 14 7 10.344 11.82 14 9.768 8.589 14 5.368H8.98zM26 0l-1.994 5.368H19l4.232 3.221L21.195 14 26 10.344 30.82 14l-2.052-5.411L33 5.368h-5.02zM45 0l-1.994 5.368H38l4.232 3.221L40.195 14 45 10.344 49.82 14l-2.052-5.411L52 5.368h-5.02zM64 0l-1.994 5.368H57l4.232 3.221L59.195 14 64 10.344 68.82 14l-2.052-5.411L71 5.368h-5.02zM83 0l-1.994 5.368H76l4.232 3.221L78.195 14 83 10.344 87.82 14l-2.052-5.411L90 5.368h-5.02z" />
                            </svg>
                        </div>
                        <p class="text-sm text-slate-400">Dinkår has made our job so much easier. We handle memberships, sell tickets, and check people in at events – all in the same system. Super easy to use and saves us a ton of time. Wouldn’t go back.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-cta>

    </x-cta>

</x-layout>
