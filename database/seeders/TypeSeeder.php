<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Type::firstOrCreate(
            ['libelle' => "Services"],
            ['status' => "1"]
        );

        Type::firstOrCreate(
            ['libelle' => "Prestations"],
            ['status' => "1"]
        );
    }
}
