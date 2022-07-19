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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('currency');
            $table->string('genus'); //род
            $table->string('comp'); //состав
            $table->string('date');
            $table->string('country_sender'); //отправитель
            $table->string('station_sender'); //отправитель
            $table->string('country_receiver'); //получатель
            $table->string('station_receiver'); //получатель
            $table->string('sender'); //грузоотправитель
            $table->string('receiver'); //грузополучатель
            $table->string('code_cargo'); //код груза
            $table->string('weight');
            $table->string('terms'); //условия
            $table->string('qty');
            $table->string('payer'); //плательщики
            $table->string('notes'); //примечания
            $table->string('loading'); //погрузка/выгрука
            $table->string('cost_in_kzt'); //стоимость в KZT
            $table->string('period'); //период подачи
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
        Schema::dropIfExists('applications');
    }
};
