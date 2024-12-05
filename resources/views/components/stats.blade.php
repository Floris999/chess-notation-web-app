<!-- resources/views/components/stats.blade.php -->
<section class="py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div
            class="rounded-2xl py-10 px-10 xl:py-16 xl:px-20 bg-gray-50 flex items-center justify-between flex-col gap-16 lg:flex-row">
            <div class="w-full lg:w-60">
                <h2 class="font-manrope text-4xl font-bold text-gray-900 mb-4 text-center lg:text-left">
                    Chess Stats
                </h2>
                <p class="text-sm text-gray-500 leading-6 text-center lg:text-left">
                    Based on all your registered chess games
                </p>
            </div>
            <div class="w-full lg:w-4/5">
                <div class="flex flex-col flex-1 gap-10 lg:gap-0 lg:flex-row lg:justify-between">
                    <div class="block">
                        <div class="font-manrope font-bold text-4xl text-indigo-600 mb-3 text-center lg:text-left">
                            {{ $gamesWon }}
                        </div>
                        <span class="text-gray-900 text-center block lg:text-left">Games Won</span>
                    </div>
                    <div class="block">
                        <div class="font-manrope font-bold text-4xl text-indigo-600 mb-3 text-center lg:text-left">
                            {{ $gamesLost }}
                        </div>
                        <span class="text-gray-900 text-center block lg:text-left">Games Lost</span>
                    </div>
                    <div class="block">
                        <div class="font-manrope font-bold text-4xl text-indigo-600 mb-3 text-center lg:text-left">
                            {{ $gamesDraw }}
                        </div>
                        <span class="text-gray-900 text-center block lg:text-left">Games Draw</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>