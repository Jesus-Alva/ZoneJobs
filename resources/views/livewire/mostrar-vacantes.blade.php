
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    @foreach ($vacantes as $vacante)

    <div class="p-6 text-gray-900">
        <div class="leading-10">
            <a href="#" class="font-bold text-xl">
                {{ $vacante->titulo }}
            </a>
        </div>
    </div>

    @endforeach
</div>

