<?php

namespace App\Models;

use eloquentFilter\QueryFilter\ModelFilters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowOption extends Model
{
    use HasFactory, Filterable;
    protected $primaryKey = 'id';
    protected $table = 'show_options';
    public $incrementing = true;
    protected $fillable = [
        'id',
        'name',
        'is_active',
        'created_at',
    ];
    private static $whiteListFilter = ['*'];
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
                'title' => 'Account Status',
                'name' => 'is_active',
                'options' => [
                    (object) ['id' => '0', 'name' => 'InActive'],
                    (object) ['id' => '1', 'name' => 'Active'],
                ],
            ]
        ];
    }
    public function showDetails()
    {
        return array(
            'name' => $this->name,
            'active' => $this->is_active ? 'ON' : 'OFF',
        );
    }
}
