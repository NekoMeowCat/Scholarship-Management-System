<x-app-layout>
    <div class="min-h-screen max-w-screen overflow-x-scroll z-40">
        <section class="flex">
            <x-sidebar></x-sidebar>
            <div class="w-full items-center">
                <div class="m-8 min-h-screen block">
                    <div class="w-full block md:flex bg-gray-50 rounded-md shadow-2xl">
                        <div class="flex justify-center items-center border-r-4 border-[#f58632] my-6 w-4/6">
                            <img src="{{ asset('storage/images/tes.png') }}" alt="" class="h-64">
                        </div>
                        <div class="block h-64">
                            <div class="flex justify-center items-center m-2 h-full">
                                <span class="px-6 font-zilla text-4xl md:text-6xl uppercase text-gray-800 tracking-normal font-medium md:font-semibold text-center">
                                    Tertiary Education Subsidy
                                </span>
                            </div>                             
                        </div>
                    </div>
                    <div class="rounded-md shadow-2xl h-screen w-full mt-4">
                        <x-tes-table />
                    </div>
                </div>               
            </div>           
        </section>       
    </div>
</x-app-layout>