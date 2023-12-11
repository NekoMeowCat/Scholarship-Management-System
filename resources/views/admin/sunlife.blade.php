<x-app-layout>
    <div class="min-h-screen max-w-screen overflow-x-scroll z-40">
        <section class="flex">
            <x-sidebar></x-sidebar>
            <div class="w-full items-center">
                <div class="m-8 min-h-screen block">
                    <div class="w-full block md:flex bg-gray-50 rounded-md shadow-2xl">
                        <div class="flex justify-center items-center md:border-r-4 border-[#eaab00] my-6 md:w-1/2">
                            <img src="{{ asset('storage/images/Sunlife.png') }}" alt="" class="h-64">
                        </div>
                        <div class="block h-64 md:w-1/2">
                            <div class="flex justify-center items-start md:items-center m-2 h-full">
                                <span class="px-6 font-zilla text-4xl md:text-6xl uppercase text-[#003946] tracking-normal font-medium md:font-semibold text-center">
                                    Life's Brighter Under The Sun
                                </span>
                            </div>                             
                        </div>
                    </div>
                    <div class="rounded-md shadow-2xl h-screen w-full mt-4">
                        <x-sunlife-table />
                    </div>
                </div>               
            </div>           
        </section>       
    </div>
</x-app-layout>