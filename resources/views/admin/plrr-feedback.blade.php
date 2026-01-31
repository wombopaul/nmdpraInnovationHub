@extends('admin.layout')

@section('title', 'PLRR Feedback')
@section('header', 'Post-Licence Regulatory Review (PLRR) Feedback')

@section('content')
<div class="space-y-6">
    <!-- Success Message -->
    @if(session('success'))
        <div class="bg-green-50 border border-green-200 rounded-lg p-4">
            <div class="flex items-center">
                <i class="fas fa-check-circle text-green-600 mr-3"></i>
                <div class="text-green-800">
                    <p class="font-medium">Feedback Submitted Successfully</p>
                    <p class="text-sm mt-1">{{ session('success') }}</p>
                </div>
            </div>
        </div>
    @endif

    <!-- Form Header -->
    <div class="bg-white rounded-lg shadow-sm p-6">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900 mb-2">Post-Licence Regulatory Review (PLRR) Form</h1>
            <div class="bg-blue-50 border-l-4 border-blue-400 p-4 rounded-r-lg">
                <div class="text-blue-800">
                    <p class="font-medium mb-2">Purpose:</p>
                    <p class="text-sm">This form captures process-level feedback to improve regulatory effectiveness. Responses are anonymised, non-attributable, and will not be used for performance appraisal or disciplinary action.</p>
                </div>
            </div>
            <div class="mt-4 bg-yellow-50 border border-yellow-200 rounded-lg p-3">
                <p class="text-yellow-800 text-sm">
                    <i class="fas fa-clock mr-2"></i>
                    <strong>Submission Window:</strong> Within five (5) working days of licence issuance.
                </p>
            </div>
        </div>

        <!-- PLRR Feedback Form -->
        <form action="{{ route('admin.plrr.store') }}" method="POST" class="space-y-8">
            @csrf

            <!-- Section 1: Licence Context -->
            <div class="bg-gray-50 rounded-lg p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                    <span class="bg-nmdpra-blue text-white rounded-full w-8 h-8 flex items-center justify-center text-sm mr-3">1</span>
                    LICENCE CONTEXT
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Licence Type</label>
                        <select name="licence_type" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue">
                            <option value="">Select Licence Type</option>
                            <option value="GDL">GDL - Gas Distribution Licence</option>
                            <option value="GTPL">GTPL - Gas Transportation Pipeline Licence</option>
                            <option value="Facility">Facility Licence</option>
                            <option value="Permit">Permit</option>
                        </select>
                        @error('licence_type')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Licence Reference Number</label>
                        <input type="text" name="licence_reference" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue" placeholder="Enter licence reference number">
                        @error('licence_reference')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Directorate(s) Involved</label>
                        <input type="text" name="directorates_involved" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue" placeholder="List directorates involved">
                        @error('directorates_involved')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Processing Role</label>
                        <select name="processing_role" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue">
                            <option value="">Select Processing Role</option>
                            <option value="Technical">Technical</option>
                            <option value="Legal">Legal</option>
                            <option value="Secretariat">Secretariat</option>
                            <option value="Other">Other</option>
                        </select>
                        @error('processing_role')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Date of Licence Issuance</label>
                        <input type="date" name="licence_issuance_date" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue">
                        @error('licence_issuance_date')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Section 2: Process Effectiveness -->
            <div class="bg-white border border-gray-200 rounded-lg p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-6 flex items-center">
                    <span class="bg-nmdpra-blue text-white rounded-full w-8 h-8 flex items-center justify-center text-sm mr-3">2</span>
                    PROCESS EFFECTIVENESS
                </h2>

                <div class="space-y-6">
                    <!-- Question 1 -->
                    <div>
                        <label class="block text-sm font-medium text-gray-900 mb-3">1. What worked well in this licensing process?</label>
                        <textarea name="what_worked_well" rows="4" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue" placeholder="Describe what worked well in the process..."></textarea>
                        @error('what_worked_well')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Question 2 -->
                    <div>
                        <label class="block text-sm font-medium text-gray-900 mb-3">2. Where did the process experience delays or friction? (Tick all that apply)</label>
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <input type="checkbox" name="process_delays[]" value="inter_directorate_handoff" class="rounded border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue">
                                <label class="ml-3 text-sm text-gray-700">Inter-directorate hand-off</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="process_delays[]" value="data_documentation_gaps" class="rounded border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue">
                                <label class="ml-3 text-sm text-gray-700">Data or documentation gaps</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="process_delays[]" value="approval_sequencing" class="rounded border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue">
                                <label class="ml-3 text-sm text-gray-700">Approval sequencing</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="process_delays[]" value="external_stakeholder_issues" class="rounded border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue">
                                <label class="ml-3 text-sm text-gray-700">External stakeholder issues</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="process_delays[]" value="other" class="rounded border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue" id="delays_other">
                                <label class="ml-3 text-sm text-gray-700">Other (specify):</label>
                                <input type="text" name="process_delays_other" placeholder="Specify other delays..." class="ml-2 border border-gray-300 rounded px-2 py-1 text-sm focus:outline-none focus:border-nmdpra-blue">
                            </div>
                        </div>
                    </div>

                    <!-- Question 3 -->
                    <div>
                        <label class="block text-sm font-medium text-gray-900 mb-3">3. Were roles, mandates, and decision points clear throughout the process?</label>
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <input type="radio" name="roles_clear" value="yes" required class="border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue">
                                <label class="ml-3 text-sm text-gray-700">Yes</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" name="roles_clear" value="partially" required class="border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue">
                                <label class="ml-3 text-sm text-gray-700">Partially</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" name="roles_clear" value="no" required class="border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue">
                                <label class="ml-3 text-sm text-gray-700">No</label>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label class="block text-sm text-gray-700 mb-2">If Partially or No, please explain:</label>
                            <textarea name="roles_clear_explanation" rows="3" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue" placeholder="Explain what was unclear..."></textarea>
                        </div>
                        @error('roles_clear')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Section 3: Regulatory Quality & Risk Signals -->
            <div class="bg-white border border-gray-200 rounded-lg p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-6 flex items-center">
                    <span class="bg-nmdpra-blue text-white rounded-full w-8 h-8 flex items-center justify-center text-sm mr-3">3</span>
                    REGULATORY QUALITY & RISK SIGNALS
                </h2>

                <div class="space-y-6">
                    <!-- Question 4 -->
                    <div>
                        <label class="block text-sm font-medium text-gray-900 mb-3">4. Did you observe any regulatory risks during processing?</label>
                        <div class="space-y-3 mb-4">
                            <div class="flex items-center">
                                <input type="radio" name="regulatory_risks_observed" value="yes" required class="border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue" id="risks_yes">
                                <label class="ml-3 text-sm text-gray-700">Yes</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" name="regulatory_risks_observed" value="no" required class="border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue" id="risks_no">
                                <label class="ml-3 text-sm text-gray-700">No</label>
                            </div>
                        </div>

                        <div id="risk_types" class="ml-6 space-y-3" style="display: none;">
                            <p class="text-sm font-medium text-gray-700 mb-3">If Yes, tick all that apply:</p>
                            <div class="flex items-center">
                                <input type="checkbox" name="risk_types[]" value="legal_interpretation" class="rounded border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue">
                                <label class="ml-3 text-sm text-gray-700">Legal interpretation risk</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="risk_types[]" value="policy_overlap" class="rounded border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue">
                                <label class="ml-3 text-sm text-gray-700">Policy overlap / mandate ambiguity</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="risk_types[]" value="operational_feasibility" class="rounded border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue">
                                <label class="ml-3 text-sm text-gray-700">Operational feasibility concern</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="risk_types[]" value="stakeholder_compliance" class="rounded border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue">
                                <label class="ml-3 text-sm text-gray-700">Stakeholder compliance risk</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="risk_types[]" value="other" class="rounded border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue">
                                <label class="ml-3 text-sm text-gray-700">Other (specify):</label>
                                <input type="text" name="risk_types_other" placeholder="Specify other risks..." class="ml-2 border border-gray-300 rounded px-2 py-1 text-sm focus:outline-none focus:border-nmdpra-blue">
                            </div>
                        </div>
                        @error('regulatory_risks_observed')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Section 4: Psychological Safety Check -->
            <div class="bg-white border border-gray-200 rounded-lg p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-6 flex items-center">
                    <span class="bg-nmdpra-blue text-white rounded-full w-8 h-8 flex items-center justify-center text-sm mr-3">4</span>
                    PSYCHOLOGICAL SAFETY CHECK
                </h2>

                <div class="space-y-6">
                    <!-- Question 5 -->
                    <div>
                        <label class="block text-sm font-medium text-gray-900 mb-3">5. Did you feel safe raising concerns or questions during this licensing process?</label>
                        <div class="space-y-3 mb-4">
                            <div class="flex items-center">
                                <input type="radio" name="felt_safe_raising_concerns" value="yes" required class="border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue" id="safe_yes">
                                <label class="ml-3 text-sm text-gray-700">Yes</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" name="felt_safe_raising_concerns" value="no" required class="border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue" id="safe_no">
                                <label class="ml-3 text-sm text-gray-700">No</label>
                            </div>
                        </div>

                        <div id="safety_limitations" class="ml-6 space-y-3" style="display: none;">
                            <p class="text-sm font-medium text-gray-700 mb-3">If No, what limited your ability to speak up? (Optional)</p>
                            <div class="flex items-center">
                                <input type="checkbox" name="safety_limitations[]" value="hierarchy" class="rounded border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue">
                                <label class="ml-3 text-sm text-gray-700">Hierarchy</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="safety_limitations[]" value="unclear_escalation" class="rounded border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue">
                                <label class="ml-3 text-sm text-gray-700">Unclear escalation path</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="safety_limitations[]" value="other" class="rounded border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue">
                                <label class="ml-3 text-sm text-gray-700">Other (specify):</label>
                                <input type="text" name="safety_limitations_other" placeholder="Specify other limitations..." class="ml-2 border border-gray-300 rounded px-2 py-1 text-sm focus:outline-none focus:border-nmdpra-blue">
                            </div>
                        </div>
                        @error('felt_safe_raising_concerns')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Section 5: Improvement Input -->
            <div class="bg-white border border-gray-200 rounded-lg p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-6 flex items-center">
                    <span class="bg-nmdpra-blue text-white rounded-full w-8 h-8 flex items-center justify-center text-sm mr-3">5</span>
                    IMPROVEMENT INPUT
                </h2>

                <div class="space-y-6">
                    <!-- Question 6 -->
                    <div>
                        <label class="block text-sm font-medium text-gray-900 mb-3">6. What one adjustment would most improve future licensing outcomes?</label>
                        <textarea name="improvement_suggestion" rows="4" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue" placeholder="Suggest one key improvement for future licensing processes..."></textarea>
                        @error('improvement_suggestion')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Declaration -->
            <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">DECLARATION</h3>
                <div class="flex items-start">
                    <input type="checkbox" name="confirmation" value="1" required class="rounded border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue mt-1">
                    <label class="ml-3 text-sm text-gray-700">
                        I confirm that this feedback is provided in good faith for institutional improvement only.
                    </label>
                </div>
                @error('confirmation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-end space-x-4">
                <button type="button" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                    Reset Form
                </button>
                <button type="submit" class="bg-nmdpra-blue text-white px-6 py-2 rounded-lg hover:bg-nmdpra-blue/90 transition-colors">
                    <i class="fas fa-paper-plane mr-2"></i>
                    Submit Feedback
                </button>
            </div>
        </form>
    </div>
</div>

<script>
// Show/hide conditional fields based on radio button selections
document.addEventListener('DOMContentLoaded', function() {
    // Regulatory risks conditional display
    const risksYes = document.getElementById('risks_yes');
    const risksNo = document.getElementById('risks_no');
    const riskTypes = document.getElementById('risk_types');

    risksYes.addEventListener('change', function() {
        if (this.checked) {
            riskTypes.style.display = 'block';
        }
    });

    risksNo.addEventListener('change', function() {
        if (this.checked) {
            riskTypes.style.display = 'none';
        }
    });

    // Safety concerns conditional display
    const safeYes = document.getElementById('safe_yes');
    const safeNo = document.getElementById('safe_no');
    const safetyLimitations = document.getElementById('safety_limitations');

    safeYes.addEventListener('change', function() {
        if (this.checked) {
            safetyLimitations.style.display = 'none';
        }
    });

    safeNo.addEventListener('change', function() {
        if (this.checked) {
            safetyLimitations.style.display = 'block';
        }
    });

    // Reset form functionality
    document.querySelector('button[type="button"]').addEventListener('click', function() {
        if (confirm('Are you sure you want to reset the form? All entered data will be lost.')) {
            document.querySelector('form').reset();
            riskTypes.style.display = 'none';
            safetyLimitations.style.display = 'none';
        }
    });
});
</script>
@endsection
