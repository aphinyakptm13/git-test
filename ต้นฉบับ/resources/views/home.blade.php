@extends('layouts.app')

@section('title', 'Home - Guard Force')
@section('header_title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Stats Cards -->
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-gray-600 text-sm font-semibold">Total Assets</h3>
        <p class="text-3xl font-bold text-gray-800 mt-2">1,234</p>
    </div>
    
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-gray-600 text-sm font-semibold">Pending Transfers</h3>
        <p class="text-3xl font-bold text-orange-600 mt-2">45</p>
    </div>
    
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-gray-600 text-sm font-semibold">Maintenance Items</h3>
        <p class="text-3xl font-bold text-red-600 mt-2">12</p>
    </div>
    
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-gray-600 text-sm font-semibold">Users</h3>
        <p class="text-3xl font-bold text-blue-600 mt-2">28</p>
    </div>
</div>

<!-- Welcome Section -->
<div class="bg-white rounded-lg shadow p-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Welcome to Guard Force</h2>
    <p class="text-gray-600">
        This is your dashboard for managing assets, transfers, and inventory.
        Use the navigation menu on the left to access different modules.
    </p>
</div>
@endsection
