<!DOCTYPE html>
<html>
<head>
    <title>Laravel 11 Generate PDF Example - ITSolutionStuff.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
    <h1 style="text-align: center;">{{ $title }}</h1>
    <p style="text-align: center;">{{ $date }}</p>
    <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</p>

    <table class="table table-bordered" style="width: 100%; border-collapse: collapse; margin-left: auto; margin-right: auto;">
        <thead>
            <tr>
                <th style="border: 1px solid #dee2e6; padding: 8px;">ID</th>
                <th style="border: 1px solid #dee2e6; padding: 8px;">Name</th>
                <th style="border: 1px solid #dee2e6; padding: 8px;">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td style="border: 1px solid #dee2e6; padding: 8px;">{{ $user->id }}</td>
                <td style="border: 1px solid #dee2e6; padding: 8px;">{{ $user->name }}</td>
                <td style="border: 1px solid #dee2e6; padding: 8px;">{{ $user->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>