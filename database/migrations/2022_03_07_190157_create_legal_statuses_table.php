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
        Schema::create('legal_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('department_name')->nullable();
            $table->string('registration_no')->nullable();
            $table->text('registration_link')->nullable();
            $table->string('registration_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('legal_statuses');
    }
};
