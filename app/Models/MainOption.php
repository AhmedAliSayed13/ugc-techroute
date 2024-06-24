<?php

namespace App\Models;

use eloquentFilter\QueryFilter\ModelFilters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ValueOption;
use App\Models\OrderVideoOption;
class MainOption extends Model
{
    use HasFactory, Filterable;
    protected $primaryKey = 'id';
    protected $table = 'main_options';
    public $incrementing = true;
    protected $fillable = [
        'id',
        'name_client',
        'name_creator',
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

    public function valueOptions()
    {
        return $this->hasMany(ValueOption::class);
    }
    public function orderOptions()
    {
        return $this->hasMany(OrderVideoOption::class);
    }
}
