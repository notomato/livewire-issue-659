<div>
    <button wire:click="addChildren">Add child components</button>
    parent component

    <ul>
        @foreach($children as $child)
        <li><livewire:child-component :title="$child['title']"></livewire:child-component></li>
        @endforeach
    </ul>

</div>
