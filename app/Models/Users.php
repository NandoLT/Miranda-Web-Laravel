<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users'; // Por defecto Laravel asume que la tabla es el plural de la clase

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'employeeid';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
