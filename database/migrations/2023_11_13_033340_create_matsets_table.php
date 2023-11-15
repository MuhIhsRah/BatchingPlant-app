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
        Schema::create('matsets', function (Blueprint $table) {
            $table->id();
            $table->string('prelimitbin1');
            $table->string('prelimitbin2');
            $table->string('prelimitbin3');
            $table->string('prelimitbin4');
            $table->string('prelimitcement');
            $table->string('prelimitflyash');
            $table->string('prelimitwater');
            $table->string('prelimitadditive');
            $table->string('joggingbin1');
            $table->string('joggingbin2');
            $table->string('joggingbin3');
            $table->string('joggingbin4');
            $table->string('remainmaterial');
            $table->string('remaincement');
            $table->string('remainwater');
            $table->string('remainadditive');
            $table->string('dischargewater');
            $table->string('dischargecement');
            $table->string('timerbin1');
            $table->string('timerbin2');
            $table->string('timerbin3');
            $table->string('timerbin4');
            $table->string('timermixer');
            $table->string('conveyoron');
            $table->string('conveyoroff');
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
        Schema::dropIfExists('matsets');
    }
};
