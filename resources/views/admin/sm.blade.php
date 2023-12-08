<x-app-layout>
    <div class="min-h-screen max-w-screen overflow-x-scroll z-40">
        <section class="flex">
            <x-sidebar></x-sidebar>
            <div class="w-full items-center">
                <div class="m-8 min-h-screen block">
                    <div class="block md:flex w-full p-1 bg-purple-200 rounded-md shadow-2xl">
                        <img src="{{ asset('storage/images/sm.png') }}" alt="" class="h-48 w-48 flex justify-center ml-16 lg:ml-10">
                        <div class="block md:py-6">
                            <div class="flex justify-center m-2 h-auto">
                                <span class="text-5xl md:text-8xl uppercase text-blue-800 tracking-tighter font-extrabold">
                                    Supermalls
                                </span>
                            </div>
                            <div class="m-2 h-auto flex justify-center items-center">
                                <span class="md:text-2xl uppercase text-blue-700 tracking-tighter font-medium">
                                    Everything's here
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="border border-black h-screen w-full mt-4">
                        <x-sm-table />
                    </div>
                </div>               
            </div>           
        </section>       
    </div>
</x-app-layout>