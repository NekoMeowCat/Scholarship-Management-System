<x-app-layout>
    <div class="min-h-screen max-w-screen overflow-x-scroll z-40">
        <section class="flex">
            <x-sidebar></x-sidebar>
            <div class="w-full items-center rounded-md">
                <div class="m-4 rounded-md shadow-2xl block bg-[#113946]">
                    <div class="h-auto w-full p-2">
                        <img src="{{ asset('storage/images/chedar.png') }}" alt="" class="m-4 h-64">
                    </div>                   
                </div>  
                <div class="rounded-md m-4 shadow-2xl">
                    <x-verified-scholars-table></x-verified-scholars-table>
                </div>             
            </div>           
        </section>       
    </div>
</x-app-layout>