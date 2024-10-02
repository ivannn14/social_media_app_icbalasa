<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Check if the unique constraint already exists
        $constraintExists = DB::select("
            SELECT COUNT(*) as count
            FROM information_schema.TABLE_CONSTRAINTS 
            WHERE CONSTRAINT_SCHEMA = DATABASE() 
            AND TABLE_NAME = 'post_shares' 
            AND CONSTRAINT_NAME = 'post_shares_user_id_post_id_unique'
        ")[0]->count > 0;

        if (!$constraintExists) {
            Schema::table('post_shares', function (Blueprint $table) {
                $table->unique(['user_id', 'post_id']);
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('post_shares', function (Blueprint $table) {
            $table->dropUnique(['user_id', 'post_id']);
        });
    }
};
