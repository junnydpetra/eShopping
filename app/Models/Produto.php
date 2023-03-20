<?php

namespace App\Models;

class Produto extends RModel
{
    protected $table = "produtos";
    protected $fillable = ['name', 'valor', 'foto', 'descricao', 'categoria_id'];
}
