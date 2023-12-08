<x-app-layout>
    <div class="min-h-screen max-w-screen overflow-x-scroll z-40">
        <section class="flex">
            <x-sidebar></x-sidebar>
            <div class=" w-full items-center">
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mx-6 mt-6">
                    <x-dashboard-first-menu />
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-5 mx-6">
                    <x-dashboard-second-menu />               
                </div>
                <div class="bg-white mx-6 mt-6 rounded-md ">
                    <x-table />
                </div>              
            </div>           
        </section>       
    </div>
</x-app-layout>

