<x-app-layout>
    <div class="min-h-screen max-w-screen overflow-x-scroll z-40">
        <section class="flex">
            <x-sidebar></x-sidebar>
            <div class="w-full items-center">
                <div class="m-8 min-h-screen block">
                    <div class="flex relative h-96 w-full rounded-sm">
                        <div class="absolute inset-0 bg-cover bg-center rounded-sm" style="background-image: url('{{ asset('storage/images/fsuu.jpg') }}');"></div>
                        <div class="absolute inset-0 bg-black opacity-50 rounded-sm"></div>
                        <div class="flex items-center justify-center md:justify-start w-full h-full">
                            <img src="{{ asset('storage/images/yes.png') }}" alt="Overlay Image" class="w-80 h-80 object-cover rounded-sm relative" />
                        </div>
                    </div>
                    <div class="border border-black h-screen w-full mt-4">
                        <x-sagap-table />
                    </div>
                </div>               
            </div>           
        </section>       
    </div>
</x-app-layout>