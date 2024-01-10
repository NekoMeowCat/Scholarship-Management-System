<x-app-layout>
    <div class="max-w-screen z-40 min-h-screen overflow-x-scroll bg-white">
        <section class="flex">
            <x-sidebar></x-sidebar>
            <div class="w-full items-center rounded-md">
                <div class="flex">
                    <div class="m-4 block rounded-md bg-white shadow-xl relative">
                        <div class="h-auto w-full p-2">
                            <span class="uppercase text-2xl font-medium text-gray-700">list of scholars</span>
                        </div>
                    </div>
                    @if(session('success'))
                        <div x-data="{ show: true }"
                            x-show="show"
                            x-init="setTimeout(() => show = false, 3000)"
                            id="success-alert"
                            class="absolute top-0 right-0 mt-4 mr-4 bg-green-500 border-t-2 border-teal-500 rounded-lg p-4"
                            role="alert">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full border-4 border-teal-100 bg-teal-200 text-teal-800 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
                                        <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="m9 12 2 2 4-4"/></svg>
                                    </span>
                                </div>
                                <div class="ms-3">
                                    <h3 class="text-white font-semibold ">
                                        {{ session('success') }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
                <div class="m-4">
                    <x-scholars-table></x-scholars-table>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
