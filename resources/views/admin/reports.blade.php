@extends('admin.layout')

@section('title', 'Reports')
@section('header', 'Reports')

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="bg-white rounded-lg shadow-sm p-6">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold text-gray-900">Reports</h2>
                <p class="text-gray-600 mt-1">Generate and download various reports</p>
            </div>
            <button class="bg-nmdpra-blue text-white px-4 py-2 rounded-lg hover:bg-nmdpra-blue/90 transition-colors">
                <i class="fas fa-plus mr-2"></i>
                Create New Report
            </button>
        </div>
    </div>

    <!-- Quick Report Generation -->
    <div class="bg-white rounded-lg shadow-sm p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-6">Quick Report Generation</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="border border-gray-200 rounded-lg p-4 hover:border-nmdpra-blue transition-colors">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-users text-blue-600"></i>
                </div>
                <h4 class="text-lg font-semibold text-gray-900 mb-2">User Report</h4>
                <p class="text-gray-600 text-sm mb-4">Generate detailed user activity and registration reports</p>
                <button class="w-full bg-nmdpra-blue text-white py-2 rounded-lg hover:bg-nmdpra-blue/90 transition-colors">
                    Generate Report
                </button>
            </div>
            <div class="border border-gray-200 rounded-lg p-4 hover:border-nmdpra-blue transition-colors">
                <div class="w-12 h-12 bg-nmdpra-green/10 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-project-diagram text-nmdpra-green"></i>
                </div>
                <h4 class="text-lg font-semibold text-gray-900 mb-2">Project Report</h4>
                <p class="text-gray-600 text-sm mb-4">Comprehensive project status and progress reports</p>
                <button class="w-full bg-nmdpra-blue text-white py-2 rounded-lg hover:bg-nmdpra-blue/90 transition-colors">
                    Generate Report
                </button>
            </div>
            <div class="border border-gray-200 rounded-lg p-4 hover:border-nmdpra-blue transition-colors">
                <div class="w-12 h-12 bg-nmdpra-orange/10 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-chart-bar text-nmdpra-orange"></i>
                </div>
                <h4 class="text-lg font-semibold text-gray-900 mb-2">Analytics Report</h4>
                <p class="text-gray-600 text-sm mb-4">Performance metrics and usage analytics reports</p>
                <button class="w-full bg-nmdpra-blue text-white py-2 rounded-lg hover:bg-nmdpra-blue/90 transition-colors">
                    Generate Report
                </button>
            </div>
        </div>
    </div>

    <!-- Recent Reports -->
    <div class="bg-white rounded-lg shadow-sm">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-gray-900">Recent Reports</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Report Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">Monthly User Activity</div>
                            <div class="text-sm text-gray-500">January 2026 Report</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">User Report</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            Jan 30, 2026
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Ready</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex items-center space-x-2">
                                <button class="text-nmdpra-blue hover:text-nmdpra-blue/80">Download</button>
                                <button class="text-gray-600 hover:text-gray-800">View</button>
                            </div>
                        </td>
                    </tr>
                    <!-- Add more report rows here -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
