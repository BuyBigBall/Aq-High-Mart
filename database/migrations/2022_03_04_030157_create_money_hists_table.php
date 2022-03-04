<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoneyHistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('money_hists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->tinyInteger('money_type')->nullable()->default(1)->comment('1-money, 2-point');
            $table->tinyInteger('deal_type')->nullable()->default(0)->comment('0-default,1-mnyin,2-mnyout,3-buy,4-return,5-cancel,6-delete,7-register,8-login');
            $table->integer('deal_id')->nullable()->default(0);
            $table->text('content');
            $table->float('money', 10, 0)->nullable()->default(0);
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('money_hists');
    }
}
