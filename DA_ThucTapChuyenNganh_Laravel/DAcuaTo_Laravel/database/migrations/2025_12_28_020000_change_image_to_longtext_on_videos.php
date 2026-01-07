<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class ChangeImageToLongtextOnVideos extends Migration
{
    public function up()
    {
        // Use a raw statement to alter the column type so we don't require doctrine/dbal
        DB::statement('ALTER TABLE `videos` MODIFY `image` LONGTEXT NULL');
    }

    public function down()
    {
        DB::statement('ALTER TABLE `videos` MODIFY `image` VARCHAR(255) NULL');
    }
}
