<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{Categoria,
                Produto};

class InsertProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $categoria = new Categoria(['categoria' => 'Geral']);
        $categoria->save();

        $produto1 = new Produto(['name' => 'Armas, Germes e Aço', 'valor' => '10', 'foto' => 'images/produto1.png', 'descricao' => '', 'categoria_id'=>$categoria->id]);
        $produto1->save();

        $produto2 = new Produto(['name' => 'O Terceiro Chimpanzé', 'valor' => '10', 'foto' => 'images/produto2.png', 'descricao' => '', 'categoria_id'=>$categoria->id]);
        $produto2->save();

        $produto3 = new Produto(['name' => 'Primatas e Filósofos', 'valor' => '10', 'foto' => 'images/produto3.png', 'descricao' => '', 'categoria_id'=>$categoria->id]);
        $produto3->save();

        $produto4 = new Produto(['name' => 'Tênis New Balance', 'valor' => '10', 'foto' => 'images/produto4.png', 'descricao' => '', 'categoria_id'=>$categoria->id]);
        $produto4->save();

        $produto5 = new Produto(['name' => 'Tênis New Balance', 'valor' => '10', 'foto' => 'images/produto5.png', 'descricao' => '', 'categoria_id'=>$categoria->id]);
        $produto5->save();

        $produto6 = new Produto(['name' => 'Tênis New Balance', 'valor' => '10', 'foto' => 'images/produto6.png', 'descricao' => '', 'categoria_id'=>$categoria->id]);
        $produto6->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
