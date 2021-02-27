<x-app-layout>
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">


        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
            
            <span class="block sm:inline">Para ver el contenido debes tener una suscripción.</span>
            <a href=""><strong class="font-bold">Ver planes</strong></a>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
              <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </span>
        </div>

        
        @foreach ($articles as $article)
            <div class="card mb-6">
                <img class="w-full h-72 object-cover object-center" src="{{Storage::url($article->image)}}" alt=""> 
                <div class="card-body">
                    <h1 class="font-bold text-xl mb-2">
                        <a href="{{route('articles.show', $article)}}">{{$article->title}}</a>
                    </h1>
            
                    <div class="text-gray-700 text-base">
                        {!!$article->extract!!}
                    </div>
                </div>
            </div>
        @endforeach
        {{$articles->links()}}
    </div>
</x-app-layout>