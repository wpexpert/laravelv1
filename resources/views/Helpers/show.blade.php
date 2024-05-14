
<x-layout id="newid" value="123123123123" >
    <x-slot:heading>NationalD Day</x-slot:heading>
    <p> HOME PAGE </p>
    <x-slot:footer> Footer Slot </x-slot:footer>
</x-layout>

@foreach ($salons as $salon)
    <span> {{ $salon->salon->name }} </span>
    <h4> {{ $salon['firstname'] }}   </h4> 
  
@endforeach
<div>
{{ $salons->links(); }}
</div>