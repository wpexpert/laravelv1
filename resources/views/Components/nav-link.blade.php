@props(['active' => false])
<?php $clases = ( $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white') ; ?>
<a {{ $attributes }} class="{{ $clases }} rounded-md px-3 py-2 text-sm font-medium">{{ $slot }} </a>
