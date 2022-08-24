<!DOCTYPE html>
<html lang="en">


<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<div>

    <body>
        <div class="container bg-red-500 m-5 p-2">
            <h2 class="text-center mb-3">Vista Previa "Historial del Paciente" </h2>

            <div class="grid grid-cols-3 gap-5 mx-auto mb-5">

                @foreach ($users as $re)
                    <div class="container mt-5">

                        <div>

                            <body>

                                <div class="container ">
                                    <h2>Informacion del paciente</h2>
                                    <br>
                                    <div class="row">
                                        <div class="col">

                                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Paciente</label>
                                            <input type="text" value="{{ $re->pacient->nombre }}"
                                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">
                                        </div>

                                        <br>
                                        <div class="col">

                                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Peso</label>
                                            <input type="text" value="{{ $re->peso_paciente }}"
                                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">
                                        </div>
                                        <br>
                                        <div class="col">

                                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Edad</label>
                                            <input type="text" value="{{ $re->edad_paciente }}"
                                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <h2> Detalle de la visita</h2>
                                <br>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-3">
                                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Fecha Visita</label>
                                            <input type="text" value="{{ $re->fecha_visita }}"
                                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">

                                        </div>
                                        <br>
                                        <div class="col-3">

                                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Fecha Vacuna</label>
                                            <input type="text" value="{{ $re->fecha_vacuna }}"
                                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">

                                        </div>
                                        <br>
                                        <div class="col">
                                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Nombre Vacuna</label>
                                            <input type="text" value="{{ $re->nombre_vacuna }}"
                                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">

                                        </div>
                                        <br>
                                        <div class="col-3">
                                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Codigo Vacuna</label>
                                            <input type="text" value="{{ $re->codigo_vacuna }}"
                                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">

                                        </div>
                                        <br>

                                    </div>
                                </div>

                                <div class="container ">
                                    <h2> Receta</h2>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Receta</label>
                                            <input type="text" value="{{ $re->receta }}"
                                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">

                                        </div>
                                        <br>
                                        <div class="col">
                                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Nombre Medicamento</label>
                                            <input type="text" value="{{ $re->nombre_medicamento }}"
                                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">

                                        </div>
                                        <br>
                                        <div class="col">

                                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Fecha Medicamento</label>
                                            <input type="text" value="{{ $re->fecha_medicamento }}"
                                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">

                                        </div>

                                    </div>
                                </div>
                                <br>
                                <h2> Diagnostico del paciente</h2>
                                <br>
                                <div class="container ">
                                    <div class="row">
                                        <div class="col-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Sintoma</label>
                                            <input type="text" value="{{ $re->sintomas }}"
                                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">

                                        </div>
                                        <br>
                                        <div class="col-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Diagnostico</label>
                                            <input type="text" value="{{ $re->diagnostico }}"
                                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">

                                        </div>
                                        <br>
                                        <div class="col-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Examenes</label>
                                            <input type="text" value="{{ $re->examenes }}"
                                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">

                                        </div>
                                        <br>
                                        <div class="col">
                                            <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">Fecha siguiente visita</label>
                                            <input type="text" value="{{ $re->fecha_siguiente_visita }}"
                                                class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300  transition duration-500 px-3 pb-3">

                                        </div>
                                    </div>
                                </div>



                            </body>
                        </div>

                    </div>
                @endforeach


            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    </body>

</html>
