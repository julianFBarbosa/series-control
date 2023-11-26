<x-layout title="Sériez">
    <ul>
        @foreach ($series as $serie)
            <li>{{ $serie }}</li>
        @endforeach
    </ul>
</x-layout>
