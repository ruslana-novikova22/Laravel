<html>
<head>
    <title>Список турнірів</title>
</head>
<body>
<h1>Список турнірів</h1>

<a href="{{ route('tournaments.create')}}">Додати</a> <br>

<table border="1">
    <thead>
    <tr>
        <th>Код</th>
        <th>ПІБ</th>
        <th>Стать</th>
        <th>Вік</th>
        <th>Країна</th>
        <th>Оцінка 1</th>
        <th>Оцінка 2</th>
        <th>Оцінка 3</th>
        <th>Дії</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($tournaments as $tournament)
        <tr>
            <td>{{ $tournament->code }}</td>
            <td>{{ $tournament->full_name }}</td>
            <td>{{ $tournament->gender }}</td>
            <td>{{ $tournament->age }}</td>
            <td>{{ $tournament->country }}</td>
            <td>{{ $tournament->score_1 }}</td>
            <td>{{ $tournament->score_2 }}</td>
            <td>{{ $tournament->score_3 }}</td>
            <td>

                <form method="POST" action="{{ route('tournaments.destroy', $tournament->id) }}" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Видалити</button>
                </form>

                <a href="{{ route('tournaments.edit', $tournament->id) }}">Редагувати</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
