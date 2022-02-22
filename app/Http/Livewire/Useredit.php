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
    public  $user_name;
    public  $user_email;
    public  $user_password;
    public  $user_phone;
    public  $user_money;
    public  $user_point;
    public  $user_status;

    protected $listeners = [
        'show-user-modal'=> 'ShowUserModal'        ,
        // 'updatedUserStatus'=> 'updatedUserStatus'  ,
        // 'updatedUserName'=> 'updatedUserName'  ,
        // 'updatedUserEmail'=> 'updatedUserEmail'  ,
        // 'updatedUserPassword'=> 'updatedUserPassword'  ,
        // 'updatedUserPhoneNumber'=> 'updatedUserPhoneNumber'  ,
        // 'updatedUserPoint'=> 'updatedUserPoint'  ,
        // 'updatedUserMoney'=> 'updatedUserMoney'  ,
     ];
    protected $rules = [
        'user_name'     => 'max:40|min:3',
        'user_email'    => 'email:rfc,dns',
        'user_phone'    => 'max:10',
        // 'user.role'     => 'required',  
        'user_status'   => 'required|min:0|max:3',  
        'user_password' => 'required|min:6',
    ];
    public function mount(Request $request, $user_id) {
        $this->edit_user_id = $user_id;
        $this->user = User::find( $this->edit_user_id );
        $this->user_name    = $this->user->name;
        $this->user_email   = $this->user->email;
        $this->user_password= $this->user->password;
        $this->user_phone   = $this->user->phone_number;
        $this->user_money   = $this->user->money;
        $this->user_point   = $this->user->point;
        $this->user_status  = $this->user->status;

    }

    public function updatedUserName($value) {
        $this->user_name = $value;
    }
    public function updatedUserEmail($value) {
        $this->user_email = $value;
    }
    public function updatedUserPhoneNumber($value) {
        $this->user_phone_number = $value;
    }
    public function updatedUserMoney($value) {
        $this->user_money = $value;
        //dd($this->user);
    }
    public function updatedUserPoint($value) {
        $this->user_point = $value;
        //dd($this->user);
    }
    public function updatedUserPassword($value) {
        $this->user_password = $value;
    }
    public function updatedUserStatus($value) {
        $this->user_status = $value;
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
            $this->user->name = $this->user_name;
            $this->user->email = $this->user_email;
            $this->user->phone_number = $this->user_phone;
            $this->user->money = $this->user_money;
            $this->user->point = $this->user_point;
            $this->user->password = $this->user_password;
            $this->user->status = $this->user_status;

            if(!empty($this->edit_user_id)){
                
                User::updateOrCreate(['id'=>$this->edit_user_id],
                    [
                        'role'          => 'user' ,     // $this->user->role
                        'name'          => $this->user->name ,
                        'email'         => $this->user->email ,
                        'password'      => Hash::make($this->user->password) ,
                        'phone_number'  => $this->user->phone_number ,
                        'money'         => $this->user->money ,
                        'point'         => $this->user->point ,
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
