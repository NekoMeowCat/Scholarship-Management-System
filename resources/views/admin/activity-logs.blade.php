<x-app-layout>
    <table>
        <thead>
            <tr>
                <th>User</th>
                <th>Action</th>
                <th>Model Type</th>
                <th>Model ID</th>
                <th>Timestamp</th>
                <th>Updated Fields</th>
            </tr>
        </thead>
        <tbody>
            @foreach($activityLogs as $log)
                <tr>
                    <td>{{ $log->causer->name }}</td>
                    <td>{{ $log->description }}</td>
                    <td>{{ $log->subject_type }}</td>
                    <td>{{ $log->subject_id }}</td>
                    <td>{{ $log->created_at->format('Y-m-d H:i:s') }}</td>
                    <td>
                        @if ($log->properties->has('updated_fields'))
                            @foreach ($log->properties['updated_fields'] as $field => $value)
                                <strong>{{ $field }}:</strong> {{ $value }}<br>
                            @endforeach
                        @else
                            No updated fields
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
