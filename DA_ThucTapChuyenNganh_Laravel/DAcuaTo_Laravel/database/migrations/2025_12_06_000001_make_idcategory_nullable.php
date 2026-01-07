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
        if (Schema::hasTable('products')) {
            if (Schema::hasColumn('products', 'idcategory')) {
                // make the column nullable if it exists
                DB::statement('ALTER TABLE `products` MODIFY `idcategory` INT NULL');
            } else {
                Schema::table('products', function (Blueprint $table) {
                    $table->integer('idcategory')->nullable()->after('image');
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('products') && Schema::hasColumn('products', 'idcategory')) {
            // revert to NOT NULL with default 0 to be safe
            DB::statement('ALTER TABLE `products` MODIFY `idcategory` INT NOT NULL DEFAULT 0');
        }
    }
};
