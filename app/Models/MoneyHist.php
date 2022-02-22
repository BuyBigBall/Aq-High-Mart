<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoneyHist extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'money_type',       // 1-money, 2-point
        'deal_type',        // 0-default,1-mnyin,2-mnyout,3-buy,4-return,5-cancel,6-delete,7-register,8-login
        'deal_id',
        'content',
        'money',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
    ];


    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

}
