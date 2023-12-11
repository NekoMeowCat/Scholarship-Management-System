

<aside id="default-sidebar" class="min-h-screen z-40 transition-transform sm:translate-x-0"
    aria-label="Sidebar"
    x-data="{ sidebarOpen: false, iconOnly: true }"
    x-bind:class="sidebarOpen ? 'w-[350px]' : 'w-[80px]'"
>
    
    <div class="h-full overflow-y-auto bg-[#164863] rounded-br-lg">
        <button data-drawer-target="default-sidebar"  aria-controls="default-sidebar"
                type="button"
                class="inline-flex items-center p-2 mt-2 ml-4 text-sm text-gray-500 rounded-lg"
                x-on:click="sidebarOpen = !sidebarOpen, iconOnly = !iconOnly"
                x-bind:class="{'w-10': iconOnly, 'w-6': !iconOnly}">      
            <svg class="flex-shrink-0 w-6 h-6 text-white" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>            
        </button>

        <ul class=" font-medium" >
            <li class="p-4  rounded-full">
                <a href="{{ route('dashboard') }}" class="flex items-center justify-center p-2  group">
                    <img src="{{ asset('storage/images/performance.png') }}" alt="" class="h-5 w-5">
                <span class=" hover:text-gray-200 text-gray-50 text-sm flex-1 ml-3 whitespace-nowrap font-poppins tracking-tight font-medium" x-show="!iconOnly">Dashboard</span>
                </a>
            </li>
            <li class="p-4  rounded-full">
                <span class=" flex items-center justify-center p-2 text-gray-900 rounded-lg transition duration-100" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example1" x-data="{ sidebarOpen: false }" @click="sidebarOpen = !sidebarOpen">
                    <img src="{{ asset('storage/images/student.png') }}" alt="" class="h-5 w-5">
                    <span class="text-sm flex-1 ml-3 whitespace-nowrap font-poppins tracking-tight font-medium hover:text-gray-200 text-gray-50 hover:tracking-loose" x-show="!iconOnly">Scholars</span>
                    <svg class="text-white h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 transition-transform transform text-gray-600" :class="{ '-rotate-90': !sidebarOpen, 'hidden': !sidebarOpen }" x-show="!iconOnly">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </span>
                <ul id="dropdown-example1" class="hidden py-2 space-y-2 transition duration-100 " x-show="sidebarOpen">
                    <li>
                        <a href="{{ route('verified.scholars') }}" class="text-sm flex items-center w-full p-2 font-poppins hover:bg-[#9BBEC8]  hover:text-gray-700 tracking-tight font-medium text-gray-100 transition duration-75 rounded-lg pl-11 group">
                        <img src="{{ asset('storage/images/approved.png') }}" alt="" class="h-5 w-5 text-gray-50 mr-2">Verified</a>
                    </li>
                    <li>
                        <a href="{{ route('unverified.scholars') }}" class="text-sm flex items-center w-full p-2 font-poppins hover:bg-[#9BBEC8]  hover:text-gray-700 tracking-tight font-medium text-gray-100 transition duration-75 rounded-lg pl-11 group">
                        <img src="{{ asset('storage/images/check.png') }}" alt="" class="h-5 w-5 text-gray-50 mr-2">Not Verified</a>
                    </li>
                    <li>
                        <a href="{{ route('graduated.scholars') }}" class="text-sm flex items-center w-full p-2 font-poppins hover:bg-[#9BBEC8]  hover:text-gray-700 tracking-tight font-medium text-gray-100 transition duration-75 rounded-lg pl-11 group">
                        <img src="{{ asset('storage/images/cap.png') }}" alt="" class="h-5 w-5 text-gray-50 mr-2">Graduated</a>
                    </li>        
                </ul>
            </li>
            <li class="p-4  rounded-full">
                <span class=" flex items-center justify-center p-2 text-gray-900 rounded-lg transition duration-100" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example" x-data="{ sidebarOpen: false }" @click="sidebarOpen = !sidebarOpen">
                    <img src="{{ asset('storage/images/university.png') }}" alt="" class="h-5 w-5">
                    <span class="text-sm flex-1 ml-3 whitespace-nowrap font-poppins tracking-tight font-medium hover:text-gray-200 text-gray-50 hover:tracking-loose" x-show="!iconOnly">Scholarships</span>
                    <svg class="text-white h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 transition-transform transform text-gray-600" :class="{ '-rotate-90': !sidebarOpen, 'hidden': !sidebarOpen }" x-show="!iconOnly">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </span>
                <ul id="dropdown-example" class="hidden py-2 space-y-2 transition duration-100 " x-show="sidebarOpen">
                    <li>
                        <a href="{{ route('sagap') }}" class="text-sm flex items-center w-full p-2 font-poppins hover:bg-[#9BBEC8] hover:text-gray-700 tracking-tight font-medium text-gray-100 transition duration-75 rounded-lg pl-11 group">
                            <img src="{{ asset('storage/images/yes.png') }}" alt="" class="h-5 w-5 text-gray-50 text-sm mr-2">Sagap</a>
                    </li>
                    <li>
                        <a href="{{ route('sunlife') }}" class="text-sm flex items-center w-full p-2 font-poppins hover:bg-[#9BBEC8] hover:text-gray-700 tracking-tight font-medium text-gray-100 transition duration-75 rounded-lg pl-11 group">
                            <img src="{{ asset('storage/images/sunlife.png') }}" alt="" class="h-5 w-5 text-gray-50 text-sm mr-2">Sunlife</a>
                    </li>
                    <li>
                        <a href="{{ route('sm') }}" class="text-sm flex items-center w-full p-2 font-poppins hover:bg-[#9BBEC8] hover:text-gray-700 tracking-tight font-medium text-gray-100 transition duration-75 rounded-lg pl-11 group">
                            <img src="{{ asset('storage/images/sm.png') }}" alt="" class="h-5 w-5 text-gray-50 text-sm mr-2">SM</a>
                    </li>
                    <li>
                        <a href="{{ route('ched') }}" class="text-sm flex items-center w-full p-2 font-poppins hover:bg-[#9BBEC8] hover:text-gray-700 tracking-tight font-medium text-gray-100 transition duration-75 rounded-lg pl-11 group">
                            <img src="{{ asset('storage/images/cc.png') }}" alt="" class="h-5 w-5 text-gray-50 text-sm mr-2">Ched</a>
                    </li>
                    <li>
                        <a href="{{ route('tes') }}" class="text-sm flex items-center w-full p-2 font-poppins hover:bg-[#9BBEC8] hover:text-gray-700 tracking-tight font-medium text-gray-100 transition duration-75 rounded-lg pl-11 group">
                            <img src="{{ asset('storage/images/tes.png') }}" alt="" class="h-5 w-5 text-gray-50 text-sm mr-2">Tes</a>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tesda') }}" class="text-sm flex items-center w-full p-2 font-poppins hover:bg-[#9BBEC8] hover:text-gray-700 tracking-tight font-medium text-gray-100 transition duration-75 rounded-lg pl-11 group">
                            <img src="{{ asset('storage/images/tesda.png') }}" alt="" class="h-5 w-5 text-gray-50 text-sm mr-2">Tesda</a>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="p-4  rounded-full">
                <a href="#" class="flex items-center justify-center p-2 text-gray-900 rounded-lg text-sm group">
                    <img src="{{ asset('storage/images/users.png') }}" alt="" class="h-5 w-5">
                    <span class=" hover:text-gray-200 text-gray-50 flex-1 ml-3 whitespace-nowrap font-poppins tracking-tight font-medium" x-show="!iconOnly">Users</span>
                </a>
            </li>
            <li class="p-4  rounded-full">
                <a href="{{ route('activity-logs') }}" class="flex items-center justify-center p-2 text-gray-900 rounded-lg text-sm group">
                    <img src="{{ asset('storage/images/puzzle.png') }}" alt="" class="h-5 w-5">
                    <span class=" flex-1 ml-3 hover:text-gray-200 text-gray-50 whitespace-nowrap font-poppins text-sm tracking-tight font-medium" x-show="!iconOnly">Activity Logs</span>
                </a>
            </li>
        </ul>
    </div>
</aside>