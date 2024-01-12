
<section class="bg-gray-50 dark:bg-gray-900">
    <div class=" ">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden min-h-screen">
            <div class="overflow-x-auto p-2">             
                <table id="example" class="display nowrap w-full text-sm text-left text-gray-500 " style="width:100%">
                    <thead class="text-xs text-gray-100 uppercase bg-[#164863] ">
                        <tr>
                            <th scope="col" class="px-4 py-3">Name</th>
                            <th scope="col" class="px-4 py-3">ID Number</th>
                            <th scope="col" class="px-4 py-3">Scholarship</th>
                            <th scope="col" class="px-4 py-3">Course</th>
                            <th scope="col" class="px-4 py-3">Date Added</th>
                            <th scope="col" class="px-4 py-3">Semester</th>
                            <th scope="col" class="px-4 py-3">School Year</th>
                            <th scope="col" class="px-4 py-3">Office Assign</th>
                            <th scope="col" class="px-4 py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr class=" border-b dark:border-gray-700 cursor-pointer" onclick="window.location='{{ route('view-scholar', ['id' => $student->id]) }}';">
                                <th scope="row" class="px-4 py-3 font-normal font-poppins text-gray-600 whitespace-nowrap ">
                                    {{ $student->name }}      
                                    {{ $student->last_name }}    
                                </th>
                                <td class="px-4 py-3">{{ $student->id_number }}</td>
                                <td class="px-4 py-3">{{ $student->scholarship->name }}</td>
                                <td class="px-4 py-3">{{ $student->course }}</td>                              
                                <td class="px-4 py-3">{{ $student->created_at->format('F j, Y') }}</td>
                                <td class="px-4 py-3">{{ $student->semester }}</td>
                                <td class="px-4 py-3">{{ $student->school_year }}</td>
                                <td class="px-4 py-3">{{ $student->status }}</td>
                                <td class="px-4 py-3 block md:flex gap-x-2">{{ $student->department->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


