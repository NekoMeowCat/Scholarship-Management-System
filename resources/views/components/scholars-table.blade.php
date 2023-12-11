<section class="bg-gray-50 dark:bg-gray-900">
    <div class=" ">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden min-h-screen">
            <div class="flex flex-col md:flex-row items-center justify-end space-y-3 md:space-y-0 md:space-x-4 p-4">               
                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                    <a href="{{ route('admin.add-scholar') }}" class="">
                        <button type="button" class="py-2 flex items-center justify-center text-white bg-[#164863] hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4">
                            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Add Scholar
                        </button>
                    </a>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-100 uppercase bg-[#164863] ">
                        <tr>
                            <th scope="col" class="px-4 py-3">Name</th>
                            <th scope="col" class="px-4 py-3">ID Number</th>
                            <th scope="col" class="px-4 py-3">Scholarship</th>
                            <th scope="col" class="px-4 py-3">Course</th>
                            <th scope="col" class="px-4 py-3">Year level</th>
                            <th scope="col" class="px-4 py-3">Office Assign</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr class=" border-b dark:border-gray-700 cursor-pointer" onclick="window.location='{{ route('view-scholar', ['id' => $student->id]) }}';">
                                <th scope="row" class="px-4 py-3 font-normal font-poppins text-gray-600 whitespace-nowrap ">
                                    {{ $student->name }}    
                                    {{ $student->middle_name }}    
                                    {{ $student->last_name }}    
                                </th>
                                <td class="px-4 py-3">{{ $student->id_number }}</td>
                                <td class="px-4 py-3"> {{ $student->scholarship->name }}</td>
                                <td class="px-4 py-3">{{ $student->course }}</td>
                                <td class="px-4 py-3">{{ $student->year_level }}</td>
                                <td class="px-4 py-3 block md:flex gap-x-2">{{ $student->department->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="p-4">
                {{ $students->links() }}
            </div>
        </div>
    </div>
    </section>