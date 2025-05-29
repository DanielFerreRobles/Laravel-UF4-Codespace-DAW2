@extends('layouts.app')

@section('content')
    <h1 class="mb-3">Llistat de futbolistes</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Edat</th>
                <th>Equip</th>
                <th>Accions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($futbolistas as $futbolista)
                <tr>
                    <td>{{ $futbolista->nombre }}</td>
                    <td>{{ $futbolista->edad }}</td>
                    <td>{{ $futbolista->equipo }}</td>
                    <td>
                        <a href="{{ route('futbolistas.edit', $futbolista) }}" class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('futbolistas.destroy', $futbolista) }}" method="POST" class="d-inline" onsubmit="return confirm('Segur que vols eliminar aquest futbolista?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
