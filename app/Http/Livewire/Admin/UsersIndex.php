<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = '%'.$this->search.'%';

        return view('livewire.admin.users-index',
        ['users' =>	User::where(function($sub_query)
                        { $sub_query->where('name', 'like', '%'.$this->search.'%')
    					->orWhere('email', 'like', '%'.$this->search.'%');})->paginate()]);
    }


}
