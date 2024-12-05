<!-- resources/views/components/notation-list.blade.php -->
<ul role="list" class="divide-y divide-gray-100">
    @foreach ($notations as $notation)
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
                <img class="h-12 w-12 flex-none" src="{{ asset('images/horse.png') }}" alt="">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">{{ $notation->white_player }} vs
                        {{ $notation->black_player }}</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $notation->event }}</p>
                </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-900">
                    {{ $notation->result_white_won ? 'White Won' : ($notation->result_black_won ? 'Black Won' : 'Draw') }}
                </p>
                <p class="mt-1 text-xs leading-5 text-gray-500">Played on: {{ $notation->date }}</p>
            </div>
        </li>
    @endforeach
</ul>
