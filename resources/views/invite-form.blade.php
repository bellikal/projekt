<x-app-layout>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <form action="{{ route('invite') }}" method="POST" class="flex p-16">
        @csrf
        <x-form-grid>
            <x-input label="name" id="name" name="name"/>
            <x-input label="email" id="email" name="email"/>

            <x-button class="w-fit uppercase" type="submit">Einladung senden</x-button>
        </x-form-grid>

    </form>

</x-app-layout>
