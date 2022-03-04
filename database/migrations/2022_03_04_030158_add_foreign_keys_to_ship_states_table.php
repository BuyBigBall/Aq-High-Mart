<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToShipStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ship_states', function (Blueprint $table) {
            $table->foreign(['district_id'])->references(['id'])->on('ship_districts');
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
        Schema::table('ship_states', function (Blueprint $table) {
            $table->dropForeign('ship_states_district_id_foreign');
            $table->dropForeign('ship_states_division_id_foreign');
        });
    }
}
