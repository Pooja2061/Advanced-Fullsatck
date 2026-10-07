<h1>Add Course</h1>

<form action="/courses" method="POST">
    @csrf

    <label>Course Code:</label>
    <input type="text" name="code" required>

    <br><br>

    <label>Course Name:</label>
    <input type="text" name="name" required>

    <br><br>

    <label>Description:</label>
    <textarea name="description"></textarea>

    <br><br>

    <label>Duration:</label>
    <input type="number" name="duration" required>

    <br><br>

    <label>Fee:</label>
    <input type="number" name="fee" required>

    <br><br>

    <label>Difficulty:</label>
    <select name="difficulty" required>
        <option value="Easy">Easy</option>
        <option value="Medium">Medium</option>
        <option value="Hard">Hard</option>
    </select>

    <br><br>

    <label>
        <input type="checkbox" name="is_active" value="1">
        Active
    </label>

    <br><br>

    <button type="submit">Add Course</button>
</form>

<br>

<a href="/courses">Back to Courses</a>