

<aside id="default-sidebar" class=" min-h-screen z-40 transition-transform sm:translate-x-0"
    aria-label="Sidebar"
    x-data="{ sidebarOpen: false, iconOnly: true }"
    x-bind:class="sidebarOpen ? 'w-[350px]' : 'w-[80px]'"
>
    
    <div class="h-full overflow-y-auto bg-white rounded-br-lg">
        <button data-drawer-target="default-sidebar"  aria-controls="default-sidebar"
                type="button"
                class="inline-flex items-center p-2 mt-2 ml-4 text-sm text-gray-500 rounded-lg"
                x-on:click="sidebarOpen = !sidebarOpen, iconOnly = !iconOnly"
                x-bind:class="{'w-10': iconOnly, 'w-6': !iconOnly}"
        >
            
            <svg class="flex-shrink-0 w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>            
        </button>

        <ul class=" font-medium" >
            <li class="p-4  rounded-full">
                <a href="" class="flex items-center justify-center p-2  group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" flex-shrink-0 w-6 h-6 text-gray-500 hover:text-whitetransition duration-75">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                    </svg>
                <span class=" hover:text-white hover:text-lg flex-1 ml-3 whitespace-nowrap font-poppins tracking-tight font-medium" x-show="!iconOnly">Dashboard</span>
                </a>
            </li>
            <li class="p-4  rounded-full">
                <span class=" flex items-center justify-center p-2 text-gray-900 rounded-lg transition duration-100" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example" x-data="{ sidebarOpen: false }" @click="sidebarOpen = !sidebarOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                    </svg>
                    <span class=" flex-1 ml-3 whitespace-nowrap font-poppins tracking-tight font-medium hover:text-black hover:tracking-loose" x-show="!iconOnly">Scholarships</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 transition-transform transform text-gray-600" :class="{ '-rotate-90': !sidebarOpen, 'hidden': !sidebarOpen }" x-show="!iconOnly">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </span>
                <ul id="dropdown-example" class="hidden py-2 space-y-2 transition duration-100 " x-show="sidebarOpen">
                    <li>
                        <a href="{{ route('sagap') }}" class="flex items-center w-full p-2 font-poppins hover:bg-blue-200  tracking-tight text-gray-900 transition duration-75 rounded-lg pl-11 group uppercase">sagap</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 font-poppins hover:bg-blue-200  tracking-tight text-gray-900 transition duration-75 rounded-lg pl-11 group uppercase">sunlife</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 font-poppins hover:bg-blue-200  tracking-tight text-gray-900 transition duration-75 rounded-lg pl-11 group uppercase">sm</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 font-poppins hover:bg-blue-200  tracking-tight text-gray-900 transition duration-75 rounded-lg pl-11 group uppercase">ched</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 font-poppins hover:bg-blue-200  tracking-tight text-gray-900 transition duration-75 rounded-lg pl-11 group uppercase">tes</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center w-full p-2 font-poppins hover:bg-blue-200  tracking-tight text-gray-900 transition duration-75 rounded-lg pl-11 group uppercase">tesda</a>
                    </li>
                </ul>
            </li>
            <li class="p-4  rounded-full">
                <a href="#" class="flex items-center justify-center p-2 text-gray-900 rounded-lg  h  group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 w-6 h-6  text-gray-500 transition duration-75">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                    <span class=" hover:text-white hover:text-lg flex-1 ml-3 whitespace-nowrap font-poppins tracking-tight font-medium" x-show="!iconOnly">Users</span>
                </a>
            </li>
            <li class="p-4  rounded-full">
                <a href="#" class="flex items-center justify-center p-2 text-gray-900 rounded-lg   group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                    <span class="flex-1 ml-3 hover:text-white hover:text-lg whitespace-nowrap font-poppins tracking-tight font-medium" x-show="!iconOnly">Products</span>
                </a>
            </li>
            <li class="p-4  rounded-full">
                <a href="#" class="flex items-center justify-center p-2 text-gray-900 rounded-lg   group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                    </svg>
                    <span class=" flex-1 ml-3 hover:text-white hover:text-lg whitespace-nowrap font-poppins text-base tracking-tight font-medium" x-show="!iconOnly">Messages</span>
                </a>
            </li>
        </ul>
    </div>
</aside>