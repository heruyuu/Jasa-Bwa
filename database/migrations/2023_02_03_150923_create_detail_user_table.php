<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->nullable()->index();
            $table->longText('photo')->nullable();
            $table->string('role')->nullable();
            $table->string('contact_number')->nullable();
            $table->longText('biography')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('detail_user', function (Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_user');
    }
}
