<?php

use Illuminate\Database\Seeder;
use App\category;

/**
 * Class AuthTableSeeder.
 */
class CategorySeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();

        // Add the master administrator, user id of 1
        category::create([
            'name'        => 'Physics',
        ]);

        category::create([
            'name'        => 'Chemistry',
        ]);

        $this->enableForeignKeys();
    }
}
