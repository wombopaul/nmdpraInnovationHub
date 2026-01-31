<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function users()
    {
        return view('admin.users');
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function analytics()
    {
        return view('admin.analytics');
    }

    public function reports()
    {
        return view('admin.reports');
    }

    public function plrrList()
    {
        // Sample data for PLRR submissions (would typically come from database)
        $plrrSubmissions = [
            [
                'id' => 1,
                'licence_reference' => 'GDL/2024/001',
                'licence_type' => 'GDL',
                'processing_role' => 'Technical',
                'directorate' => 'Gas Infrastructure',
                'submission_date' => '2026-01-28',
                'licence_issuance_date' => '2026-01-25',
                'status' => 'Under Review',
                'priority' => 'Medium',
                'what_worked_well' => 'The online portal streamlined the application process significantly.',
                'process_delays' => ['inter_directorate_handoff', 'approval_sequencing'],
                'roles_clear' => 'partially',
                'regulatory_risks_observed' => 'yes',
                'felt_safe_raising_concerns' => 'yes',
                'improvement_suggestion' => 'Implement automated status updates to reduce follow-up inquiries.',
            ],
            [
                'id' => 2,
                'licence_reference' => 'GTPL/2024/015',
                'licence_type' => 'GTPL',
                'processing_role' => 'Legal',
                'directorate' => 'Legal & Compliance',
                'submission_date' => '2026-01-27',
                'licence_issuance_date' => '2026-01-22',
                'status' => 'Reviewed',
                'priority' => 'High',
                'what_worked_well' => 'Clear communication between legal and technical teams.',
                'process_delays' => ['external_stakeholder_issues'],
                'roles_clear' => 'yes',
                'regulatory_risks_observed' => 'no',
                'felt_safe_raising_concerns' => 'yes',
                'improvement_suggestion' => 'Establish better coordination with external stakeholders.',
            ],
            [
                'id' => 3,
                'licence_reference' => 'FAC/2024/032',
                'licence_type' => 'Facility',
                'processing_role' => 'Secretariat',
                'directorate' => 'Operations',
                'submission_date' => '2026-01-26',
                'licence_issuance_date' => '2026-01-20',
                'status' => 'Action Taken',
                'priority' => 'Low',
                'what_worked_well' => 'Efficient document processing and quick response times.',
                'process_delays' => ['data_documentation_gaps'],
                'roles_clear' => 'yes',
                'regulatory_risks_observed' => 'yes',
                'felt_safe_raising_concerns' => 'partially',
                'improvement_suggestion' => 'Provide clearer guidance on documentation requirements.',
            ],
            [
                'id' => 4,
                'licence_reference' => 'PRM/2024/008',
                'licence_type' => 'Permit',
                'processing_role' => 'Technical',
                'directorate' => 'Technical Services',
                'submission_date' => '2026-01-25',
                'licence_issuance_date' => '2026-01-18',
                'status' => 'Under Review',
                'priority' => 'Medium',
                'what_worked_well' => 'Technical assessment was thorough and comprehensive.',
                'process_delays' => ['inter_directorate_handoff', 'data_documentation_gaps'],
                'roles_clear' => 'no',
                'regulatory_risks_observed' => 'yes',
                'felt_safe_raising_concerns' => 'no',
                'improvement_suggestion' => 'Clarify decision-making authority at each process stage.',
            ],
        ];

        return view('admin.plrr-list', compact('plrrSubmissions'));
    }

    public function plrrView($id)
    {
        // In a real application, you would fetch the specific PLRR from database
        // For now, we'll find it from our sample data
        $plrrSubmissions = [
            [
                'id' => 1,
                'licence_reference' => 'GDL/2024/001',
                'licence_type' => 'GDL - Gas Distribution Licence',
                'processing_role' => 'Technical',
                'directorate' => 'Gas Infrastructure',
                'submission_date' => '2026-01-28',
                'licence_issuance_date' => '2026-01-25',
                'status' => 'Under Review',
                'priority' => 'Medium',
                'what_worked_well' => 'The online portal streamlined the application process significantly. The technical review team provided clear guidance throughout the process, and the automated notifications kept all stakeholders informed.',
                'process_delays' => ['inter_directorate_handoff', 'approval_sequencing'],
                'process_delays_other' => 'Delayed response from external consultants',
                'roles_clear' => 'partially',
                'roles_clear_explanation' => 'While most roles were clear, there was some confusion about who had final approval authority for certain technical specifications.',
                'regulatory_risks_observed' => 'yes',
                'risk_types' => ['legal_interpretation', 'operational_feasibility'],
                'risk_types_other' => 'Potential environmental compliance issues',
                'felt_safe_raising_concerns' => 'yes',
                'improvement_suggestion' => 'Implement automated status updates to reduce follow-up inquiries. Also consider creating a centralized dashboard for tracking application progress across all directorates.',
            ],
            // Add other submissions here with full details...
        ];

        $submission = collect($plrrSubmissions)->firstWhere('id', (int)$id);

        if (!$submission) {
            abort(404, 'PLRR submission not found');
        }

        return view('admin.plrr-view', compact('submission'));
    }

    public function plrrFeedback()
    {
        return view('admin.plrr-feedback');
    }

    public function innovationList()
    {
        // Sample data for innovation submissions (would typically come from database)
        $innovations = [
            [
                'id' => 1,
                'title' => 'Digital Licensing Portal',
                'category' => 'Process Automation',
                'status' => 'Implemented',
                'priority' => 'High',
                'directorate' => 'Gas Infrastructure',
                'processing_role' => 'Technical',
                'submission_date' => '2026-01-20',
                'implementation_date' => '2026-01-25',
                'description' => 'Automated licensing workflow system that reduced processing time by 60%.',
                'expected_impact' => 'Reduce processing time, improve transparency',
                'current_challenges' => 'Manual processing delays, lack of transparency',
                'proposed_solution' => 'Implement digital workflow with automated notifications',
            ],
            [
                'id' => 2,
                'title' => 'Risk Prediction Dashboard',
                'category' => 'Data Analytics',
                'status' => 'Under Review',
                'priority' => 'Medium',
                'directorate' => 'Legal & Compliance',
                'processing_role' => 'Data Analytics',
                'submission_date' => '2026-01-22',
                'implementation_date' => null,
                'description' => 'Real-time analytics dashboard for identifying supply disruption risks.',
                'expected_impact' => 'Proactive risk management, reduced disruptions',
                'current_challenges' => 'Reactive approach to risk management',
                'proposed_solution' => 'AI-powered predictive analytics platform',
            ],
            [
                'id' => 3,
                'title' => 'Mobile Inspection App',
                'category' => 'Mobile Technology',
                'status' => 'In Progress',
                'priority' => 'High',
                'directorate' => 'Operations',
                'processing_role' => 'Technical',
                'submission_date' => '2026-01-18',
                'implementation_date' => '2026-02-15',
                'description' => 'Mobile application for field inspections to digitize compliance reporting.',
                'expected_impact' => 'Reduce paperwork by 85%, improve field efficiency',
                'current_challenges' => 'Paper-based reporting, delayed data collection',
                'proposed_solution' => 'Mobile app with offline capability and cloud sync',
            ],
            [
                'id' => 4,
                'title' => 'Automated Compliance Alerts',
                'category' => 'Communication',
                'status' => 'Pilot Stage',
                'priority' => 'Medium',
                'directorate' => 'Technical Services',
                'processing_role' => 'Technical',
                'submission_date' => '2026-01-15',
                'implementation_date' => null,
                'description' => 'Automated notification system for compliance deadlines.',
                'expected_impact' => 'Reduce violations by 45%, improve compliance rates',
                'current_challenges' => 'Manual reminder system, missed deadlines',
                'proposed_solution' => 'Automated email and SMS notification system',
            ],
        ];

        return view('admin.innovation-list', compact('innovations'));
    }

    public function innovationForm()
    {
        return view('admin.innovation-form');
    }

    public function storeInnovation(Request $request)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'directorate' => 'required|string',
            'processing_role' => 'required|string',
            'description' => 'required|string',
            'current_challenges' => 'required|string',
            'proposed_solution' => 'required|string',
            'expected_impact' => 'required|string',
            'implementation_timeline' => 'required|string',
            'required_resources' => 'required|string',
            'success_metrics' => 'required|string',
            'risk_assessment' => 'required|string',
        ]);

        // Here you would typically save to database
        // For now, we'll just redirect with a success message

        return redirect()->route('admin.innovations.index')
                        ->with('success', 'Thank you for your innovation submission. Your idea has been recorded and will be reviewed by our innovation committee.');
    }

    public function innovationView($id)
    {
        // Sample data for detailed view
        $innovations = [
            [
                'id' => 1,
                'title' => 'Digital Licensing Portal',
                'category' => 'Process Automation',
                'status' => 'Implemented',
                'priority' => 'High',
                'directorate' => 'Gas Infrastructure',
                'processing_role' => 'Technical',
                'created_at' => '2026-01-20',
                'implementation_date' => '2026-01-25',
                'description' => 'An innovative automated licensing workflow system designed to streamline the entire licensing process from application submission to approval. The system integrates with existing databases and provides real-time status updates to all stakeholders.',
                'current_challenges' => 'Manual processing of license applications leads to significant delays, inconsistent review times, lack of transparency for applicants, and difficulty in tracking applications across different departments. Paper-based processes are prone to errors and document loss.',
                'proposed_solution' => 'Implement a comprehensive digital workflow platform that automates routing, provides automated notifications at each stage, integrates document management, includes online payment processing, and offers real-time status tracking for applicants.',
                'expected_impact' => 'Reduce processing time by 60%, improve transparency across all directorates, reduce operational costs by 40%, improve applicant satisfaction scores, and enable better data analytics for process optimization.',
                'implementation_timeline' => '6 months - Phase 1: Core workflow (3 months), Phase 2: Integration and testing (2 months), Phase 3: Training and rollout (1 month)',
                'required_resources' => 'Development team (4 developers), UI/UX designer, Project manager, IT infrastructure (cloud hosting), Training resources, Change management support',
                'success_metrics' => 'Processing time reduction, User satisfaction scores, Error rate reduction, Cost savings, System uptime and performance metrics',
                'risk_assessment' => 'Low to Medium - Main risks include user adoption resistance, integration challenges with legacy systems, and potential system downtime during transition.',
                'complexity' => 'medium',
                'stakeholder_impact' => ['internal_staff', 'external_stakeholders', 'license_applicants'],
                'supporting_docs' => 'Technical specification document, Cost-benefit analysis report',
                'additional_comments' => 'This innovation has shown significant success in pilot testing with three departments.',
                'impact_score' => 5,
            ],
        ];

        $innovation = collect($innovations)->firstWhere('id', (int)$id);

        if (!$innovation) {
            abort(404, 'Innovation not found');
        }

        return view('admin.innovation-view', compact('innovation'));
    }

    public function storePlrrFeedback(Request $request)
    {
        // Validate the form data
        $request->validate([
            'licence_type' => 'required|string',
            'licence_reference' => 'required|string',
            'directorates_involved' => 'required|string',
            'processing_role' => 'required|string',
            'licence_issuance_date' => 'required|date',
            'what_worked_well' => 'required|string',
            'process_delays' => 'array',
            'roles_clear' => 'required|string',
            'regulatory_risks_observed' => 'required|string',
            'felt_safe_raising_concerns' => 'required|string',
            'improvement_suggestion' => 'required|string',
            'confirmation' => 'required|accepted',
        ]);

        // Here you would typically save to database
        // For now, we'll just redirect with a success message

        return redirect()->route('admin.plrr.feedback')
                        ->with('success', 'Thank you for your feedback. Your submission has been recorded and will be used to improve our regulatory processes.');
    }
}
