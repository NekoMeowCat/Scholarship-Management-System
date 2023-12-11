<x-app-layout>
    <div class="min-h-screen max-w-screen bg-white overflow-x-scroll z-40">
        <section class="flex">
            <x-sidebar></x-sidebar>
            <div class="w-full items-center">
                <div class="m-8 min-h-screen block">
                    <div class="block md:flex w-full p-1 bg-gray-100 rounded-md shadow-2xl h-80">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('storage/images/sm.png') }}" alt="" class="h-64 w-64 flex justify-center ml-16 lg:ml-10">
                        </div>
                        <div class="block md:py-6">
                            <div class="flex justify-center pt-16 h-auto">
                                <span class="text-5xl md:text-8xl uppercase text-blue-800 tracking-tighter font-extrabold">
                                    Supermalls
                                </span>
                            </div>
                            <div class="m-2 h-auto flex justify-end items-center">
                                <span class="md:text-2xl uppercase text-blue-700 tracking-tighter font-medium font-poppins">
                                    we got it all for you
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-md shadow-2xl h-screen w-full mt-4">
                        <x-sm-table />
                    </div>
                </div>               
            </div>           
        </section>       
    </div>
</x-app-layout>