<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('type_id')->nullable()->constrained('educations')->nullOnDelete();
            $table->string('title');
            $table->text('description');
            $table->text('about_us')->nullable();
            $table->json('requirements')->nullable();
            $table->integer('total')->default(0);
            $table->boolean('is_closed')->default(0);
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
        Schema::dropIfExists('vacancies');
    }
}
