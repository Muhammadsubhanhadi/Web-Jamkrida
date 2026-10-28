
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('karir', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug')->unique();
            $table->string('department')->nullable();
            $table->string('location')->nullable();
            $table->string('employment_type')->nullable();
            $table->unsignedInteger('vacancy_count')->default(1);

            $table->longText('description')->nullable();
            $table->longText('responsibilities')->nullable();
            $table->longText('qualifications')->nullable();
            $table->longText('required_documents')->nullable();

            $table->string('banner')->nullable();
            $table->string('announcement_pdf')->nullable();

            $table->string('application_method')->default('external');
            $table->string('application_email')->nullable();
            $table->text('application_url')->nullable();
            $table->longText('application_instructions')->nullable();

            $table->string('status')->default('draft');
            $table->date('published_at')->nullable();
            $table->date('deadline')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('karir');
    }
};
