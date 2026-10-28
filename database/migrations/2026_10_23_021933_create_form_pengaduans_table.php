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
    Schema::create('form_pengaduan', function (Blueprint $table) {
        $table->id();

        $table->string('ticket_number')->unique();

        $table->string('name');
        $table->string('contact');
        $table->string('email')->nullable();

        $table->string('category');
        $table->string('subject');
        $table->text('chronology');

        $table->string('attachment_path')->nullable();
        $table->boolean('privacy_consent')->default(false);

        $table->string('status')->default('Baru Masuk');

        $table->unsignedBigInteger('assigned_to')->nullable();
        $table->text('admin_notes')->nullable();
        $table->text('resolution')->nullable();
        $table->timestamp('resolved_at')->nullable();

        $table->timestamps();

        $table->index('status');
        $table->index('category');
        $table->index('created_at');
    });
}

public function down(): void
{
    Schema::dropIfExists('form_pengaduan');
}

};
