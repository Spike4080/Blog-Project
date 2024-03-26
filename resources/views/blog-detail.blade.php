<x-layout>
    <div class="flex items-center">
        <img src="https://images.pexels.com/photos/262508/pexels-photo-262508.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="w-96 my-6 mx-6" alt="">
        <div>
            <h1 class="text-2xl font-bold">{{$blog->title}}</h1>
            <p class="font-semibold text-slate-500">{{$blog->body}}</p>
        </div>
    </div>
</x-layout>