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
        Schema::create('protocol_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('protocol_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->index('protocol_id', 'protocol_user_protocol_idx');
            $table->index('user_id', 'protocol_user_user_idx');

            $table->foreign('protocol_id', 'protocol_user_protocol_fk')->on('protocols')->references('id');
            $table->foreign('user_id', 'protocol_user_user_fk')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('protocol_users');
    }
};
