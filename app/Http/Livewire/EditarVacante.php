<?php

namespace App\Http\Livewire;

use App\Models\Salario;
use Livewire\Component;
use App\Models\Categoria;
use App\Models\Vacante;
use Carbon\Carbon;

class EditarVacante extends Component
{
    public $titulo;
    public $salario;
    public $categoria;
    public $empresa;
    public $descripcion;
    public $fecha_limite;
    public $imagen;


    public function mount(Vacante $vacante)
    {
        $this->titulo = $vacante->titulo;
        $this->salario = $vacante->salario_id;
        $this->categoria = $vacante ->categoria_id;
        $this->empresa = $vacante->empresa;
        $this->descripcion = $vacante->descripcion;
        $this->fecha_limite = Carbon::parse($vacante->fecha_limite)->format('Y-m-d');
        $this->imagen = $vacante->imagen;

    }

    public function render()
    {
        //consultar BD
        $salarios = Salario::all();
        $categorias = Categoria::all();

        return view('livewire.editar-vacante', [
            'salarios' => $salarios,
            'categorias' => $categorias
        ]);
    }
}
