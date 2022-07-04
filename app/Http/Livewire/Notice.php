<?php

namespace App\Http\Livewire;

use App\Models\Notice as ModelsNotice;
use Livewire\Component;

class Notice extends Component
{
    public $notice;

    public function viewSingleNotice( ModelsNotice $notice ){
        $this->notice = $notice;
        return redirect(route('notice.show' , $this->notice));

    }

    public function render()
    {
        $notices = \App\Models\Notice::paginate();
        return view('livewire.notice', compact('notices'));
    }
}
