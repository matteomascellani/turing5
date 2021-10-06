<div>

    <select wire:change="selection" wire:model="selection">
        <option value="">-Seleziona-</option>
        <option value="1">Mostra dispari</option>
        <option value="2">Mostra pari</option>
    </select>

    <div @if ($selection == 2) style="display: none;" @endif>

        <select wire:model="numbers">
            @foreach ($numbers as $number)
                <option value="{{ $number }}">{{ $number }}</option>
            @endforeach
        </select>

    </div>

</div>
