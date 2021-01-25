<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithPagination;
use App\User;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $userId, $name, $username, $email, $role;
    public $search = '';
    public $updateMode = false;

    public function render()
    {
        return view('livewire.kesmas.user.index',[
            'user' => User::paginate(5)
        ])->extends('admin::layouts.app')
          ->section('main-content');
    }

    private function resetInputFields(){
        $this->name = '';
        $this->username = '';
        $this->email = '';
        $this->role = '';
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }

    public function modal()
    {
        $this->emit('openModalUser');
        $this->emit('openModalEditUser');
        $this->emit('openDeleteConfirmationUser');
    }

    public function storeUser()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required|min:4|max:10',
            'role' => 'required',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'username' => $this->username,
            'role' =>$this->role,
            'password' => bcrypt('adminlabkesda2021')
        ]);

        $this->resetInputFields();
    }

    public function editUser($id)
    {
        $this->updateMode = true;
        $user = User::where('id',$id)->first();
        $this->userId = $id;
        $this->name = $user->name;
        $this->username = $user->username;
        $this->email = $user->email;
        $this->role = $user->role;

    }

    public function updateUser(){

        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required|min:4|max:10',
            'role' => 'required',
        ]);

        if($this->userId){
            $user = User::find($this->userId);
            $user->update([
                'name'     =>$this->name,
                'email'    =>$this->email,
                'username' =>$this->username,
                'role'     =>$this->role,
            ]);

            $this->updateMode = false;
            session()->flash('message', 'User Berhasil di Update');
            $this->resetInputFields();
        }
    }

    public function destroyModalUser($id)
    {
        $user = User::where('id',$id)->first();
        $this->UserId = $id;
    }

    public function destroyUser()
    {
        if($this->userId) {
            $user = User::find($this->userId);
            $user->delete();
        }

        //flash message
        session()->flash('message', 'Data Berhasil Dihapus.');


    }

}
