@extends('admin.layout')

@section('title', 'PLRR Feedback Management')
@section('header', 'Post-Licence Regulatory Review (PLRR) Feedback')

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="bg-white rounded-lg shadow-sm p-6">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold text-gray-900">PLRR Feedback Management</h2>
                <p class="text-gray-600 mt-1">Monitor and manage post-licence regulatory review submissions</p>
            </div>
            <a href="{{ route('admin.plrr.feedback') }}" class="bg-nmdpra-blue text-white px-4 py-2 rounded-lg hover:bg-nmdpra-blue/90 transition-colors">
                <i class="fas fa-plus mr-2"></i>
                Submit New PLRR
            </a>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Total Submissions</p>
                    <p class="text-3xl font-bold text-gray-900">{{ count($plrrSubmissions) }}</p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-file-alt text-blue-600"></i>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Under Review</p>
                    <p class="text-3xl font-bold text-gray-900">{{ collect($plrrSubmissions)->where('status', 'Under Review')->count() }}</p>
                </div>
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-clock text-yellow-600"></i>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Reviewed</p>
                    <p class="text-3xl font-bold text-gray-900">{{ collect($plrrSubmissions)->where('status', 'Reviewed')->count() }}</p>
                </div>
                <div class="w-12 h-12 bg-nmdpra-green/10 rounded-lg flex items-center justify-center">
                    <i class="fas fa-check-circle text-nmdpra-green"></i>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Action Taken</p>
                    <p class="text-3xl font-bold text-gray-900">{{ collect($plrrSubmissions)->where('status', 'Action Taken')->count() }}</p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-check text-green-600"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="bg-white rounded-lg shadow-sm p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Quick Actions</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-4">
            <a href="{{ route('admin.plrr.feedback') }}" class="flex flex-col items-center p-4 border border-gray-200 rounded-lg hover:border-nmdpra-blue hover:bg-nmdpra-blue/5 transition-colors">
                <div class="w-12 h-12 bg-nmdpra-blue/10 rounded-lg flex items-center justify-center mb-3">
                    <i class="fas fa-plus text-nmdpra-blue"></i>
                </div>
                <span class="text-sm font-medium text-gray-700">New PLRR</span>
            </a>

            <button class="flex flex-col items-center p-4 border border-gray-200 rounded-lg hover:border-nmdpra-blue hover:bg-nmdpra-blue/5 transition-colors">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-3">
                    <i class="fas fa-download text-blue-600"></i>
                </div>
                <span class="text-sm font-medium text-gray-700">Export Data</span>
            </button>

            <button class="flex flex-col items-center p-4 border border-gray-200 rounded-lg hover:border-nmdpra-blue hover:bg-nmdpra-blue/5 transition-colors">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-3">
                    <i class="fas fa-chart-bar text-green-600"></i>
                </div>
                <span class="text-sm font-medium text-gray-700">Analytics</span>
            </button>

            <button class="flex flex-col items-center p-4 border border-gray-200 rounded-lg hover:border-nmdpra-blue hover:bg-nmdpra-blue/5 transition-colors">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-3">
                    <i class="fas fa-filter text-purple-600"></i>
                </div>
                <span class="text-sm font-medium text-gray-700">Filter</span>
            </button>

            <button class="flex flex-col items-center p-4 border border-gray-200 rounded-lg hover:border-nmdpra-blue hover:bg-nmdpra-blue/5 transition-colors">
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mb-3">
                    <i class="fas fa-bell text-yellow-600"></i>
                </div>
                <span class="text-sm font-medium text-gray-700">Notifications</span>
            </button>

            <button class="flex flex-col items-center p-4 border border-gray-200 rounded-lg hover:border-nmdpra-blue hover:bg-nmdpra-blue/5 transition-colors">
                <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center mb-3">
                    <i class="fas fa-cog text-gray-600"></i>
                </div>
                <span class="text-sm font-medium text-gray-700">Settings</span>
            </button>
        </div>
    </div>

    <!-- PLRR Submissions Table -->
    <div class="bg-white rounded-lg shadow-sm">
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold text-gray-900">Recent PLRR Submissions</h3>
                <div class="flex items-center space-x-4">
                    <input type="text" placeholder="Search submissions..." class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-nmdpra-blue">
                    <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-nmdpra-blue">
                        <option>All Status</option>
                        <option>Under Review</option>
                        <option>Reviewed</option>
                        <option>Action Taken</option>
                    </select>
                    <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-nmdpra-blue">
                        <option>All Licence Types</option>
                        <option>GDL</option>
                        <option>GTPL</option>
                        <option>Facility</option>
                        <option>Permit</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Licence Info</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role & Directorate</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Dates</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Priority</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($plrrSubmissions as $submission)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div>
                                <div class="text-sm font-medium text-gray-900">{{ $submission['licence_reference'] }}</div>
                                <div class="text-sm text-gray-500">
                                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full
                                        @if($submission['licence_type'] === 'GDL') bg-blue-100 text-blue-800
                                        @elseif($submission['licence_type'] === 'GTPL') bg-green-100 text-green-800
                                        @elseif($submission['licence_type'] === 'Facility') bg-purple-100 text-purple-800
                                        @else bg-gray-100 text-gray-800 @endif">
                                        {{ $submission['licence_type'] }}
                                    </span>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div>
                                <div class="text-sm font-medium text-gray-900">{{ $submission['processing_role'] }}</div>
                                <div class="text-sm text-gray-500">{{ $submission['directorate'] }}</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <div>
                                <div class="font-medium">Submitted: {{ \Carbon\Carbon::parse($submission['submission_date'])->format('M d, Y') }}</div>
                                <div>Issued: {{ \Carbon\Carbon::parse($submission['licence_issuance_date'])->format('M d, Y') }}</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full
                                @if($submission['priority'] === 'High') bg-red-100 text-red-800
                                @elseif($submission['priority'] === 'Medium') bg-yellow-100 text-yellow-800
                                @else bg-gray-100 text-gray-800 @endif">
                                {{ $submission['priority'] }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full
                                @if($submission['status'] === 'Action Taken') bg-green-100 text-green-800
                                @elseif($submission['status'] === 'Reviewed') bg-blue-100 text-blue-800
                                @else bg-yellow-100 text-yellow-800 @endif">
                                {{ $submission['status'] }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex items-center space-x-2">
                                <a href="{{ route('admin.plrr.view', $submission['id']) }}" class="text-nmdpra-blue hover:text-nmdpra-blue/80" title="View Details">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <button class="text-green-600 hover:text-green-800" title="Mark as Reviewed">
                                    <i class="fas fa-check"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-800" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <p class="text-sm text-gray-700">
                        Showing <span class="font-medium">1</span> to <span class="font-medium">{{ count($plrrSubmissions) }}</span> of <span class="font-medium">{{ count($plrrSubmissions) }}</span> results
                    </p>
                </div>
                <div class="flex items-center space-x-2">
                    <button class="px-3 py-1 border border-gray-300 rounded text-sm text-gray-500 bg-white hover:bg-gray-50">
                        Previous
                    </button>
                    <button class="px-3 py-1 border border-nmdpra-blue bg-nmdpra-blue text-white rounded text-sm">
                        1
                    </button>
                    <button class="px-3 py-1 border border-gray-300 rounded text-sm text-gray-500 bg-white hover:bg-gray-50">
                        Next
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-900">Recent Activity</h3>
                <a href="#" class="text-nmdpra-blue hover:text-nmdpra-blue/80 text-sm font-medium">View All</a>
            </div>
            <div class="space-y-4">
                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-check text-green-600 text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-900">PLRR submitted for GDL/2024/001</p>
                        <p class="text-xs text-gray-500">Technical feedback by John Adebayo</p>
                    </div>
                    <span class="text-xs text-gray-500">2 min ago</span>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-eye text-blue-600 text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-900">PLRR reviewed for GTPL/2024/015</p>
                        <p class="text-xs text-gray-500">Status updated to Reviewed</p>
                    </div>
                    <span class="text-xs text-gray-500">15 min ago</span>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 bg-nmdpra-orange/10 rounded-full flex items-center justify-center">
                        <i class="fas fa-exclamation text-nmdpra-orange text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-900">High priority PLRR pending review</p>
                        <p class="text-xs text-gray-500">GTPL/2024/015 requires attention</p>
                    </div>
                    <span class="text-xs text-gray-500">1 hour ago</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-900">PLRR Insights</h3>
                <a href="{{ route('admin.analytics') }}" class="text-nmdpra-blue hover:text-nmdpra-blue/80 text-sm font-medium">View Analytics</a>
            </div>
            <div class="space-y-4">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium text-gray-700">Submission Rate</span>
                        <span class="text-sm text-gray-500">85% on time</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-nmdpra-green h-2 rounded-full" style="width: 85%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium text-gray-700">Review Completion</span>
                        <span class="text-sm text-gray-500">72% completed</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-nmdpra-blue h-2 rounded-full" style="width: 72%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium text-gray-700">Process Improvements</span>
                        <span class="text-sm text-gray-500">12 implemented</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-nmdpra-orange h-2 rounded-full" style="width: 60%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
