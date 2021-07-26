<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactInteractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_interactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('contact_form_id');
            $table->string('interaction_type');
            $table->string('recipient');
            $table->string('subject');
            $table->string('context');
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
        Schema::dropIfExists('contact_interactions');
    }
}
