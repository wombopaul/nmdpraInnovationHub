@extends('admin.layout')

@section('title', 'Innovation Management')
@section('header', 'Innovation Management')

@section('content')
<div class="space-y-6">
    <!-- Success Message -->
    @if(session('success'))
        <div class="bg-green-50 border border-green-200 rounded-lg p-4">
            <div class="flex items-center">
                <i class="fas fa-check-circle text-green-600 mr-3"></i>
                <div class="text-green-800">
                    <p class="font-medium">Innovation Submitted Successfully</p>
                    <p class="text-sm mt-1">{{ session('success') }}</p>
                </div>
            </div>
        </div>
    @endif

    <!-- Page Header -->
    <div class="bg-white rounded-lg shadow-sm p-6">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold text-gray-900">Innovation Management</h2>
                <p class="text-gray-600 mt-1">Track and manage innovation submissions across NMDPRA</p>
            </div>
            <a href="{{ route('admin.innovations.create') }}" class="bg-nmdpra-blue text-white px-4 py-2 rounded-lg hover:bg-nmdpra-blue/90 transition-colors">
                <i class="fas fa-plus mr-2"></i>
                Submit Innovation
            </a>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Total Innovations</p>
                    <p class="text-3xl font-bold text-gray-900">{{ count($innovations) }}</p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-lightbulb text-blue-600"></i>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Implemented</p>
                    <p class="text-3xl font-bold text-gray-900">{{ collect($innovations)->where('status', 'Implemented')->count() }}</p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-check-circle text-green-600"></i>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">In Progress</p>
                    <p class="text-3xl font-bold text-gray-900">{{ collect($innovations)->where('status', 'In Progress')->count() }}</p>
                </div>
                <div class="w-12 h-12 bg-nmdpra-blue/10 rounded-lg flex items-center justify-center">
                    <i class="fas fa-cogs text-nmdpra-blue"></i>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Under Review</p>
                    <p class="text-3xl font-bold text-gray-900">{{ collect($innovations)->where('status', 'Under Review')->count() }}</p>
                </div>
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                    <i class="fas fa-clock text-yellow-600"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="bg-white rounded-lg shadow-sm p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Quick Actions</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-4">
            <a href="{{ route('admin.innovations.create') }}" class="flex flex-col items-center p-4 border border-gray-200 rounded-lg hover:border-nmdpra-blue hover:bg-nmdpra-blue/5 transition-colors">
                <div class="w-12 h-12 bg-nmdpra-blue/10 rounded-lg flex items-center justify-center mb-3">
                    <i class="fas fa-plus text-nmdpra-blue"></i>
                </div>
                <span class="text-sm font-medium text-gray-700">New Innovation</span>
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
                    <i class="fas fa-trophy text-yellow-600"></i>
                </div>
                <span class="text-sm font-medium text-gray-700">Awards</span>
            </button>

            <button class="flex flex-col items-center p-4 border border-gray-200 rounded-lg hover:border-nmdpra-blue hover:bg-nmdpra-blue/5 transition-colors">
                <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center mb-3">
                    <i class="fas fa-cog text-gray-600"></i>
                </div>
                <span class="text-sm font-medium text-gray-700">Settings</span>
            </button>
        </div>
    </div>

    <!-- Innovation Submissions Table -->
    <div class="bg-white rounded-lg shadow-sm">
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold text-gray-900">Innovation Submissions</h3>
                <div class="flex items-center space-x-4">
                    <input type="text" placeholder="Search innovations..." class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-nmdpra-blue">
                    <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-nmdpra-blue">
                        <option>All Status</option>
                        <option>Implemented</option>
                        <option>In Progress</option>
                        <option>Under Review</option>
                        <option>Pilot Stage</option>
                    </select>
                    <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-nmdpra-blue">
                        <option>All Categories</option>
                        <option>Process Automation</option>
                        <option>Data Analytics</option>
                        <option>Mobile Technology</option>
                        <option>Communication</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Innovation</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Directorate</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Dates</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Priority</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($innovations as $innovation)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div>
                                <div class="text-sm font-medium text-gray-900">{{ $innovation['title'] }}</div>
                                <div class="text-sm text-gray-500">{{ Str::limit($innovation['description'], 60) }}</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                @if($innovation['category'] === 'Process Automation') bg-blue-100 text-blue-800
                                @elseif($innovation['category'] === 'Data Analytics') bg-green-100 text-green-800
                                @elseif($innovation['category'] === 'Mobile Technology') bg-purple-100 text-purple-800
                                @else bg-gray-100 text-gray-800 @endif">
                                {{ $innovation['category'] }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div>
                                <div class="text-sm font-medium text-gray-900">{{ $innovation['directorate'] }}</div>
                                <div class="text-sm text-gray-500">{{ $innovation['processing_role'] }}</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <div>
                                <div class="font-medium">Submitted: {{ \Carbon\Carbon::parse($innovation['submission_date'])->format('M d, Y') }}</div>
                                @if($innovation['implementation_date'])
                                    <div>Implemented: {{ \Carbon\Carbon::parse($innovation['implementation_date'])->format('M d, Y') }}</div>
                                @else
                                    <div class="text-gray-400">Not yet implemented</div>
                                @endif
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                @if($innovation['priority'] === 'High') bg-red-100 text-red-800
                                @elseif($innovation['priority'] === 'Medium') bg-yellow-100 text-yellow-800
                                @else bg-gray-100 text-gray-800 @endif">
                                {{ $innovation['priority'] }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                @if($innovation['status'] === 'Implemented') bg-green-100 text-green-800
                                @elseif($innovation['status'] === 'In Progress') bg-blue-100 text-blue-800
                                @elseif($innovation['status'] === 'Pilot Stage') bg-purple-100 text-purple-800
                                @else bg-yellow-100 text-yellow-800 @endif">
                                {{ $innovation['status'] }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex items-center space-x-2">
                                <a href="{{ route('admin.innovations.view', $innovation['id']) }}" class="text-nmdpra-blue hover:text-nmdpra-blue/80" title="View Details">
                                    <i class="fas fa-eye"></i>
                                </a>
                                @if($innovation['status'] !== 'Implemented')
                                <button class="text-green-600 hover:text-green-800" title="Mark as Implemented">
                                    <i class="fas fa-check"></i>
                                </button>
                                @endif
                                <button class="text-yellow-600 hover:text-yellow-800" title="Award Recognition">
                                    <i class="fas fa-trophy"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-800" title="Archive">
                                    <i class="fas fa-archive"></i>
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
                        Showing <span class="font-medium">1</span> to <span class="font-medium">{{ count($innovations) }}</span> of <span class="font-medium">{{ count($innovations) }}</span> results
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

    <!-- Recent Activity and Insights -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-900">Recent Innovation Activity</h3>
                <a href="#" class="text-nmdpra-blue hover:text-nmdpra-blue/80 text-sm font-medium">View All</a>
            </div>
            <div class="space-y-4">
                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-check text-green-600 text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-900">Digital Licensing Portal implemented</p>
                        <p class="text-xs text-gray-500">Successfully deployed across all directorates</p>
                    </div>
                    <span class="text-xs text-gray-500">2 hours ago</span>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-lightbulb text-blue-600 text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-900">New innovation submitted</p>
                        <p class="text-xs text-gray-500">AI-powered document analysis system</p>
                    </div>
                    <span class="text-xs text-gray-500">1 day ago</span>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-trophy text-yellow-600 text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-900">Innovation award granted</p>
                        <p class="text-xs text-gray-500">Mobile Inspection App wins efficiency award</p>
                    </div>
                    <span class="text-xs text-gray-500">3 days ago</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-900">Innovation Insights</h3>
                <a href="{{ route('admin.analytics') }}" class="text-nmdpra-blue hover:text-nmdpra-blue/80 text-sm font-medium">View Analytics</a>
            </div>
            <div class="space-y-4">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium text-gray-700">Implementation Rate</span>
                        <span class="text-sm text-gray-500">{{ round(collect($innovations)->where('status', 'Implemented')->count() / count($innovations) * 100) }}% completed</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-nmdpra-green h-2 rounded-full" style="width: {{ round(collect($innovations)->where('status', 'Implemented')->count() / count($innovations) * 100) }}%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium text-gray-700">High Priority Items</span>
                        <span class="text-sm text-gray-500">{{ collect($innovations)->where('priority', 'High')->count() }} active</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-red-500 h-2 rounded-full" style="width: {{ round(collect($innovations)->where('priority', 'High')->count() / count($innovations) * 100) }}%"></div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-sm font-medium text-gray-700">Process Automation</span>
                        <span class="text-sm text-gray-500">{{ collect($innovations)->where('category', 'Process Automation')->count() }} innovations</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="bg-nmdpra-blue h-2 rounded-full" style="width: {{ round(collect($innovations)->where('category', 'Process Automation')->count() / count($innovations) * 100) }}%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection