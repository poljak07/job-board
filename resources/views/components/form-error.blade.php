@props(['name'])

@error($name)
<p class="text-xs text-red-500 semi-bold">{{ $message }}</p>
@enderror
