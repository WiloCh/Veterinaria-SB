<div>
    <div class="row">
        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>
        <div class="">
            <div x-cloak x-data="{ open: false, for_edit: false, add: false, edit: false }">
                <div x-show="!open" class="uppercase my-2 font-semibold tracking-wide w-full  rounded p-2 bg-white">
                    Lista de Clientes
                </div>
                <div x-show="add" class="uppercase my-2 font-semibold tracking-wide w-full  rounded p-2 bg-white">
                    Agregar Cliente
                </div>
                <div x-show="edit" class="uppercase my-2 font-semibold tracking-wide w-full  rounded p-2 bg-white">
                    Editar Cliente
                </div>
                <div class="p-1 mt-2">
                    <div class=" p-2 font-normal tracking-wide w-full text-justify  rounded-lg bg-white border shadow-sm ">
                        <div class="flex m-2 aspect-auto">
                            <div class="flex-none">
                                <button class="bg-[#9c182f] border px-4 py-1 uppercase tracking-tighter rounded text-white hover:bg-[#be1935] "
                                    x-on:click="open = !open, for_edit = !for_edit, add = !add" x-show="!for_edit">+</button>
                            </div>
                            <div class="grow rounded  " x-show="!open">
                                <input class="w-full h-9 mx-2 rounded" wire:model="search" type="text" placeholder="Buscar Clientes...">
                            </div>
                        </div>
                        <div x-show="open">
                            <div class="bg-white w-full grid grid-cols-2 gap-4">
                                <div class="bg-white text-slate-900 border m-2 p-2 rounded shadow-md text-center">
                                    <div class="flex-auto flex m-2 ">
                                        <label class="font-semibold block w-32 m-2 ">
                                            <span for="id" class="m-2 text-left  form-label ">NOMBRES</label>
                                        <input wire:model="nombres_cli" name="nombres" type="text" placeholder="Ingrese los nombres..." class="w-80 p-2 rounded form-input" required>
                                        @error('nombres_cli')
                                            <div class="text-red-700">
                                                <span class="error">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="flex-auto flex m-2 ">
                                        <label class="font-semibold block w-32 m-2 ">
                                            <span for="id" class="m-2 text-left  form-label ">APELLIDOS</label>
                                        <input wire:model="apellidos_cli" name="apellidos" type="text" placeholder="Ingrese los apellidos..." class="w-80 p-2 rounded form-input" required>
                                        @error('apellidos_cli')
                                            <div class="text-red-700">
                                                <span class="error">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="flex-auto flex m-2 ">
                                        <label class="font-semibold block w-32 m-2 ">
                                            <span for="id" class="m-2 text-left  form-label ">CÉDULA</label>
                                        <input wire:model="cedula_cli" name="cedula" type="number" placeholder="Ingrese el número de cédula..." class="w-80 p-2 rounded form-input" required>
                                        @error('cedula_cli')
                                            <div class="text-red-700">
                                                <span class="error">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="flex-auto flex m-2 ">
                                        <label class="font-semibold block w-32 m-2 ">
                                            <span for="id" class="m-2 text-left  form-label ">TELÉFONO</label>
                                        <input wire:model="telefono_cli" name="telefono" type="number" placeholder="Ingrese el telefono..." class="w-80 p-2 rounded form-input" required>
                                        @error('telefono_cli')
                                            <div class="text-red-700">
                                                <span class="error">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="bg-white text-slate-900 border m-2 p-2 rounded shadow-md text-center">
                                    <div class="flex-auto flex m-2 ">
                                        <label class="font-semibold block w-32 m-2 ">
                                            <span for="id" class="m-2 text-left  form-label ">CORREO</label>
                                        <input wire:model="correo_cli" name="correo" type="text" placeholder="Ingrese el correo..." class="w-80 p-2 rounded form-input" required>
                                        @error('correo_cli')
                                            <div class="text-red-700">
                                                <span class="error">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="flex-auto flex m-2 ">
                                        <label class="font-semibold block w-32 m-2 ">
                                            <span for="id" class="m-2 text-left  form-label ">DIRECCIÓN</label>
                                        <input wire:model="direccion_cli" name="direccion" type="string" placeholder="Ingrese la dirección..." class="w-80 p-2 rounded form-input" required>
                                        @error('direccion_cli')
                                            <div class="text-red-700">
                                                <span class="error">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            @if ($accion == 'store')
                                <div class=" text-slate-900 m-2 p-2  text-center">
                                    <button wire:click="default" x-on:click="open = !open , for_edit =!for_edit ,add = !add"
                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-6 py-3 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 ">
                                        CANCELAR</button>
                                    <button wire:click="store" x-on:click="open = !open , for_edit =!for_edit , add = !add"
                                        class="text-white bg-red-800 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-6 py-3 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">AGREGAR</button>
                                </div>
                            @else
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
                                            <th class="px-4 py-3">NOMBRES</th>
                                            <th class="px-4 py-3">APELLIDOS</th>
                                            <th class="px-4 py-3">CÉDULA</th>
                                            <th class="px-4 py-3">TELÉFONO</th>
                                            <th class="px-4 py-3">CORREO</th>
                                            <th class="px-4 py-3">DIRECCIÓN</th>
                                            <th class="px-4 py-3">ACCION</th>
                                        </tr>
                                    </thead>
                                    <tbody class=" mx-auto divide-y divide-gray-300">
                                    
                                        @foreach ($clients as $client)
                      
                                            <tr class="text-xs  text-justify mx-auto p-2 text-gray-500">
                                                <td class="px-2 ">{{ $client->id }}</td>
                                                <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify  first-letter:uppercase">{{ $client->nombres_cli }}</td>
                                                <td class="px-4 py-3 text-xs whitespace-nowrap text-justify">{{ $client->apellidos_cli }}</td>
                                                <td class="px-4 py-3 text-xs  text-justify ">{{ $client->cedula_cli }}</td>
                                                <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify ">{{ $client->telefono_cli }}</td>
                                                <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify ">{{ $client->correo_cli }}</td>
                                                <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify ">{{ $client->direccion_cli }}</td>

                                                <td class="px-4 py-3 text-xs w-full whitespace-nowrap  text-justify">
                                                    <button wire:click="edit({{ $client }})" x-on:click="open = !open , for_edit = !for_edit, edit = !edit"
                                                        class="btn bg-[#9c182f] border px-4 py-1 uppercase tracking-tighter rounded text-white hover:bg-[#be1935]">EDITAR</button>
                                                    <button wire:click="destroy({{ $client }})"
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
</div>
</div>
