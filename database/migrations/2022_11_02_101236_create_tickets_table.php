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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('club_name');
            $table->longText('number');
            $table->text('subject');
            $table->timestamp('meet_up_date')->nullable();
            $table->timestamp('date_last_meeting')->nullable();
            $table->longText('gatherings');
            $table->longText('meetups');
            $table->longText('tag_1');
            $table->longText('tag_2');
            $table->longText('description');
            $table->longText('sub_description');
            $table->text('image');
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
        Schema::dropIfExists('tickets');
    }
};
