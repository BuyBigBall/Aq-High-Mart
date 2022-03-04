<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_sub_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id')->nullable()->index('sub_sub_categories_category_id_foreign');
            $table->unsignedBigInteger('subcategory_id')->nullable()->index('sub_sub_categories_subcategory_id_foreign');
            $table->string('subsubcategory_name_en');
            $table->string('subsubcategory_name_bn');
            $table->string('subsubcategory_slug_en');
            $table->string('subsubcategory_slug_bn');
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
        Schema::dropIfExists('sub_sub_categories');
    }
}
