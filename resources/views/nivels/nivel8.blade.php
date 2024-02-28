<x-app-layout>
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 xl:w-11/12">
            <div class="py-3 text-center">
                <h1 class="text-4xl font-bold font-mono">ESTE ES EL NIVEL 8</h1>
            </div>
            @if (session('danger'))
                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                    <strong>
                        {{ session('danger') }}
                    </strong>
                </div>
            @endif
            @if (session('info'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400">
                    <strong>
                        {{ session('info') }}
                    </strong>
                </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 lg:flex lg:items-center">


                    <div class="grid grid-cols-12 gap-4">

                        <!-- Column -->
                        <div class="col-span-12 md:col-span-8 flex justify-center items-center">
                            <img src="{{ asset('img/puerco.jpg') }}" class="object-contain h-60 w-96">
                        </div>                       

                        <!-- Column -->
                        <div class="py-9 px-1 col-span-12 md:col-span-4 text-center relative">
                                <h1 class="text-xl mb-4">¿ Cual es el nombre del hotel donde nos dimos nuestro el primer beso ?. Escribe en minusculas, solo el nombre sin incluir la palabra Hotel
                                </h1>

                                <form action="{{ route('niveluno') }}" class="mt-4" method="POST">
                                    @csrf

                                    <input type="hidden" name="nivel" value="8">
                                    <input name="resultado" type="text" class="ml-2 px-2 py-1 border border-gray-400"
                                        required>
                                    <br><br><br>
                                    <input type="submit" value="VERIFICAR"
                                        class="px-6 py-3 my-4 text-base font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                </form>
                                    <br>
                                <div  class="absolute bottom-4 left-0 right-0 text-red-600 text-sm text-center">Recuerda que si te equivocas
                                    pierdes una vida, con cada acierto sumaras 1 punto</div>
                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>

</x-app-layout>