<?php
namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class TableComponent extends Component
{
    use WithPagination;

    public $columns;
    public $data; 

    public function mount($columns, $data)
    {
        $this->columns = $columns;
        // $this->columns = json_decode($columns, true);
        $this->data = $data; // Array type
    }

    public function render()
    {
        return view('livewire.table-component', [
            'items' => $this->data,
        ]);
    }
}

