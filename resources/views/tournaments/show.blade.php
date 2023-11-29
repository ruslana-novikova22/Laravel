<html>
<head>
    <title>Інформація про турнір</title>
</head>
<body>
<h1>Інформація про турнір</h1>

<table border="1">
    <tr>
        <th>Код</th>
        <td>{{ $tournament->code }}</td>
    </tr>
    <tr>
        <th>ПІБ</th>
        <td>{{ $tournament->full_name }}</td>
    </tr>
    <tr>
        <th>Стать</th>
        <td>{{ $tournament->gender }}</td>
    </tr>
    <tr>
        <th>Вік</th>
        <td>{{ $tournament->age }}</td>
    </tr>
    <tr>
        <th>Країна</th>
        <td>{{ $tournament->country }}</td>
    </tr>
    <tr>
        <th>Оцінка 1</th>
        <td>{{ $tournament->score_1 }}</td>
    </tr>
    <tr>
        <th>Оцінка 2</th>
        <td>{{ $tournament->score_2 }}</td>
    </tr>
    <tr>
        <th>Оцінка 3</th>
        <td>{{ $tournament->score_3 }}</td>
    </tr>
</table>

</body>
</html>
