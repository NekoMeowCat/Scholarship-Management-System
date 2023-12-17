<x-app-layout>
    <div x-data="{ activeTab: 'dashboard' }" class="min-h-screen max-w-full overflow-hidden z-40 bg-[#f5f5f5]">
        <section class="flex">
            <x-sidebar></x-sidebar>
            <div class="flex-1 bg-[#f5f5f5] min-h-screen m-2">
                <div class="h-10 m-2 flex items-center gap-x-4 border-b-2">
                    <div @click="activeTab = 'dashboard'" :class="{ ' border-b-2 border-blue-600': activeTab === 'dashboard' }" class="cursor-pointer font-light py-2">Dashboard</div>
                    <div @click="activeTab = 'welcome'" :class="{ ' border-b-2 border-blue-600': activeTab === 'welcome' }" class="cursor-pointer font-light py-2">Welcome</div>
                </div>

                <!-- Only show 'asdasd' when the activeTab is 'dashboard' -->
                <div x-show="activeTab === 'dashboard'">
                    <div class="flex capitalize m-2 my-4 bg-white rounded-md h-96 border shadow-2xl">
                        <div class="flex flex-col w-full">
                            <div class="h-12 border-b-2 flex items-center rounded-t-md">
                                <span class="capitalize m-2 font-normal font-roboto text-lg text-gray-600 ">welcome</span>
                            </div>
                            <div class="flex justify-center items-center h-[300px] bg-[#1d68b3] rounded-md m-4">
                                <div class="block text-center">
                                    <div class="capitalize text-white text-[28px] font-roboto">
                                        welcome to father saturnino urios university!
                                    </div>
                                    <div class="capitalize text-white font-roboto tracking-wide py-3">
                                        <span class="font-light text-[24px]">scholarship management system</span>
                                    </div>
                                    <div class="capitalize text-white font-roboto tracking-wide">
                                        <span class="font-light text-lg">designed for transparent scholarship administration</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 'asdasd' in a separate div below the first div -->
                    <div class="bg-white rounded-lg m-2 my-8 shadow-2xl">
                        <div class="h-12 border-b-2 flex items-center">
                            <span class="capitalize m-2 font-normal font-roboto text-xl text-gray-600">scholarships</span>
                        </div>
                        <div class="grid grid-cols-3 gap-8 mx-6 py-6">
                            <div class="border border-gray-300 hover:border-2 hover:border-blue-600 rounded-md">
                                <div class="flex flex-col bg-white border shadow-sm rounded-md dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                                    <div class="flex items-center justify-center bg-gradient-to-r from-teal-200">
                                        <img class="h-64 w-64 rounded-t-xl" src="{{ asset('storage/images/yes.png') }}" alt="Image Description">
                                    </div>
                                    <div class="p-4 md:p-5">
                                        <h3 class="text-lg font-bold text-gray-800 capitalize">
                                            fsuu funded
                                        </h3>
                                        <p class="mt-1 text-gray-500 dark:text-gray-400">
                                            Some quick example text to build on the card title and make up the bulk of the card's content.
                                        </p>
                                        <a class="mt-2 py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="{{ route('fsuu-funded') }}">
                                            See More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-gray-300 hover:border-2 hover:border-blue-600 rounded-md">
                                <div class="flex flex-col bg-white border shadow-sm rounded-md dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]"> 
                                    <div class="flex justify-center items-center bg-gradient-to-r from-teal-200">
                                        <img class="h-64 w-64 rounded-t-xl" src="{{ asset('storage/images/docker.png') }}" alt="Image Description">
                                    </div>
                                    <div class="p-4 md:p-5">
                                        <h3 class="text-lg font-bold text-gray-800 capitalize">
                                            private organization funded
                                        </h3>
                                        <p class="mt-1 text-gray-500 dark:text-gray-400">
                                            Some quick example text to build on the card title and make up the bulk of the card's content.
                                        </p>
                                        <a class="mt-2 py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="{{ route('private-funded') }}">
                                            See More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-gray-300 hover:border-2 hover:border-blue-600 rounded-md">
                                <div class="flex flex-col bg-white border shadow-sm rounded-md dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                                    <div class="flex justify-center items-center bg-gradient-to-r from-teal-200">
                                        <img class="h-64 w-64 rounded-t-xl" src="{{ asset('storage/images/govt.png') }}" alt="Image Description">
                                    </div>
                                    <div class="p-4 md:p-5">
                                        <h3 class="text-lg font-bold text-gray-800 capitalize">
                                            government funded
                                        </h3>
                                        <p class="mt-1 text-gray-500 dark:text-gray-400">
                                            Some quick example text to build on the card title and make up the bulk of the card's content.
                                        </p>
                                        <a class="mt-2 py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="{{ route('govt-funded') }}">
                                            See More
                                        </a>
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
