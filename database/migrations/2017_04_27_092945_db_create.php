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
      Schema::create('plot', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('suplier_id')->unsigned();
        $table->integer('land_id')->unsigned();
        $table->string('name');
        $table->string('address');
        $table->string('decription')->nullable();
        $table->integer('price');
        $table->string('status');
      });
      Schema::create('land', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('project_id')->unsigned();
        $table->string('name');
        $table->integer('stock')->nullable();
      });
      Schema::create('project',function(Blueprint $table){
        $table->increments('id');
        $table->string('name')->unique();
        $table->string('decription')->nullable();
        $table->date('startdate')->nullable();
        $table->date('expdate')->nullable();
      });
      Schema::create('images',function(Blueprint $table){
        $table->increments('id');
        $table->integer('plot_id')->unsigned();
        $table->string('link');
      });
      Schema::create('customer', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('phone');
        $table->string('email')->nullable();
      });
      Schema::create('suplier', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('address')->nullable();
        $table->string('phone');
        $table->string('email')->nullable();
      });
      Schema::create('contract', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('customer_id')->unsigned();
        $table->integer('users_id')->unsigned();
        $table->integer('plot_id')->unsigned();
        $table->string('decription');
        $table->date('startdate')->nullable();
        $table->date('expdate')->nullable();
        $table->string('status');
      });
      Schema::table('contract', function (Blueprint $table) {
        $table->foreign('customer_id')->references('id')->on('customer')->onDelete('cascade');
        $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('plot_id')->references('id')->on('plot')->onDelete('cascade');
      });
      Schema::table('plot', function (Blueprint $table) {
        $table->foreign('suplier_id')->references('id')->on('suplier')->onDelete('cascade');
        $table->foreign('land_id')->references('id')->on('land')->onDelete('cascade');
      });
      Schema::table('images', function (Blueprint $table) {
        $table->foreign('plot_id')->references('id')->on('plot')->onDelete('cascade');
      });
      Schema::table('land', function (Blueprint $table) {
        $table->foreign('project_id')->references('id')->on('project')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('images');
      Schema::dropIfExists('contract');
      Schema::dropIfExists('plot');
      Schema::dropIfExists('customer');
      Schema::dropIfExists('suplier');
      Schema::dropIfExists('land');
      Schema::dropIfExists('project');
    }
}
