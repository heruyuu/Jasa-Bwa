<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienceUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('detail_user_id')->nullable()->index();
            $table->string('experience')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('experience_user', function (Blueprint $table) {
            $table->foreign('detail_user_id')->references('id')->on('detail_user')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experience_user');
    }
}
