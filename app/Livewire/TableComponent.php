<?php
namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class TableComponent extends Component
{
    use WithPagination;

    public $columns;
    public $data; // Data structure ကို array အဖြစ် ရယူထားမည်

    public function mount($columns, $data)
    {
        $this->columns = $columns;
        $this->data = $data; // Array type
    }

    public function render()
    {
        // $this->data ကို array လိုက်ပြီး render လုပ်ပါ
        return view('livewire.table-component', [
            'items' => $this->data,
        ]);
    }
}

