<x-layout title="Sériez">
    <a class="btn btn-dark mb-2" href="/series/create">Adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item">
                <div class="d-flex space-between">
                    <p class="w-100">{{ $serie->name }}</p>
                    <button onclick="deleteSerie('{{ $serie->name }}', '{{ $serie->id }}')" class="btn btn-danger delete-serie">Excluir</button>
                </div>
            </li>
        @endforeach
    </ul>

    <script>
        function deleteSerie(serie, id) {
            const shouldDeleteSerie = confirm(`Deseja remover a série ${serie}?`);

            if(shouldDeleteSerie){
                async function deleteSerieFromDatabase(serie) {
                    try {
                        const req = await fetch(`/api/series/remove/${id}`, {
                            method: "DELETE"
                        });
                        const res = await req;

                        if(res.status === 204) {
                            location.reload();
                        }
                    } catch (error) {
                        console.log(error);
                    }
                };

                deleteSerieFromDatabase(serie);
            }
            console.log(serie)
        };
    </script>
</x-layout>
