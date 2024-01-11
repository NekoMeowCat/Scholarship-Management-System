<!-- admin.history.blade.php -->

<x-app-layout>
    <!-- Display student information -->

    <form action="{{ route('history', ['id' => $student->id]) }}" method="get">
        @csrf

        <label for="school_year">Select School Year:</label>
        <select name="school_year" id="school_year">
            @foreach($schoolYears as $year)
                <option value="{{ $year }}" {{ $year == $selectedSchoolYear ? 'selected' : '' }}>{{ $year }}</option>
            @endforeach
        </select>

        <label for="semester">Select Semester:</label>
        <select name="semester" id="semester">
            @foreach($semesters as $s)
                <option value="{{ $s }}" {{ $s == $selectedSemester ? 'selected' : '' }}>{{ $s }}</option>
            @endforeach
        </select>

        <button type="submit">Submit</button>
    </form>

    <p>Selected School Year: {{ $selectedSchoolYear }}</p>
    <p>Selected Semester: {{ $selectedSemester }}</p>


    @if(count($historyData) > 0)
    <table>
        <thead>
            <tr>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($historyData as $history)
                <tr>
                    <td>{{ $history->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p>Selected Semester: {{ $historyData[0]->status }}</p> <!-- Displaying the first status -->
@else
    <p>No history data available for the selected school year and semester.</p>
@endif





    <!-- Add more content as needed -->
</x-app-layout>
