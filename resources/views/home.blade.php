<x-head />

<body class="h-full">
    <div class="min-h-full">
        <x-nav />
        <x-header>
            Welcome!
        </x-header>
        <x-main>
            <x-stats :gamesWon="$gamesWon" :gamesLost="$gamesLost" :gamesDraw="$gamesDraw" />
        </x-main>
    </div>

</body>

</html>
