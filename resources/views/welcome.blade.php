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

    <div class="bg-white w-full h-full p-48">
        <div class=" w-fit grid grid-cols-2 gap-2">
            <x-button >Button</x-button>
            <x-button disabled >Button</x-button>

            <x-button secondary >Button</x-button>
            <x-button disabled secondary >Button</x-button>

            <x-button outline >Button</x-button>
            <x-button disabled outline >Button</x-button>

            <x-button danger >Button</x-button>
            <x-button disabled danger >Button</x-button>
        </div>

    </div>

</x-app-layout>
