<x-app-layout>
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-4xl font-bold text-gray-600">{{$article->title}}</h1>

        <div class="text-lg text-gray-500 mb-2">
            {!!$article->extract!!}
        </div>

        <figure>
            
            <img class="w-full h-80 object-cover object-center" src="{{Storage::url($article->image)}}" alt="">
            
        </figure>

        <div class="text-base text-gray-500 mt-4">
            {!!$article->body!!}
        </div>
    </div>
</x-app-layout>