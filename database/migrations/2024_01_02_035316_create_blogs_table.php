<?php

use App\Models\Blog;
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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('created_by');
            $table->longText('url')->nullable();
            $table->longText('title');
            $table->string('status');
            $table->longText('keywords')->nullable();
            $table->longText('body');
            $table->string('image')->nullable();
            $table->timestamps();
        });

        // Seed four sample articles
        Blog::create([
            'created_by' => 'Fatima EL ESSAOUI',
            'url' => 'https://example.com/article1',
            'title' => 'Sample Article 1',
            'status' => 'published',
            'keywords' => 'laravel, php, web development',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ...',
            'image' => 'article1.jpg',
        ]);

        Blog::create([
            'created_by' => 'Moustapha JARIDI',
            'url' => 'https://example.com/article2',
            'title' => 'Sample Article 2',
            'status' => 'published',
            'keywords' => 'laravel, programming',
            'body' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ...',
            'image' => 'article2.jpg',
        ]);

        Blog::create([
            'created_by' => 'Ismail LAGHEIL',
            'url' => 'https://example.com/article3',
            'title' => 'Sample Article 3',
            'status' => 'published',
            'keywords' => 'web development, coding',
            'body' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ...',
            'image' => 'article3.jpg',
        ]);

        Blog::create([
            'created_by' => 'Youssef HAMMOUJAN',
            'url' => 'https://example.com/article4',
            'title' => 'Sample Article 4',
            'status' => 'published',
            'keywords' => 'php, laravel, coding',
            'body' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt ...',
            'image' => 'article4.jpg',
        ]);
        Blog::create([
            'created_by' => 'Yoouef DAMMOU',
            'url' => 'https://example.com/article4',
            'title' => 'Sample Article 4',
            'status' => 'published',
            'keywords' => 'php, laravel, coding',
            'body' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt ...',
            'image' => 'article4.jpg',
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
