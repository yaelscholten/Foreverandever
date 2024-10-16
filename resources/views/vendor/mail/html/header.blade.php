@props(['url'])

<tr>
    <td class="header" style="background-color: #ebfaec; width: 100%; height: 200px; text-align: center; padding: 20px;">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="{{ asset('fotos/login-imgage.jpg') }}" alt="Logo" style="width: 100px; height: auto;" />
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
