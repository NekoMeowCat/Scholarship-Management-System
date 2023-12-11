<section class="bg-gray-50 dark:bg-gray-900">
    <div class=" ">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden min-h-screen">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-base text-gray-100 uppercase bg-[#164863] ">
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
                            <tr class="border-b-2 cursor-pointer" onclick="window.location='{{ route('view-scholar', ['id' => $student->id]) }}';">
                                <th scope="row" class="px-4 py-3 font-medium text-gray-700 whitespace-nowrap dark:text-white">
                                    {{ $student->name }}    
                                    {{ $student->middle_name }}    
                                    {{ $student->last_name }}    
                                </th>
                                <td class="px-4 py-3 text-gray-700">{{ $student->id_number }}</td>
                                <td class="px-4 py-3 text-gray-700">{{ $student->course }}</td>
                                <td class="px-4 py-3 text-gray-700">{{ $student->scholarship->name }}</td>
                                <td class="px-4 py-3 text-gray-700">{{ $student->department->name }}</td>
                                <td class="px-4 py-3 text-gray-700 block md:flex gap-x-2">
                                    @if ($student->status == 'not_verified')
                                        <img src="{{ asset('storage/images/check.png') }}" alt="Not Verified" class="ml-2 h-4 w-4">
                                    @elseif ($student->status == 'verified')
                                        <img src="{{ asset('storage/images/approved.png') }}" alt="Verified" class="ml-2 h-6 w-6">
                                    @elseif ($student->status == 'graduated')
                                        <img src="{{ asset('storage/images/cap.png') }}" alt="Verified" class="ml-2 h-6 w-6">
                                    @endif
                                        {{ $student->status }}
                                </td>
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