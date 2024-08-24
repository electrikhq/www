@extends('layouts.demo')
@section('content')
<x-slate::shell>
    <x-slot name="primarySidebar">
        <x-slate::icon icon="carbon-dashboard" size="lg" />
    </x-slot>

    <x-slot name="sidebar">
        @include('demo.slate.partials.secondary-sidebar')
    </x-slot>

    <x-slate::navbar>
        @include('demo.slate.partials.navbar')
    </x-slate::navbar>

    <div class="p-6">
        <x-slate::card size="sm" icon="carbon-events" header="Register" outlined >
            <x-slate::form>
                <h1>Some Heading</h1>
                <x-slate::input
                    label="Full Name"
                    name="full_name"
                    placeholder="Enter your full name"
                    required
                />

                <x-slate::input
                    label="Email Address"
                    name="email"
                    type="email"
                    placeholder="Enter your email address"
                    required
                />

                <x-slate::textarea
                    label="Message"
                    name="message"
                    placeholder="Write your message here..."
                    required
                />

                <x-slate::checkbox
                    label="Subscribe to our newsletter"
                    name="subscribe"
                />

                <x-slate::button type="submit" color="primary" size="md">
                    Submit
                </x-slate::button>
        </x-slate::form>

        </x-slate::card>
        <!-- Statistics Cards -->
        <div class="grid grid-cols-4 gap-4 mb-4">
            <x-slate::card size="sm" icon="carbon-purchase" color="indigo">
                <x-slot name="header">
                    <p class="m-0 font-medium"># of Orders</p>
                </x-slot>
                <h3 class="m-0 text-lg font-bold">1,000+</h3>
            </x-slate::card>

            <x-slate::card header="Audience Growth" icon="carbon-events" size="sm" color="neutral">
                <h3 class="m-0 text-lg font-bold">100+</h3>
                <p class="text-sm">15% increase from last month</p>
            </x-slate::card>

            <x-slate::card header="Total Revenue" outlined icon="carbon-currency-dollar" size="sm">
                <h3 class="m-0 text-lg font-bold">$1,434,000</h3>
                <p class="text-sm">Revenue growth compared to last year</p>
            </x-slate::card>

            <x-slate::card outlined header="Top Product" icon="carbon-product" size="sm">
                <h3 class="m-0 text-lg font-bold">Green Christmas Socks</h3>
                <p class="text-sm">3,400 orders placed last month</p>
            </x-slate::card>
        </div>

        <!-- Recent Activities -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Recent Activities</h2>
            <div class="overflow-x-auto">
                <x-slate::table>
                    <x-slot name="thead">
                        <x-slate::table-header>Activity</x-slate::table-header>
                        <x-slate::table-header>Date</x-slate::table-header>
                        <x-slate::table-header>Status</x-slate::table-header>
                    </x-slot>
                    <x-slate::table-body>
                        <x-slate::table-row>
                            <x-slate::table-cell>User registration</x-slate::table-cell>
                            <x-slate::table-cell>August 20, 2024</x-slate::table-cell>
                            <x-slate::table-cell><x-slate::status color="green" /> Completed</x-slate::table-cell>
                        </x-slate::table-row>
                        <x-slate::table-row>
                            <x-slate::table-cell>New order</x-slate::table-cell>
                            <x-slate::table-cell>August 19, 2024</x-slate::table-cell>
                            <x-slate::table-cell><x-slate::status color="yellow" /> Pending</x-slate::table-cell>
                        </x-slate::table-row>
                        <x-slate::table-row>
                            <x-slate::table-cell>Support ticket closed</x-slate::table-cell>
                            <x-slate::table-cell>August 18, 2024</x-slate::table-cell>
                            <x-slate::table-cell><x-slate::status color="red" /> Closed</x-slate::table-cell>
                        </x-slate::table-row>
                    </x-slate::table-body>
                </x-slate::table>
            </div>
        </div>

        <!-- Additional Widgets -->
        <div class="grid grid-cols-3 gap-4 mt-6">
            <!-- User Engagement -->
            <x-slate::card color="blue" icon="carbon-user-activity" header="User Engagement">
                <p class="text-sm">Increased by 20% this month.</p>
            </x-slate::card>

            <!-- Sales Overview -->
            <x-slate::card color="green" icon="carbon-activity" header="Sales Overview">
                <p class="text-sm">Monthly sales are up by 35%.</p>
            </x-slate::card>

            <!-- Error Reports -->
            <x-slate::card color="red" icon="carbon-error" header="Error Reports">
                <p class="text-sm">10 new errors reported today.</p>
            </x-slate::card>
        </div>
    </div>
</x-slate::shell>
@endsection