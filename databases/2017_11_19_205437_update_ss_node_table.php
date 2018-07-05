<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class UpdateSsNodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ss_node', function (Blueprint $table) {
            $table->integer('ss_enable')->default(1);
            $table->integer('v2ray_enable')->default(0);
            $table->integer('https_enable')->default(0);
            $table->integer('v2ray_port')->default(8100);
            $table->string('v2ray_protocol')->default("tcp");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
