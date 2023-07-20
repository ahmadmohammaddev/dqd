<!DOCTYPE html>
<html>
<head>
    <title>Table Export</title>
</head>
<body>
    <table>
        @foreach($data as $row)
            <tr>
                @foreach($row as $cell)
                    <td>{{ $cell }}</td>
                @endforeach
            </tr>
        @endforeach
    </table>
</body>
</html>
