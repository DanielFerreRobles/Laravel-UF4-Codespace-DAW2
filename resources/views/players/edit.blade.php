@extends('layaouts.app')

@section('content')
<div class="container">
    <h1>Edita futbolista</h1>
    <form action="{{ route('futbolistas.update', $futbolista) }}" method="POST">
        @csrf
        @method('PUT')
        @include('form') {{-- ✅ Correcto sin .blade.php --}}
        <button type="submit" class="btn btn-primary">Actualitza</button>
    </form>
</div>
@endsection
