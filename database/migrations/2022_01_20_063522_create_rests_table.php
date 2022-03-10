<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            /*外部キー設定*/
            $table->foreign('users_id')->references('id')->on('users');

            $table->unsignedBigInteger('attended_id');
            /*外部キー設定*/
            $table->foreign('attended_id')->references('id')->on('attendances');

            $table->timestamp('started_at')->useCurrent()->nullable();
            $table->timestamp('ended_at')->useCurrent()->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rests');
    }
}
