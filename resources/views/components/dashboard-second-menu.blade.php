<div class="rounded-md bg-white h-96 drop-shadow-lg">
    <div class="flex justify-between m-8">
        <div class="text-gray-700">
            <span class="text-2xl tracking-tight font-semibold font-poppins">Sales Analytics</span>
        </div>
        <div class="font-poppins">
            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm tracking-tight rounded-lg block w-full p-2.5 ">
                <option selected>This Month</option>
                <option value="US">United States</option>
                <option value="CA">Canada</option>
                <option value="FR">France</option>
            </select>
        </div>
    </div>
    <div class="p-4 h-72">
        <canvas id="lineChart"></canvas>
    </div>
    <div class="font-semibold tracking-tight h-20 flex items-center bg-white rounded-md">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-500 ml-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-2.25-1.313M21 7.5v2.25m0-2.25l-2.25 1.313M3 7.5l2.25-1.313M3 7.5l2.25 1.313M3 7.5v2.25m9 3l2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75l2.25-1.313M12 21.75V19.5m0 2.25l-2.25-1.313m0-16.875L12 2.25l2.25 1.313M21 14.25v2.25l-2.25 1.313m-13.5 0L3 16.5v-2.25" />
        </svg>
        <span class="text-3xl font-oxygen uppercase flex items-center text-indigo-800 ml-2">Latest Transaction</span>   
    </div>
</div>
<div class="bg-white rounded-md drop-shadow-lg">
    <div class="flex justify-between m-8">
        <div class="text-2xl tracking-tighter font-semibold text-gray-700">
            Activity Overview  
        </div>
    </div>
    <div class="flex justify-center pb-6 h-auto">
        <div class="grid grid-cols-2 gap-3">
            <div class="bg-[#F2F7A1] w-auto flex flex-col items-center justify-center text-center p-8 space-y-2 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                </svg>
                <div class="font-medium font-montserrat tracking-tight ">
                    <span class="text-gray-900">Delivered</span>
                </div>
                <div class="font-light font-montserrat tracking-tight mx-4">
                    <span class="text-gray-600 text-sm">15 Packages Today</span>
                </div>
            </div>
            <div class="bg-[#F7E987] w-auto flex flex-col items-center justify-center text-center p-8 space-y-2 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                </svg>
                <div class="font-medium font-montserrat tracking-tight ">
                    <span class="text-gray-900">Arrived</span>
                </div>
                <div class="font-light font-montserrat tracking-tight mx-4">
                    <span class="text-gray-600 text-sm">5 Arrived Orders</span>
                </div>
            </div>
            <div class="bg-[#F7E987] w-auto flex flex-col items-center justify-center text-center p-8 space-y-2 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                </svg>
                <div class="font-medium font-montserrat tracking-tight ">
                    <span class="text-gray-900">Ordered</span>
                </div>
                <div class="font-light font-montserrat tracking-tight mx-4">
                    <span class="text-gray-600 text-sm">5 New Orders</span>
                </div>
            </div>  
            <div class="bg-[#F2F7A1] w-auto flex flex-col items-center justify-center text-center p-8 space-y-2.5 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                </svg>
                <div class="font-medium font-montserrat tracking-tight ">
                    <span class="text-gray-900">Reviews</span>
                </div>
                <div class="font-light font-montserrat tracking-tight mx-4">
                    <span class="text-gray-600 text-sm">15 Total Reviews</span>
                </div>
            </div>
        </div>              
    </div>
</div>      