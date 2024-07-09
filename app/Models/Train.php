<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    /**
     * 
     *
     * @var array
     */
    protected $casts = [
        'orario_partenza' => 'datetime:H:i:s',
        'orario_arrivo' => 'datetime:H:i:s',
        'data_partenza' => 'date:Y-m-d',
    ];
}
