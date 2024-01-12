<x-app-layout>
    <div class="max-w-full m-8">
        <!-- Search Form -->
        <form method="GET" action="{{ route('history') }}" class="mb-8 flex flex-col items-center">
            @csrf
            <div class="flex space-x-4">
                <div class="mb-4 w-full">
                    <label for="full_name" class="block text-gray-700 text-sm font-bold mb-2">Full Name:</label>
                    <input type="text" name="full_name" id="full_name" required
                        class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        value="{{ old('full_name', $fullName ?? '') }}">
                    <small class="text-red-600">This field is case senstive</small>
                </div>

                <div class="mb-4">
                    <label for="semester" class="block text-gray-700 text-sm font-bold mb-2">Semester:</label>
                    <select name="semester" id="semester"
                        class="border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="" disabled selected>Select Semester</option>
                        <option value="1st Semester" {{ old('semester', $semester ?? '') == '1st Semester' ? 'selected' : '' }}>1st Semester</option>
                        <option value="2nd Semester" {{ old('semester', $semester ?? '') == '2nd Semester' ? 'selected' : '' }}>2nd Semester</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="mb-4">
                    <label for="school_year" class="block text-gray-700 text-sm font-bold mb-2">School Year:</label>
                    <select name="school_year" id="school_year"
                            class="border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="2021-2022" {{ old('school_year', $schoolYear ?? '') == '2021-2022' ? 'selected' : '' }}>2021-2022</option>
                        <option value="2022-2023" {{ old('school_year', $schoolYear ?? '') == '2022-2023' ? 'selected' : '' }}>2022-2023</option>
                        <option value="2023-2024" {{ old('school_year', $schoolYear ?? '') == '2023-2024' ? 'selected' : '' }}>2023-2024</option>
                        <option value="2024-2025" {{ old('school_year', $schoolYear ?? '') == '2024-2025' ? 'selected' : '' }}>2024-2025</option>
                    </select>
                </div>
                <div class="mb-4 flex items-center">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Search
                    </button>
                </div>
            </div>   
        </form>

        <!-- Display Search Result -->
        <div class="w-full overflow-x-auto bg-white p-2 rounded-md shadow-xl">
            <table id="example" class="display nowrap w-full text-sm text-left text-gray-500 " style="width:100%">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b text-gray-700">Name</th>
                        <th class="py-2 px-4 border-b text-gray-700">Semester</th>
                        <th class="py-2 px-4 border-b text-gray-700">School Year</th>
                        <th class="py-2 px-4 border-b text-gray-700">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td class="py-2 px-4 border-b text-gray-800">{{ $student->name }}</td>
                            <td class="py-2 px-4 border-b text-gray-800">{{ $student->semester }}</td>
                            <td class="py-2 px-4 border-b text-gray-800">{{ $student->school_year }}</td>
                            <td class="py-2 px-4 border-b text-gray-800">{{ $student->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
