<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            [
                'name' => 'HTML',
                'tech_logo' => 'https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg'
            ],
            [
                'name' => 'CSS',
                'tech_logo' => 'https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg'
            ],
            [
                'name' => 'Boostrap',
                'tech_logo' => 'https://raw.githubusercontent.com/devicons/devicon/master/icons/bootstrap/bootstrap-plain-wordmark.svg'
            ],
            [
                'name' => 'JavaScript',
                'tech_logo' => 'https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg'
            ],
            [
                'name' => 'VueJs',
                'tech_logo' => 'https://raw.githubusercontent.com/devicons/devicon/master/icons/vuejs/vuejs-original-wordmark.svg'
            ],
            [
                'name' => 'PHP',
                'tech_logo' => 'https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg'
            ],
        ];
        foreach ($technologies as $technology) {
            $newTechnology = new Technology();
            $newTechnology->name = $technology['name'];
            $newTechnology->tech_logo = $technology['tech_logo'];
            $newTechnology->save();
        }
    }
}

