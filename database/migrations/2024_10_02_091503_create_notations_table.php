<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateNotationsTable extends Migration
{
    public function up()
    {
        Schema::create('notations', function (Blueprint $table) {
            $table->id();
            $table->string('event')->nullable()->default('');  // Hier default naar een lege string
            $table->date('date')->default(DB::raw('CURRENT_DATE'));
            $table->string('round')->default('');
            $table->string('board')->default('');
            $table->string('section')->default('');
            $table->string('opening')->default('');
            $table->string('white_player')->default('');
            $table->string('black_player')->default('');

            // Opslaan van JSON-moves met nullable en standaard lege array als string
            $table->json('white_moves')->default(json_encode([]));
            $table->json('black_moves')->default(json_encode([]));

            // Resultaten met standaardwaarden
            $table->boolean('result_white_won')->default('');
            $table->boolean('result_draw')->default('');
            $table->boolean('result_black_won')->default('');

            $table->string('white_signature')->default('');
            $table->string('black_signature')->default('');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('notations');
    }
}
