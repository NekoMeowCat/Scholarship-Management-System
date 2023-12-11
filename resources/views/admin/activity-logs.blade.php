<x-app-layout>
    <div class="max-w-screen z-40 min-h-screen overflow-x-scroll">
        <section class="flex">
            <x-sidebar></x-sidebar>
            <div class="w-full items-center rounded-md">
                <div class="m-4 block rounded-md bg-[#113946] shadow-2xl">
                    <div class="h-auto w-full p-2">
                        <img src="{{ asset('storage/images/chedar.png') }}" alt="" class="m-4 h-64">
                    </div>
                </div>
                <div class="bg-white rounded-md shadow-2xl m-4">
                    <div class="overflow-x-auto ">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-4 py-3">User</th>
                                    <th scope="col" class="px-4 py-3">Action</th>
                                    <th scope="col" class="px-4 py-3">Table Affected</th>
                                    <th scope="col" class="px-4 py-3">Table ID</th>
                                    <th scope="col" class="px-4 py-3">Time</th>
                                    <th scope="col" class="px-4 py-3">Updated</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($activityLogs as $log)
                                    <tr class="border">
                                        <td class="px-4 py-3 text-gray-600">{{ $log->causer->name }}</td>
                                        <td class="px-4 py-3 text-gray-600">{{ $log->description }}</td>
                                        <td class="px-4 py-3 text-gray-600">{{ $log->subject_type }}</td>
                                        <td class="px-4 py-3 text-gray-600">{{ $log->subject_id }}</td>
                                        <td class="px-4 py-3 text-gray-600">{{ $log->created_at->format('Y-m-d H:i:s') }}</td>
                                        <td>
                                            @if ($log->properties->has('old') && $log->properties->has('attributes'))
                                                @foreach ($log->properties['old'] as $field => $oldValue)
                                                    @php
                                                        $newValue = $log->properties['attributes'][$field] ?? null;
                                                    @endphp
                                                    @if ($oldValue !== $newValue)
                                                        <strong>{{ $field }}:</strong> {{ $oldValue }} changed to {{ $newValue }}<br>
                                                    @endif
                                                @endforeach
                                            @else
                                                No updated fields
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="p-4">
                        {{ $activityLogs->links() }}
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
