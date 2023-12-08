<x-app-layout>
    <div class="min-h-screen max-w-screen overflow-x-scroll z-40">
        <section class="flex">
            <x-sidebar></x-sidebar>
            <div class="w-full items-center">
                <div class="m-8 min-h-screen block">
                    <div class="flex h-auto w-full rounded-md bg-white shadow-2xl">
                        <img src="{{ asset('storage/images/sunlife.png') }}" alt="Overlay Image" class="p-2 w-full h-96 object-fit rounded-sm " /> 
                    </div>
                    <div class="border border-black h-screen w-full mt-4">
                        <x-sunlife-table />
                    </div>
                </div>               
            </div>           
        </section>       
    </div>
</x-app-layout>