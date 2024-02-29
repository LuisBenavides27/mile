<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 xl:w-11/12">
            <div class="py-3 text-center">
                <h1 class="text-4xl font-bold font-mono">ACONTINUACION ACARICIA AL GATITO PARA OBTENER UNA VIDA</h1>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 lg:flex lg:items-center justify-center">
                    <div class="flex justify-center items-center">                        
                        <img id="firstImage" class="h-auto max-w-full transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0" src="{{ asset('img/cat2.gif') }}" alt="image description">
                    </div>
                    <div class="flex justify-center items-center hidden" id="secondImageDiv">
                        <a href="{{route('test')}}">
                            <img id="secondImage" class="h-auto max-w-full transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0" src="{{ asset('img/cat.gif') }}" alt="image description">
                        </a>
                    </div>                    
                    
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const firstImage = document.getElementById('firstImage');
            const secondImageDiv = document.getElementById('secondImageDiv');
    
            firstImage.addEventListener('dblclick', function() {
                firstImage.style.display = 'none';
                secondImageDiv.classList.remove('hidden');
            });
        });
    </script>
</x-app-layout>