<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $users = [
            [
                'name' => 'Mihir',
                'experience_level' => 'Intermediate',
                'skills' => ['Python', 'Django', 'REST APIs'],
                'preferences' => [
                    'desired_roles' => ['Backend Developer', 'Software Engineer'],
                    'locations' => ['Remote', 'New York'],
                    'job_type' => 'Full-Time',
                ],
            ],
            [
                'name' => 'Kishan',
                'experience_level' => 'Advanced',
                'skills' => ['Java', 'Spring', 'Microservices'],
                'preferences' => [
                    'desired_roles' => ['Software Engineer'],
                    'locations' => ['Remote', 'San Francisco'],
                    'job_type' => 'Full-Time',
                ],
            ],
            [
                'name' => 'Tarun',
                'experience_level' => 'Intermediate',
                'skills' => ['Node.js', 'Express', 'MongoDB'],
                'preferences' => [
                    'desired_roles' => ['Full Stack Developer'],
                    'locations' => ['Remote', 'Los Angeles'],
                    'job_type' => 'Part-Time',
                ],
            ],
            [
                'name' => 'Nick',
                'experience_level' => 'Beginner',
                'skills' => ['JavaScript', 'Vue.js', 'HTML'],
                'preferences' => [
                    'desired_roles' => ['Frontend Developer'],
                    'locations' => ['New York', 'San Francisco'],
                    'job_type' => 'Contract',
                ],
            ],
            [
                'name' => 'Vivek',
                'experience_level' => 'Advanced',
                'skills' => ['PHP', 'Laravel', 'MySQL'],
                'preferences' => [
                    'desired_roles' => ['Backend Developer'],
                    'locations' => ['Remote', 'Chicago'],
                    'job_type' => 'Full-Time',
                ],
            ],
            [
                'name' => 'Parshav',
                'experience_level' => 'Intermediate',
                'skills' => ['Ruby', 'Rails', 'PostgreSQL'],
                'preferences' => [
                    'desired_roles' => ['Backend Developer'],
                    'locations' => ['Remote'],
                    'job_type' => 'Full-Time',
                ],
            ],
            [
                'name' => 'Darshan',
                'experience_level' => 'Beginner',
                'skills' => ['Python', 'Flask', 'SQL'],
                'preferences' => [
                    'desired_roles' => ['Software Engineer'],
                    'locations' => ['Remote', 'Austin'],
                    'job_type' => 'Full-Time',
                ],
            ],
            [
                'name' => 'Ankit',
                'experience_level' => 'Advanced',
                'skills' => ['C#', '.NET', 'Azure'],
                'preferences' => [
                    'desired_roles' => ['Backend Developer', 'Cloud Engineer'],
                    'locations' => ['Remote', 'Seattle'],
                    'job_type' => 'Full-Time',
                ],
            ],
            [
                'name' => 'Mohil',
                'experience_level' => 'Intermediate',
                'skills' => ['Go', 'Docker', 'Kubernetes'],
                'preferences' => [
                    'desired_roles' => ['DevOps Engineer'],
                    'locations' => ['Remote', 'Boston'],
                    'job_type' => 'Full-Time',
                ],
            ],
            [
                'name' => 'Ravi',
                'experience_level' => 'Advanced',
                'skills' => ['Swift', 'iOS Development', 'CoreData'],
                'preferences' => [
                    'desired_roles' => ['iOS Developer'],
                    'locations' => ['Remote', 'San Francisco'],
                    'job_type' => 'Full-Time',
                ],
            ],
        ];

        foreach ($users as $userData) {
            $user = User::create([
                'name' => $userData['name'],
                'experience_level' => $userData['experience_level'],
            ]);

            foreach ($userData['skills'] as $skill) {
                $user->skills()->create(['skill_name' => $skill]);
            }

            $user->preferences()->create([
                'desired_roles' => $userData['preferences']['desired_roles'],
                'locations' => $userData['preferences']['locations'],
                'job_type' => $userData['preferences']['job_type'],
            ]);
        }
    }
}
