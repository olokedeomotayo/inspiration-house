@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('page-heading', 'Admin Dashboard')

@section('admin-content')

    <!-- WELCOME -->
    <section class="dashboard-welcome">

        <span>Inspiration House</span>

        <h2>
            Welcome back, {{ auth()->user()->name }}
        </h2>

        <p>
            Manage your events, stories, gallery and website
            content from one place.
        </p>

    </section>


    <!-- STATISTICS -->
    <section class="dashboard-stats">

        <div class="dashboard-stat-card">

            <span>Events</span>

            <strong>
                {{ \App\Models\Event::count() }}
            </strong>

        </div>


        <div class="dashboard-stat-card">

            <span>Blog Posts</span>

            <strong>0</strong>

        </div>


        <div class="dashboard-stat-card">

            <span>Gallery Images</span>

            <strong>
                {{ \App\Models\EventImage::count() }}
            </strong>

        </div>


        <div class="dashboard-stat-card">

            <span>Team Members</span>

            <strong>0</strong>

        </div>

    </section>


    <!-- QUICK ACTIONS -->
    <section class="dashboard-section">

        <div class="dashboard-section-header">

            <div>

                <h3>Quick Actions</h3>

                <p>
                    Quickly manage your website content.
                </p>

            </div>

        </div>


        <div class="dashboard-quick-actions">

            <a
                href="{{ route('admin.events.create') }}"
                class="dashboard-action"
            >

                <strong>Create Event</strong>

                <span>
                    Add a new event, write-up and gallery.
                </span>

            </a>


            <a
                href="#"
                class="dashboard-action"
            >

                <strong>Create Blog Post</strong>

                <span>
                    Publish a new story or article.
                </span>

            </a>


            <a
                href="#"
                class="dashboard-action"
            >

                <strong>Upload Gallery</strong>

                <span>
                    Add photos to the website gallery.
                </span>

            </a>

        </div>

    </section>


    <!-- EVENTS -->
    <section class="dashboard-section">

        <div class="dashboard-section-header">

            <div>

                <h3>Events</h3>

                <p>
                    Manage events published by Inspiration House.
                </p>

            </div>


            <a
                href="{{ route('admin.events.index') }}"
                class="btn-primary"
            >
                Manage Events
            </a>

        </div>


        @php
            $recentEvents = \App\Models\Event::with('images')
                ->latest('created_at')
                ->take(5)
                ->get();
        @endphp


        @if($recentEvents->count())

            <div style="overflow-x:auto;">

                <table style="
                    width:100%;
                    border-collapse:collapse;
                ">

                    <thead>

                        <tr style="
                            border-bottom:1px solid #e8dfda;
                        ">

                            <th style="padding:14px;text-align:left;">
                                Event
                            </th>

                            <th style="padding:14px;text-align:left;">
                                Date
                            </th>

                            <th style="padding:14px;text-align:left;">
                                Pictures
                            </th>

                            <th style="padding:14px;text-align:left;">
                                Action
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @foreach($recentEvents as $event)

                            <tr style="
                                border-bottom:1px solid #eee;
                            ">

                                <td style="padding:14px;">

                                    <strong>
                                        {{ $event->title }}
                                    </strong>

                                </td>


                                <td style="padding:14px;">

                                    {{ $event->event_date?->format('F j, Y') ?? 'No date' }}

                                </td>


                                <td style="padding:14px;">

                                    {{ $event->images->count() }}

                                </td>


                                <td style="padding:14px;">

                                    <a
                                        href="{{ route('admin.events.edit', $event) }}"
                                        class="btn-primary"
                                    >
                                        Edit
                                    </a>

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        @else

            <div style="
                padding:40px 20px;
                text-align:center;
                border:1px dashed #e8dfda;
                border-radius:12px;
            ">

                <h3>No events yet</h3>

                <p>
                    Create your first event to start building
                    your event history.
                </p>

                <a
                    href="{{ route('admin.events.create') }}"
                    class="btn-primary"
                >
                    Create Event
                </a>

            </div>

        @endif

    </section>

@endsection