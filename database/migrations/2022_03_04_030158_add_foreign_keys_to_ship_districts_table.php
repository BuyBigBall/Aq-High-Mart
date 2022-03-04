<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToShipDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ship_districts', function (Blueprint $table) {
            $table->foreign(['division_id'])->references(['id'])->on('ship_divisions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ship_districts', function (Blueprint $table) {
            $table->dropForeign('ship_districts_division_id_foreign');
        });
    }
}
