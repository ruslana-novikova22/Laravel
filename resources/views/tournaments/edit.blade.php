<h1>Редагувати учасника</h1>

<html>
<head>
    <title>Редагування турніру</title>
</head>
<body>
<h1>Редагування турніру</h1>

<form action="{{ route('tournaments.update',$tournaments->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="code">Код:</label>
    <input type="code" name="code" value="{{ $tournaments->id }}">
    <br>

    <label for="full_name">ПІБ:</label>
    <input type="text" name="full_name" value="{{ $tournaments->full_name }}">
    <br>

    <label for="gender">Стать:</label>
    <input type="text" name="gender" value="{{ $tournaments->gender }}">
    <br>

    <label for="age">Вік:</label>
    <input type="number" name="age" value="{{ $tournaments->age }}">
    <br>

    <label for="country">Країна:</label>
    <input type="text" name="country" value="{{ $tournaments->country }}">
    <br>

    <label for="score_1">Перша оцінка:</label>
    <input type="number" name="score_1" value="{{ $tournaments->score_1 }}">
    <br>

    <label for="score_2">Друга оцінка:</label>
    <input type="number" name="score_2" value="{{ $tournaments->score_2 }}">
    <br>

    <label for="score_3">Третя оцінка:</label>
    <input type="number" name="score_3" value="{{ $tournaments->score_3 }}">
    <br>

    <button type="submit">Оновити турнір</button>
</form>

<a href="{{route('tournaments.index')}}">Повернутися до списку</a>


</body>
</html>
