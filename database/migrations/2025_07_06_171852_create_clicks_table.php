<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        $query = "
            CREATE TABLE clicks (
                id String PRIMARY KEY,
                click_id String,
                offer_id Int64,
                source String,
                ip String,
                user_agent String,
                timestamp DateTime
            ) ENGINE = MergeTree()
            ORDER BY (id)
        ";

        DB::connection('clickhouse')->statement($query);
    }

    public function down(): void
    {
        $query = "DROP TABLE clicks";
        DB::connection('clickhouse')->statement($query);
    }
};
