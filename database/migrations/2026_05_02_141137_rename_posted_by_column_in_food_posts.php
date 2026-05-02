<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('food_posts', function (Blueprint $table) {
            $table->renameColumn('Posted by', 'posted_by');
        });
    }

    public function down(): void
    {
        Schema::table('food_posts', function (Blueprint $table) {
            $table->renameColumn('posted_by', 'Posted by');
        });
    }
};
