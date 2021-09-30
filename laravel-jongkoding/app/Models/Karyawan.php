<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';
    protected $primaryKey = 'nik';
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;

    const CREATED_AT = 'creation_date';
    const UPDATES_AT = 'updates_date';

    protected $fillable = [
        'nik', 'nama', 'jk', 'tmp_lahir', 'tgl_lahir', 'jurusan'
    ];
}
