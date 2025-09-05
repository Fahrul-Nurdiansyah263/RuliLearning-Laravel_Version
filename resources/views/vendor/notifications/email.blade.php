<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - RuliLearning</title>
</head>
<body style="font-family: 'Poppins', Arial, sans-serif; background-color: #f3f4f6; margin: 0; padding: 0; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;">
    <div style="min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 20px;">
        <div style="max-width: 570px; width: 100%; background-color: #ffffff; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,0.08); overflow: hidden;">
            {{-- Header --}}
            <div style="background-color: #2563eb; color: #ffffff; padding: 24px; text-align: center;">
                <h1 style="color:#fff; font-size: 28px; font-weight: 700; margin: 0; font-family: 'Poppins', Arial, sans-serif;">RuliLearning</h1>
            </div>

            <div style="padding: 32px;">
                {{-- Greeting --}}
                <p style="font-size: 20px; font-weight: 600; color: #111827; margin-bottom: 20px; font-family: 'Poppins', Arial, sans-serif;">
                    @if (! empty($greeting))
                        {{ $greeting }}
                    @else
                        @if ($level === 'error')
                            Ups!
                        @else
                            Halo!
                        @endif
                    @endif
                </p>

                {{-- Intro Lines --}}
                @foreach ($introLines as $line)
                    <p style="font-size: 16px; color: #374151; margin-bottom: 16px; line-height: 1.7; font-family: 'Poppins', Arial, sans-serif;">{{ $line }}</p>
                @endforeach

                {{-- Action Button --}}
                @isset($actionText)
                    <div style="text-align: center; margin: 32px 0;">
                        <a href="{{ $actionUrl }}" target="_blank" style="display: inline-block; padding: 14px 28px; background-color: #2563eb; color: white; text-decoration: none; border-radius: 8px; font-weight: 600; box-shadow: 0 4px 15px rgba(79, 70, 229, 0.4); font-family: 'Poppins', Arial, sans-serif;">
                            {{ $actionText }}
                        </a>
                    </div>
                @endisset

                {{-- Outro Lines --}}
                @foreach ($outroLines as $line)
                    <p style="font-size: 16px; color: #374151; margin-bottom: 16px; line-height: 1.7; font-family: 'Poppins', Arial, sans-serif;">{{ $line }}</p>
                @endforeach

                {{-- Salutation --}}
                <p style="margin-top: 32px; font-size: 16px; color: #374151; line-height: 1.7; font-family: 'Poppins', Arial, sans-serif;">
                    @if (! empty($salutation))
                        {{ $salutation }}
                    @else
                        Hormat kami,<br>
                        <strong style="font-family: 'Poppins', Arial, sans-serif;">Tim RuliLearning</strong>
                    @endif
                </p>

                {{-- Fallback URL --}}
                @isset($actionText)
                    <div style="border-top: 1px solid #e5e7eb; margin: 24px 0;"></div>
                    <div style="font-size: 14px; color: #6b7280; text-align: center; line-height: 1.6; font-family: 'Poppins', Arial, sans-serif;">
                        <p>Jika Anda mengalami masalah dengan tombol di atas, silakan salin dan tempel tautan berikut ke browser Anda:</p>
                        <p style="margin-top: 12px;">
                            <a href="{{ $actionUrl }}" style="color: #2563eb; word-break: break-all; font-family: 'Poppins', Arial, sans-serif;">{{ $actionUrl }}</a>
                        </p>
                    </div>
                @endisset
            </div>

        </div>
    </div>
</body>
</html>