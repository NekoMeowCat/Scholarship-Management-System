<div class="rounded-md bg-white h-auto shadow-xl">
    <div class="block m-2 rounded-sm">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 md:m-14">
            <a href="{{ route('sagap') }}" class="">
                <div class="rounded-md bg-gray-50 shadow-indigo-700/50 h-48 shadow-2xl">
                    <div class="flex justify-center items-center h-full">
                        <img src="{{ asset('storage/images/yes.png') }}" alt="" class="">
                    </div>
                </div>
            </a>
            <div class="rounded-md bg-gray-50 shadow-indigo-700/50 h-48 shadow-2xl">
                <div class="flex justify-center items-center h-full">
                    <img src="{{ asset('storage/images/cc.png') }}" alt="" class="h-36">
                </div>
            </div>
            <div class="rounded-md bg-gray-50 shadow-indigo-700/50 h-48 shadow-2xl">
                <div class="flex justify-center items-center h-full">
                    <img src="{{ asset('storage/images/sm.png') }}" alt="" class="h-36">
                </div>
            </div>
            <div class="rounded-md bg-gray-50 shadow-indigo-700/50 h-48 shadow-2xl">
                <div class="flex justify-center items-center h-full">
                    <img src="{{ asset('storage/images/sun.png') }}" alt="" class="">
                </div>
            </div>
            <div class="rounded-md bg-gray-50 shadow-indigo-700/50 h-48 shadow-2xl">
                <div class="flex justify-center items-center h-full">
                    <img src="{{ asset('storage/images/tes.png') }}" alt="" class="h-36">
                </div>
            </div>
            <div class="rounded-md bg-gray-50 shadow-indigo-700/50 h-48 shadow-2xl">
                <div class="flex justify-center items-center h-full">
                    <img src="{{ asset('storage/images/tesda.png') }}" alt="" class="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="rounded-md drop-shadow-lg bg-white h-full">
    <div class="antialiased sans-serif bg-white rounded-md">
        <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
            <div class="container mx-auto px-4 py-2 md:py-6 bg-white rounded-md shadow-xl h-full">
                <div class="bg-white rounded-lg overflow-hidden border h-full">
                    <div class="flex items-center justify-between py-2 px-6">
                        <div>
                            <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                            <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                        </div>
                        <div class="border rounded-lg px-1" style="padding-top: 2px;">
                            <button 
                                type="button"
                                class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 items-center" 
                                :class="{'cursor-not-allowed opacity-25': month == 0 }"
                                :disabled="month == 0 ? true : false"
                                @click="month--; getNoOfDays()">
                                <svg class="h-6 w-6 text-gray-500 inline-flex leading-none"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                </svg>  
                            </button>
                            <div class="border-r inline-flex h-6"></div>		
                            <button 
                                type="button"
                                class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex items-center cursor-pointer hover:bg-gray-200 p-1" 
                                :class="{'cursor-not-allowed opacity-25': month == 11 }"
                                :disabled="month == 11 ? true : false"
                                @click="month++; getNoOfDays()">
                                <svg class="h-6 w-6 text-gray-500 inline-flex leading-none"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>									  
                            </button>
                        </div>
                    </div>	

                    <div class="-mx-1 -mb-1">
                        <div class="flex flex-wrap" style="margin-bottom: -40px;">
                            <template x-for="(day, index) in DAYS" :key="index">	
                                <div style="width: 14.26%" class="px-2 py-2">
                                    <div
                                        x-text="day" 
                                        class=" text-gray-600 text-sm uppercase tracking-wide font-bold text-center "></div>
                                </div>
                            </template>
                        </div>

                        <div class="flex flex-wrap border-t border-l">
                            <template x-for="blankday in blankdays">
                                <div 
                                    style="width: 14.28%; height: 60px"
                                    class="text-center border-r border-b px-4 pt-2"	
                                ></div>
                            </template>	
                            <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">		
                                <div style="width: 14.28%; height: 60px" class="px-4 pt-2 border-r border-b relative hover:bg-blue-600 hover:text-white">
                                    <div
                                        @click="showEventModal(date)"
                                        x-text="date"
                                        class="inline-flex w-full h-full items-center p-8 justify-center cursor-pointer text-end leading-none rounded-full transition ease-in-out duration-100"
                                        
                                    ></div>
                                    <div style="height: 80px;" class="overflow-y-auto mt-1">
                                        <div 
                                            class="absolute top-0 right-0 mt-2 mr-2 inline-flex items-center justify-center rounded-full text-sm w-6 h-6 bg-gray-700 text-white leading-none"
                                            x-show="events.filter(e => e.event_date === new Date(year, month, date).toDateString()).length"
                                            x-text="events.filter(e => e.event_date === new Date(year, month, date).toDateString()).length"></div>

                                        <template x-for="event in events.filter(e => new Date(e.event_date).toDateString() ===  new Date(year, month, date).toDateString() )">	
                                            <div
                                                class="px-2 py-1 rounded-lg mt-1 overflow-hidden border"
                                                :class="{
                                                    'border-blue-200 text-blue-800 bg-blue-100': event.event_theme === 'blue',
                                                    'border-red-200 text-red-800 bg-red-100': event.event_theme === 'red',
                                                    'border-yellow-200 text-yellow-800 bg-yellow-100': event.event_theme === 'yellow',
                                                    'border-green-200 text-green-800 bg-green-100': event.event_theme === 'green',
                                                    'border-purple-200 text-purple-800 bg-purple-100': event.event_theme === 'purple'
                                                }"
                                            >
                                                <p x-text="event.event_title" class="text-sm truncate leading-tight"></p>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </div>
</div>     
