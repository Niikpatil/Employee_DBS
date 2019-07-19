<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Hi alll</h1>


    <table>
                            <thead class="table-dark text">
                                <tr>
                                    <th class="text-center">First_name</th>
                                    <th class="text-center">Job_Profile</th>
                                    <th class="text-center">Shift</th>
                                    <th class="text-center">Option</th>
                                </tr>
                            </thead>
                            <tbody>


                            @foreach ($employee as $emp)
                                <tr>
                                    <td>{{ $emp->first_name }}</td>
                                    <td>{{ $emp->last_name }}</td>
                                    <td>{{ $emp->city }}</td>
                                </tr>
                            @endforeach

                            </tbody>
    </table>

</body>
</html>