<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FakeSuggestion extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'fake_suggestions';
    protected $guarded = [];
}
