<?php

use App\Models\User;
use App\Models\ExperienceCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();

            // Relasi modern Laravel 12 syntax
            $table->foreignIdFor(User::class)
                  ->constrained()
                  ->cascadeOnDelete();

            $table->foreignIdFor(ExperienceCategory::class)
                  ->nullable()
                  ->nullOnDelete();

            // Konten utama
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('slug')->unique()->index();
            $table->text('summary')->nullable();
            $table->longText('content')->nullable();

            // Media
            $table->string('image')->nullable();
            $table->json('gallery')->nullable();

            // Lokasi dan kegiatan
            $table->string('location')->nullable();
            $table->string('partner')->nullable();

            // Rentang waktu kegiatan
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->boolean('is_current')->default(false);

            // Statistik
            $table->unsignedBigInteger('views')->default(0);
            $table->boolean('is_published')->default(true);

            // Metadata tambahan
            $table->json('tags')->nullable();

            $table->timestampsTz();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
