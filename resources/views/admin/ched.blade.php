<x-app-layout>
    <div class="min-h-screen max-w-screen overflow-x-scroll z-40">
        <section class="flex">
            <x-sidebar></x-sidebar>
            <div class="w-full items-center">
                <div class="m-8 min-h-screen block">
                    <div class="block md:flex w-full p-1 bg-[#164863] rounded-md shadow-2xl h-80">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('storage/images/chedar.png') }}" alt=""
                                class="h-full w-full flex justify-center ml-16 lg:ml-10">
                        </div>
                    </div>
                    <div class="rounded-md shadow-2xl h-screen w-full mt-4">
                        <x-ched-table />
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
