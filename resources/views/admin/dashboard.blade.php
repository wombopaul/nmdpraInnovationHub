@extends('admin.layout')

@section('title', 'Dashboard')
@section('header', 'Dashboard')

@section('content')
<div class="space-y-6">
    <!-- Welcome Card -->
    <div class="bg-white rounded-lg shadow-sm p-6">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold text-gray-900">Welcome to Admin Dashboard</h2>
                <p class="text-gray-600 mt-1">Monitor and manage the Innovation Hub programme</p>
            </div>
            <div class="w-16 h-16 bg-nmdpra-blue rounded-lg flex items-center justify-center">
                <i class="fas fa-chart-line text-white text-2xl"></i>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Innovation Submissions</p>
                    <p class="text-3xl font-bold text-gray-900">20</p>
                    <p class="text-sm text-green-600 mt-1">
                        <i class="fas fa-arrow-up"></i> +23% from last month
                    </p>
                </div>
                <div class="w-12 h-12 bg-nmdpra-orange/10 rounded-lg flex items-center justify-center">
                    <i class="fas fa-file-upload text-nmdpra-orange"></i>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">PLRR Feedback</p>
                    <p class="text-3xl font-bold text-gray-900">247</p>
                    <p class="text-sm text-green-600 mt-1">
                        <i class="fas fa-arrow-up"></i> +12% from last month
                    </p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-users text-blue-600"></i>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Hall of Fame</p>
                    <p class="text-3xl font-bold text-gray-900">10</p>
                    <p class="text-sm text-green-600 mt-1">
                        {{-- <i class="fas fa-arrow-up"></i> +8% from last month --}}
                    </p>
                </div>
                <div class="w-12 h-12 bg-nmdpra-green/10 rounded-lg flex items-center justify-center">
                    <i class="fas fa-project-diagram text-nmdpra-green"></i>
                </div>
            </div>
        </div>



        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Approved Innovations</p>
                    <p class="text-3xl font-bold text-gray-900">12</p>
                    <p class="text-sm text-green-600 mt-1">
                        {{-- <i class="fas fa-arrow-up"></i> +5% from last month --}}
                    </p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-check-circle text-green-600"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts and Tables Row -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Recent Activity -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-900">Recent Activity</h3>
                <a href="#" class="text-nmdpra-blue hover:text-nmdpra-blue/80 text-sm font-medium">View All</a>
            </div>
            <div class="space-y-4">
                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-user-plus text-blue-600 text-sm"></i>
                    </div>
                    <div class="flex-1">
                       <p class="text-sm font-medium text-gray-900">New PLRR Feedback</p>
                        <p class="text-xs text-gray-500">PLRR Feedback Submitted</p>
                    </div>
                    <span class="text-xs text-gray-500">2 min ago</span>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 bg-nmdpra-green/10 rounded-full flex items-center justify-center">
                        <i class="fas fa-file-upload text-nmdpra-green text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-900">New Innovation Submission</p>
                        <p class="text-xs text-gray-500">Smart Pipeline Monitoring System by Musa Sule</p>
                    </div>
                    <span class="text-xs text-gray-500">15 min ago</span>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 bg-nmdpra-orange/10 rounded-full flex items-center justify-center">
                        <i class="fas fa-check text-nmdpra-orange text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-900">Submission approved</p>
                        <p class="text-xs text-gray-500">AI Quality Control System by Eniola Adeyemi</p>
                    </div>
                    <span class="text-xs text-gray-500">1 hour ago</span>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-award text-purple-600 text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-900">Project completed</p>
                        <p class="text-xs text-gray-500">Digital Compliance Framework</p>
                    </div>
                    <span class="text-xs text-gray-500">3 hours ago</span>
                </div>
            </div>
        </div>

        <!-- Project Status -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-900">Innovation Submission Status</h3>
                <a href="{{ route('admin.reports') }}" class="text-nmdpra-blue hover:text-nmdpra-blue/80 text-sm font-medium">View Reports</a>
            </div>
            <div class="space-y-4">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium text-gray-700">In Pilot</span>
                        <span class="text-sm text-gray-500">9</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-nmdpra-blue h-2 rounded-full" style="width: 65%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium text-gray-700">Under Review</span>
                        <span class="text-sm text-gray-500">8</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-nmdpra-orange h-2 rounded-full" style="width: 35%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium text-gray-700">Approved</span>
                        <span class="text-sm text-gray-500">12</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-nmdpra-green h-2 rounded-full" style="width: 90%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium text-gray-700">On Hold</span>
                        <span class="text-sm text-gray-500">0</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-red-500 h-2 rounded-full" style="width: 15%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="bg-white rounded-lg shadow-sm p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-6">Quick Actions</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-4">
            <a href="{{ route('admin.users') }}" class="flex flex-col items-center p-4 border border-gray-200 rounded-lg hover:border-nmdpra-blue hover:bg-nmdpra-blue/5 transition-colors">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-3">
                    <i class="fas fa-user-plus text-blue-600"></i>
                </div>
                <span class="text-sm font-medium text-gray-700">Add PLRR Feedback</span>
            </a>

            <a href="#" class="flex flex-col items-center p-4 border border-gray-200 rounded-lg hover:border-nmdpra-blue hover:bg-nmdpra-blue/5 transition-colors">
                <div class="w-12 h-12 bg-nmdpra-green/10 rounded-lg flex items-center justify-center mb-3">
                    <i class="fas fa-plus text-nmdpra-green"></i>
                </div>
                <span class="text-sm font-medium text-gray-700">New Innovation</span>
            </a>

            <a href="{{ route('admin.reports') }}" class="flex flex-col items-center p-4 border border-gray-200 rounded-lg hover:border-nmdpra-blue hover:bg-nmdpra-blue/5 transition-colors">
                <div class="w-12 h-12 bg-nmdpra-orange/10 rounded-lg flex items-center justify-center mb-3">
                    <i class="fas fa-file-alt text-nmdpra-orange"></i>
                </div>
                <span class="text-sm font-medium text-gray-700">Generate Report</span>
            </a>

            <a href="{{ route('admin.analytics') }}" class="flex flex-col items-center p-4 border border-gray-200 rounded-lg hover:border-nmdpra-blue hover:bg-nmdpra-blue/5 transition-colors">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-3">
                    <i class="fas fa-chart-bar text-purple-600"></i>
                </div>
                <span class="text-sm font-medium text-gray-700">View Analytics</span>
            </a>

            <a href="{{ route('admin.settings') }}" class="flex flex-col items-center p-4 border border-gray-200 rounded-lg hover:border-nmdpra-blue hover:bg-nmdpra-blue/5 transition-colors">
                <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center mb-3">
                    <i class="fas fa-cog text-gray-600"></i>
                </div>
                <span class="text-sm font-medium text-gray-700">Settings</span>
            </a>

            <a href="#" class="flex flex-col items-center p-4 border border-gray-200 rounded-lg hover:border-nmdpra-blue hover:bg-nmdpra-blue/5 transition-colors">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-3">
                    <i class="fas fa-bell text-red-600"></i>
                </div>
                <span class="text-sm font-medium text-gray-700">Send Alert</span>
            </a>
        </div>
    </div>
</div>
@endsection
