<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievements</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <h1 class="text-2xl font-bold text-gray-800">My App</h1>
                <div class="flex space-x-4">
                    <a href="/" class="text-gray-600 hover:text-blue-600">Profile</a>
                    <a href="/goal" class="text-gray-600 hover:text-blue-600">Goals</a>
                    <a href="/achievements" class="text-blue-600 font-semibold">Achievements</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-4xl mx-auto mt-8 px-4">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">My Achievements</h2>

            <!-- Achievement Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Achievement 1 -->
                <div class="bg-gradient-to-br from-yellow-100 to-yellow-200 p-6 rounded-lg shadow">
                    <div class="text-center">
                        <div class="text-5xl mb-3">🏆</div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">First Laravel Project</h3>
                        <p class="text-gray-700">Successfully deployed your first web application</p>
                        <p class="text-sm text-gray-600 mt-3">Unlocked: February 2026</p>
                    </div>
                </div>

                <!-- Achievement 2 -->
                <div class="bg-gradient-to-br from-blue-100 to-blue-200 p-6 rounded-lg shadow">
                    <div class="text-center">
                        <div class="text-5xl mb-3">💼</div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">First Client</h3>
                        <p class="text-gray-700">Served your first barber client successfully</p>
                        <p class="text-sm text-gray-600 mt-3">Unlocked: January 2026</p>
                    </div>
                </div>

                <!-- Achievement 3 -->
                <div class="bg-gradient-to-br from-green-100 to-green-200 p-6 rounded-lg shadow">
                    <div class="text-center">
                        <div class="text-5xl mb-3">📚</div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">MVC Master</h3>
                        <p class="text-gray-700">Understood Model-View-Controller pattern</p>
                        <p class="text-sm text-gray-600 mt-3">Unlocked: February 2026</p>
                    </div>
                </div>

                <!-- Achievement 4 -->
                <div class="bg-gradient-to-br from-purple-100 to-purple-200 p-6 rounded-lg shadow">
                    <div class="text-center">
                        <div class="text-5xl mb-3">🎯</div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Goal Setter</h3>
                        <p class="text-gray-700">Created and tracked your first set of goals</p>
                        <p class="text-sm text-gray-600 mt-3">Unlocked: February 2026</p>
                    </div>
                </div>

                <!-- Achievement 5 -->
                <div class="bg-gradient-to-br from-red-100 to-red-200 p-6 rounded-lg shadow">
                    <div class="text-center">
                        <div class="text-5xl mb-3">✂️</div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Barber Pro</h3>
                        <p class="text-gray-700">Completed 40+   successful haircuts</p>
                        <p class="text-sm text-gray-600 mt-3">Unlocked: January 2026</p>
                    </div>
                </div>

                <!-- Achievement 6 -->
                <div class="bg-gradient-to-br from-pink-100 to-pink-200 p-6 rounded-lg shadow">
                    <div class="text-center">
                        <div class="text-5xl mb-3">🚀</div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Quick Learner</h3>
                        <p class="text-gray-700">Completed Laravel basics in record time</p>
                        <p class="text-sm text-gray-600 mt-3">Unlocked: February 2026</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
