<h1>Course Details</h1>

<p>
    <strong>Name:</strong> {{ $course->name }}
</p>

<p>
    <strong>Description:</strong> {{ $course->description }}
</p>

<a href="/courses/{{ $course->id }}/edit">Edit</a>

<br><br>

<a href="/courses">Back to Courses</a>