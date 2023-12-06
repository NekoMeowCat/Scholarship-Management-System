<x-app-layout>
    <div class="min-h-screen max-w-screen overflow-x-scroll z-40">
        <section class="flex">
            <x-sidebar></x-sidebar>
            <div class="w-full items-center">
                <div class="m-8 bg-blue-500 min-h-screen block">
                    <div class="h-auto w-full">
                        <img src="{{ asset('storage/images/chedar.png') }}" alt="" class="pt-4">
                    </div>
                    <div class="border border-black h-screen w-full mt-4">
                        <x-scholars-table></x-scholars-table>
                    </div>
                </div>               
            </div>           
        </section>       
    </div>
</x-app-layout>