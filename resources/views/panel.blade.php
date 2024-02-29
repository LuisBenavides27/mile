<x-app-layout>
    <div class="py-12 px-12">
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
    </div>
    <div class="py-12 px-12 flex justify-between space-x-8">

        <div
            class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">AGREGAR UNA VIDA - RETO
                    CUMPLIDO</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Vamos a agregar una vida porque ya cumplio el
                reto,seleccionar un usuario </p>

            <form action="{{ route('live') }}" method="GET">
                @csrf
                <input type="hidden" name="validar" value="1">
                <select name="user_id" required
                    class="mb-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected disabled value="">Selecciona un usuario</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                <div class="flex justify-center">
                    <button type="submit"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        AGREGAR VIDA
                    </button>
                </div>
            </form>

        </div>
        <div
            class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">ASIGNAR NUEVO RETO
                </h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Vamos a cambiar de reto porque ya cumplio el
                reto anterior,seleccionar un usuario </p>
            <form action="{{ route('live') }}" method="GET">
                @csrf
                <input type="hidden" name="validar" value="2">
                <select name="user_id" required
                    class="mb-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected disabled value="">Selecciona un usuario</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                <div class="flex justify-center">
                    <button type="submit"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        CAMBIAR DE RETO
                    </button>
                </div>
            </form>
        </div>


    </div>
</x-app-layout>
