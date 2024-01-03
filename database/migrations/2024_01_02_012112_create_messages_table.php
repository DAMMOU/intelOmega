<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->longText('message')->nullable();
            $table->timestamps();
        });
        // Insert four sample message records
        // Insert four sample message records
        DB::table('messages')->insert([
            [
                'firstname' => 'John',
                'lastname' => 'Doe',
                'email' => 'john.doe@example.com',
                'phone' => '123-456-7890',
                'message' => 'This is the first message.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstname' => 'Jane',
                'lastname' => 'Doe',
                'email' => 'jane.doe@example.com',
                'phone' => '987-654-3210',
                'message' => 'This is the second message.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstname' => 'Alice',
                'lastname' => 'Smith',
                'email' => 'alice.smith@example.com',
                'phone' => '555-123-4567',
                'message' => 'This is the third message.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstname' => 'Bob',
                'lastname' => 'Johnson',
                'email' => 'bob.johnson@example.com',
                'phone' => '777-888-9999',
                'message' => 'This is the fourth message.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
