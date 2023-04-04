<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('judul');
            $table->string('slug')->unique();
            $table->enum('status', ['Ongoing', 'End']);
            $table->text('sinopsis');
            $table->date('published_at')->nullable();
            $table->text('cover');
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
        Schema::dropIfExists('novels');
    }
}
