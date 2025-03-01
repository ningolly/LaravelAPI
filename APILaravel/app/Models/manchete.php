<?php // Abri a execução da linguagem PHP

namespace App\Models; //Ambiente de trabalho

use Illuminate\Database\Eloquent\Model; // Chamado para usar o componente model

class manchete extends Model //Classe manchete herdando model
{
    protected $fillable = [//Array fillable do tipo protected com os objetos/tabelas do BD
        'titulo',
        'conteudo',
        'data',
    ];
}
