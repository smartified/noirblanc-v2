<?php

namespace App\Http\Livewire\Service;

use App\Models\Business;
use App\Models\Service;
use Livewire\Component;

class ServiceIndex extends Component
{
    public Business $business;

    protected $listeners = [
        'servicesUpdate' => 'render'
    ];

    public function mount(Business $business){
        $this->business = $business;
    }

    public function render()
    {
        return view('livewire.service.service-index');
    }
}
