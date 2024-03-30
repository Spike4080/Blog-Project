<x-user-layout>
    @foreach($blogs as $blog)
    <div class="mb-4 p-4 border rounded-lg">
        <h1 class="text-xl font-bold mb-2">{{$blog->title}}</h1>
        @if($blog->photo)
        <img src="{{$blog->photo}}" alt="{{$blog->title}}" class="mb-4 rounded-lg w-96">
        @endif
        <p class="text-gray-700 mb-4">{{$blog->intro}}</p>
        <p class="text-gray-900">{{$blog->body}}</p>

        <div class="mt-4">
            <a href="/users/user/{{$blog->id}}/edit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
            <form action="/users/user/{{$blog->id}}/delete" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
</x-user-layout>