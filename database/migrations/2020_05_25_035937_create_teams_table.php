<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('leader_id');
            $table->unsignedBigInteger('competition_id');
            $table->string('university');
            $table->string('payment_confirm')->nullable();
            $table->boolean('is_active')->default(false);
            $table->timestamps();

            $table->foreign('leader_id')
                ->references('id')->on('users')
                ->onDelete('CASCADE');

            $table->foreign('competition_id')
                ->references('id')->on('competitions')
                ->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
