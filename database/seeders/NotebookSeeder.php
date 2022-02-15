<?php

namespace Database\Seeders;

use App\Models\Notebook;
use Illuminate\Database\Seeder;

class NotebookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notebook::factory()->count(20)->create();
    }
}
