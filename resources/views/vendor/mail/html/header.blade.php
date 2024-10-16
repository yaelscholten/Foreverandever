@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<x-application-logo class="w-20 h-20 fill-current text-gray-500" />
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
