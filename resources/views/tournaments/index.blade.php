<x-app-layout>
<div class="bg-blue-100">
<h1 class="text-3xl font-bold mb-4">Список турнірів</h1>

<a href="{{ route('tournaments.create')}}" class="bg-green-100 text-black px-2 py-0,5 rounded">Додати</a> <br>
 <hr>
<table border="1">
    <thead>
    <tr>
        <th class="border border-red-600 p-2">Код</th>
        <th class="border border-red-600 p-2">ПІБ</th>
        <th class="border border-red-600 p-2">Стать</th>
        <th class="border border-red-600 p-2">Вік</th>
        <th class="border border-red-600 p-2">Країна</th>
        <th class="border border-red-600 p-2">Оцінка 1</th>
        <th class="border border-red-600 p-2">Оцінка 2</th>
        <th class="border border-red-600 p-2">Оцінка 3</th>
        <th class="border border-red-600 p-2">Дії</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($tournaments as $tournament)
        <tr>
            <td class="border border-red-600 p-2">{{ $tournament->code }}</td>
            <td class="border border-red-600 p-2">{{ $tournament->full_name }}</td>
            <td class="border border-red-600 p-2">{{ $tournament->gender }}</td>
            <td class="border border-red-600 p-2">{{ $tournament->age }}</td>
            <td class="border border-red-600 p-2">{{ $tournament->country }}</td>
            <td class="border border-red-600 p-2">{{ $tournament->score_1 }}</td>
            <td class="border border-red-600 p-2">{{ $tournament->score_2 }}</td>
            <td class="border border-red-600 p-2">{{ $tournament->score_3 }}</td>
            <td class="border border-red-600 p-2">

                <form method="POST" action="{{ route('tournaments.destroy', $tournament->id) }}" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-pink-500 text-white px-3 py-1 rounded">Видалити</button>
                </form>

                <a href="{{ route('tournaments.edit', $tournament->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded">Редагувати</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</x-app-layout>
