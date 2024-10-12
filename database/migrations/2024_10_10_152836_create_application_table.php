
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

  public function up(): void
  {
    Schema::create('application', function (Blueprint $table)
     {
        $table->id();
        $table->string('name');
        $table->string('experince');
        $table->string('gender');
        $table->string('email');
        $table->integer('phone_number')->nullable();
        $table->foreignId('job_id')->constrained();
        $table->foreignId('user_id')->constrained();
        $table->timestamps();
    });
}

 
  public function down(): void
  {
    Schema::dropIfExists('application');
    }
};
