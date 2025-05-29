@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nou futbolista</h1>
    <form action="{{ route('futbolistas.store') }}" method="POST">
        @csrf
        @include('form.blade.php')
        <button type="submit" class="btn btn-success">Desa</button>
    </form>
</div>
@endsection
