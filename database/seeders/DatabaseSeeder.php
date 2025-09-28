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

        Skill::create(['name' => 'HTML', 'icon' => 'fab fa-html5', 'color' => '#E34F26']);
        Skill::create(['name' => 'CSS', 'icon' => 'fab fa-css3-alt', 'color' => '#1572B6']);
        Skill::create(['name' => 'JavaScript', 'icon' => 'fab fa-js', 'color' => '#F7DF1E']);
        Skill::create(['name' => 'Bootstrap', 'icon' => 'fab fa-bootstrap', 'color' => '#563D7C']);
        Skill::create(['name' => 'Tailwind CSS', 'icon' => 'fab fa-tailwindcss', 'color' => '#06B6D4']);

        Skill::create(['name' => 'PHP', 'icon' => 'fab fa-php', 'color' => '#8993BE']);
        Skill::create(['name' => 'MySQL', 'icon' => 'fas fa-database', 'color' => '#4479A1']);
        Skill::create(['name' => 'jQuery', 'icon' => 'fas fa-code', 'color' => '#0769AD']);
        Skill::create(['name' => 'Ajax', 'icon' => 'fab fa-code', 'color' => '#EAB308']);

        Skill::create(['name' => 'Laravel', 'icon' => 'fab fa-laravel', 'color' => '#FF2D20']);
        // Skill::create(['name' => 'Redis', 'icon' => 'fas fa-database', 'color' => '#DC382D']);
        // Skill::create(['name' => 'PostgreSQL', 'icon' => 'fas fa-database', 'color' => '#336791']); 
        // Skill::create(['name' => 'Eslint', 'icon' => 'fas fa-check-circle', 'color' => '#4B32C3']); 
        
        Skill::create(['name' => 'React', 'icon' => 'fab fa-react', 'color' => '#61DAFB']);
        Skill::create(['name' => 'Node.js', 'icon' => 'fab fa-node-js', 'color' => '#8CC84B']);
        Skill::create(['name' => 'Express.js', 'icon' => 'fab fa-js', 'color' => '#F7DF1E']);
        Skill::create(['name' => 'MongoDB', 'icon' => 'fas fa-database', 'color' => '#47A248']);

        Skill::create(['name' => 'Git', 'icon' => 'fab fa-git-alt', 'color' => '#F05032']);
        Skill::create(['name' => 'GitHub', 'icon' => 'fab fa-github', 'color' => '#181717']);
        Skill::create(['name' => 'GitLab', 'icon' => 'fab fa-gitlab', 'color' => '#E24329']);
        Skill::create(['name' => 'Firebase', 'icon' => 'fas fa-fire', 'color' => '#FFCA28']);
        // Skill::create(['name' => 'Bitbucket', 'icon' => 'fab fa-bitbucket']); 
        
        Skill::create(['name' => 'Linux', 'icon' => 'fab fa-linux', 'color' => '#FCC624']);
        Skill::create(['name' => 'AWS', 'icon' => 'fab fa-aws', 'color' => '#FF9900']);
        Skill::create(['name' => 'Docker', 'icon' => 'fab fa-docker', 'color' => '#2496ED']);
        // Skill::create(['name' => 'Elasticsearch', 'icon' => 'fas fa-search', 'color' => '#005571']);
        // Skill::create(['name' => 'Kubernetes', 'icon' => 'fas fa-cubes']);
        // Skill::create(['name' => 'Google Cloud', 'icon' => 'fab fa-google']);

        // Skill::create(['name' => 'SEO', 'icon' => 'fas fa-search']); 
        
        // Skill::create(['name' => 'Vue.js', 'icon' => 'fab fa-vuejs']);
        // Skill::create(['name' => 'WordPress', 'icon' => 'fab fa-wordpress']);

        // Skill::create(['name' => 'Agile', 'icon' => 'fas fa-running']);
        // Skill::create(['name' => 'Trello', 'icon' => 'fab fa-trello']);
        // Skill::create(['name' => 'Jira', 'icon' => 'fas fa-bug']);
        // Skill::create(['name' => 'Slack', 'icon' => 'fab fa-slack']);
        // Skill::create(['name' => 'Notion', 'icon' => 'fas fa-sticky-note']);
        
    }
}
