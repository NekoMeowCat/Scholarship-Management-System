<section class="bg-gray-50 dark:bg-gray-900">
    <div class=" ">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden min-h-screen">
            <div class="overflow-x-auto p-2">
                <table id="example" class="display nowrap w-full text-sm text-left text-gray-500 " style="width:100%">
                    <thead class="text-sm text-gray-100 uppercase bg-[#164863]">
                        <tr>
                            <th scope="col" class="px-4 py-3">Student</th>
                            <th scope="col" class="px-4 py-3">ID Number</th>
                            <th scope="col" class="px-4 py-3">Course</th>
                            <th scope="col" class="px-4 py-3">Scholar Type</th>
                            <th scope="col" class="px-4 py-3">Office Assign</th>
                            <th scope="col" class="px-4 py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr class="border-b dark:border-gray-700 cursor-pointer" onclick="window.location='{{ route('view-scholar', ['id' => $student->id]) }}';">
                                <th scope="row" class="px-4 py-3 font-normal text-gray-600 whitespace-nowrap dark:text-white">
                                    {{ $student->name }}    
                                    {{ $student->middle_name }}    
                                    {{ $student->last_name }}    
                                </th>
                                <td class="px-4 py-3 text-gray-600">{{ $student->id_number }}</td>
                                <td class="px-4 py-3 text-gray-600">{{ $student->course }}</td>
                                <td class="px-4 py-3 text-gray-600">{{ $student->scholarship->name }}</td>
                                <td class="px-4 py-3 text-gray-600">{{ $student->department->name }}</td>
                                <td class="px-4 py-3 text-gray-600 block md:flex gap-x-2">
                                    @if ($student->status == 'not_verified')
                                        <img src="{{ asset('storage/images/remove.png') }}" alt="Not Verified" class="ml-2 h-4 w-4">
                                    @elseif ($student->status == 'verified')
                                        <img src="{{ asset('storage/images/approved.png') }}" alt="Verified" class="ml-2 h-6 w-6">
                                    @endif
                                        {{ $student->status }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>