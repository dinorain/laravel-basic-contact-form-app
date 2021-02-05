<x-layout>
    <div class="container px-5 py-24 mx-auto">
    <div class="text-gray-900 bg-gray-200">
        <div class="p-4 flex">
            <h1 class="text-3xl">Contact Messages</h1>
        </div>
        <div class="px-3 py-4 flex justify-center">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                <tbody>
                    <tr class="border-b">
                        <th class="text-left p-3 px-5">Name</th>
                        <th class="text-left p-3 px-5">Email</th>
                        <th class="text-left p-3 px-5">Topic</th>
                        <th></th>
                    </tr>
                    @foreach ($contactMessages as $contact)
                        <tr class="border-b hover:bg-orange-100 bg-gray-100">
                            <td class="p-3 px-5">{{ $contact->from_name }}</td>
                            <td class="p-3 px-5">{{ $contact->from_email }}</td>
                            <td class="p-3 px-5">{{ $contact->topic }}</select>
                            </td>
                            <td class="p-3 px-5 flex justify-end">
                                <a 
                                    href="{{ route('contact-message.show', ['id' => $contact->id])}}"
                                    class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline"
                                >View</a> 
                                <a 
                                    href="{{ route('contact-message.edit', ['id' => $contact->id])}}"
                                    class="mr-3 text-sm bg-green-500 hover:bg-green-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline"
                                >Edit</a> 
                                <form
                                    method="POST"
                                    enctype="multipart/form-data"
                                    action="{{ route('contact-message.destroy', ['id' => $contact->id])}}"
                                >
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        type="submit"
                                        class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline"
                                    >Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
</x-layout>
