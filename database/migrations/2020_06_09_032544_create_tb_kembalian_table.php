<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbKembalianTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_kembalian', function(Blueprint $table)
		{
			$table->integer('id_kembalian', true);
			$table->string('kode_transaksi_kembalian', 100);
			$table->string('bayar', 200);
			$table->string('kembalian', 100);
			$table->date('tanggal_transaksi');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_kembalian');
	}

}
