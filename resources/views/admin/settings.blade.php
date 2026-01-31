@extends('admin.layout')

@section('title', 'Settings')
@section('header', 'Settings')

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="bg-white rounded-lg shadow-sm p-6">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-bold text-gray-900">Settings</h2>
                <p class="text-gray-600 mt-1">Manage system configuration and preferences</p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Settings Navigation -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <nav class="space-y-2">
                <a href="#general" class="flex items-center px-4 py-2 text-sm font-medium text-nmdpra-blue bg-nmdpra-blue/10 rounded-lg">
                    <i class="fas fa-cog mr-3"></i>
                    General Settings
                </a>
                <a href="#security" class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 rounded-lg">
                    <i class="fas fa-shield-alt mr-3"></i>
                    Security
                </a>
                <a href="#notifications" class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 rounded-lg">
                    <i class="fas fa-bell mr-3"></i>
                    Notifications
                </a>
                <a href="#integrations" class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 rounded-lg">
                    <i class="fas fa-plug mr-3"></i>
                    Integrations
                </a>
                <a href="#backup" class="flex items-center px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 rounded-lg">
                    <i class="fas fa-database mr-3"></i>
                    Backup & Restore
                </a>
            </nav>
        </div>

        <!-- Settings Content -->
        <div class="lg:col-span-2 space-y-6">
            <!-- General Settings -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-6">General Settings</h3>
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Site Name</label>
                        <input type="text" value="NMDPRA Innovation Hub" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Site Description</label>
                        <textarea rows="3" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue">Strengthening Regulatory Oversight & Energy Supply Security</textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Contact Email</label>
                        <input type="email" value="admin@nmdpra.gov.ng" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Time Zone</label>
                        <select class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue">
                            <option>Africa/Lagos (UTC+1)</option>
                            <option>UTC</option>
                            <option>America/New_York</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Security Settings -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-6">Security Settings</h3>
                <div class="space-y-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class="text-sm font-medium text-gray-900">Two-Factor Authentication</h4>
                            <p class="text-sm text-gray-500">Add an extra layer of security to your account</p>
                        </div>
                        <button class="bg-nmdpra-blue text-white px-4 py-2 rounded-lg hover:bg-nmdpra-blue/90 transition-colors">
                            Enable
                        </button>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class="text-sm font-medium text-gray-900">Session Timeout</h4>
                            <p class="text-sm text-gray-500">Automatically log out inactive users</p>
                        </div>
                        <select class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-nmdpra-blue">
                            <option>30 minutes</option>
                            <option>1 hour</option>
                            <option>2 hours</option>
                            <option>4 hours</option>
                        </select>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class="text-sm font-medium text-gray-900">Password Policy</h4>
                            <p class="text-sm text-gray-500">Enforce strong password requirements</p>
                        </div>
                        <button class="text-nmdpra-blue hover:text-nmdpra-blue/80">
                            Configure
                        </button>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center justify-end space-x-4">
                <button class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                    Cancel
                </button>
                <button class="bg-nmdpra-blue text-white px-4 py-2 rounded-lg hover:bg-nmdpra-blue/90 transition-colors">
                    Save Changes
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
