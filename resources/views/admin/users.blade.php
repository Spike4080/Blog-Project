<x-admin>
    <div>
        <div class="overflow-x-auto p-4">
            <h1 class="text-4xl font-bold p-3">Users Table</h1>
            <table class="table-auto min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cols-span-2">Roles</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($users as $user)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{$user->id}}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{$user->name}}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{$user->email}}</td>
                        <td class="px-6 py-4 whitespace-nowrap cols-span-2">
                            @if($user->role->id == 1)
                            <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded">{{$user->role->role_name}}</button>
                            @elseif($user->role->id == 2)
                            <button class="bg-gray-500 text-white font-bold py-2 px-4 rounded">{{$user->role->role_name}}</button>
                            @else
                            <button class="bg-red-500 text-white font-bold py-2 px-4 rounded">{{$user->role->role_name}}</button>
                            @endif
                        </td>
                        <td></td>
                    </tr>
                    @endforeach

                    <!-- More table rows -->
                </tbody>
            </table>
        </div>

    </div>
</x-admin>