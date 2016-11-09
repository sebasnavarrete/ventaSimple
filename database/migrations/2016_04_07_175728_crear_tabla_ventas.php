<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('producto');
            $table->integer('precio_venta')->nullable();
            $table->string('cliente')->nullable();
            $table->enum('estado', ['pago', 'debe', 'abono']);
            $table->integer('valor_abono');
            $table->timestamps();
        });
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100);
            $table->string('imagen');
            $table->text('descripcion');
            $table->integer('precio_venta');
            $table->integer('precio_compra');
            $table->integer('categoria');
            $table->integer('cantidad');
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
        Schema::drop('ventas');
        Schema::drop('productos');
    }
}
