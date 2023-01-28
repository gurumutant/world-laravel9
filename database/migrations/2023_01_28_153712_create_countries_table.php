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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('code',3)->unique();
            $table->string('name',52);
            $table->enum('continent',['Asia','Europe','North America','Africa','Oceania','Antarctica','South America'])->default('Asia');
            $table->string('region',26);
            $table->decimal('surface_area',10,2)->default(0.00);
            $table->smallInteger('indep_year')->nullable();
            $table->integer('population')->default(0);
            $table->decimal('life_expectancy',3,1)->nullable();
            $table->decimal('gnp',10,2)->nullable();
            $table->decimal('gnp_old',10,2)->nullable();
            $table->string('local_name',45);
            $table->string('government_form',45);
            $table->string('head_of_state',60)->nullable();
            $table->bigInteger('capital')->unsigned()->nullable();
            $table->char('code2',2);
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
        Schema::dropIfExists('countries');
    }
};
