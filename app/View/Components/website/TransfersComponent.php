<?php

namespace App\View\Components\website;

use App\Models\TransferTour;
use Illuminate\View\Component;

class TransfersComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    private $transfer_tours;

    public function __construct()
    {
        $this->transfer_tours = TransferTour::limit(3)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.website.transfers-component')->with('transfer_tours', $this->transfer_tours);
    }
}
