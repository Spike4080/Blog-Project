<x-layout>
    <!-- Search Bar -->
    <div class="grid place-items-center p-8">
        <div class="flex">
            <h1 class="text-6xl text-blue-600 font-semibold">Top Trending</h1>
            <h1 class="text-6xl px-2 font-semibold">Blogs</h1>
        </div>
        <p class="p-8 text-xl font-semibold">Join the millions tuning in to captivating blogs where are you waiting to find your next favorite read?</p>

        <div class="flex items-center">
            <div>
                <div>
                    <div class="flex items-center space-x-2 cursor-pointer bg-slate-600 text-white p-4 border" onclick="document.getElementById('dropdown').classList.toggle('hidden')">
                        <span class="text-semibold px-8">Filter by Category</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>

                    </div>
                    <ul id="dropdown" class="w-52 max-h-[400px] absolute bg-gray-100 border shadow overflow-auto mt-4 hidden">
                        <a href="/blogs">
                            <li class=" px-3 py-3 bg-gray-100 hover:bg-gray-200">All</li>
                        </a>
                        @foreach($categories as $category)
                        <a href="?category={{$category->id}}{{request('search')?'&search='.request('search'):''}}">
                            <li class=" px-3 py-3 bg-gray-100 hover:bg-gray-200">{{$category->name}}</li>
                            @endforeach
                        </a>

                    </ul>
                </div>
            </div>
            <form action="">
                @if(request('category'))
                <input type="hidden" name="category" value="{{request('category')}}">
                @endif
                <input type="search" placeholder="Search" class="w-96 bg-slate-800 border text-white p-4" name="search" value="{{request('search')}}">
                <button type="submit" class="bg-slate-600 p-4 px-8 text-white rounded-xl">Search</button>
            </form>
        </div>
    </div>
    <!-- Blogs Show Pages -->
    <div>
        <div class="p-8 mx-8 h-screen">
            <div class="h-96 w-{850px} grid grid-cols-5 gap-x-6 mb-12">
                @if($blogs->count()>0)
                @foreach($blogs as $blog)
                <a href="/blogs/{{$blog->id}}">
                    <div class="bg-white border rounded-xl hover:shadow-lg">
                        <img class="w-full h-96 border rounded-xl" src="{{$blog->photo}}" alt="" />
                        <h1 class="text-xl font-semibold p-2">
                            {{$blog->title}}
                        </h1>
                        <p class="text-slate-800 p-2">{{$blog->intro}}</p>

                        <div class="flex justify-evenly">
                            <div class="flex">
                                <span class="material-symbols-outlined text-yellow-400 font-bold">
                                    grade
                                </span>
                                <p class="text-yellow-400">4.5</p>
                            </div>

                            <div class="flex">
                                <span class="material-symbols-outlined text-slate-500">
                                    visibility
                                </span>
                                <p class="text-slate-500">106</p>
                            </div>
                        </div>

                        <div class="border border-black mx-4 my-3"></div>
                        <div class="px-3 pb-1 flex items-center justify-between">
                            <div class="flex items-center">
                                <img class="w-10 h-10 border rounded-full" src="{{$blog->user->photo}}" alt="" />
                                <p class="font-bold px-2">{{$blog->user->name}}</p>
                            </div>
                            <div class="text-sm">
                                <span class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded me-2 dark:bg-gray-700 dark:text-gray-400 border border-gray-500 ">
                                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
                                    </svg>
                                    {{$blog->created_at->diffForHumans()}}
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
                @else
                <h1 class="text-4xl font-bold">No Blogs Found</h1>
                @endif
            </div>
        </div>
        <div>
            {{ $blogs->links() }}
        </div>
</x-layout>