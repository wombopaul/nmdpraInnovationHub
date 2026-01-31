@extends('admin.layout')

@section('title', 'Submit Innovation')
@section('header', 'Innovation Submission Form')

@section('content')
<div class="space-y-6">
    <!-- Form Header -->
    <div class="bg-white rounded-lg shadow-sm p-6">
        <div class="flex items-center justify-between">
            <div>
                <a href="{{ route('admin.innovations.index') }}" class="text-gray-600 hover:text-gray-800 mb-4 inline-flex items-center">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Back to Innovations
                </a>
                <h1 class="text-2xl font-bold text-gray-900 mb-2">Innovation Submission Form</h1>
                <div class="bg-blue-50 border-l-4 border-blue-400 p-4 rounded-r-lg">
                    <div class="text-blue-800">
                        <p class="font-medium mb-2">Purpose:</p>
                        <p class="text-sm">Submit your innovative ideas to improve NMDPRA's regulatory processes, enhance efficiency, and drive digital transformation. All submissions will be reviewed by our innovation committee.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Innovation Form -->
    <div class="bg-white rounded-lg shadow-sm p-6">
        <form action="{{ route('admin.innovations.store') }}" method="POST" class="space-y-8">
            @csrf

            <!-- Section 1: Innovation Overview -->
            <div class="bg-gray-50 rounded-lg p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                    <span class="bg-nmdpra-blue text-white rounded-full w-8 h-8 flex items-center justify-center text-sm mr-3">1</span>
                    Innovation Overview
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Innovation Title*</label>
                        <input type="text" name="title" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue" placeholder="Enter a descriptive title for your innovation">
                        @error('title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Innovation Category*</label>
                        <select name="category" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue">
                            <option value="">Select Category</option>
                            <option value="Process Automation">Process Automation</option>
                            <option value="Data Analytics">Data Analytics</option>
                            <option value="Mobile Technology">Mobile Technology</option>
                            <option value="Communication">Communication & Collaboration</option>
                            <option value="AI/ML">Artificial Intelligence / Machine Learning</option>
                            <option value="Blockchain">Blockchain Technology</option>
                            <option value="IoT">Internet of Things (IoT)</option>
                            <option value="Cybersecurity">Cybersecurity</option>
                            <option value="Cloud Computing">Cloud Computing</option>
                            <option value="User Experience">User Experience (UX)</option>
                            <option value="Other">Other</option>
                        </select>
                        @error('category')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Your Directorate*</label>
                        <select name="directorate" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue">
                            <option value="">Select Your Directorate</option>
                            <option value="Gas Infrastructure">Gas Infrastructure</option>
                            <option value="Legal & Compliance">Legal & Compliance</option>
                            <option value="Operations">Operations</option>
                            <option value="Technical Services">Technical Services</option>
                            <option value="Finance & Administration">Finance & Administration</option>
                            <option value="Information Technology">Information Technology</option>
                            <option value="Strategic Planning">Strategic Planning</option>
                            <option value="Human Resources">Human Resources</option>
                        </select>
                        @error('directorate')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Your Role*</label>
                        <select name="processing_role" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue">
                            <option value="">Select Your Role</option>
                            <option value="Technical">Technical</option>
                            <option value="Legal">Legal</option>
                            <option value="Administrative">Administrative</option>
                            <option value="Management">Management</option>
                            <option value="Analyst">Analyst</option>
                            <option value="Specialist">Specialist</option>
                            <option value="Coordinator">Coordinator</option>
                            <option value="Officer">Officer</option>
                            <option value="Other">Other</option>
                        </select>
                        @error('processing_role')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Innovation Description*</label>
                        <textarea name="description" rows="4" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue" placeholder="Provide a detailed description of your innovation idea..."></textarea>
                        @error('description')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Section 2: Problem & Solution -->
            <div class="bg-white border border-gray-200 rounded-lg p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-6 flex items-center">
                    <span class="bg-nmdpra-blue text-white rounded-full w-8 h-8 flex items-center justify-center text-sm mr-3">2</span>
                    Problem & Solution
                </h2>

                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-900 mb-2">Current Challenges*</label>
                        <p class="text-sm text-gray-600 mb-3">Describe the current problems, inefficiencies, or challenges this innovation addresses.</p>
                        <textarea name="current_challenges" rows="4" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue" placeholder="What problems does this innovation solve?"></textarea>
                        @error('current_challenges')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-900 mb-2">Proposed Solution*</label>
                        <p class="text-sm text-gray-600 mb-3">Explain your proposed solution in detail, including how it works and why it's innovative.</p>
                        <textarea name="proposed_solution" rows="4" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue" placeholder="How does your innovation solve the identified problems?"></textarea>
                        @error('proposed_solution')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-900 mb-2">Expected Impact*</label>
                        <p class="text-sm text-gray-600 mb-3">Quantify the expected benefits, improvements, and impact on NMDPRA operations.</p>
                        <textarea name="expected_impact" rows="4" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue" placeholder="What are the expected benefits and measurable impacts?"></textarea>
                        @error('expected_impact')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Section 3: Implementation Details -->
            <div class="bg-white border border-gray-200 rounded-lg p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-6 flex items-center">
                    <span class="bg-nmdpra-blue text-white rounded-full w-8 h-8 flex items-center justify-center text-sm mr-3">3</span>
                    Implementation Details
                </h2>

                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-900 mb-2">Implementation Timeline*</label>
                        <p class="text-sm text-gray-600 mb-3">Provide a realistic timeline for implementing this innovation, including key milestones.</p>
                        <textarea name="implementation_timeline" rows="4" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue" placeholder="Outline the implementation phases and timeline..."></textarea>
                        @error('implementation_timeline')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-900 mb-2">Required Resources*</label>
                        <p class="text-sm text-gray-600 mb-3">List the human, technical, and financial resources needed for implementation.</p>
                        <textarea name="required_resources" rows="4" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue" placeholder="What resources (people, technology, budget) are needed?"></textarea>
                        @error('required_resources')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-900 mb-2">Success Metrics*</label>
                        <p class="text-sm text-gray-600 mb-3">Define how success will be measured and what KPIs will be used to evaluate the innovation.</p>
                        <textarea name="success_metrics" rows="3" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue" placeholder="How will you measure the success of this innovation?"></textarea>
                        @error('success_metrics')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Section 4: Risk Assessment -->
            <div class="bg-white border border-gray-200 rounded-lg p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-6 flex items-center">
                    <span class="bg-nmdpra-blue text-white rounded-full w-8 h-8 flex items-center justify-center text-sm mr-3">4</span>
                    Risk Assessment
                </h2>

                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-900 mb-2">Risk Assessment & Mitigation*</label>
                        <p class="text-sm text-gray-600 mb-3">Identify potential risks, challenges, and mitigation strategies for the innovation implementation.</p>
                        <textarea name="risk_assessment" rows="4" required class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue" placeholder="What are the potential risks and how can they be mitigated?"></textarea>
                        @error('risk_assessment')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-900 mb-3">Implementation Complexity</label>
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <input type="radio" name="complexity" value="low" class="border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue">
                                <label class="ml-3 text-sm text-gray-700">Low - Can be implemented with existing resources</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" name="complexity" value="medium" class="border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue">
                                <label class="ml-3 text-sm text-gray-700">Medium - Requires some additional resources or coordination</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" name="complexity" value="high" class="border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue">
                                <label class="ml-3 text-sm text-gray-700">High - Requires significant resources, coordination, or system changes</label>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-900 mb-3">Stakeholder Impact (Check all that apply)</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <div class="flex items-center">
                                <input type="checkbox" name="stakeholder_impact[]" value="internal_staff" class="rounded border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue">
                                <label class="ml-3 text-sm text-gray-700">Internal Staff</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="stakeholder_impact[]" value="external_stakeholders" class="rounded border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue">
                                <label class="ml-3 text-sm text-gray-700">External Stakeholders</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="stakeholder_impact[]" value="license_applicants" class="rounded border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue">
                                <label class="ml-3 text-sm text-gray-700">License Applicants</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="stakeholder_impact[]" value="regulatory_compliance" class="rounded border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue">
                                <label class="ml-3 text-sm text-gray-700">Regulatory Compliance</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="stakeholder_impact[]" value="public_citizens" class="rounded border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue">
                                <label class="ml-3 text-sm text-gray-700">Public Citizens</label>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="stakeholder_impact[]" value="government_agencies" class="rounded border-gray-300 text-nmdpra-blue focus:border-nmdpra-blue focus:ring-nmdpra-blue">
                                <label class="ml-3 text-sm text-gray-700">Other Government Agencies</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Information (Optional) -->
            <div class="bg-gray-50 rounded-lg p-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-6 flex items-center">
                    <span class="bg-gray-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm mr-3">5</span>
                    Additional Information (Optional)
                </h2>

                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-900 mb-2">Supporting Documentation</label>
                        <p class="text-sm text-gray-600 mb-3">Attach or describe any supporting documents, research, or references.</p>
                        <textarea name="supporting_docs" rows="3" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue" placeholder="List any supporting documents, links, or references..."></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-900 mb-2">Additional Comments</label>
                        <textarea name="additional_comments" rows="3" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue" placeholder="Any additional information you'd like to share..."></textarea>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-end space-x-4">
                <a href="{{ route('admin.innovations.index') }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                    Cancel
                </a>
                <button type="submit" class="bg-nmdpra-blue text-white px-6 py-2 rounded-lg hover:bg-nmdpra-blue/90 transition-colors">
                    <i class="fas fa-lightbulb mr-2"></i>
                    Submit Innovation
                </button>
            </div>
        </form>
    </div>
</div>
@endsection