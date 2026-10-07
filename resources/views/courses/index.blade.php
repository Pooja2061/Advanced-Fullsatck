<h1>Courses List</h1>

<a href="/courses/create">Add Course</a>

<hr>

<h2>All Courses</h2>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

@foreach($courses as $course)

    <p>
        <strong>Name:</strong> {{ $course->name }}
    </p>

    <p>
        <strong>Description:</strong> {{ $course->description }}
    </p>

    <a href="/courses/{{ $course->id }}">View</a>

    <a href="/courses/{{ $course->id }}/edit">Edit</a>

    <form action="/courses/{{ $course->id }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')

        <button type="submit">Delete</button>
    </form>

    <hr>

@endforeach