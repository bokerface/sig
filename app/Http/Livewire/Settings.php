<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class Settings extends Component
{

    // director name
    public $setting_director_name;
    public $director_name;
    public $setting_id_director_name;

    // director NIK
    public $setting_director_nik;
    public $director_nik;
    public $setting_id_director_nik;

    public function mount()
    {
        $this->setting_director_name = Setting::where([['setting_name', '=', 'director_name']])->first();
        if (!empty($this->setting_director_name)) {
            $this->director_name = $this->setting_director_name->setting;
            $this->setting_id_director_name = $this->setting_director_name->id;
        }

        $this->setting_director_nik = Setting::where([['setting_name', '=', 'director_nik']])->first();
        if (!empty($this->setting_director_nik)) {
            $this->director_nik = $this->setting_director_nik->setting;
            $this->setting_id_director_nik = $this->setting_director_nik->id;
        }
    }

    public function render()
    {
        return view('livewire.settings')
            ->layout('components.admin.layouts');
    }

    public function update_setting()
    {
        if (empty($this->setting_director_name)) {
            $setting_director_name = new Setting();
            $setting_director_name->setting = $this->director_name;
            $setting_director_name->setting_name = 'director_name';
            $setting_director_name->save();
        } else {
            $setting_director_name = Setting::find($this->setting_id_director_name);
            $setting_director_name->setting = $this->director_name;
            $setting_director_name->save();
        }

        if (empty($this->setting_director_nik)) {
            $setting_director_nik = new Setting();
            $setting_director_nik->setting = $this->director_nik;
            $setting_director_nik->setting_name = 'director_nik';
            $setting_director_nik->save();
        } else {
            $setting_director_nik = Setting::find($this->setting_id_director_nik);
            $setting_director_nik->setting = $this->director_nik;
            $setting_director_nik->save();
        }

        return redirect()->back();
    }
}
