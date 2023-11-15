<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mixdesigns', function (Blueprint $table) {
            $table->id();
            $table->string('mixdesign');
            $table->string('slump');
            $table->string('bin1');
            $table->string('bin2');
            $table->string('bin3');
            $table->string('bin4');
            $table->string('silocement');
            $table->string('siloflyash');
            $table->string('tankwater');
            $table->string('additive');
            $table->softDeletes();
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
        Schema::dropIfExists('mixdesigns');
    }
};
