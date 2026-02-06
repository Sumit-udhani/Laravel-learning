<div>
    <h1>Add New User</h1>
    <form action="addUser" method="post">
        @csrf
    <div>
        <input type="checkbox" name="skill[]" value="PHP" id="PHP">
        <label for="PHP">PHP</label>
         <input type="checkbox" name="skill[]" value="NODE" id="NODE">
        <label for="NODE">NODE</label>
         <input type="checkbox" name="skill[]" value="JAVA" id="JAVA">
        <label for="JAVA">JAVA</label>
    </div>
    <div>
        <h5>Gender</h5>
        <input type="radio" name="gender" value="male" id="male">
        <label for="male">male</label>
        <input type="radio" name="gender" value="female" id="female">
        <label for="female">female</label>
    </div>
    <div>
        <h5>City</h5>
        <select name="city" id="">
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="Delhi">Delhi</option>
            <option value="Mumbai">Mumbai</option>
        </select>
        <button>Add User</button>
    </div>
    </form>
</div>
