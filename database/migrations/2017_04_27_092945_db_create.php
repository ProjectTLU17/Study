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
            $table->integer('stock')->unsigned();
            $table->string('name');
        });
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sup_id')->unsigned();
            $table->integer('cate_id')->unsigned();
            $table->string('name');
            $table->string('address');
            $table->string('details');
            $table->float('area')->nullable();
            $table->string('picture');
            $table->float('price');
            $table->integer('status')->nullable();
        });
        Schema::create('suplier', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
        });
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
        });
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('birthday')->nullable();
            $table->string('address');
            $table->string('phone');
            $table->string('email');
        });
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cus_id')->unsigned();
            $table->integer('emp_id')->unsigned();
            $table->integer('prodt_id')->unsigned();
            $table->string('decription');
            $table->date('startdate')->nullable();
            $table->date('expdate')->nullable();
            $table->integer('status')->unsigned();
        });
        Schema::table('order', function (Blueprint $table) {

            $table->foreign('cus_id')->references('id')->on('customer')->onDelete('cascade');

            $table->foreign('emp_id')->references('id')->on('employee')->onDelete('cascade');

            $table->foreign('prodt_id')->references('id')->on('product')->onDelete('cascade');
        });
        Schema::table('product', function (Blueprint $table) {

            $table->foreign('sup_id')->references('id')->on('suplier')->onDelete('cascade');

            $table->foreign('cate_id')->references('id')->on('category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
        Schema::dropIfExists('category');
        Schema::dropIfExists('suplier');
        Schema::dropIfExists('customer');
        Schema::dropIfExists('employee');
        Schema::dropIfExists('order');
        Schema::dropIfExists('orderdetails');
    }
}
