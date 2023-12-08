<div class="bg-white rounded-md drop-shadow-lg">
    <div class="my-6 mx-3">
        <div class="w-12 h-12 rounded-full bg-[#D0E7D2] ml-4">
            <div class="">
                <img src="{{ asset('storage/images/graduate.png') }}" alt="" class="h-full w-full">
            </div>                                                       
        </div>
        <div class="font-poppins mt-4 ml-4 text-xl font-semibold tracking-tight text-gray-800">
            {{ $count }}
        </div>
        <div class="flex justify-between mx-4">
            <div class="text-gray-400">
                <span class="text-sm tracking-tight font-poppins">Total Scholars</span>
            </div>
            <div class="flex items-center font-normal text-green-500"> <!-- Add this container div -->
                <a href="{{ route('admin.scholars') }}" class="cursor-pointer flex">
                    <span class="text-sm tracking-tight font-poppins">
                        See more 
                    </span>
                    <svg class="w-3 h-3 mb-0 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
                    </svg>
                </a>
            </div>
        </div>   
    </div>
</div>
<div class="bg-white rounded-md drop-shadow-lg">
    <div class="my-6 mx-3">
        <div class="w-12 h-12 mt-1 rounded-full bg-[#D0E7D2] ml-4">
            <div class="">
                <img src="{{ asset('storage/images/verified.png') }}" alt="" class="h-full w-full">
            </div>                                                        
        </div>
        <div class="font-poppins mt-4 ml-4 text-xl font-semibold tracking-tight text-gray-800">
            {{ $countVerified }}
        </div>
        <div class="flex justify-between mx-4">
            <div class="text-gray-400">
                <span class="text-sm tracking-tight font-poppins">Verified Scholars</span>
            </div>
            <div class="flex items-center font-normal text-green-500"> <!-- Add this container div -->
                <a href="{{ route('verified.scholars') }}" class="cursor-pointer flex">
                    <span class="text-sm tracking-tight font-poppins">
                        See more 
                    </span>
                    <svg class="w-3 h-3 mb-0 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
                    </svg>
                </a>
            </div>
        </div>   
    </div>
</div>
<div class="bg-white rounded-md drop-shadow-lg">
    <div class="my-6 mx-3">
        <div class="w-12 h-12 mt-1 rounded-full bg-[#D0E7D2] ml-4">
            <div class="">
                <img src="{{ asset('storage/images/verify.png') }}" alt="" class="h-full w-full">
            </div>                                                         
        </div>
        <div class="font-poppins mt-4 ml-4 text-2xl font-semibold tracking-tight text-gray-800">
            {{ $countUnverified }}
        </div>
        <div class="flex justify-between mx-4">
            <div class="text-gray-400">
                <span class="text-sm tracking-tight font-poppins">Unverified</span>
            </div>
            <div class="flex items-center font-normal text-green-500"> <!-- Add this container div -->
                <a href="{{ route('unverified.scholars') }}" class="cursor-pointer flex">
                    <span class="text-sm tracking-tight font-poppins">
                        See more 
                    </span>
                    <svg class="w-3 h-3 mb-0 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
                    </svg>
                </a>
            </div>
        </div>   
    </div>
</div>
<div class="bg-white rounded-md drop-shadow-lg">
    <div class="my-6 mx-3">
        <div class="w-12 h-12 mt-1 rounded-full bg-[#D0E7D2] ml-4">
            <div class="">
                <img src="{{ asset('storage/images/unknown.png') }}" alt="" class="h-full w-full">
            </div>                                                         
        </div>
        <div class="font-poppins mt-4 ml-4 text-2xl font-semibold tracking-tight text-gray-800">
            3.456K
        </div>
        <div class="flex justify-between mx-4">
            <div class="text-gray-400">
                <span class="text-sm tracking-tight font-poppins">Total Users</span>
            </div>
            <div class="flex items-center font-normal text-green-500"> <!-- Add this container div -->
                <span class="text-sm tracking-tight font-poppins">
                    0.43% 
                </span>
                <svg class="w-3 h-3 mb-0 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
                </svg>
            </div>
        </div>   
    </div>
</div>