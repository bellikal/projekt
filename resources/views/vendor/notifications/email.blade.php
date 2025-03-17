<x-emails-layout title="{{ $greeting ?? __('Benachrichtigung') }}">
    <div style="margin: 2rem;">
        @if (! empty($greeting))
            <p style="text-align: center; font-size: 1.5rem; font-weight: 700; text-align: center;">
                {{ $greeting }}
            </p>
        @endif

        @foreach ($introLines as $line)
            <p style="text-align: center; font-size: 1rem; line-height: 1.6;">{{ $line }}</p>
        @endforeach

        @isset($actionText)
            <div style="text-align: center; margin: 3rem;">
                <a href="{{ $actionUrl }}" style="display: inline-block; padding: 1rem 2rem; border-radius: 8px; font-weight: 600; font-size: 1rem; color: #ffffff; background-color: #334155; text-decoration: none;">
                    {{ $actionText }}
                </a>
            </div>
        @endisset

        @foreach ($outroLines as $line)
            <p style="text-align: center; font-size: 0.875rem; line-height: 1.5; color: #6b7280;">{{ $line }}</p>
        @endforeach

        @if (! empty($salutation))
            <p style="text-align: center; font-size: 0.875rem; color: #6b7280;">{{ $salutation }}</p>
        @endif

        @isset($actionText)
            <p style="font-size: 0.875rem; color: #6b7280; text-align: center;">
                @lang(
                    "Falls der \":actionText\" Button nicht funktioniert, kopiere und füge die folgende URL in deinen Browser ein:",
                    ['actionText' => $actionText]
                )
                <br>
                <a href="{{ $actionUrl }}" style="color: #2563eb;">{{ $displayableActionUrl }}</a>
            </p>
        @endisset
    </div>
</x-emails-layout>
