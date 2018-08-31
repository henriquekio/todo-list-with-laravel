<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarefasTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tarefas', function(Blueprint $table) {
            $table->increments('id');
			$table->string('titulo');
			$table->string('descricao');
			$table->date('data_criacao');
			$table->date('data_inicio')->nullable();
			$table->date('data_prevista')->nullable();
			$table->date('data_conclusao')->nullable();
			$table->enum('status', ['F', 'A'])->default('A');
			$table->integer('prioridade');
			$table->integer('usuario_id')->unsigned();
			$table->integer('categoria_id')->unsigned();

			$table->foreign('usuario_id')->references('id')->on('users');
			$table->foreign('categoria_id')->references('id')->on('categorias');

            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tarefas');
	}

}
