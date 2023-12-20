<x-app-layout>

<div class="bg-pink-100 font-sans p-4">

<div class="max-w-md mx-auto bg-white rounded p-8 shadow-md">
    <h2 class="text-2xl font-semibold mb-4">Додати учасника</h2>

    <form method="post" action="{{ route('tournaments.store') }}" class="space-y-4">
        @csrf

        <div>
            <label for="code" class="block">Код:</label>
            <input type="text" id="code" name="code" required class="w-full border-2 rounded p-2">
        </div>

        <div>
            <label for="full_name" class="block">ПІБ:</label>
            <input type="text" id="full_name" name="full_name" required class="w-full border-2 rounded p-2">
        </div>

        <div>
            <label for="gender" class="block">Стать:</label>
            <input type="text" id="gender" name="gender" required class="w-full border-2 rounded p-2">
        </div>

        <div>
            <label for="age" class="block">Вік:</label>
            <input type="number" id="age" name="age" required class="w-full border-2 rounded p-2">
        </div>

        <div>
            <label for="country" class="block">Країна:</label>
            <input type="text" id="country" name="country" required class="w-full border-2 rounded p-2">
        </div>

        <div>
            <label for="score_1" class="block">Перша оцінка:</label>
            <input type="number" id="score_1" name="score_1" required class="w-full border-2 rounded p-2">
        </div>

        <div>
            <label for="score_2" class="block">Друга оцінка:</label>
            <input type="number" id="score_2" name="score_2" required class="w-full border-2 rounded p-2">
        </div>

        <div>
            <label for="score_3" class="block">Третя оцінка:</label>
            <input type="number" id="score_3" name="score_3" required class="w-full border-2 rounded p-2">
        </div>

        <button type="submit" class="bg-green-300 text-black py-2 px-4 rounded">Створити</button>
    </form>

    <a href="{{ route('tournaments.index') }}" class="text-red-600 block mt-4">Повернутися до списку</a>
</div>

</div>

</x-app-layout>
