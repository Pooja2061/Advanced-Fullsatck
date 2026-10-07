<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->integer('duration')->after('description');
            $table->decimal('fee', 10, 2)->after('duration');
            $table->enum('difficulty', ['Easy', 'Medium', 'Hard'])->after('fee');
            $table->boolean('is_active')->default(true)->after('difficulty');
        });
    }

    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn([
                'duration',
                'fee',
                'difficulty',
                'is_active',
            ]);
        });
    }
};