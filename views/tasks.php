<html>
<head>
    <title>To Do List</title>
</head>
<body>

    <h1>To Do List</h1>
    {% if tasks is not empty %}
       <p>Here are all your tasks:</p>
    {% endif %}

    <ul>
        {% for task in tasks %}
          <li>{{ task.getDescription }}</li>
        {% endfor %}

    </ul>

</body>
</html>
