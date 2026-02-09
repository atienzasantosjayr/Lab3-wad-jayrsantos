<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <h1 class="text-2xl font-bold text-gray-800">Jay R Santos Portfolio</h1>
                <div class="flex space-x-4">
                    <a href="/" class="text-blue-600 font-semibold">Profile</a>
                    <a href="/goal" class="text-gray-600 hover:text-blue-600">Goals</a>
                    <a href="/achievements" class="text-gray-600 hover:text-blue-600">Achievements</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-4xl mx-auto mt-8 px-4">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <!-- Profile Header -->
            <div class="flex items-center space-x-6 mb-8">
                <div class="w-24 h-24 bg-blue-500 rounded-full flex items-center justify-center">
                    <span class="text-4xl text-white font-bold">JR</span>
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-800">Jay R Santos</h2>
                    <p class="text-gray-600">Student</p>
                </div>
            </div>

            <!-- Profile Info -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Email</h3>
                    <p class="text-gray-600">jayrsantos@student.laverdad.edu.php</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Location</h3>
                    <p class="text-gray-600">Pampanga, Philippines</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">School Year</h3>
                    <p class="text-gray-600">2024-2026</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Status</h3>
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Active</span>
                </div>
            </div>

            <!-- Bio Section -->
            <div class="mt-8">
                <h3 class="text-lg font-semibold text-gray-700 mb-2">About Me</h3>
                <p class="text-gray-600">
                    I'm a college student studying ACT at LVCC. I love coding, barbering, 
                    and building web applications with Laravel.
                </p>
            </div>
        </div>
    </div>
</body>
</html>
