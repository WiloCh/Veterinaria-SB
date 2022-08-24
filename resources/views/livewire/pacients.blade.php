<div class="row">
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    <div  class="">
        <div  x-cloak x-data="{open : false , for_edit : false ,add : false,edit : false}">
            <div x-show="!open" class="font-normal uppercase tracking-wide w-full  rounded p-2 bg-white">
                lista de Pacientes
            </div>
            <div x-show="add" class="font-normal uppercase tracking-wide w-full  rounded p-2 bg-white">
                Agregar Paciente
            </div>
            <div x-show="edit" class="font-normal uppercase tracking-wide w-full  rounded p-2 bg-white">
                Editar Paciente
            </div>
            <div class="row mt-0">
                <div class="p-2 w-full mx-auto overflow-hidden bg-white rounded-lg shadow min-w-max-content">
                    <div class="flex m-2 aspect-auto">
                        <div class="flex-none">
                            <button class="bg-[#9c182f] border px-4 py-1 uppercase tracking-tighter rounded text-white hover:bg-[#be1935] " x-on:click="open = !open, for_edit = !for_edit , add = !add" x-show="!for_edit">+</button>
                        </div>
                        <div class="grow rounded  " x-show="!open">
                            <input class="w-full focus:border-red-900 h-9 mx-2 rounded" wire:model="search" type="text" placeholder="Buscar Paciente..." />
                        </div>
                    </div>
                    <div x-show="open">
                        <div class="bg-white w-full grid grid-cols-2 gap-4">
                            <div class="bg-white text-slate-900 border m-2 p-2 rounded shadow-md text-center">
                                <div class="flex-auto flex m-2 ">
                                    <label class="font-semibold block w-32 m-2 ">
                                        <span for="id" class="m-2 text-left  form-label ">NOMBRE</label>
                                    <input wire:model="nombre" name="NOMBRE" type="text" placeholder="Ingrese los nombres..." class="w-80 p-2 rounded form-input" required>
                                    @error('nombre')
                                        <div class="text-red-700">
                                            <span class="error">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="flex-auto flex m-2 ">
                                    <label class="font-semibold block w-32 m-2 ">
                                        <span for="id" class="m-2 text-left  form-label ">FECHA NACIMIENTO</label>
                                    <input wire:model="fecha" name="fecha" type="date" placeholder="Ingrese una fecha..." class="w-80 p-2 rounded form-input" required>
                                    @error('fecha')
                                        <div class="text-red-700">
                                            <span class="error">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>

                                <div class="flex-auto flex m-2 ">
                                    <label class="font-semibold block w-32 m-2 ">
                                        <span for="id" class="m-2 text-left  form-label ">TIPO</label>
                                    <input wire:model="tipo" name="tipo" type="text" placeholder="Ingrese el tipo..." class="w-80 p-2 rounded form-input" required>
                                    @error('tipo')
                                        <div class="text-red-700">
                                            <span class="error">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="flex-auto flex m-2 ">
                                    <label class="font-semibold block w-32 m-2 ">
                                        <span for="id" class="m-2 text-left  form-label ">ESPECIE</label>
                                    <input wire:model="especie" name="especie" type="text" placeholder="Ingrese la especie..." class="w-80 p-2 rounded form-input" required>
                                    @error('especie')
                                        <div class="text-red-700">
                                            <span class="error">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="bg-white text-slate-900 border m-2 p-2 rounded shadow-md text-center">
                                <div class="flex-auto flex m-2 ">
                                    <label class="font-semibold block w-32 m-2 ">
                                        <span for="id" class="m-2 text-left  form-label ">RAZA</label>
                                    <input wire:model="raza" name="raza" type="text" placeholder="Ingrese la raza..." class="w-80 p-2 rounded form-input" required>
                                    @error('raza')
                                        <div class="text-red-700">
                                            <span class="error">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="flex-auto flex m-2 ">
                                    <label class="font-semibold block w-32 m-2 ">
                                        <span for="id" class="m-2 text-left  form-label ">SEXO</label>
                                    <input wire:model="sexo" name="sexo" type="string" placeholder="Ingrese el sexo..." class="w-80 p-2 rounded form-input" required>
                                    @error('sexo')
                                        <div class="text-red-700">
                                            <span class="error">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="flex-auto flex m-2 ">
                                    <label class="font-semibold block w-32 m-2 ">
                                        <span for="id" class="m-2 text-left  form-label ">PROPIETARIO</label>
                                    <input wire:model="propietario" name="propietario" type="string" placeholder="Ingrese el propietario..." class="w-80 p-2 rounded form-input" required>
                                    @error('propietario')
                                        <div class="text-red-700">
                                            <span class="error">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
<<<<<<< HEAD
=======
                        <div x-show="!open" class="w-11/12 mx-auto ">
                            <div class="overflow-x-auto mx-auto overflow-hidden bg-white rounded-lg shadow ">
                                <table class="w-fit overflow-hidden bg-white rounded-lg shadow ">
                                    <thead class="border-b border-gray-500 bg-gray-50">
                                        <tr class="text-xs w-full text-justify text-gray-500">
                                            <th class="px-2 py-1">ID</th>
                                            <th class="px-4 py-3">NOMBRE</th>
                                            <th class="px-4 py-3">FECHA</th>
                                            <th class="px-4 py-3">TIPO</th>
                                            <th class="px-4 py-3">ESPECIE</th>
                                            <th class="px-4 py-3">RAZA</th>
                                            <th class="px-4 py-3">SEXO</th>
                                            <th class="px-4 py-3">PROPIETARIO</th>
                                            <th class="px-4 py-3">ACCION</th>
                                        </tr>
                                    </thead>
                                    <tbody class=" mx-auto divide-y divide-gray-300">
                                    
                                        @foreach ($pacients as $pacient)
                      
                                            <tr class="text-xs  text-justify mx-auto p-2 text-gray-500">
                                                <td class="px-2 ">{{ $pacient->id }}</td>
                                                <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify  first-letter:uppercase">{{ $pacient->nombre }}</td>
                                                <td class="px-4 py-3 text-xs whitespace-nowrap text-justify">{{ $pacient->fecha_nacimiento }}</td>
                                                <td class="px-4 py-3 text-xs  text-justify ">{{ $pacient->tipo }}</td>
                                                <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify ">{{ $pacient->especie }}</td>
                                                <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify ">{{ $pacient->raza }}</td>
                                                <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify ">{{ $pacient->sexo }}</td>
                                                <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify ">{{ $pacient->propietario }}</td>
>>>>>>> origin/Grupo_1

                        @if ($accion == 'store')
                            <div class=" text-slate-900 m-2 p-2  text-center">
                                <button wire:click="default" x-on:click="open = !open , for_edit =!for_edit ,add = !add"
                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-6 py-3 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 ">
                                    CANCELAR</button>
                                <button wire:click="store" x-on:click="open = !open , for_edit =!for_edit , add = !add"
                                    class="text-white bg-red-800 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-6 py-3 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">AGREGAR</button>
                            </div>
                            @endif
                            @if ($accion == 'update')
                        <div class="text-slate-900 m-2 p-2 text-center">
                            <button wire:click="default" x-on:click="open = !open , for_edit =!for_edit,edit = !edit"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-6 py-3 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 ">
                                CANCELAR</button>
                                <button wire:click="update" x-on:click="open = !open , for_edit =!for_edit,edit = !edit"
                                    class="text-white bg-red-800 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-6 py-3 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">EDITAR</button>
                            </div>
                        @endif
                    </div>
                    <div x-show="!open" class="w-11/12 mx-auto ">
                        <div class="overflow-x-auto mx-auto overflow-hidden bg-white rounded-lg shadow ">
                            <table class="w-fit overflow-hidden bg-white rounded-lg shadow ">
                                <thead class="border-b border-gray-500 bg-gray-50">
                                    <tr class="text-xs w-full text-justify text-gray-500">
                                        <th class="px-2 py-1">ID</th>
                                        <th class="px-4 py-3">NOMBRE</th>
                                        <th class="px-4 py-3">FECHA</th>
                                        <th class="px-4 py-3">TIPO</th>
                                        <th class="px-4 py-3">ESPECIE</th>
                                        <th class="px-4 py-3">RAZA</th>
                                        <th class="px-4 py-3">SEXO</th>
                                        <th class="px-4 py-3">PROPIETARIO</th>
                                        <th class="px-4 py-3">ACCION</th>
                                    </tr>
                                </thead>
                                <tbody class=" mx-auto divide-y divide-gray-300">
                                    @foreach ($pacients as $pacient)
                                        <tr class="text-xs  text-justify mx-auto p-2 text-gray-500">
                                            <td class="px-2 ">{{ $pacient->id }}</td>
                                            <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify  first-letter:uppercase">{{ $pacient->nombre }}</td>
                                            <td class="px-4 py-3 text-xs whitespace-nowrap text-justify">{{ $pacient->fecha_nacimiento }}</td>
                                            <td class="px-4 py-3 text-xs  text-justify ">{{ $pacient->tipo }}</td>
                                            <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify ">{{ $pacient->especie }}</td>
                                            <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify ">{{ $pacient->raza }}</td>
                                            <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify ">{{ $pacient->sexo }}</td>
                                            <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify ">{{ $pacient->propietario }}</td>

                                            <td class="px-4 py-3 text-xs   text-justify">
                                                <button wire:click="edit({{ $pacient }})" x-on:click="open = !open , for_edit = !for_edit, edit = !edit"
                                                    class="btn bg-[#9c182f] border px-4 py-1 uppercase tracking-tighter rounded text-white hover:bg-[#be1935]">EDITAR</button>
                                                <button wire:click="destroy({{ $pacient }})"
                                                    class="btn bg-[#9c182f] border px-4 py-1 uppercase tracking-tighter rounded text-white hover:bg-[#be1935]">ELIMINAR</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
