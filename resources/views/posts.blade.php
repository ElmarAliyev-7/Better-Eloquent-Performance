<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>What is N + 1 Query: Typical Example, Debugbar and Eager Loading</h2>

<table>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Email</th>
    </tr>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->user->email}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>

