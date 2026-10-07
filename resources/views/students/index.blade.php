<h1>All Courses</h1>

<a href="/courses/create">Add Course</a>

<hr>

@foreach($courses as $course)

    <h3>{{ $course->name }}</h3>

    <p>{{ $course->description }}</p>

    <p>Duration: {{ $course->duration }}</p>

    <p>Fee: {{ $course->fee }}</p>

    <p>Difficulty: {{ $course->difficulty }}</p>

    <p>Status: {{ $course->is_active ? 'Active' : 'Inactive' }}</p>

    <a href="/courses/{{ $course->id }}">View</a>
    |
    <a href="/courses/{{ $course->id }}/edit">Edit</a>

    <form action="/courses/{{ $course->id }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <hr>

@endforeach