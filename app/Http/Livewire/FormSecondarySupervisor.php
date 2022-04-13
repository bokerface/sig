<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SecondarySupervisor;
use App\Models\Meta;
use Illuminate\Support\Facades\Session;
use Livewire\WithFileUploads;

class FormSecondarySupervisor extends Component
{
    public $thesis;

    use WithFileUploads;

    public function render()
    {
        return view('livewire.form-secondary-supervisor')
        ->layout('components.layoutfront');
    }

    public function handleForm() 
    {
        $validateData = $this->validate([
            'thesis' => 'required|file|mimes:docx'
        ]);
        
        $thesis = $this->thesis->store('files', 'public');
        $validateData['thesis'] = $thesis;

        $sec_supervisor = SecondarySupervisor::create([
            'student_id' => Session::get('user_data.user_id'),           
            'status' => 0,            
        ])->id;

        if($sec_supervisor) {

           Meta::create([
                'post_id' => $sec_supervisor,
                'key' => 'thesis',
                'value' => $thesis,
                
            ]);          
           
            $this->dispatchBrowserEvent('insert-success');
            $this->resetInput();            
        }

    }

    private function resetInput() {
        $this->thesis = '';       
    }
}
