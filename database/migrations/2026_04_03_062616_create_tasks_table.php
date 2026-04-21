<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
  {
          Schema::create('tasks', function (Blueprint $table) {
                  $table->id();
                  $table->string('name');
                  $table->string('description')->nullable();
                  $table->date('due_date')->nullable();
                  $table->date('due_at')->nullable();
                  $table->boolean('status')->nullable()->comment('NULL: Not started, FALSE: In progress, TRUE: completed');
                  $table->timestamps();
          });
  }

  public function down()
  {
          Schema::dropIfExists('tasks');
  }
};
