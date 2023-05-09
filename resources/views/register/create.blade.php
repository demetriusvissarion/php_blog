<x-layout>
    <section class="px-6 py-8">
        <main>
            <form method="POST" action="/register">
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="username"
                    >
                        Username
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="username"
                           id="username"
                           required
                    >
                </div>
            </form>
        </main>
    </section>
</x-layout>
