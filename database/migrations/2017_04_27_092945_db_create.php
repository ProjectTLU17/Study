<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DbCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('stock')->nullable();
        });
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('suplier_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->string('name');
            $table->string('address');
            $table->string('details');
            $table->string('images')->nullable();
            $table->integer('price');
            $table->string('status');
        });
        Schema::create('suplier', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('phone');
            $table->string('email')->nullable();
        });
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
        });
        Schema::create('contract', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->string('details');
            $table->date('startdate')->nullable();
            $table->date('expdate')->nullable();
            $table->string('status');
        });
        Schema::table('contract', function (Blueprint $table) {

            $table->foreign('customer_id')->references('id')->on('customer')->onDelete('cascade');

            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');
        });
        Schema::table('product', function (Blueprint $table) {

            $table->foreign('suplier_id')->references('id')->on('suplier')->onDelete('cascade');

            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contract');
        Schema::dropIfExists('customer');
        Schema::dropIfExists('product');
        Schema::dropIfExists('category');
        Schema::dropIfExists('suplier');
        Schema::dropIfExists('contract');
    }
}
