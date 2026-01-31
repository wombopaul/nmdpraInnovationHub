<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Dashboard') - NMDPRA Innovation Hub</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Custom color utilities - NMDPRA Official Colors */
        .bg-nmdpra-blue { background-color: #2D5F3F !important; }
        .text-nmdpra-blue { color: #2D5F3F !important; }
        .border-nmdpra-blue { border-color: #2D5F3F !important; }
        .hover\:text-nmdpra-blue:hover { color: #2D5F3F !important; }
        .hover\:bg-nmdpra-blue:hover { background-color: #2D5F3F !important; }

        .bg-nmdpra-green { background-color: #008751 !important; }
        .text-nmdpra-green { color: #008751 !important; }

        .bg-nmdpra-orange { background-color: #FFB300 !important; }
        .text-nmdpra-orange { color: #FFB300 !important; }

        .bg-nmdpra-blue\/10 { background-color: rgba(45, 95, 63, 0.1) !important; }
        .bg-nmdpra-green\/10 { background-color: rgba(0, 135, 81, 0.1) !important; }
        .bg-nmdpra-orange\/10 { background-color: rgba(255, 179, 0, 0.1) !important; }

        .sidebar-link {
            transition: all 0.3s ease;
        }
        .sidebar-link:hover {
            background-color: rgba(45, 95, 63, 0.1);
            border-left: 4px solid #2D5F3F;
        }
        .sidebar-link.active {
            background-color: rgba(45, 95, 63, 0.1);
            border-left: 4px solid #2D5F3F;
            color: #2D5F3F;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="flex h-screen bg-gray-50">
        <!-- Sidebar -->
        <div class="hidden md:flex md:w-64 md:flex-col">
            <div class="flex flex-col flex-grow pt-5 overflow-y-auto bg-white border-r border-gray-200">
                <!-- Logo -->
                <div class="flex items-center flex-shrink-0 px-4">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-nmdpra-blue rounded-lg flex items-center justify-center">
                            <img src="{{ asset('nmdpraLogo.png') }}" alt="NMDPRA Logo" class="w-6 h-6 object-contain">
                        </div>
                        <div class="ml-3">
                            <h2 class="text-lg font-bold text-gray-900">NMDPRA</h2>
                            <p class="text-xs text-gray-500">Admin Panel</p>
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <nav class="mt-8 flex-1 px-4 pb-4">
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('admin.dashboard') }}"
                               class="sidebar-link group flex items-center px-4 py-3 text-sm font-medium text-gray-700 rounded-lg hover:bg-nmdpra-blue/10 {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                                <i class="fas fa-chart-line mr-3 text-gray-500 group-hover:text-nmdpra-blue"></i>
                                Dashboard
                            </a>
                        </li>
                         <li>
                            <a href="{{ route('admin.innovations.index') }}"
                               class="sidebar-link group flex items-center px-4 py-3 text-sm font-medium text-gray-700 rounded-lg hover:bg-nmdpra-blue/10 {{ request()->routeIs('admin.innovations.*') ? 'active' : '' }}">
                                <i class="fas fa-lightbulb mr-3 text-gray-500 group-hover:text-nmdpra-blue"></i>
                                Innovations
                            </a>
                        </li>
                         <li>
                            <a href="{{ route('admin.plrr.index') }}"
                               class="sidebar-link group flex items-center px-4 py-3 text-sm font-medium text-gray-700 rounded-lg hover:bg-nmdpra-blue/10 {{ request()->routeIs('admin.plrr.*') ? 'active' : '' }}">
                                <i class="fas fa-comments mr-3 text-gray-500 group-hover:text-nmdpra-blue"></i>
                                PLRR Feedback
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.users') }}"
                               class="sidebar-link group flex items-center px-4 py-3 text-sm font-medium text-gray-700 rounded-lg hover:bg-nmdpra-blue/10 {{ request()->routeIs('admin.users') ? 'active' : '' }}">
                                <i class="fas fa-trophy mr-3 text-gray-500 group-hover:text-nmdpra-blue"></i>
                                Hall of Innovators
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.analytics') }}"
                               class="sidebar-link group flex items-center px-4 py-3 text-sm font-medium text-gray-700 rounded-lg hover:bg-nmdpra-blue/10 {{ request()->routeIs('admin.analytics') ? 'active' : '' }}">
                                <i class="fas fa-chart-bar mr-3 text-gray-500 group-hover:text-nmdpra-blue"></i>
                                Analytics
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.reports') }}"
                               class="sidebar-link group flex items-center px-4 py-3 text-sm font-medium text-gray-700 rounded-lg hover:bg-nmdpra-blue/10 {{ request()->routeIs('admin.reports') ? 'active' : '' }}">
                                <i class="fas fa-file-alt mr-3 text-gray-500 group-hover:text-nmdpra-blue"></i>
                                Reports
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.settings') }}"
                               class="sidebar-link group flex items-center px-4 py-3 text-sm font-medium text-gray-700 rounded-lg hover:bg-nmdpra-blue/10 {{ request()->routeIs('admin.settings') ? 'active' : '' }}">
                                <i class="fas fa-cog mr-3 text-gray-500 group-hover:text-nmdpra-blue"></i>
                                Settings
                            </a>
                        </li>
                    </ul>

                    <!-- Bottom section -->
                    <div class="mt-8 pt-8 border-t border-gray-200">
                        <ul class="space-y-2">
                            <li>
                                <a href="{{ url('/') }}"
                                   class="sidebar-link group flex items-center px-4 py-3 text-sm font-medium text-gray-700 rounded-lg hover:bg-nmdpra-blue/10">
                                    <i class="fas fa-home mr-3 text-gray-500 group-hover:text-nmdpra-blue"></i>
                                    View Site
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                   class="sidebar-link group flex items-center px-4 py-3 text-sm font-medium text-gray-700 rounded-lg hover:bg-nmdpra-blue/10">
                                    <i class="fas fa-sign-out-alt mr-3 text-gray-500 group-hover:text-nmdpra-blue"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Main content -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Top header -->
            <header class="bg-white shadow-sm border-b border-gray-200">
                <div class="flex items-center justify-between px-6 py-4">
                    <div class="flex items-center">
                        <button class="md:hidden p-2 rounded-lg text-gray-600 hover:bg-gray-100">
                            <i class="fas fa-bars text-lg"></i>
                        </button>
                        <h1 class="ml-4 md:ml-0 text-xl font-semibold text-gray-900">@yield('header', 'Dashboard')</h1>
                    </div>

                    <div class="flex items-center space-x-4">
                        <!-- Notifications -->
                        <button class="p-2 rounded-lg text-gray-600 hover:bg-gray-100 relative">
                            <i class="fas fa-bell text-lg"></i>
                            <span class="absolute -top-1 -right-1 h-4 w-4 bg-red-500 text-white text-xs rounded-full flex items-center justify-center">3</span>
                        </button>

                        <!-- User menu -->
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-nmdpra-blue rounded-full flex items-center justify-center">
                                <i class="fas fa-user text-white text-sm"></i>
                            </div>
                            <div class="hidden md:block">
                                <p class="text-sm font-medium text-gray-900">Admin User</p>
                                <p class="text-xs text-gray-500">admin@nmdpra.gov.ng</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-50 p-6">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Mobile sidebar overlay -->
    <div class="md:hidden fixed inset-0 z-50 bg-black bg-opacity-50 hidden" id="sidebar-overlay">
        <div class="fixed inset-y-0 left-0 w-64 bg-white">
            <!-- Mobile sidebar content would go here -->
        </div>
    </div>

    <script>
        // Mobile sidebar toggle
        document.querySelector('button').addEventListener('click', function() {
            const overlay = document.getElementById('sidebar-overlay');
            overlay.classList.toggle('hidden');
        });
    </script>
</body>
</html>
