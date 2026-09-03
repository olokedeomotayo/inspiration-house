@extends('layouts.admin')

@section('title', 'Edit Event')

@section('page-heading', 'Edit Event')

@section('admin-content')

<section class="dashboard-section">

    <div class="dashboard-section-header">

        <div>

            <h2>Edit Event</h2>

            <p>
                Update the event write-up or add more gallery pictures.
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
        action="{{ route('admin.events.update', $event) }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf

        @method('PUT')


        <!-- TITLE -->
        <div style="margin-bottom:22px;">

            <label for="title">
                <strong>Event Title</strong>
            </label>

            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title', $event->title) }}"
                required
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
                value="{{ old('event_date', $event->event_date?->format('Y-m-d')) }}"
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
        <div style="margin-bottom:25px;">

            <label for="description">
                <strong>Event Write-up</strong>
            </label>

            <textarea
                id="description"
                name="description"
                rows="14"
                required
                style="
                    width:100%;
                    padding:13px;
                    margin-top:8px;
                    border:1px solid #ddd;
                    border-radius:8px;
                    resize:vertical;
                "
            >{{ old('description', $event->description) }}</textarea>

        </div>


        <!-- CURRENT GALLERY -->
        @if($event->images->count())

            <div style="margin-bottom:30px;">

                <h3 style="margin-bottom:15px;">
                    Current Gallery
                </h3>


                <div style="
                    display:grid;
                    grid-template-columns:
                        repeat(auto-fill, minmax(180px, 1fr));
                    gap:15px;
                ">

                    @foreach($event->images as $image)

                        <div style="
                            border:1px solid #e8dfda;
                            border-radius:10px;
                            padding:8px;
                            background:#fff;
                        ">

                            <img
                                src="{{ asset('storage/' . $image->image_path) }}"
                                alt="{{ $event->title }}"
                                style="
                                    width:100%;
                                    height:150px;
                                    object-fit:cover;
                                    border-radius:7px;
                                "
                            >

                        </div>

                    @endforeach

                </div>

            </div>

        @endif


        <!-- ADD MORE IMAGES -->
        <div style="margin-bottom:28px;">

            <label for="images">
                <strong>Add More Pictures</strong>
            </label>

            <p style="
                margin:6px 0 12px;
                color:#6b6b6b;
            ">
                Select additional pictures for this event.
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
                Save Changes
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