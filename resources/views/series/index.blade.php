<x-layout title="Sériez">
    <a class="btn btn-dark mb-2" href="/series/create">Adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item">{{ $serie }}</li>
        @endforeach
    </ul>
</x-layout>
