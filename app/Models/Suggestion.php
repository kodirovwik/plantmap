<?php

namespace App\Models;

use Doctrine\DBAL\Query;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Suggestion extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'suggestions';
    protected $guarded = [];

}
