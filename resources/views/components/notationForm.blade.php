@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20">
                <title>Close</title>
                <path
                    d="M14.348 14.849a1 1 0 01-1.414 0L10 11.415l-2.934 2.934a1 1 0 11-1.414-1.414l2.934-2.934-2.934-2.934a1 1 0 111.414-1.414L10 8.585l2.934-2.934a1 1 0 111.414 1.414l-2.934 2.934 2.934 2.934a1 1 0 010 1.414z" />
            </svg>
        </span>
    </div>
@endif

<form action="{{ route('notations.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
    @csrf
    <div class="mb-4">
        <label for="event" class="block text-sm font-medium text-gray-700">Event</label>
        <input type="text" name="event" id="event"
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
    </div>
    <div class="mb-4">
        <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
        <input type="date" name="date" id="date" value="{{ date('Y-m-d') }}"
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
    </div>
    <div class="grid grid-cols-4 gap-4 mb-4">
        <div>
            <label for="round" class="block text-sm font-medium text-gray-700">Round</label>
            <input type="text" name="round" id="round"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>
        <div>
            <label for="board" class="block text-sm font-medium text-gray-700">Board</label>
            <input type="text" name="board" id="board"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>
        <div>
            <label for="section" class="block text-sm font-medium text-gray-700">Section</label>
            <input type="text" name="section" id="section"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>
        <div>
            <label for="opening" class="block text-sm font-medium text-gray-700">Opening</label>
            <input type="text" name="opening" id="opening"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>
    </div>
    <div class="grid grid-cols-2 gap-4 mb-4">
        <div>
            <label for="white_player" class="block text-sm font-medium text-gray-700">White (name of player)</label>
            <input type="text" name="white_player" id="white_player"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>
        <div>
            <label for="black_player" class="block text-sm font-medium text-gray-700">Black (name of player)</label>
            <input type="text" name="black_player" id="black_player"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>
    </div>
    <div class="grid grid-cols-2 gap-4 mb-4">
        <div>
            <h2 class="text-lg font-medium text-gray-700">Moves 1-25</h2>
            @for ($i = 1; $i <= 25; $i++)
                <div class="mb-2">
                    <label for="white_move_{{ $i }}"
                        class="block text-sm font-medium text-gray-700">{{ $i }}. White</label>
                    <input type="text" name="white_move_{{ $i }}" id="white_move_{{ $i }}"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    <label for="black_move_{{ $i }}"
                        class="block text-sm font-medium text-gray-700">{{ $i }}. Black</label>
                    <input type="text" name="black_move_{{ $i }}" id="black_move_{{ $i }}"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
            @endfor
        </div>
        <div>
            <h2 class="text-lg font-medium text-gray-700">Moves 26-50</h2>
            @for ($i = 26; $i <= 50; $i++)
                <div class="mb-2">
                    <label for="white_move_{{ $i }}"
                        class="block text-sm font-medium text-gray-700">{{ $i }}. White</label>
                    <input type="text" name="white_move_{{ $i }}" id="white_move_{{ $i }}"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    <label for="black_move_{{ $i }}"
                        class="block text-sm font-medium text-gray-700">{{ $i }}. Black</label>
                    <input type="text" name="black_move_{{ $i }}" id="black_move_{{ $i }}"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
            @endfor
        </div>
    </div>
    <div class="mb-4">
        <h2 class="text-lg font-medium text-gray-700">Results</h2>
        <div class="flex items-center mb-2">
            <input type="checkbox" name="result_white_won" id="result_white_won"
                class="h-4 w-4 text-blue-600 border-gray-300 rounded">
            <label for="result_white_won" class="ml-2 block text-sm text-gray-900">White Won</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="checkbox" name="result_draw" id="result_draw"
                class="h-4 w-4 text-blue-600 border-gray-300 rounded">
            <label for="result_draw" class="ml-2 block text-sm text-gray-900">Draw</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="checkbox" name="result_black_won" id="result_black_won"
                class="h-4 w-4 text-blue-600 border-gray-300 rounded">
            <label for="result_black_won" class="ml-2 block text-sm text-gray-900">Black Won</label>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-4 mb-4">
        <div>
            <label for="white_signature" class="block text-sm font-medium text-gray-700">White Signature</label>
            <input type="text" name="white_signature" id="white_signature"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>
        <div>
            <label for="black_signature" class="block text-sm font-medium text-gray-700">Black Signature</label>
            <input type="text" name="black_signature" id="black_signature"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>
    </div>
    <div class="mt-4">
        <button type="submit" class="px-4 py-2 bg-gray-800 text-white rounded-md">Save Notation</button>
    </div>
</form>
