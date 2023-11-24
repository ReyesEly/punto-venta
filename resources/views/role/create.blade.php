@extends('layouts.app')

@section('title','Crear rol')

@push('css')

@endpush

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Crear Rol</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('roles.index')}}">Roles</a></li>
        <li class="breadcrumb-item active">Crear rol</li>
    </ol>

    <div class="card">
        <div class="card-header">
            <p>Nota: Los roles son un conjunto de permisos</p>
        </div>
        <div class="card-body">
            <form action="{{ route('roles.store') }}" method="post">
                @csrf
                <!-- Nombre de rol -->
                <div class="row mb-4">
                    <label for="name" class="col-md-auto col-form-label">Nombre del rol:</label>
                    <div class="col-md-4">
                        <input autocomplete="off" type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                    </div>
                    <div class="col-md-4">
                        @error('name')
                        <small class="text-danger">{{ '*' . $message }}</small>
                        @enderror
                    </div>
                </div>
        
                <!-- Permisos -->
                <div class="col-12">
                    <p class="text-muted">Permisos para el rol:</p>
                    <div class="form-check mb-2">
                        <input type="checkbox" id="select-all" class="form-check-input">
                        <label for="select-all" class="form-check-label">Seleccionar todo</label>
                    </div>
                    @foreach ($permisos as $item)
                        <div class="form-check mb-2">
                            <input type="checkbox" name="permission[]" id="{{ $item->id }}" class="form-check-input" value="{{ $item->id }}">
                          <b>  <label for="{{ $item->id }}" class="form-check-label">{{ $item->name }}</label></b>
                        </div>
                    @endforeach
                </div>
                @error('permission')
                <small class="text-danger">{{ '*' . $message }}</small>
                @enderror
        
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
        
        @push('js')
            <script>
                // JavaScript para seleccionar/deseleccionar todos los permisos
                document.addEventListener("DOMContentLoaded", function () {
                    var selectAllCheckbox = document.getElementById('select-all');
                    var permissionCheckboxes = document.querySelectorAll('input[name="permission[]"]');
        
                    selectAllCheckbox.addEventListener('change', function () {
                        permissionCheckboxes.forEach(function (checkbox) {
                            checkbox.checked = selectAllCheckbox.checked;
                        });
                    });
        
                    permissionCheckboxes.forEach(function (checkbox) {
                        checkbox.addEventListener('change', function () {
                            selectAllCheckbox.checked = Array.from(permissionCheckboxes).every(function (checkbox) {
                                return checkbox.checked;
                            });
                        });
                    });
                });
            </script>
        @endpush
        
    </div>


</div>
@endsection

@push('js')

@endpush