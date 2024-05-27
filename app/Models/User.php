<?php

namespace App\Models;

use eloquentFilter\QueryFilter\ModelFilters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Filterable, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'is_creator',
        'is_active',
    ];
    private static $whiteListFilter = ['*'];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
    public function showDetails()
    {
        return array(
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'Type' => $this->is_admin ? 'creator' : 'client',
            "Active" => $this->is_active ? 'Active' : 'Inactive',
        );
    }
    public function searchFormItems()
    {
        return [
            [
                'type' => 'text',
                'title' => 'name',
                'name' => 'name',

            ],
            [
                'type' => 'select',
                'title' => 'User Type',
                'name' => 'is_creator',
                'options' => [
                    (object) ['id' => '0', 'name' => 'client'],
                    (object) ['id' => '1', 'name' => 'creator'],
                ],
            ],
            [
                'type' => 'select',
                'title' => 'Account Status',
                'name' => 'is_active',
                'options' => [
                    (object) ['id' => '0', 'name' => 'InActive'],
                    (object) ['id' => '1', 'name' => 'Active'],
                ],
            ],
            // [
            //     'type'=>'select',
            //     'title'=>'name',
            //     'name'=>'name',

            // ],
        ];
    }

    public function ads(): HasMany
    {
        return $this->hasMany(Ad::class);
    }
}
