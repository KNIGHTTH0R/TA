<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('invoice'); // from midtrans
            $table->foreignId('campaign_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->integer('amount');
            $table->boolean('anonim')->default(false);
            // $table->string('snap_token');
            $table->enum('status',['pending', 'success', 'cancel', 'expired'])->default('pending');
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
        Schema::dropIfExists('transactions');
    }
}
