@extends('layouts.admin')

@section('title', 'Create Event')

@section('page-heading', 'Create Event')

@section('admin-content')

<section class="dashboard-section">

    <div class="dashboard-section-header">

        <div>

            <h2>Create Event</h2>

            <p>
                Add an event write-up and upload its pictures.
            </p>

        </div>

    </div>


    @if($errors->any())

        <div style="
            padding:15px;
            margin-bottom:20px;
            border-radius:8px;
            background:#fdecec;
            color:#8a1c1c;
        ">

            <ul style="
                margin:0;
                padding-left:20px;
            ">

                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    <form
        action="{{ route('admin.events.store') }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf


        <!-- TITLE -->
        <div style="margin-bottom:22px;">

            <label for="title">
                <strong>Event Title</strong>
            </label>

            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
                required
                placeholder="Enter event title"
                style="
                    width:100%;
                    padding:13px;
                    margin-top:8px;
                    border:1px solid #ddd;
                    border-radius:8px;
                "
            >

        </div>


        <!-- DATE -->
        <div style="margin-bottom:22px;">

            <label for="event_date">
                <strong>Event Date</strong>
            </label>

            <input
                type="date"
                id="event_date"
                name="event_date"
                value="{{ old('event_date') }}"
                style="
                    width:100%;
                    padding:13px;
                    margin-top:8px;
                    border:1px solid #ddd;
                    border-radius:8px;
                "
            >

        </div>


        <!-- WRITE-UP -->
        <div style="margin-bottom:22px;">

            <label for="description">
                <strong>Event Write-up</strong>
            </label>

            <textarea
                id="description"
                name="description"
                rows="14"
                required
                placeholder="Write about this event..."
                style="
                    width:100%;
                    padding:13px;
                    margin-top:8px;
                    border:1px solid #ddd;
                    border-radius:8px;
                    resize:vertical;
                "
            >{{ old('description') }}</textarea>

        </div>


        <!-- GALLERY -->
        <div style="margin-bottom:28px;">

            <label for="images">
                <strong>Event Gallery</strong>
            </label>

            <p style="
                margin:6px 0 12px;
                color:#6b6b6b;
            ">
                Select as many pictures as you want to upload.
            </p>

            <input
                type="file"
                id="images"
                name="images[]"
                accept="image/jpeg,image/png,image/webp"
                multiple
            >

        </div>


        <!-- ACTIONS -->
        <div style="
            display:flex;
            gap:12px;
            align-items:center;
        ">

            <button
                type="submit"
                class="btn-primary"
            >
                Publish Event
            </button>


            <a
                href="{{ route('admin.events.index') }}"
                class="btn-secondary"
            >
                Cancel
            </a>

        </div>

    </form>

</section>

@endsection