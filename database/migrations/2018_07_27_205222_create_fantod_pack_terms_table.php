<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFantodPackTermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fantodPack_terms', function (Blueprint $table) {
            $table->unsignedTinyInteger('parent_id');
            $table->unsignedTinyInteger('sort_order');
            $table->string('term');
            $table->boolean('italic')->nullable();
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
        Schema::dropIfExists('fantodPack_terms');
    }
}
