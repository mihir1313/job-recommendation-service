<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [
            [
                'job_title' => 'Backend Developer',
                'company' => 'Tech Solutions Inc.',
                'location' => 'Remote',
                'job_type' => 'Full-Time',
                'required_skills' => ['Python', 'Django', 'REST APIs'],
                'experience_level' => 'Intermediate',
            ],
            [
                'job_title' => 'Java Developer',
                'company' => 'Innovatech',
                'location' => 'New York',
                'job_type' => 'Full-Time',
                'required_skills' => ['Java', 'Spring', 'Microservices'],
                'experience_level' => 'Advanced',
            ],
            [
                'job_title' => 'Full Stack Developer',
                'company' => 'WebWorks',
                'location' => 'Remote',
                'job_type' => 'Part-Time',
                'required_skills' => ['Node.js', 'Express', 'React'],
                'experience_level' => 'Intermediate',
            ],
            [
                'job_title' => 'Frontend Developer',
                'company' => 'DesignPro',
                'location' => 'San Francisco',
                'job_type' => 'Contract',
                'required_skills' => ['JavaScript', 'Vue.js', 'CSS'],
                'experience_level' => 'Beginner',
            ],
            [
                'job_title' => 'Backend Developer',
                'company' => 'BuildTech',
                'location' => 'Remote',
                'job_type' => 'Full-Time',
                'required_skills' => ['PHP', 'Laravel', 'MySQL'],
                'experience_level' => 'Advanced',
            ],
            [
                'job_title' => 'Software Engineer',
                'company' => 'SoftSolutions',
                'location' => 'Chicago',
                'job_type' => 'Full-Time',
                'required_skills' => ['Ruby', 'Rails', 'PostgreSQL'],
                'experience_level' => 'Intermediate',
            ],
            [
                'job_title' => 'Cloud Engineer',
                'company' => 'CloudOps',
                'location' => 'Seattle',
                'job_type' => 'Full-Time',
                'required_skills' => ['C#', '.NET', 'Azure'],
                'experience_level' => 'Advanced',
            ],
            [
                'job_title' => 'DevOps Engineer',
                'company' => 'SysAdmin Group',
                'location' => 'Boston',
                'job_type' => 'Full-Time',
                'required_skills' => ['Go', 'Docker', 'Kubernetes'],
                'experience_level' => 'Intermediate',
            ],
            [
                'job_title' => 'iOS Developer',
                'company' => 'Mobile Innovations',
                'location' => 'San Francisco',
                'job_type' => 'Full-Time',
                'required_skills' => ['Swift', 'iOS Development', 'CoreData'],
                'experience_level' => 'Advanced',
            ],
            [
                'job_title' => 'Frontend Engineer',
                'company' => 'Design Plus',
                'location' => 'New York',
                'job_type' => 'Full-Time',
                'required_skills' => ['HTML', 'CSS', 'JavaScript'],
                'experience_level' => 'Beginner',
            ],
        ];

        foreach ($jobs as $job) {
            Job::create($job);
        }
    }
}
