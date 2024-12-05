<x-head />

<body class="h-full">
    <div class="min-h-full">
        <x-nav />
        <x-header>
            My Chess Games
        </x-header>
        <x-main>
            <x-gamesList :notations="$notations" />

        </x-main>
    </div>

</body>

</html>
