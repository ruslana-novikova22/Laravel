<x-app-layout>
<div class="bg-yellow-100 font-sans">
<div class="max-w-md mx-auto bg-white rounded p-8 shadow-md">
    <h1 class="text-3xl font-bold mb-4">Редагування турніру</h1>

    <form action="{{ route('tournaments.update', $tournaments->id)}}" method="POST" class="mb-4">
        @csrf
        @method('PUT')

        <label for="code" class="block">Код:</label>
        <input type="code" name="code" value="{{ $tournaments->code }}" class="border-2 rounded p-2 mb-2">
        <br>

        <label for="full_name" class="block">ПІБ:</label>
        <input type="text" name="full_name" value="{{ $tournaments->full_name }}" class="border-2 rounded p-2 mb-2">
        <br>

        <label for="gender" class="block">Стать:</label>
        <input type="text" name="gender" value="{{ $tournaments->gender }}" class="border-2 rounded p-2 mb-2">
        <br>

        <label for="age" class="block">Вік:</label>
        <input type="number" name="age" value="{{ $tournaments->age }}" class="border-2 rounded p-2 mb-2">
        <br>

        <label for="country" class="block">Країна:</label>
        <input type="text" name="country" value="{{ $tournaments->country }}" class="border-2 rounded p-2 mb-2">
        <br>

        <label for="score_1" class="block">Перша оцінка:</label>
        <input type="number" name="score_1" value="{{ $tournaments->score_1 }}" class="border-2 rounded p-2 mb-2">
        <br>

        <label for="score_2" class="block">Друга оцінка:</label>
        <input type="number" name="score_2" value="{{ $tournaments->score_2 }}" class="border-2 rounded p-2 mb-2">
        <br>

        <label for="score_3" class="block">Третя оцінка:</label>
        <input type="number" name="score_3" value="{{ $tournaments->score_3 }}" class="border-2 rounded p-2 mb-2">
        <br>

        <button type="submit" class="bg-green-300 text-black py-2 px-4 rounded">Оновити турнір</button>
    </form>

    <a href="{{ route('tournaments.index') }}" class="text-red-600">Повернутися до списку</a>
</div>
</div>
</x-app-layout>
