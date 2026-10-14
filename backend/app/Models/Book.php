<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['judul', 'author_id', 'publisher_id', 'isbn', 'tahun_terbit', 'kategori', 'jumlah_stok'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}