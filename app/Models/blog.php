<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;


    
        protected $fillable = [
        'url',
        'nome_empresa',
        'contato',
        'cnpj',
    ];

    public function save(array $options = [])
    {
        
       $this->fillable['contato'] = str_replace('-','', $this->fillable['contato']);
       return parent::save($options);
    }
}
