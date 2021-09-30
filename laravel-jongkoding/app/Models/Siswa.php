<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $primaryKey = 'nis';
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;

    const CREATED_AT = 'creation_date';
    const UPDATES_AT = 'updates_date';

    protected $fillable = [
        'nis', 'nama', 'jk', 'tmp_lahir', 'tgl_lahir', 'id_jurusan'
    ];
}
