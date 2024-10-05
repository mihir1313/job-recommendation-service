<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Recommendation API Documentation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            background-color: #4CAF50;
            color: white;
            padding: 20px 0;
        }
        .header h1 {
            margin: 0;
        }
        .api-section {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .api-section h2 {
            color: #4CAF50;
        }
        .api-details {
            margin-top: 10px;
            line-height: 1.6;
        }
        .api-details pre {
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }
        .footer {
            text-align: center;
            padding: 20px 0;
            background-color: #333;
            color: white;
            margin-top: 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }
            .api-details pre {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Job Recommendation API</h1>
            <p>Your go-to API for recommending jobs based on user profiles</p>
        </div>

        <!-- API Details Section -->
        <div class="api-section">
            <h2>Get Job Recommendations</h2>
            <p>Use this API to fetch job recommendations based on a user's profile and preferences.</p>
            
            <div class="api-details">
                <h3>API Endpoint:</h3>
                <pre>GET /api/recommendations/userId</pre>

                <h3>Response Example:</h3>
                <pre>
{
    "status": true,
    "message": "Jobs retrieved successfully",
    "data": [
        {
            "id": 1,
            "job_title": "Backend Developer",
            "company": "Tech Solutions Inc.",
            "location": "Remote",
            "job_type": "Full-Time",
            "required_skills": [
                "Python",
                "Django",
                "REST APIs"
            ],
            "experience_level": "Intermediate",
            "created_at": "2024-10-05T15:59:36.000000Z",
            "updated_at": "2024-10-05T15:59:36.000000Z"
        }
    ]
}
                </pre>

                <h3>Response Codes:</h3>
                <ul>
                    <li><strong>200 OK</strong> - Successful response with job recommendations.</li>
                    <li><strong>400 Bad Request</strong> - Missing or invalid parameters.</li>
                    <li><strong>500 Internal Server Error</strong> - Server error while processing the request.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; 2024 Job Recommendation API
    </div>

</body>
</html>
