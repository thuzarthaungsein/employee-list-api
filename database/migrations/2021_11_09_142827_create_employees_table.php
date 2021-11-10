<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_number', 5)->nullable();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->boolean('gender');
            $table->string('email', 50);
            $table->string('phone_number', 50)->nullable();
            $table->text('address')->nullable();
            $table->string('hire_date', 10)->nullable(); // later change to date
            $table->integer('salary')->length(8)->nullable();
            $table->foreignId('position_id', 4);
            $table->foreignId('department_id', 4);
            $table->integer('record_status')->default(1);
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
        Schema::dropIfExists('employees');
    }
}
