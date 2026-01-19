<x-layout>
    <main class="py-10">
        <h1>Veja seus hábitos ganharem vida</h1>
        <section>
            <div>
                @error('email')
                    <p class="text-red-500 mt-2">{{ $message }}</p>
                @enderror
            </div>
            <form action="/login" method="POST" class="flex flex-col gap-4">
                @csrf
                <input type="email" name="email" placeholder="your@email.com" class="bg-white p-2 border-2">
                <input type="password" name="password" placeholder="*********" class="bg-white p-2 border-2">
                <button type="submit" class="bg-white p-2 border-2">Login</button>
            </form>
    </main>
</x-layout>
