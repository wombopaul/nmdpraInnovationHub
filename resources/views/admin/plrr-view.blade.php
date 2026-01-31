@extends('admin.layout')

@section('title', 'PLRR Details')
@section('header', 'PLRR Submission Details')

@section('content')
<div class="space-y-6">
    <!-- Header with Actions -->
    <div class="bg-white rounded-lg shadow-sm p-6">
        <div class="flex items-center justify-between">
            <div>
                <div class="flex items-center space-x-3">
                    <a href="{{ route('admin.plrr.index') }}" class="text-gray-600 hover:text-gray-800">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Back to PLRR List
                    </a>
                </div>
                <h1 class="text-2xl font-bold text-gray-900 mt-2">PLRR Submission #{{ $submission['id'] }}</h1>
                <p class="text-gray-600 mt-1">Licence Reference: {{ $submission['licence_reference'] }}</p>
            </div>
            <div class="flex items-center space-x-3">
                <span class="inline-flex px-3 py-1 text-sm font-semibold rounded-full
                    @if($submission['status'] === 'Action Taken') bg-green-100 text-green-800
                    @elseif($submission['status'] === 'Reviewed') bg-blue-100 text-blue-800
                    @else bg-yellow-100 text-yellow-800 @endif">
                    {{ $submission['status'] }}
                </span>
                <span class="inline-flex px-3 py-1 text-sm font-semibold rounded-full
                    @if($submission['priority'] === 'High') bg-red-100 text-red-800
                    @elseif($submission['priority'] === 'Medium') bg-yellow-100 text-yellow-800
                    @else bg-gray-100 text-gray-800 @endif">
                    {{ $submission['priority'] }} Priority
                </span>
            </div>
        </div>
    </div>

    <!-- Submission Overview -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2 space-y-6">
            <!-- Section 1: Licence Context -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                    <span class="bg-nmdpra-blue text-white rounded-full w-8 h-8 flex items-center justify-center text-sm mr-3">1</span>
                    Licence Context
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Licence Type</label>
                        <p class="text-gray-900">{{ $submission['licence_type'] }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Licence Reference</label>
                        <p class="text-gray-900">{{ $submission['licence_reference'] }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Processing Role</label>
                        <p class="text-gray-900">{{ $submission['processing_role'] }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Directorate</label>
                        <p class="text-gray-900">{{ $submission['directorate'] }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Date of Licence Issuance</label>
                        <p class="text-gray-900">{{ \Carbon\Carbon::parse($submission['licence_issuance_date'])->format('F j, Y') }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Submission Date</label>
                        <p class="text-gray-900">{{ \Carbon\Carbon::parse($submission['submission_date'])->format('F j, Y') }}</p>
                    </div>
                </div>
            </div>

            <!-- Section 2: Process Effectiveness -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                    <span class="bg-nmdpra-blue text-white rounded-full w-8 h-8 flex items-center justify-center text-sm mr-3">2</span>
                    Process Effectiveness
                </h2>
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-900 mb-2">What worked well in this licensing process?</label>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="text-gray-800">{{ $submission['what_worked_well'] }}</p>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-900 mb-2">Process delays or friction points:</label>
                        <div class="space-y-2">
                            @if(in_array('inter_directorate_handoff', $submission['process_delays']))
                                <span class="inline-flex px-3 py-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">Inter-directorate hand-off</span>
                            @endif
                            @if(in_array('data_documentation_gaps', $submission['process_delays']))
                                <span class="inline-flex px-3 py-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">Data or documentation gaps</span>
                            @endif
                            @if(in_array('approval_sequencing', $submission['process_delays']))
                                <span class="inline-flex px-3 py-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">Approval sequencing</span>
                            @endif
                            @if(in_array('external_stakeholder_issues', $submission['process_delays']))
                                <span class="inline-flex px-3 py-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">External stakeholder issues</span>
                            @endif
                            @if(isset($submission['process_delays_other']) && $submission['process_delays_other'])
                                <span class="inline-flex px-3 py-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">Other: {{ $submission['process_delays_other'] }}</span>
                            @endif
                            @if(empty($submission['process_delays']))
                                <p class="text-gray-500 italic">No process delays reported</p>
                            @endif
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-900 mb-2">Were roles, mandates, and decision points clear?</label>
                        <div class="flex items-center space-x-4 mb-2">
                            <span class="inline-flex px-3 py-1 text-sm font-medium rounded-full
                                @if($submission['roles_clear'] === 'yes') bg-green-100 text-green-800
                                @elseif($submission['roles_clear'] === 'partially') bg-yellow-100 text-yellow-800
                                @else bg-red-100 text-red-800 @endif">
                                {{ ucfirst($submission['roles_clear']) }}
                            </span>
                        </div>
                        @if(isset($submission['roles_clear_explanation']) && $submission['roles_clear_explanation'])
                            <div class="bg-gray-50 rounded-lg p-4">
                                <p class="text-gray-800">{{ $submission['roles_clear_explanation'] }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Section 3: Regulatory Quality & Risk Signals -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                    <span class="bg-nmdpra-blue text-white rounded-full w-8 h-8 flex items-center justify-center text-sm mr-3">3</span>
                    Regulatory Quality & Risk Signals
                </h2>
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-900 mb-2">Regulatory risks observed:</label>
                        <span class="inline-flex px-3 py-1 text-sm font-medium rounded-full
                            @if($submission['regulatory_risks_observed'] === 'yes') bg-red-100 text-red-800
                            @else bg-green-100 text-green-800 @endif">
                            {{ ucfirst($submission['regulatory_risks_observed']) }}
                        </span>

                        @if($submission['regulatory_risks_observed'] === 'yes' && isset($submission['risk_types']))
                            <div class="mt-4 space-y-2">
                                <p class="text-sm font-medium text-gray-700">Risk types identified:</p>
                                @if(in_array('legal_interpretation', $submission['risk_types']))
                                    <span class="inline-flex px-3 py-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">Legal interpretation risk</span>
                                @endif
                                @if(in_array('policy_overlap', $submission['risk_types']))
                                    <span class="inline-flex px-3 py-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">Policy overlap / mandate ambiguity</span>
                                @endif
                                @if(in_array('operational_feasibility', $submission['risk_types']))
                                    <span class="inline-flex px-3 py-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">Operational feasibility concern</span>
                                @endif
                                @if(in_array('stakeholder_compliance', $submission['risk_types']))
                                    <span class="inline-flex px-3 py-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">Stakeholder compliance risk</span>
                                @endif
                                @if(isset($submission['risk_types_other']) && $submission['risk_types_other'])
                                    <span class="inline-flex px-3 py-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">Other: {{ $submission['risk_types_other'] }}</span>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Section 4: Psychological Safety Check -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                    <span class="bg-nmdpra-blue text-white rounded-full w-8 h-8 flex items-center justify-center text-sm mr-3">4</span>
                    Psychological Safety Check
                </h2>
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-900 mb-2">Felt safe raising concerns or questions:</label>
                        <span class="inline-flex px-3 py-1 text-sm font-medium rounded-full
                            @if($submission['felt_safe_raising_concerns'] === 'yes') bg-green-100 text-green-800
                            @else bg-red-100 text-red-800 @endif">
                            {{ ucfirst($submission['felt_safe_raising_concerns']) }}
                        </span>
                    </div>
                </div>
            </div>

            <!-- Section 5: Improvement Input -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                    <span class="bg-nmdpra-blue text-white rounded-full w-8 h-8 flex items-center justify-center text-sm mr-3">5</span>
                    Improvement Input
                </h2>
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-900 mb-2">Key adjustment suggested:</label>
                        <div class="bg-blue-50 rounded-lg p-4 border-l-4 border-blue-400">
                            <p class="text-gray-800">{{ $submission['improvement_suggestion'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Actions Card -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Actions</h3>
                <div class="space-y-3">
                    <button class="w-full bg-nmdpra-blue text-white px-4 py-2 rounded-lg hover:bg-nmdpra-blue/90 transition-colors">
                        <i class="fas fa-check mr-2"></i>
                        Mark as Reviewed
                    </button>
                    <button class="w-full bg-nmdpra-green text-white px-4 py-2 rounded-lg hover:bg-nmdpra-green/90 transition-colors">
                        <i class="fas fa-flag mr-2"></i>
                        Mark as Action Taken
                    </button>
                    <button class="w-full border border-gray-300 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-50 transition-colors">
                        <i class="fas fa-download mr-2"></i>
                        Export PDF
                    </button>
                    <button class="w-full border border-red-300 text-red-700 px-4 py-2 rounded-lg hover:bg-red-50 transition-colors">
                        <i class="fas fa-trash mr-2"></i>
                        Archive Submission
                    </button>
                </div>
            </div>

            <!-- Submission Info -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Submission Information</h3>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Submission ID</label>
                        <p class="text-sm text-gray-900">#{{ $submission['id'] }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Submitted On</label>
                        <p class="text-sm text-gray-900">{{ \Carbon\Carbon::parse($submission['submission_date'])->format('F j, Y g:i A') }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Days Since Licence Issued</label>
                        <p class="text-sm text-gray-900">{{ \Carbon\Carbon::parse($submission['licence_issuance_date'])->diffInDays($submission['submission_date']) }} days</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Current Priority</label>
                        <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full
                            @if($submission['priority'] === 'High') bg-red-100 text-red-800
                            @elseif($submission['priority'] === 'Medium') bg-yellow-100 text-yellow-800
                            @else bg-gray-100 text-gray-800 @endif">
                            {{ $submission['priority'] }}
                        </span>
                    </div>
                </div>
            </div>

            <!-- Notes Section -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Internal Notes</h3>
                <div class="space-y-3">
                    <textarea rows="4" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-nmdpra-blue" placeholder="Add internal notes about this submission..."></textarea>
                    <button class="w-full bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition-colors text-sm">
                        Save Note
                    </button>
                </div>
                <div class="mt-4 space-y-2">
                    <div class="bg-gray-50 rounded p-3">
                        <p class="text-xs text-gray-500">Jan 30, 2026 - Admin</p>
                        <p class="text-sm text-gray-800">High priority due to stakeholder visibility.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
