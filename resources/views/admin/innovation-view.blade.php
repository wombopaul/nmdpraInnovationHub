@extends('admin.layout')

@section('title', 'Innovation Details')
@section('header', 'Innovation Details')

@section('content')
<div class="space-y-6">
    <!-- Header Section -->
    <div class="bg-white rounded-lg shadow-sm p-6">
        <div class="flex items-center justify-between mb-4">
            <a href="{{ route('admin.innovations.index') }}" class="text-gray-600 hover:text-gray-800 inline-flex items-center">
                <i class="fas fa-arrow-left mr-2"></i>
                Back to Innovations List
            </a>
            <div class="flex space-x-3">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium
                    {{ $innovation['status'] === 'Under Review' ? 'bg-yellow-100 text-yellow-800' : '' }}
                    {{ $innovation['status'] === 'Approved' ? 'bg-green-100 text-green-800' : '' }}
                    {{ $innovation['status'] === 'In Development' ? 'bg-blue-100 text-blue-800' : '' }}
                    {{ $innovation['status'] === 'Implemented' ? 'bg-purple-100 text-purple-800' : '' }}
                    {{ $innovation['status'] === 'On Hold' ? 'bg-gray-100 text-gray-800' : '' }}
                    {{ $innovation['status'] === 'Rejected' ? 'bg-red-100 text-red-800' : '' }}">
                    {{ $innovation['status'] }}
                </span>
            </div>
        </div>

        <div class="border-l-4 border-nmdpra-blue pl-4">
            <h1 class="text-2xl font-bold text-gray-900 mb-2">{{ $innovation['title'] }}</h1>
            <div class="flex flex-wrap items-center text-sm text-gray-600 space-x-4">
                <span class="inline-flex items-center">
                    <i class="fas fa-tag mr-2"></i>
                    {{ $innovation['category'] }}
                </span>
                <span class="inline-flex items-center">
                    <i class="fas fa-building mr-2"></i>
                    {{ $innovation['directorate'] }}
                </span>
                <span class="inline-flex items-center">
                    <i class="fas fa-calendar mr-2"></i>
                    {{ $innovation['created_at'] }}
                </span>
                <span class="inline-flex items-center">
                    <i class="fas fa-chart-line mr-2"></i>
                    {{ ucfirst($innovation['complexity']) }} Complexity
                </span>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Innovation Overview -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                    <i class="fas fa-lightbulb mr-3 text-nmdpra-blue"></i>
                    Innovation Overview
                </h2>
                <div class="prose max-w-none">
                    <p class="text-gray-700">{{ $innovation['description'] }}</p>
                </div>
            </div>

            <!-- Problem & Solution -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-6 flex items-center">
                    <i class="fas fa-puzzle-piece mr-3 text-nmdpra-blue"></i>
                    Problem & Solution
                </h2>

                <div class="space-y-6">
                    <div>
                        <h3 class="text-sm font-medium text-gray-900 mb-2">Current Challenges</h3>
                        <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                            <p class="text-gray-700">{{ $innovation['current_challenges'] }}</p>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-sm font-medium text-gray-900 mb-2">Proposed Solution</h3>
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                            <p class="text-gray-700">{{ $innovation['proposed_solution'] }}</p>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-sm font-medium text-gray-900 mb-2">Expected Impact</h3>
                        <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                            <p class="text-gray-700">{{ $innovation['expected_impact'] }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Implementation Details -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-6 flex items-center">
                    <i class="fas fa-cogs mr-3 text-nmdpra-blue"></i>
                    Implementation Details
                </h2>

                <div class="space-y-6">
                    <div>
                        <h3 class="text-sm font-medium text-gray-900 mb-2">Implementation Timeline</h3>
                        <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
                            <p class="text-gray-700">{{ $innovation['implementation_timeline'] }}</p>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-sm font-medium text-gray-900 mb-2">Required Resources</h3>
                        <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
                            <p class="text-gray-700">{{ $innovation['required_resources'] }}</p>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-sm font-medium text-gray-900 mb-2">Success Metrics</h3>
                        <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
                            <p class="text-gray-700">{{ $innovation['success_metrics'] }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Risk Assessment -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-6 flex items-center">
                    <i class="fas fa-shield-alt mr-3 text-nmdpra-blue"></i>
                    Risk Assessment
                </h2>

                <div class="space-y-6">
                    <div>
                        <h3 class="text-sm font-medium text-gray-900 mb-2">Risk Assessment & Mitigation</h3>
                        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                            <p class="text-gray-700">{{ $innovation['risk_assessment'] }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-sm font-medium text-gray-900 mb-2">Implementation Complexity</h3>
                            <div class="flex items-center">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium
                                    {{ $innovation['complexity'] === 'low' ? 'bg-green-100 text-green-800' : '' }}
                                    {{ $innovation['complexity'] === 'medium' ? 'bg-yellow-100 text-yellow-800' : '' }}
                                    {{ $innovation['complexity'] === 'high' ? 'bg-red-100 text-red-800' : '' }}">
                                    {{ ucfirst($innovation['complexity']) }} Complexity
                                </span>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-sm font-medium text-gray-900 mb-2">Stakeholder Impact</h3>
                            <div class="space-y-1">
                                @foreach($innovation['stakeholder_impact'] as $impact)
                                    <span class="inline-block bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs mr-1">
                                        {{ str_replace('_', ' ', ucwords($impact, '_')) }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if($innovation['supporting_docs'] || $innovation['additional_comments'])
            <!-- Additional Information -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-6 flex items-center">
                    <i class="fas fa-info-circle mr-3 text-nmdpra-blue"></i>
                    Additional Information
                </h2>

                <div class="space-y-4">
                    @if($innovation['supporting_docs'])
                        <div>
                            <h3 class="text-sm font-medium text-gray-900 mb-2">Supporting Documentation</h3>
                            <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
                                <p class="text-gray-700">{{ $innovation['supporting_docs'] }}</p>
                            </div>
                        </div>
                    @endif

                    @if($innovation['additional_comments'])
                        <div>
                            <h3 class="text-sm font-medium text-gray-900 mb-2">Additional Comments</h3>
                            <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
                                <p class="text-gray-700">{{ $innovation['additional_comments'] }}</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            @endif
        </div>

        <!-- Sidebar Actions -->
        <div class="space-y-6">
            <!-- Quick Actions -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Quick Actions</h3>
                <div class="space-y-3">
                    <button class="w-full bg-nmdpra-blue text-white px-4 py-2 rounded-lg hover:bg-nmdpra-blue/90 transition-colors text-sm">
                        <i class="fas fa-edit mr-2"></i>
                        Edit Innovation
                    </button>

                    <div class="relative">
                        <button onclick="toggleStatusDropdown()" class="w-full bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition-colors text-sm">
                            <i class="fas fa-exchange-alt mr-2"></i>
                            Change Status
                        </button>
                        <div id="statusDropdown" class="hidden absolute top-full left-0 right-0 mt-1 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Under Review</a>
                            <a href="#" class="block px-4 py-2 text-sm text-green-600 hover:bg-gray-100">Approved</a>
                            <a href="#" class="block px-4 py-2 text-sm text-blue-600 hover:bg-gray-100">In Development</a>
                            <a href="#" class="block px-4 py-2 text-sm text-purple-600 hover:bg-gray-100">Implemented</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-100">On Hold</a>
                            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Rejected</a>
                        </div>
                    </div>

                    <button class="w-full bg-green-100 text-green-700 px-4 py-2 rounded-lg hover:bg-green-200 transition-colors text-sm">
                        <i class="fas fa-comment mr-2"></i>
                        Add Comment
                    </button>

                    <button class="w-full bg-blue-100 text-blue-700 px-4 py-2 rounded-lg hover:bg-blue-200 transition-colors text-sm">
                        <i class="fas fa-download mr-2"></i>
                        Export Details
                    </button>
                </div>
            </div>

            <!-- Innovation Statistics -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Innovation Statistics</h3>
                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Submission ID:</span>
                        <span class="text-sm font-medium text-gray-900">#{{ $innovation['id'] }}</span>
                    </div>

                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Processing Role:</span>
                        <span class="text-sm font-medium text-gray-900">{{ $innovation['processing_role'] }}</span>
                    </div>

                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Priority Level:</span>
                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium
                            {{ $innovation['priority'] === 'High' ? 'bg-red-100 text-red-800' : '' }}
                            {{ $innovation['priority'] === 'Medium' ? 'bg-yellow-100 text-yellow-800' : '' }}
                            {{ $innovation['priority'] === 'Low' ? 'bg-green-100 text-green-800' : '' }}">
                            {{ $innovation['priority'] }}
                        </span>
                    </div>

                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Impact Score:</span>
                        <div class="flex items-center">
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= $innovation['impact_score'])
                                    <i class="fas fa-star text-yellow-400"></i>
                                @else
                                    <i class="far fa-star text-gray-300"></i>
                                @endif
                            @endfor
                        </div>
                    </div>
                </div>
            </div>

            <!-- Activity Timeline -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Activity Timeline</h3>
                <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0 w-2 h-2 bg-blue-600 rounded-full mt-2"></div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Innovation Submitted</p>
                            <p class="text-xs text-gray-500">{{ $innovation['created_at'] }}</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0 w-2 h-2 bg-yellow-600 rounded-full mt-2"></div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Review Started</p>
                            <p class="text-xs text-gray-500">2 days ago</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0 w-2 h-2 bg-green-600 rounded-full mt-2"></div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Technical Review Completed</p>
                            <p class="text-xs text-gray-500">1 day ago</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0 w-2 h-2 bg-gray-300 rounded-full mt-2"></div>
                        <div>
                            <p class="text-sm text-gray-600">Pending Management Approval</p>
                            <p class="text-xs text-gray-400">In progress</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Innovations -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Related Innovations</h3>
                <div class="space-y-3">
                    <div class="border border-gray-200 rounded-lg p-3 hover:bg-gray-50 cursor-pointer">
                        <p class="text-sm font-medium text-gray-900">Digital License Processing</p>
                        <p class="text-xs text-gray-500">Process Automation • Approved</p>
                    </div>

                    <div class="border border-gray-200 rounded-lg p-3 hover:bg-gray-50 cursor-pointer">
                        <p class="text-sm font-medium text-gray-900">Mobile App for Stakeholders</p>
                        <p class="text-xs text-gray-500">Mobile Technology • In Development</p>
                    </div>

                    <div class="border border-gray-200 rounded-lg p-3 hover:bg-gray-50 cursor-pointer">
                        <p class="text-sm font-medium text-gray-900">AI-Powered Document Review</p>
                        <p class="text-xs text-gray-500">AI/ML • Under Review</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function toggleStatusDropdown() {
    const dropdown = document.getElementById('statusDropdown');
    dropdown.classList.toggle('hidden');
}

// Close dropdown when clicking outside
document.addEventListener('click', function(event) {
    const dropdown = document.getElementById('statusDropdown');
    const button = event.target.closest('button');
    if (!button || button.onclick !== toggleStatusDropdown) {
        dropdown.classList.add('hidden');
    }
});
</script>
@endsection
