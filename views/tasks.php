<html>
<head>
    <title>To Do List</title>
</head>
<body>

    <h1>To Do List</h1>

    {% if tasks is not empty %}
       <p>Here are all your tasks:</p>


        <ul>
            {% for task in tasks %}
              <li>{{ task.getDescription }}</li>
            {% endfor %}
        </ul>
    {% endif %}

    <form action='/tasks' method='post'>
        <label for='description'>Task Description</label>
        <input id='description' name='description' type='text'>

        <button type='submit'>Add Task</button>
    </form>
    <form action='/delete_tasks' method='post'>
        <button type='submit'>Clear</button>
    </form>
</body>
</html>
