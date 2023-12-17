<x-app-layout>
    <div x-data="{ activeTab: 'Scholarships' }" class="min-h-screen max-w-full overflow-hidden z-40 bg-[#f5f5f5]">
        <section class="flex">
            <x-sidebar></x-sidebar>
            <div class="min-h-screen flex-1 m-2">
                <div class="h-10 m-2 flex items-center ">
                    <ol class="flex items-center whitespace-nowrap" aria-label="Breadcrumb">
                        <li class="inline-flex items-center">
                            <a class="flex items-center text-base text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="{{ route('dashboard')}}">
                                Home
                            </a>
                            <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                        </li>
                        <li class="inline-flex items-center">
                            <a class="flex items-center font-medium text-base text-gray-700" href="{{ route('private-funded') }}">
                                Private Funded
                            </a>
                        </li>
                    </ol>
                </div>
                <div class="flex capitalize rounded-md bg-[#f5f5f5] m-2 my-6">
                    <span class="capitalize text-gray-600 text-2xl">private organization funded</span>
                </div>
                <div class="grid grid-cols-4 gap-4 border mx-2">
                    <div class="flex flex-col bg-white border shadow-sm rounded-sm dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                        <img class="w-full h-auto rounded" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2532&q=80" alt="Image Description">
                        <div class="p-4 md:p-5">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                Sunlife
                            </h3>
                            <p class="mt-1 text-gray-500 dark:text-gray-400">
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </p>
                            <a class="mt-2 py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="{{ route('sunlife') }}">
                                View Scholars
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-col bg-white border shadow-sm rounded-sm dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                        <img class="w-full h-auto rounded" src="https://images.unsplash.com/photo-1680868543815-b8666dba60f7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2532&q=80" alt="Image Description">
                        <div class="p-4 md:p-5">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                SM City
                            </h3>
                            <p class="mt-1 text-gray-500 dark:text-gray-400">
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </p>
                            <a class="mt-2 py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="{{ route('sm') }}">
                                View Scholars
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>