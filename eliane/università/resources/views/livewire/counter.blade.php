<div>
    {{-- Stop trying to control. --}}

    <h1>hello bonjour comment tu vas?</h1>

     <div>
         <select wire:change="choix" wire:model="selection" >
             <option value="">-scelgli--</option>
             <option value="1">primo</option>
             <option value="2">secondo</option>
             <option value="3">terzo</option>
         </select></br>

       <div @if($selection==2) style="display: none" @endif>

         <select wire:model="students">

         @foreach ($students as $item)

         <option value="{{$item}}">{{$item}}</option>

         @endforeach

         </select>
        </div>


    </div>
</div>

