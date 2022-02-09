<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Useredit extends Component
{
    public  $show;

    public  $err_msg;
    public  User $user;
    public  $edit_user_id;
    public  $university_options;

    protected $listeners = [
        'show-user-modal'=> 'ShowUserModal'        ,
        'updatedUserStatus'=> 'updatedUserStatus'  ,
        'updatedUserPassword'=> 'updatedUserPassword'  ,
     ];
    protected $rules = [
        'user.name'     => 'max:40|min:3',
        'user.email'    => 'email:rfc,dns',
        'user.phone'    => 'max:10',
        'user.role'     => 'required',  
        'user.status'   => 'required|min:0|max:3',  
        'user.password' => 'required|min:6',
    ];
    public function mount(Request $request, $user_id) {
        $this->edit_user_id = $user_id;
        $this->user = User::find( $this->edit_user_id );
    }

    public function updatedUserName($value) {
        $this->user->name = $value;
    }
    public function updatedUserEmail($value) {
        $this->user->email = $value;
    }
    public function updatedUserPhoneNumber($value) {
        $this->user->phone_number = $value;
    }
    public function updatedUserPassword($value) {
        // dd($value);
        $this->user->password = $value;
    }
    public function updatedUserStatus($value) {
        $this->user->status = $value;
    }

    public function doClose() {
        return Redirect( route('users.index') );
    }

    public function save() {
        
        //dd(Auth::user());
        if ( !!empty(Auth::user() ))        # App\Models\Admin
        {
            return Redirect('login');
        }
        
        {
            if(!empty($this->edit_user_id)){

                User::updateOrCreate(['id'=>$this->edit_user_id],
                    [
                        'role'          => $this->user->role ,
                        'name'          => $this->user->name ,
                        'email'         => $this->user->email ,
                        'password'      => Hash::make($this->user->password) ,
                        'phone_number'  => $this->user->phone_number ,
                        'status'        => $this->user->status ,
                    ]);
            }
            return Redirect(route('users.index'));
        }

        //$this->doClose();
    } 

    public function render()
    {
        return view('admin.livewire.usermanage.useredit')
                ->extends('admin.admin_master'
                     , compact( [] ) 
                    )
            ->section('dashboard_content')
            ->with('user'               , $this->user  );
    }
}
