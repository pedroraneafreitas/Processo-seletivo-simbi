<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_projeto_rouanet_teste', function (Blueprint $table) {
            $table->id('id_projeto')->unsigned()->int(10);
            $table->string('pronac', 191);
            $table->string('ano_projeto', 191);
            $table->string('nome', 191);
            $table->string('segmento', 191);
            $table->string('area', 191);
            $table->string('uf', 191);
            $table->string('municipio', 191);
            $table->string('data_inicio', 191);
            $table->string('data_termino', 191);
            $table->string('situacao', 191);
            $table->string('mecanismo', 191);
            $table->string('enquadramento', 191);
            $table->string('valor_captado', 191);
            $table->string('valor_aprovado', 191);
            $table->text('acessibilidade');
            $table->text('objetivos')->nullable();
            $table->text('justificativa')->nullable();
            $table->text('etapa')->nullable();
            $table->text('ficha_tecnica');
            $table->text('impacto_ambiental');
            $table->text('especificacao_tecnica');
            $table->text('providencia')->nullable();
            $table->text('democratizacao');
            $table->text('sinopse');
            $table->text('resumo');
            $table->timestamps();
            $table->string('valor_projeto');
            $table->string('outras_fontes');
            $table->string('valor_proposta');
            $table->string('valor_solicitado');
            $table->longText('objetivo');
            $table->longText('estrategia_execucao');
            $table->string('link_incentivadores');
            $table->index(['id_projeto'], `tb_projeto_rouanet_id_projeto_foreign`);
            $table->index(['pronac'], `idx_pronac`);
            $table->index(['municipio'],`idx_cidade`);
            $table->index(['area', 'uf', 'municipio', 'nome', 'segmento'], 'filtros');
            $table->index(['valor_aprovado'], `idx_valor_projeto`);
            $table->fulltext(['nome', 'segmento'], 'nome');
            $table->fulltext(['nome', 'resumo'], 'nome_2');
            $table->fulltext(['nome'], 'nome_3');
            $table->fulltext(['nome', 'resumo', 'objetivo'], 'nome_4');
            $table->charset = 'latin1';
            $table->collation = 'latin1_bin';
            $table->engine = 'MyISAM';
            
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
