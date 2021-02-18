<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAccomplieFieldWithDefaultValueToTableTache extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('taches', function (Blueprint $table) {
            $table->boolean('accomplie')->default(0)->change();
            $table->boolean('accomplie')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('taches', function (Blueprint $table) {
            $table->boolean('accomplie')->default(NULL)->change();
            $table->boolean('accomplie')->nullable(false)->change();
        });
    }
}
