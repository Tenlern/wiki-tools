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
    public function up(): void
    {
        Schema::create('gifts', static function (Blueprint $table) {
            $table->id();

            $table->string('name')->comment('Название');
            $table->string('source')->comment('Источник');
            $table->json('description')->comment('Описание');
            $table->json('system')->comment('Система');

            $table->timestamps();
        });

        Schema::create('gift_tag', static function (Blueprint $table) {
            $table->foreignId('gift_id')->comment('Дар');
            $table->foreignId('tag_id')->comment('Тэг');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('gifts');
    }
};
