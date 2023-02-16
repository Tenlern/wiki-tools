<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sections', static function (Blueprint $table) {
            $table->comment('Sections on site');
            $table->id();

            $table->string('name')->comment('Name of section');
            $table->string('description')->nullable()->comment('Description of content');

            $table->timestamps();
        });

        Schema::create('tag_section', static function (Blueprint $table) {
            $table->comment('Relation between tags and sections');

            $table->foreignId('tag_id')->comment('Tag');
            $table->foreignId('section_id')->comment('Section');
            $table->index(['tag_id', 'foreign_id']);
            $table->unique(['tag_id', 'foreign_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tag_section');
        Schema::dropIfExists('sections');
    }
};
