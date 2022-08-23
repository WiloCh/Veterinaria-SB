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
                    Lista de Fichas Clínicas
                </div>
                <div x-show="add" class="uppercase my-2 font-semibold tracking-wide w-full  rounded p-2 bg-white">
                    Agregar Ficha Clínica
                </div>
                <div x-show="edit" class="uppercase my-2 font-semibold tracking-wide w-full  rounded p-2 bg-white">
                    Editar Ficha Clínica
                </div>
                <div class="p-1 mt-2">
                    <div class=" p-2 font-normal tracking-wide w-full text-justify  rounded-lg bg-white border shadow-sm ">
                        <div class="flex m-2 aspect-auto">
                            <div class="flex-none">
                                <button class="bg-[#9c182f] border px-4 py-1 uppercase tracking-tighter rounded text-white hover:bg-[#be1935] "
                                    x-on:click="open = !open, for_edit = !for_edit, add = !add" x-show="!for_edit">+</button>
                            </div>
                            <div class="grow rounded  " x-show="!open">
                                <input class="w-full h-9 mx-2 rounded" wire:model="search" type="text" placeholder="Buscar Fichas Clínicas...">
                            </div>
                        </div>
                        <div x-show="open">
                            <div class="bg-white w-full grid grid-cols-2 gap-4">
                                <div class="bg-white text-slate-900 border m-2 p-2 rounded shadow-md text-center">
                                    <div class="flex-auto flex m-2 ">
                                        <label class="font-semibold block w-32 m-2 ">
                                            <span for="id_paciente" class="m-2 text-left  form-label ">PACIENTE</label>
                                        <select wire:model="id_paciente" name="id_paciente" class="w-80 p-2 rounded form-select" required>
                                            @foreach ($pacients as $pacient)
                                                <option value="{{ $pacient->id }}">{{ $pacient->nombre }}</option>
                                            @endforeach
                                        </select>
                                        @error('peso_paciente')
                                            <div class="text-red-700">
                                                <span class="error">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="flex-auto flex m-2 ">
                                        <label class="font-semibold block w-32 m-2 ">
                                            <span for="id" class="m-2 text-left  form-label ">PESO DEL PACIENTE</label>
                                        <input wire:model="peso_paciente" name="peso_paciente" type="number" placeholder="Ingrese el peso del paciente..." class="w-80 p-2 rounded form-input" required>
                                        @error('peso_paciente')
                                            <div class="text-red-700">
                                                <span class="error">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="flex-auto flex m-2 ">
                                        <label class="font-semibold block w-32 m-2 ">
                                            <span for="id" class="m-2 text-left  form-label ">EDAD DEL PACIENTE</label>
                                        <input wire:model="edad_paciente" name="edad_paciente" type="number" placeholder="Ingrese la edad del paciente..." class="w-80 p-2 rounded form-input" required>
                                        @error('edad_paciente')
                                            <div class="text-red-700">
                                                <span class="error">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="flex-auto flex m-2 ">
                                        <label class="font-semibold block w-32 m-2 ">
                                            <span for="id" class="m-2 text-left  form-label ">FECHA DE VISITA</label>
                                        <input wire:model="fecha_visita" name="fecha_visita" type="date" placeholder="Ingrese la fecha de la visita..." class="w-80 p-2 rounded form-input" required>
                                        @error('fecha_visita')
                                            <div class="text-red-700">
                                                <span class="error">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="flex-auto flex m-2 ">
                                        <label class="font-semibold block w-32 m-2 ">
                                            <span for="id" class="m-2 text-left  form-label ">FECHA DE VACUNACIÓN</label>
                                        <input wire:model="fecha_vacuna" name="fecha_vacuna" type="date" placeholder="Ingrese la fecha de vacunación..." class="w-80 p-2 rounded form-input">
                                    </div>
                                    <div class="flex-auto flex m-2 ">
                                        <label class="font-semibold block w-32 m-2 ">
                                            <span for="id" class="m-2 text-left  form-label ">CÓDIGO DE VACUNA</label>
                                        <input wire:model="codigo_vacuna" name="codigo_vacuna" type="number" placeholder="Ingrese el código de la vacuna..." class="w-80 p-2 rounded form-input">
                                    </div>
                                    <div class="flex-auto flex m-2 ">
                                        <label class="font-semibold block w-32 m-2 ">
                                            <span for="id" class="m-2 text-left  form-label ">NOMBRE DE LA VACUNA</label>
                                        <input wire:model="nombre_vacuna" name="nombre_vacuna" type="text" placeholder="Ingrese el nombre de la vacuna..." class="w-80 p-2 rounded form-input">
                                    </div>
                                </div>
                                <div class="bg-white text-slate-900 border m-2 p-2 rounded shadow-md text-center">
                                    <div class="flex-auto flex m-2 ">
                                        <label class="font-semibold block w-32 m-2 ">
                                            <span for="id" class="m-2 text-left  form-label ">FECHA DE MEDICAMENTO</label>
                                        <input wire:model="fecha_medicamento" name="fecha_medicamento" type="date" placeholder="Ingrese la fecha en la que se dio el medicamento..." class="w-80 p-2 rounded form-input">
                                    </div>
                                    <div class="flex-auto flex m-2 ">
                                        <label class="font-semibold block w-32 m-2 ">
                                            <span for="id" class="m-2 text-left  form-label ">NOMBRE DEL MEDICAMENTO</label>
                                        <input wire:model="nombre_medicamento" name="nombre_medicamento" type="text" placeholder="Ingrese el nombre del medicamento..." class="w-80 p-2 rounded form-input">
                                    </div>
                                    <div class="flex-auto flex m-2 ">
                                        <label class="font-semibold block w-32 m-2 ">
                                            <span for="id" class="m-2 text-left  form-label ">SÍNTOMAS</label>
                                        <input wire:model="sintomas" name="sintomas" type="textarea" placeholder="Ingrese los síntomas..." class="w-80 p-2 rounded form-input" required>
                                        @error('sintomas')
                                            <div class="text-red-700">
                                                <span class="error">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="flex-auto flex m-2 ">
                                        <label class="font-semibold block w-32 m-2 ">
                                            <span for="id" class="m-2 text-left  form-label ">DIAGNOSTICO</label>
                                        <input wire:model="diagnostico" name="diagnostico" type="textarea" placeholder="Ingrese el diagnostico..." class="w-80 p-2 rounded form-input" required>
                                        @error('diagnostico')
                                            <div class="text-red-700">
                                                <span class="error">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="flex-auto flex m-2 ">
                                        <label class="font-semibold block w-32 m-2 ">
                                            <span for="id" class="m-2 text-left  form-label ">EXAMENES</label>
                                        <input wire:model="examenes" name="examenes" type="text" placeholder="Ingrese los examenes complementarios..." class="w-80 p-2 rounded form-input" required>
                                        @error('examenes')
                                            <div class="text-red-700">
                                                <span class="error">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="flex-auto flex m-2 ">
                                        <label class="font-semibold block w-32 m-2 ">
                                            <span for="id" class="m-2 text-left  form-label ">RECETA</label>
                                        <input wire:model="receta" name="receta" type="textarea" placeholder="Ingrese la receta..." class="w-80 p-2 rounded form-input" required>
                                        @error('receta')
                                            <div class="text-red-700">
                                                <span class="error">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="flex-auto flex m-2 ">
                                        <label class="font-semibold block w-32 m-2 ">
                                            <span for="id" class="m-2 text-left  form-label ">FECHA PRÓXIMA VISITA</label>
                                        <input wire:model="fecha_siguiente_visita" name="fecha_siguiente_visita" type="date" placeholder="Ingrese la fecha para la siguiente visita..." class="w-80 p-2 rounded form-input" required>
                                        @error('fecha_siguiente_visita')
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
                                            <th class="px-2 py-1">PACIENTE</th>
                                            <th class="px-4 py-3">PESO PACIENTE</th>
                                            <th class="px-4 py-3">EDAD PACIENTE</th>
                                            <th class="px-4 py-3">FECHA VISITA</th>
                                            <th class="px-4 py-3">FECHA VACUNACIÓN</th>
                                            <th class="px-4 py-3">CÓDIGO VACUNA</th>
                                            <th class="px-4 py-3">NOMBRE VACUNA</th>
                                            <th class="px-4 py-3">FECHA MEDICAMENTO</th>
                                            <th class="px-4 py-3">NOMBRE MEDICAMENTO</th>
                                            <th class="px-4 py-3">SÍNTOMAS</th>
                                            <th class="px-4 py-3">DIAGNÓSTICO</th>
                                            <th class="px-4 py-3">EXÁMENES COMPLEMENTARIOS</th>
                                            <th class="px-4 py-3">RECETA</th>
                                            <th class="px-4 py-3">FECHA PRÓXIMA VISITA</th>
                                            <th class="px-4 py-3">ACCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody class=" mx-auto divide-y divide-gray-300">
                                    
                                        @foreach ($records as $record)
                      
                                            <tr class="text-xs  text-justify mx-auto p-2 text-gray-500">
                                                <td class="px-2 ">{{ $record->id }}</td>
                                                <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify">{{ $record->pacient->nombre }}</td>
                                                <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify">{{ $record->peso_paciente }}</td>
                                                <td class="px-4 py-3 text-xs whitespace-nowrap text-justify">{{ $record->edad_paciente }}</td>
                                                <td class="px-4 py-3 text-xs  text-justify ">{{ $record->fecha_visita }}</td>
                                                <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify ">{{ $record->fecha_vacuna }}</td>
                                                <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify ">{{ $record->codigo_vacuna }}</td>
                                                <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify ">{{ $record->nombre_vacuna }}</td>
                                                <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify ">{{ $record->fecha_medicamento }}</td>
                                                <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify ">{{ $record->nombre_medicamento }}</td>
                                                <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify ">{{ $record->sintomas }}</td>
                                                <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify ">{{ $record->diagnostico }}</td>
                                                <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify ">{{ $record->examenes }}</td>
                                                <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify ">{{ $record->receta }}</td>
                                                <td class="px-4 py-3 text-xs whitespace-nowrap  text-justify ">{{ $record->fecha_siguiente_visita }}</td>

                                                <td class="px-4 py-3 text-xs w-full whitespace-nowrap  text-justify">
                                                    <button wire:click="edit({{ $record }})" x-on:click="open = !open , for_edit = !for_edit, edit = !edit"
                                                        class="btn bg-[#9c182f] border px-4 py-1 uppercase tracking-tighter rounded text-white hover:bg-[#be1935]">EDITAR</button>
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
