<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('about')) {
            Schema::create('about', function (Blueprint $table) {
                $table->id();
                $table->string('maintitle')->nullable();
                $table->string('shorttitle')->nullable();
                $table->string('title')->nullable();
                $table->string('img')->nullable();
                $table->text('desc')->nullable();
                $table->string('name')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('about', function (Blueprint $table) {


        });
    }
}
