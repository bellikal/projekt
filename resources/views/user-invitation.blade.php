<x-emails-layout title="Einladung zu {{ config('app.name') }}">
    <div style="padding: 2rem;">
        <p style="font-size: 1.5rem; font-weight: 700; line-height: 1.6; margin: 0 0 1.5rem 0; text-align: center;">
            Du wurdest zu <span style="color: #FC7D27">{{ config('app.name') }}</span> eingeladen!<br>
        </p>

        <p style="font-size: 1rem; line-height: 1.6; margin: 0 0 1.5rem 0; text-align: center;">
            Klicke auf den folgenden Button, um dein Passwort festzulegen und dich anzumelden.
        </p>

        <div style="text-align: center; margin: 3rem;">
            <a href="url('/set-password?token=' . ($token ?? 'fantasy-token'))" style="display: inline-block; padding: 1rem 2rem; border-radius: 8px; font-weight: 600; font-size: 1rem; color: #ffffff; background-color: #334155; text-decoration: none; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                Passwort festlegen
            </a>
        </div>

        <p style="font-size: 0.875rem; line-height: 1.5; color: #6b7280; margin: 0 0 1rem 0;">
            Falls du diese Einladung nicht erwartet hast, kannst du diese E-Mail einfach ignorieren.
        </p>

        <p style="font-size: 0.875rem; line-height: 1.5; color: #6b7280; margin: 0;">
            Beste Grüße,<br>
            Dein {{ config('app.name') }}-Team
        </p>
    </div>
</x-emails-layout>
