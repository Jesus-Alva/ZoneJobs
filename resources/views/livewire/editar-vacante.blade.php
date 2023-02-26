<form action="" class="md:w-1/2 space-y-5" wire:submit.prevent='crearVacante'>
    <div>
        <x-input-label for="titulo" :value="__('Titulo vacante')" />
        <x-text-input id="titulo" class="block mt-1 w-full" type="text" wire:model="titulo" :value="old('titulo')"  autofocus placeholder="Titulo de la Vacante" />

        @error('titulo')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="salario" :value="__('Salario semanal')" />
        <select wire:model="salario" id="salario" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focur:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
            <option value="">-- Selecciona un monto --</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
        </select>

        @error('salario')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />
        <select wire:model="categoria" id="categoria" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focur:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
            <option value="">-- Selecciona un monto --</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
            @endforeach
        </select>

        @error('categoria')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input id="empresa" class="block mt-1 w-full" type="text" wire:model="empresa" :value="old('empresa')" autofocus placeholder="Empresa: ej. Netflix, Uber, Shopify" />

        @error('empresa')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="fecha_limite" :value="__('Último Día para postularse')" />
        <x-text-input id="fecha_limite" class="block mt-1 w-full" type="date" wire:model="fecha_limite" :value="old('fecha_limite')"  autofocus />

        @error('fecha_limite')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="descripcion" :value="__('Descripción del puesto')" />
        <textarea wire:model="descripcion" placeholder="Descripción general de puesto"  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focur:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full h-72">


        </textarea>

        @error('descripcion')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input wire:model="imagen" id="imagen" accept="image/*" class="block mt-1 w-full" type="file" />

        <div class="my-5 w-80 ">
            <x-input-label :value="__('Imagen Actual')" />
            <img src="{{asset('storage/vacantes/' . $imagen)}}" alt="{{'Imagen Vacante ' . $titulo}}">
        </div>

        @error('imagen')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>

    <x-primary-button class="w-full justify-center">
        {{ __('Crear Vacante') }}
    </x-primary-button>
</form>
