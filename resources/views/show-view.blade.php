<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>One to One</h3>
    {{-- <table>
        <tr>
            <th>Customer</th>
            <th>Email</th>
            <th>Model</th>
        </tr>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->mobile->model }}</td>
        </tr>
        @endforeach
    </table> --}}
    {{-- <h3>One to Many (1)</h3>
    <table>
        <tr>
            <th>Title</th>
            <th>Message</th>
        </tr>
        @foreach ($posts as $data)
        <tr>
            <td>{{ $data->title }}</td>
            @foreach ($data->comments as $comment)
            <td>{{ $comment->message }}</td>
            @endforeach
        </tr>
        @endforeach
    </table> --}}

    <h3>One to Many (2)</h3>
    <table>
        <tr>
            <th>Message</th>
            <th>Title</th>
        </tr>
        @foreach ($comments as $comment)
        <tr>
            <td>{{ $comment->message }}</td>
            <td>{{ $comment->post->title }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>