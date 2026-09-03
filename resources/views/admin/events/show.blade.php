@extends('layouts.admin')

@section('title', $event->title)

@section('page-heading', 'Event Preview')

@section('admin-content')

<section class="dashboard-section">

    <div class="dashboard-section-header">

        <div>

            <h2>{{ $event->title }}</h2>

            @if($event->event_date)

                <p>
                    {{ $event->event_date->format('F j, Y') }}
                </p>

            @endif

        </div>


        <div style="
            display:flex;
            gap:10px;
        ">

            <a
                href="{{ route('admin.events.edit', $event) }}"
                class="btn-primary"
            >
                Edit Event
            </a>


            <a
                href="{{ route('admin.events.index') }}"
                class="btn-secondary"
            >
                Back to Events
            </a>

        </div>

    </div>


    <!-- WRITE-UP -->
    <div style="
        line-height:1.8;
        margin-bottom:35px;
        white-space:pre-line;
    ">
        {{ $event->description }}
    </div>


    <!-- GALLERY -->
    @if($event->images->count())

        <div>

            <h3 style="margin-bottom:20px;">
                Event Gallery
            </h3>


            <div style="
                display:grid;
                grid-template-columns:
                    repeat(auto-fill, minmax(220px, 1fr));
                gap:18px;
            ">

                @foreach($event->images as $image)

                    <div>

                        <img
                            src="{{ asset('storage/' . $image->image_path) }}"
                            alt="{{ $event->title }}"
                            style="
                                width:100%;
                                height:220px;
                                object-fit:cover;
                                border-radius:10px;
                            "
                        >

                    </div>

                @endforeach

            </div>

        </div>

    @else

        <p>
            No pictures have been uploaded for this event yet.
        </p>

    @endif

</section>

@endsection