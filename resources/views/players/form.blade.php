<div class="mb-3">
    <label for="nombre" class="form-label">Nom</label>
    <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $futbolista->nombre ?? '') }}">
    @error('nombre')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="edad" class="form-label">Edat</label>
    <input type="number" name="edad" class="form-control" value="{{ old('edad', $futbolista->edad ?? '') }}">
    @error('edad')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="equipo" class="form-label">Equip</label>
    <input type="text" name="equipo" class="form-control" value="{{ old('equipo', $futbolista->equipo ?? '') }}">
    @error('equipo')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
