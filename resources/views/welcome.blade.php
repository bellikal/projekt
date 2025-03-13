<x-app-layout class="bg-red-200 flex flex-col max-h-screen">
{{--<div class="bg-slate-100 flex flex-col gap-2 p-20">--}}
{{--    <x-headline size="1">Hello world!</x-headline>--}}
{{--    <x-headline size="2">Hello world!</x-headline>--}}
{{--    <x-headline size="3">Hello world!</x-headline>--}}
{{--    <x-headline size="4">Hello world!</x-headline>--}}
{{--    <x-headline size="5">Hello world!</x-headline>--}}
{{--    <x-headline size="6">Hello world!</x-headline>--}}
{{--</div>--}}

{{--    <x-header.header></x-header.header>--}}
{{--    <x-sidenav.sidenav></x-sidenav.sidenav>--}}

    <div class="bg-slate-50 w-full h-full p-48">
        <x-form-grid>
            <x-form-grid>
                <x-input label="First Name" name="first_name" />
                <x-input label="Last Name" name="last_name" />
                <x-input label="Email" name="email" />
                <x-input label="Phone" name="phone" />
            </x-form-grid>

        </x-form-grid>

    </div>

</x-app-layout>
