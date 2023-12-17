<div class="bg-transparent rounded-md m-2 my-4">
    <div class="grid grid-cols-3 gap-4 px-8 py-4">
        <div class="flex flex-col border shadow-xl rounded-md">
            <div class="bg-[#42424e] rounded-t-md border-b py-3 px-4 md:py-4 md:px-5 dark:bg-slate-900 dark:border-gray-700">
                <p class="text-base text-gray-100">
                    Total Scholars ( {{$count}} )
                </p>
            </div>
            <div class="p-4 md:p-5">
                <p class="mt-2 text-gray-500 font-normal text-sm">
                    Empowering {{$count}} scholars on their educational journey. Together, we support success and achievement.
                </p>
                <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="{{ route('admin.scholars') }}">
                    See all
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </a>
            </div>
        </div>
        <div class="flex flex-col border shadow-xl rounded-md">
            <div class="bg-[#5e6671] rounded-t-md border-b py-3 px-4 md:py-4 md:px-5 dark:bg-slate-900 dark:border-gray-700">
                <p class="text-base text-gray-100">
                    Unverified Scholars ( {{$countUnverified}} )
                </p>
            </div>
            <div class="p-4 md:p-5">
                <p class="mt-2 text-gray-500 font-normal text-sm">
                    {{$countUnverified}} scholars await completion of missing requirements. Let's ensure all criteria are met for their continued success.
                </p>
                <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="{{ route('unverified.scholars') }}">
                    See all
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </a>
            </div>
        </div>
        <div class="flex flex-col border shadow-xl rounded-md">
            <div class="bg-[#0e4b90] rounded-t-md border-b py-3 px-4 md:py-4 md:px-5 dark:bg-slate-900 dark:border-gray-700">
                <p class="text-base text-gray-100">
                    Graduated Scholars ( {{$countGraduated}} )
                </p>
            </div>
            <div class="p-4 md:p-5">
                <p class="mt-2 text-gray-500 font-normal text-sm">
                    Transformed Futures: The scholarship program has impacted {{$countGraduated}} lives, leaving an enduring legacy of positive change.
                </p>
                <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="{{ route('graduated.scholars') }}">
                    See all
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </a>
            </div>
        </div>
    </div>
</div>