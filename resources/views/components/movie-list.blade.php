<div class="container p-4">
    <div class="row row-cols-3 row-gap-3">
        @foreach ($movies as $movie)
        <x-movie-card>
            <x-slot:title>
               {{ $movie['title'] }} 
            </x-slot:title>
            <x-slot:original_title>
               {{ $movie['original_title'] }} 
            </x-slot:original_title>
            <x-slot:nationality>
               {{ $movie['nationality'] }} 
            </x-slot:nationality>
            <x-slot:vote>
               {{ $movie['vote'] }} 
            </x-slot:vote>
        </x-movie-card>
        @endforeach
    </div>
</div>