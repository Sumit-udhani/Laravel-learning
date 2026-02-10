<div>
    <h1>Add new user</h1>
    <span>{{session('msg')}}</span>
    <form action="add" method="post">
        @csrf
        <input type="text" name="username" placeholder="Enter username"><br>
        <input type="email" name="email" placeholder="Enter email"><br>
        <input type="password" name="password" placeholder="Enter Password"><br>
        
    <button>Submit</button>
    </form>
</div>
<style>
    span{
            background-color: lightgreen;
        color: red;
        
    }
</style>
