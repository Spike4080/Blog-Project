<x-layout>
    <div class="flex items-center">
        <img src="{{$blog->photo}}" class="w-96 my-6 mx-6 h-96" alt="">
        <div class="w-screen bg-slate-300 h-96">
            <div class="p-12 space-y-4">
                <h1 class="text-2xl font-bold">Title - {{$blog->title}}</h1>
                <p class="font-semibold text-slate-500">Body - {{$blog->body}}</p>
                <div>
                    <a href="/blogs" class="w-12 text-red-600 border border-red-600 p-2 px-3 my-10">Go Back</a>
                </div>
            </div>
        </div>
    </div>
    <!-- comment box -->
    <div class="bg-gray-400 w-full p-6 pt-8 mx-28">
        <div class="max-w-xl mx-auto bg-white rounded-md shadow-md p-4">
            <h2 class="text-lg font-semibold mb-4">Leave a Comment</h2>

            <form action="/blogs/{{$blog->id}}/comment/store" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="comment" class="block text-sm font-medium text-gray-600">Comment</label>
                    <textarea id="comment" name="body" class="mt-1 p-2 w-full border rounded-md" placeholder="Your Comment">
                    </textarea>
                    @error('body')
                    <p>{{$message}}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-green-600 p-3 px-4 font-bold rounded-xl text-white">Submit</button>
            </form>



        </div>
        <!-- comment box -->

        <div class="max-w-xl mx-auto bg-white rounded-md shadow-md p-4 mt-4">
            @foreach($blog['comments'] as $comment)
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img src="{{$comment->user->photo}}" class="w-10 h-10 rounded-full" alt="">
                    <h1 class="text-lg font-semibold mx-1">{{$comment->user->name}}</h1>
                </div>
                <p class="text-slate-600 text-sm px-3"">({{$comment->created_at->diffForHumans()}})</p>
            </div>
            <div class=" flex justify-between">
                <div>
                    <p class="">{{$comment->body}}</p>
                </div>
                @if(auth()->id()===$comment->user_id)
                <div class=" flex">
                    <a href="/blogs/{{$blog->id}}/comments/{{$comment->id}}/edit" class="font-bold text-white bg-blue-500 p-2 mx-2 px-4">Edit</a>
                    <form action="/blogs/{{$blog->id}}/comments/{{$comment->id}}/delete" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="font-bold p-2 text-white bg-red-500">Delete</button>
                    </form>
                </div>
                @endif
            </div>
            @endforeach
        </div>
</x-layout>