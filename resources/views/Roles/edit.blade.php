<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>
    <div class="py-3">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ url('Roles/' . $role->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="container mt-3">
                            <h5>Modificar Rol</h5>
                            <br>
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre del rol:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="name" id="name"
                                        value="{{ $role->name }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="permission" class="col-sm-2 col-form-label">Permisos del rol:</label>
                                <div class="col-sm-10">
                                    <table class="table">
                                        <tbody>
                                            @foreach ($permission as $id => $permission)
                                                {{--  @foreach ($rolePermission as $rolePermission)  --}}
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input id="permission{{ $id }}"
                                                                class="form-check-input" type="checkbox"
                                                                name="permission[]" value="{{ $id }}">
                                                            <label for="permission{{ $id }}"
                                                                class="form-check-label">{{ $permission }}</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                {{--  @endforeach  --}}
                                            @endforeach

                                            {{--  Preguntar esto para colocar este foreach dentro del anterior foreach para luego usar un if y validar si los permisos son iguales y marcar el check box del input  --}}
                                            @foreach ($rolePermission as $rolePermission)
                                                <script>
                                                    document.getElementById('permission{{ $rolePermission }}').checked = true;
                                                </script>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10 offset-sm-2">
                                    <button class="btn btn-success btn-sm" type="submit">Guardar</button>
                                    <a href="{{ url('Roles') }}" class="btn btn-secondary btn-sm">Cancelar</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
