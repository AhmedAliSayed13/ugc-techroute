<?php

namespace App\Models;

use eloquentFilter\QueryFilter\ModelFilters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory, Filterable;
    protected $table = 'data';
    public $timestamps = false;
    protected $fillable = [
        'unm',
        'psw',
        'clb',
        'name',
        'unm_ma',
        'psw_ma',
        'clb_ma',
        'sdp_username',
        'sdp_password',
        'sdp_club',
    ];
    private static $whiteListFilter = ['*'];
    public function searchFormItems(){
        return [

        ];
    }
    public function showDetails(){
        return array(
            'unm'=>$this->unm,
            'psw'=>$this->psw ,
            'clb'=>$this->clb ,
            'name'=>$this->name ,
            'unm_ma'=>$this->unm_ma ,
            'psw_ma'=>$this->psw_ma ,
            'clb_ma'=>$this->clb_ma ,
            'sdp_username'=>$this->sdp_username ,
            'sdp_password'=>$this->sdp_password ,
            'sdp_club'=>$this->sdp_club ,

        );
    }
}
