<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Skill::create(['name' => 'HTML', 'icon_class' => 'fab fa-html5', 'icon_color' => '#E34F26']);
        Skill::create(['name' => 'CSS', 'icon_class' => 'fab fa-css3-alt', 'icon_color' => '#1572B6']);
        Skill::create(['name' => 'JavaScript', 'icon_class' => 'fab fa-js', 'icon_color' => '#F7DF1E']);
        Skill::create(['name' => 'Bootstrap', 'icon_class' => 'fab fa-bootstrap', 'icon_color' => '#563D7C']);
        Skill::create(['name' => 'Tailwind CSS', 'icon_class' => 'fab fa-tailwindcss', 'icon_color' => '#06B6D4']);

        Skill::create(['name' => 'PHP', 'icon_class' => 'fab fa-php', 'icon_color' => '#8993BE']);
        Skill::create(['name' => 'MySQL', 'icon_class' => 'fas fa-database', 'icon_color' => '#4479A1']);
        Skill::create(['name' => 'jQuery', 'icon_class' => 'fas fa-code', 'icon_color' => '#0769AD']);
        Skill::create(['name' => 'Ajax', 'icon_class' => 'fab fa-code', 'icon_color' => '#EAB308']);

        Skill::create(['name' => 'Laravel', 'icon_class' => 'fab fa-laravel', 'icon_color' => '#FF2D20']);
        // Skill::create(['name' => 'Redis', 'icon_class' => 'fas fa-database', 'icon_color' => '#DC382D']);
        // Skill::create(['name' => 'PostgreSQL', 'icon_class' => 'fas fa-database', 'icon_color' => '#336791']);
        // Skill::create(['name' => 'Eslint', 'icon_class' => 'fas fa-check-circle', 'icon_color' => '#4B32C3']);

        Skill::create(['name' => 'React', 'icon_class' => 'fab fa-react', 'icon_color' => '#61DAFB']);
        Skill::create(['name' => 'Node.js', 'icon_class' => 'fab fa-node-js', 'icon_color' => '#8CC84B']);
        Skill::create(['name' => 'Express.js', 'icon_class' => 'fab fa-js', 'icon_color' => '#F7DF1E']);
        Skill::create(['name' => 'MongoDB', 'icon_class' => 'fas fa-database', 'icon_color' => '#47A248']);

        Skill::create(['name' => 'Git', 'icon_class' => 'fab fa-git-alt', 'icon_color' => '#F05032']);
        Skill::create(['name' => 'GitHub', 'icon_class' => 'fab fa-github', 'icon_color' => '#181717']);
        Skill::create(['name' => 'GitLab', 'icon_class' => 'fab fa-gitlab', 'icon_color' => '#E24329']);
        Skill::create(['name' => 'Firebase', 'icon_class' => 'fas fa-fire', 'icon_color' => '#FFCA28']);
        // Skill::create(['name' => 'Bitbucket', 'icon_class' => 'fab fa-bitbucket']);

        Skill::create(['name' => 'Linux', 'icon_class' => 'fab fa-linux', 'icon_color' => '#FCC624']);
        Skill::create(['name' => 'AWS', 'icon_class' => 'fab fa-aws', 'icon_color' => '#FF9900']);
        Skill::create(['name' => 'Docker', 'icon_class' => 'fab fa-docker', 'icon_color' => '#2496ED']);
        // Skill::create(['name' => 'Elasticsearch', 'icon_class' => 'fas fa-search', 'icon_color' => '#005571']);
        // Skill::create(['name' => 'Kubernetes', 'icon_class' => 'fas fa-cubes']);
        // Skill::create(['name' => 'Google Cloud', 'icon_class' => 'fab fa-google']);

        Skill::create(['name' => 'SEO', 'icon_class' => 'fas fa-search']);

        // Skill::create(['name' => 'Vue.js', 'icon_class' => 'fab fa-vuejs']);
        // Skill::create(['name' => 'WordPress', 'icon_class' => 'fab fa-wordpress']);

        // Skill::create(['name' => 'Agile', 'icon_class' => 'fas fa-running']);
        // Skill::create(['name' => 'Trello', 'icon_class' => 'fab fa-trello']);
        // Skill::create(['name' => 'Jira', 'icon_class' => 'fas fa-bug']);
        // Skill::create(['name' => 'Slack', 'icon_class' => 'fab fa-slack']);
        // Skill::create(['name' => 'Notion', 'icon_class' => 'fas fa-sticky-note']);

    }
}
