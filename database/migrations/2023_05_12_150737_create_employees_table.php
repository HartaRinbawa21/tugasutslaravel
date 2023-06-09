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
                $table->string('nip')->nullable();
                $table->string('name')->nullable();
                $table->date('date_of_birth')->nullable();
                $table->string('place_of_birth')->nullable();
                $table->text('address')->nullable();
                $table->text('email')->nullable();
                $table->string('phone_number')->nullable();
                $table->string('salary')->nullable();
                $table->enum('status', ['active','inactive'])->default('inactive');
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
