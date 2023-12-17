<x-app-layout>
    <div class="min-h-screen max-w-screen overflow-x-scroll z-40">
        <section class="flex">
            <x-sidebar></x-sidebar>
            <div class="w-full items-center">
                <div class="m-8 min-h-screen block">
                    <ol class="flex items-center whitespace-nowrap" aria-label="Breadcrumb">
                        <li class="inline-flex items-center">
                            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="{{ route('dashboard')}}">
                                Home
                            </a>
                            <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                        </li>
                        <li class="inline-flex items-center">
                            <a class="flex items-center text-sm text-gray-500" href="{{ route('govt-funded') }}">
                                Government Funded
                            </a>
                            <svg class="flex-shrink-0 mx-2 overflow-visible h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                        </li>
                        <li class="inline-flex items-center">
                            <a class="flex items-center font-medium text-sm text-gray-700" href="{{ route('ched') }}">
                                Ched 
                            </a>
                        </li>
                    </ol>
                    <div class="rounded-md shadow-2xl h-screen w-full mt-4">
                        <x-ched-table />
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
