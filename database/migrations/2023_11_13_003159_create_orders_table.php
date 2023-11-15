<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_name');
            $table->string('order_address');
            $table->string('order_phone_number');
            $table->string('order_comment');
            $table->integer('order_qty');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->index('user_id', 'pull_user_idx');

            $table->foreign('user_id', 'pull_user_fk')->on('users')->references('id');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
