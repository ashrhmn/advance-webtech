<h1>Create Student</h1>

<form action="/student/submit" method="POST">
    {{ csrf_field() }}
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="user_id" placeholder="User_id">
    <select name="d_id" id="">
        @foreach ($departments as $department)
            <option value="{{ $department->id }}">{{ $department->name }}</option>
        @endforeach
    </select>
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="text" name="dob" placeholder="DOB">
    <input type="text" name="cgpa" placeholder="CGPA">
    <input type="submit" name="submit" value="Submit">
</form>
