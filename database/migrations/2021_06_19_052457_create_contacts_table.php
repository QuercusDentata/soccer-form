<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('lastname_kana');
            $table->string('firstname_kana');
            $table->string('birthday_year');
            $table->string('birthday_month');
            $table->string('birthday_day');
            $table->string('gender');
            $table->string('school_year');
            $table->string('school_name');
            $table->string('postalcode')->nullable();
            $table->string('address');
            $table->string('parentname');
            $table->string('tel');
            $table->string('email');
            $table->string('teamname')->nullable();
            $table->string('participation_year');
            $table->string('participation_month');
            $table->string('participation_day');
            $table->string('cose');
            $table->string('freearea')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
