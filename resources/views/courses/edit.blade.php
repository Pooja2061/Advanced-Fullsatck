<h1>Edit Course</h1>

<form action="/courses/{{ $course->id }}" method="POST">

    @csrf
    @method('PUT')

    <label>Course Name:</label>
    <br>
    <input type="text" name="name" value="{{ $course->name }}">
    <br><br>

    <label>Description:</label>
    <br>
    <textarea name="description">{{ $course->description }}</textarea>
    <br><br>

    <button type="submit">Update Course</button>

</form>

<br>

<a href="/courses">Back to Courses</a>