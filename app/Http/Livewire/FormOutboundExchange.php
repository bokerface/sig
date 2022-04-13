<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Exchange;
use App\Models\Meta;
use Illuminate\Support\Facades\Session;
use Livewire\WithFileUploads;


class FormOutboundExchange extends Component
{
    public $curriculum_vitae;
    public $motivation_letter;
    public $passport;
    public $certificate;
    public $photo;

    use WithFileUploads;

    public function render()
    {
        return view('livewire.form-outbound-exchange')
            ->layout('components.layoutfront');
    }

    public function handleForm() 
    {
        $validateData = $this->validate([
            'curriculum_vitae' => 'required|file|mimes:pdf',
            'motivation_letter' => 'required|file|mimes:pdf',
            'passport' => 'required|file|mimes:pdf',
            'certificate' => 'required|file|mimes:pdf',
            'photo' => 'required|image|max:1024',
        ]);
        

        $curriculum_vitae = $this->curriculum_vitae->store('files', 'public');
        $validateData['curriculum_vitae'] = $curriculum_vitae;

        $motivation_letter = $this->motivation_letter->store('files', 'public');
        $validateData['motivation_letter'] = $motivation_letter;

        $passport = $this->passport->store('files', 'public');
        $validateData['passport'] = $passport;

        $certificate = $this->certificate->store('files', 'public');
        $validateData['certificate'] = $certificate;

        $photo = $this->photo->store('files', 'public');
        $validateData['photo'] = $photo;

        $exchange = Exchange::create([
            'student_id' => Session::get('user_data.user_id'),
            'exchange_type' => 1,            
            'status' => 0,            
        ])->id;

        if($exchange) {

           Meta::create([
                'post_id' => $exchange,
                'post_type' => 'exchange',
                'key' => 'curriculum_vitae',
                'value' => $curriculum_vitae,                
            ]);

           Meta::create([
                'post_id' => $exchange,
                'post_type' => 'exchange',
                'key' => 'motivation_letter',
                'value' => $motivation_letter,                
            ]);

           Meta::create([
                'post_id' => $exchange,
                'post_type' => 'exchange',
                'key' => 'passport',
                'value' => $passport,                
            ]);

           Meta::create([
                'post_id' => $exchange,
                'post_type' => 'exchange',
                'key' => 'certificate',
                'value' => $certificate,                
            ]);

           Meta::create([
                'post_id' => $exchange,
                'post_type' => 'exchange',
                'key' => 'photo',
                'value' => $photo,                
            ]);
           
            $this->dispatchBrowserEvent('insert-success');
            $this->resetInput();

            
        }

    }

    private function resetInput() {
        $this->curriculum_vitae = '';    
        $this->motivation_letter = '';    
        $this->passport = '';    
        $this->certificate = '';    
        $this->photo = '';    
    }
}
