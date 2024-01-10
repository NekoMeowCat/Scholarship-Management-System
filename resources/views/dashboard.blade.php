<x-app-layout>
    <div x-data="{ activeTab: 'dashboard' }" class="min-h-screen max-w-full overflow-hidden z-40 bg-gray-200">
        <section class="flex">
            <x-sidebar></x-sidebar>
            <div class="flex-1 bg-transparent min-h-screen m-2">
                <div class="h-10 m-2 flex items-center gap-x-4 border-b-2">
                    <div @click="activeTab = 'dashboard'" :class="{ ' border-b-2 border-blue-600': activeTab === 'dashboard' }" class="cursor-pointer font-medium text-gray-700 py-2">Dashboard</div>
                    <div @click="activeTab = 'welcome'" :class="{ ' border-b-2 border-blue-600': activeTab === 'welcome' }" class="cursor-pointer font-medium text-gray-700 py-2">Welcome</div>
                </div>

                <!-- Only show 'asdasd' when the activeTab is 'dashboard' -->
                <div x-show="activeTab === 'dashboard'">
                    
                    
                    <!-- 'asdasd' in a separate div below the first div -->
                    <div class="bg-white rounded-lg m-2 my-8 shadow-2xl">
                        <div class="h-12 border-b-2 flex items-center bg-[#4b4b81] rounded-t-md">
                            <span class="capitalize m-2 font-normal font-roboto text-xl text-white">scholarships</span>
                        </div>
                        <div class="grid grid-cols-3 gap-24 mx-6 py-6">
                            <div class="border-4 border-[#42424e] rounded-md group hover:border-[#6a6d88] relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/10">
                                <div class="h-96 w-72 flex justify-end items-center">
                                    <img class="h-64 w-48 object-cover transition-transform duration-500 group-hover:scale-125" src="{{ asset('storage/images/yes.png') }}" alt="" />
                                </div>
                                <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-[#4b4b81] group-hover:from-black/50 group-hover:via-black/60 group-hover:to-black/70"></div>
                                <div class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                                    <h1 class="font-roboto text-3xl font-bold text-white">Fsuu Funded</h1>
                                    <p class="mb-20 text-sm italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100 capitalize">
                                        list of scholars under fsuu
                                    </p>
                                    <a href="{{ route('fsuu-funded') }}" class="rounded-full bg-blue-600 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">See More</a>
                                </div>
                            </div>
                            <div class="border-4 border-[#42424e] rounded-md group hover:border-[#6a6d88] relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/10">
                                <div class="h-96 w-72 flex justify-end items-center">
                                    <img class="h-48 w-48 object-cover transition-transform duration-500 group-hover:scale-125" src="{{ asset('storage/images/private.png') }}" alt="" />
                                </div>
                                <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-[#4b4b81] group-hover:from-black/50 group-hover:via-black/60 group-hover:to-black/70"></div>
                                <div class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                                    <h1 class="font-roboto text-3xl font-bold text-white capitalize">private Funded</h1>
                                    <p class="mb-20 text-sm italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100 capitalize">
                                        list of funded by private organizations
                                    </p>
                                    <a href="{{ route('private-funded') }}" class="rounded-full bg-blue-600 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">See More</a>
                                </div>
                            </div>
                            <div class="border-4 border-[#42424e] rounded-md group hover:border-[#6a6d88] relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/10">
                                <div class="h-96 w-72 flex justify-end items-center">
                                    <img class="h-48 w-48 object-cover transition-transform duration-500 group-hover:scale-125" src="{{ asset('storage/images/govt.png') }}" alt="" />
                                </div>
                                <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-[#4b4b81] group-hover:from-black/50 group-hover:via-black/60 group-hover:to-black/70"></div>
                                <div class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                                    <h1 class="font-roboto text-3xl font-bold text-white capitalize">gov't Funded</h1>
                                    <p class="mb-20 text-sm italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100 capitalize">
                                        list of funded by government agencies
                                    </p>
                                    <a href="{{ route('govt-funded') }}" class="rounded-full bg-blue-600 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex capitalize m-2 my-4 bg-gray-50 rounded-md h-96 border shadow-2xl">
                        <div class="flex flex-col w-full">
                            <div class="h-12 border-b-2 flex items-center rounded-t-md bg-[#4b4b81]">
                                <span class="capitalize m-2 font-normal font-roboto text-lg text-white ">Featuring</span>
                            </div>
                            <div class="flex justify-center items-center h-[300px] bg-[#0e4b90] rounded-sm m-4">
                                <div class="block text-center">
                                    <div class="capitalize text-white text-[38px] font-roboto tracking-tight">
                                        welcome to father saturnino urios university!
                                    </div>
                                    <div class="capitalize text-white font-roboto tracking-wide py-3">
                                        <span class=" text-[28px] tracking-tight">scholarship data management system</span>
                                    </div>
                                    <div class="capitalize text-white font-roboto tracking-wide">
                                        <span class="font-light text-base tracking-tight">designed for transparent scholarship administration</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <x-dashboard-first-menu></x-dashboard-first-menu>
                </div>
                
                <div x-show="activeTab === 'welcome'" class="capitalize m-2">
                    <div class="m-2 rounded-md border-4 w-full">
                        <div class="p-4 text-start font-bold capitalize flex justify-center">
                            this is a title
                        </div>
                        <div class="p-6 text-start w-full border mb-4 text-gray-600 font-normal">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere numquam inventore necessitatibus porro labore eos quam, fuga possimus veniam laudantium maxime iure eveniet delectus voluptas pariatur. Nulla quam quod ullam natus deleniti. Earum asperiores adipisci molestias, excepturi sunt cum aut fugiat ducimus voluptatibus accusantium quibusdam, fugit, enim consectetur et corrupti?
                        </div>
                        <div class="p-4 text-start font-bold capitalize flex justify-center">
                            this is another title
                        </div>
                        <div class="p-6 text-start w-full border text-gray-600 font-normal">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere numquam inventore necessitatibus porro labore eos quam, fuga possimus veniam laudantium maxime iure eveniet delectus voluptas pariatur. Nulla quam quod ullam natus deleniti. Earum asperiores adipisci molestias, excepturi sunt cum aut fugiat ducimus voluptatibus accusantium quibusdam, fugit, enim consectetur et corrupti?
                        </div>
                    </div>
                </div>
                
            </div>
            
        </section>       
    </div>
</x-app-layout>
