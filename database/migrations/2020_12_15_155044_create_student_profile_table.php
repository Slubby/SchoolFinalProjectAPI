<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_profile', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->date('birthday');
            $table->string('country');
            $table->string('region');
            $table->string('city');
            $table->string('street');
            $table->string('house_number');
            $table->string('postal_code');
            $table->foreignId('school_id')->constrained()->cascadeOnDelete();
            $table->foreignId('education_id')->nullable()->constrained('educations')->nullOnDelete();
            $table->foreignId('mentor_id')->nullable()->constrained('teacher_profile')->nullOnDelete();
            $table->date('started_at');
            $table->integer('grade')->default(1);
            $table->foreignId('curriculum_vitae_id')->nullable()->constrained('files')->nullOnDelete();
            $table->foreignId('motivation_letter_id')->nullable()->constrained('files')->nullOnDelete();
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
        Schema::dropIfExists('student_profile');
    }
}
