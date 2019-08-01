<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('meetingID')->nullable();
			$table->string('meetingName')->nullable();
			$table->string('attendee_password')->nullable();
			$table->string('moderator_password')->nullable();
			$table->string('duration')->nullable();
            $table->text('meeting_subject')->nullable();             
            $table->text('attendee')->nullable();
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
        Schema::dropIfExists('meetings');
    }
}
