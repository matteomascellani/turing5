{{-- @if (false)
    <p> true </p>
@else
    <p> false </p>
@endif

@unless (empty($name))
    <h2>name isn't empty</h2>
@endunless

@isset($name)
    <h2>Name has been set</h2>
@endisset

@switch($name)
    @case('Dary')
        <h2>Name is Dary</h2>
        @break
    @case('David')
        <h2>Name is David</h2>
        @break
    @case('Michael')
        <h2>Name is Michael</h2>
        @break
    @default
        <h3>No match found</h3>
@endswitch --}}

@for ($i = 0; $i <= 10; $i++)
    <h2>The number is {{ $i }}</h2>
@endfor

@foreach ($names as $name)
    <h2>The name is {{ $name }}</h2>
@endforeach

@forelse ($names as $name)
    <h2>The name is {{ $name }}</h2>
@empty
    <h2>There are no names!</h2>
@endforelse

{{ $i = 0 }}
@while ($i < 10)
    <h2>{{ $i++ }}</h2>
@endwhile
