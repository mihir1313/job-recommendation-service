<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\User;


class JobsRecommendController extends Controller
{

    public function getRecommendations($userId)
    {
        $response = array();

        if (isset($userId) && $userId != '') {
            // Find the user
            $user = User::findOrFail($userId);

            // Get user skills as an array
            $userSkills = $user->skills->pluck('skill_name')->toArray();

            // Get user experience level and preferences
            $userExperienceLevel = $user->experience_level;
            $userPreferences = $user->preferences;

            // Filter jobs based on user preferences and skills
            $jobs = Job::all()->filter(function ($job) use ($userSkills, $userExperienceLevel, $userPreferences) {

                $requiredSkills = is_array($job->required_skills) ? $job->required_skills : json_decode($job->required_skills, true);

                // Matching experience level && location && job type
                $experienceMatch = $job->experience_level === $userExperienceLevel;
                $locationMatch = in_array($job->location, $userPreferences['locations']);
                $jobTypeMatch = $job->job_type === $userPreferences['job_type'];

                // Count the matching skills
                $skillMatchCount = count(array_intersect($userSkills, $requiredSkills));
                // 50% skill match
                $skillMatchThreshold = count($requiredSkills) * 0.5;

                return $experienceMatch && $locationMatch && $jobTypeMatch && $skillMatchCount >= $skillMatchThreshold;
            });

            if ($jobs->isEmpty()) {
                $response['status'] = 404;
                $response['message'] = "No matching job recommendations found!";
                return response()->json($response, 404);
            }

            $response['status'] = 'success';
            $response['message'] = 'Jobs retrieved successfully';
            $response['data'] = $jobs;
            return response()->json($response);
        } else {
            $response['status'] = 404;
            $response['message'] = "User Id not found!";
            return response()->json($response);
        }
    }
}
