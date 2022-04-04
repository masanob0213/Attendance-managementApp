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
            $table->unsignedBigInteger('user_id');
            /*外部キー設定*/
            $table->foreign('user_id')->references('id')->on('users');

            $table->date('rest_attended_day');
            $table->timestamp('rest_started_at')->useCurrent()->nullable();
            $table->timestamp('rest_ended_at')->nullable();
            $table->timestamp('total_at')->nullable();
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
        Schema::dropIfExists('attendances');
        Schema::dropIfExists('users');
    }
}
