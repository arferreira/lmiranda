<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome', 'sexo','estado_civil', 'convenio','endereco','numero','complemento','bairro','cidade','uf','cep1',
        'cep2','telefone_ddd','telefone','comercial_ddd','comercial', 'email', 'data_nasc', 'ficha',
        'profissao', 'alergias', 'observacao', 'indicacao',
    ];	
}
