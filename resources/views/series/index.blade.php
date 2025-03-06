<x-layout title="Series">
    <a href="series/criar" class="btn btn-dark mb-2">Create a new series</a>
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item">{{ $serie->nome }}</li>
        @endforeach
    </ul>
   
</x-layout>