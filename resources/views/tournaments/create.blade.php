<h2>Додати учасника</h2>

<form method="post" action="{{ route('tournaments.store') }}">
    @csrf
    <div>
        <label for="code">Код:</label>
        <input type="text" id="code" name="code" required>
    </div>

    <div>
        <label for="full_name">ПІБ:</label>
        <input type="text" id="full_name" name="full_name" required>
    </div>

    <div>
        <label for="gender">Стать:</label>
        <input type="text" id="gender" name="gender" required>
    </div>

    <div>
        <label for="age">Вік:</label>
        <input type="number" id="age" name="age" required>
    </div>

    <div>
        <label for="country">Країна:</label>
        <input type="text" id="country" name="country" required>
    </div>

    <div>
        <label for="score_1">Перша оцінка:</label>
        <input type="number" id="score_1" name="score_1" required>
    </div>

    <div>
        <label for="score_2">Друга оцінка:</label>
        <input type="number" id="score_2" name="score_2" required>
    </div>

    <div>
        <label for="score_3">Третя оцінка:</label>
        <input type="number" id="score_3" name="score_3" required>
    </div>

    <button type="submit">Створити</button>
</form>

<a href="{{route('tournaments.index')}}">Повернутися до списку</a>
