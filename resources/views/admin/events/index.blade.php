@extends('layouts.admin')

@section('title', 'Events')

@section('page-heading', 'Events')

@section('admin-content')

<section class="dashboard-section">

    <div class="dashboard-section-header">

        <div>

            <h2>Events</h2>

            <p>
                Create and manage Inspiration House events,
                write-ups and galleries.
            </p>

        </div>


        <a
            href="{{ route('admin.events.create') }}"
            class="btn-primary"
        >
            + Create Event
        </a>

    </div>


    @if(session('success'))

        <div style="
            padding:15px 18px;
            margin-bottom:20px;
            border-radius:8px;
            background:#e8f7ee;
            color:#176b3a;
        ">
            {{ session('success') }}
        </div>

    @endif


    @if($events->count())

        <div style="overflow-x:auto;">

            <table style="
                width:100%;
                border-collapse:collapse;
            ">

                <thead>

                    <tr style="
                        border-bottom:1px solid #e8dfda;
                    ">

                        <th style="padding:15px;text-align:left;">
                            Event
                        </th>

                        <th style="padding:15px;text-align:left;">
                            Date
                        </th>

                        <th style="padding:15px;text-align:left;">
                            Gallery
                        </th>

                        <th style="padding:15px;text-align:left;">
                            Created
                        </th>

                        <th style="padding:15px;text-align:left;">
                            Actions
                        </th>

                    </tr>

                </thead>


                <tbody>

                    @foreach($events as $event)

                        <tr style="
                            border-bottom:1px solid #eee;
                        ">

                            <td style="padding:15px;">

                                <strong>
                                    {{ $event->title }}
                                </strong>

                            </td>


                            <td style="padding:15px;">

                                {{ $event->event_date?->format('F j, Y') ?? 'No date' }}

                            </td>


                            <td style="padding:15px;">

                                {{ $event->images->count() }} pictures

                            </td>


                            <td style="padding:15px;">

                                {{ $event->created_at->format('M j, Y') }}

                            </td>


                            <td style="padding:15px;">

                                <div style="
                                    display:flex;
                                    gap:8px;
                                    align-items:center;
                                ">

                                    <a
                                        href="{{ route('admin.events.edit', $event) }}"
                                        class="btn-primary"
                                    >
                                        Edit
                                    </a>


                                    <form
                                        action="{{ route('admin.events.destroy', $event) }}"
                                        method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this event?');"
                                    >

                                        @csrf

                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn-secondary"
                                        >
                                            Delete
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    @else

        <div style="
            padding:60px 20px;
            text-align:center;
            border:1px dashed #e8dfda;
            border-radius:12px;
        ">

            <h3>No events yet</h3>

            <p>
                There are currently no events in the system.
            </p>

            <a
                href="{{ route('admin.events.create') }}"
                class="btn-primary"
            >
                Create Your First Event
            </a>

        </div>

    @endif

</section>

@endsection