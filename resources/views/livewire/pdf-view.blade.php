<div class="container mt-5">
    <head>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

        <div>
            <body>
                <div class="container m-5 p-2">
                    <h2 class="text-center mb-3">Vista Previa "Historial del Paciente" </h2>

                    <div class="grid grid-cols-3 gap-5 mx-auto mb-5">

                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Paciente</label>
                            <input type="text" wire:model='nombre_paciente'
                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">
                        </div>
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Peso</label>
                            <input type="text" value="{{$re['peso_paciente']}}"
                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">
                        </div>
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Edad</label>
                            <input type="text" value="{{$re['edad_paciente']}}"
                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">
                        </div>
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Fecha Visita</label>
                            <input type="date" value="{{$re['fecha_visita']}}"
                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">
                        </div>
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Fecha Vacuna</label>
                            <input type="date" value="{{$re['fecha_vacuna']}}"
                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">
                        </div>
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Codigo Vacuna</label>
                            <input type="text" value="{{$re['codigo_vacuna']}}"
                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">
                        </div>
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Nombre Vacuna</label>
                            <input type="text" value="{{$re['nombre_vacuna']}}"
                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">
                        </div>
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Fecha Medicamento</label>
                            <input type="date" value="{{$re['fecha_medicamento']}}"
                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">
                        </div>
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Nombre Medicamento</label>
                            <input type="text" value="{{$re['nombre_medicamento']}}"
                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">
                        </div>
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Sintoma</label>
                            <input type="text" value="{{$re['sintomas']}}"
                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">
                        </div>
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Diagnostico</label>
                            <input type="text" value="{{$re['diagnostico']}}"
                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">
                        </div>
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Examenes</label>
                            <input type="text" value="{{$re['examenes']}}"
                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">
                        </div>
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Receta</label>
                            <input type="text" value="{{$re['receta']}}"
                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">
                        </div>
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Fecha siguiente visita</label>
                            <input type="date" value="{{$re['fecha_siguiente_visita']}}"
                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">
                        </div>

                    </div>
                </div>
            </body>
        </div>

</div>
