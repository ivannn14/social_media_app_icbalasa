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
        DB::table('notifications')
            ->whereRaw("JSON_EXTRACT(data, '$.liker_name') IS NULL")
            ->update([
                'data' => DB::raw("JSON_SET(
                    data, 
                    '$.liker_name', 
                    COALESCE(
                        (SELECT name FROM users WHERE id = JSON_EXTRACT(data, '$.liker_id')),
                        'Anonymous User'
                    )
                )")
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // This operation is not easily reversible, so we'll leave it empty
    }
};
