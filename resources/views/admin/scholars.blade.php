<x-app-layout>
    <div class="max-w-screen z-40 min-h-screen overflow-x-scroll bg-white">
        <section class="flex">
            <x-sidebar></x-sidebar>
            <div class="w-full items-center rounded-md">
                <div class="m-4 block rounded-md bg-[#164863] shadow-2xl">
                    <div class="h-auto w-full p-2">
                        <img src="{{ asset('storage/images/chedar.png') }}" alt="" class="m-4 h-64">
                    </div>
                </div>
                <div class="m-4">
                    <x-scholars-table></x-scholars-table>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
