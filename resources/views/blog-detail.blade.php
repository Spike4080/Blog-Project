<x-layout>
    <div class="flex items-center">
        <img src="https://images.pexels.com/photos/262508/pexels-photo-262508.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="w-96 my-6 mx-6" alt="">
        <div>
            <h1 class="text-2xl font-bold">{{$blog->title}}</h1>
            <p class="font-semibold text-slate-500">{{$blog->body}}</p>
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
            @foreach($comments as $comment)
            <h1 class="text-lg font-semibold">{{$comment->user->name}}<span class="text-slate-600 text-sm px-3"">({{$comment->created_at->diffForHumans()}})</span></h1>
            <p>{{$comment->body}}</p>
            @endforeach
        </div>
</x-layout>