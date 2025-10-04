<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    // nama tabel di database
    protected $table = 'tag';

    // nama kolom primary key
    protected $primaryKey = 'id_tag';

    // biar Laravel tahu kolom ini auto increment
    public $incrementing = true;

    // kalau primary key bukan tipe string
    protected $keyType = 'int';

    // kalau tabel nggak pakai timestamps (created_at, updated_at)
    public $timestamps = false;

    // kolom yang boleh diisi mass-assignment
    protected $fillable = ['tag'];
}
