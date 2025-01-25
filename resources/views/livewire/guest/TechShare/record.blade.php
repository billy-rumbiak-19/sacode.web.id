<div>

    
    <!-- Page Content -->
    <div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-2xl">

            <!-- Title -->
            <div class="text-center mb-6">
                <p class="text-xs font-semibold text-gray-500 tracking-wide uppercase mb-3 dark:text-neutral-200">
                TechShare
                </p>
                <h1 class="text-3xl text-gray-800 font-bold sm:text-5xl lg:text-6xl lg:leading-tight dark:text-neutral-200">
                Community<br> <span class="text-blue-500">Sharing and Learning</span>
                </h1>
            </div>
            <!-- End Title -->

            <!-- Content -->
            <div class="space-y-5 md:space-y-8">

                <p class="text-xl py-6 text-gray-700 dark:text-neutral-200"><strong>TechShare is an online event by the SaCode Community to share and learn about Information Technology.</strong> Speakers and moderators on this event are the volunteers who are willing to give their time, experience and knowledge during online meetings via Google Meet which last around 2 hours.<p>

                <p class="text-lg font-bold text-gray-800 dark:text-neutral-200">Find our 2024's TechShare Events:</p>

                @if (count($TechShare) > 0)
                    
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

                    @foreach ($TechShare as $item)

                    <!-- Card -->
                    <div class="group flex flex-col h-full bg-white border border-gray-200 @if($item->published_at != null) shadow-lg @endif rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                        <img src="{{ asset($item->poster) }}" alt="{{ $item->title }}" class="rounded-t-xl">
                        <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
                        
                        @if ($item->published_at != null)
                        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-black rounded-ee-xl bg-gray-800 text-white shadow-sm transition duration-200 hover:bg-gray-50 hover:text-gray-800 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 rounded-b-xl" href="{!! $item->wa_link ?? 'https://chat.whatsapp.com/GYsZ5l8FOy59OHgfTudTQA' !!}">
                            <i class="fa-solid fa-paper-plane"></i> JOIN NOW
                        </a> 
                        @else
                        <div class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 rounded-b-xl">
                           <i class="fa-solid fa-check"></i> Done
                        </div>
                        @endif
                        </div>
                    </div>
                    <!-- End Card -->

                    @endforeach
                </div>
                <!-- End Content -->

                @else
                    <h1 class="text-xl text-center text-gray-800 font-semibold">Data Not Found</h1>
                @endif

            </div>

            <div class="py-6">
                {{ $TechShare->links() }}
            </div>          

            <!-- Review -->
            <div class="py-6">
                <div class="flex space-x-1">
                    <div class="text-2xl text-gray-800 dark:text-neutral-400">
                    
                            <p class="text-4xl font-bold text-gray-800 dark:text-neutral-200">You may want to be part of this</p>

                            <p class="text-xl py-6 text-gray-700 dark:text-neutral-200">This is TechShare by SaCode Community! Here you can share and discuss. <strong>You may contribute as a speaker, moderator, or as part of the team behind the scenes</strong>.</p>

                            <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="https://wa.link/21qtrj" target="_blank">
                                <i class="fa-solid fa-laptop-code"></i>
                                Send us message on Whatsapp!
                            </a>

                            <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800" href="{{ route('donation') }}">
                                <i class="fa-solid fa-book-open"></i>
                                Give donation here
                            </a>
                            
                    </div>
                </div>
            </div>
            <!-- End Review -->


        </div>
    </div>
    <!-- End Page Content -->

</div>
