
@if(!isset($flag))
    <option value="{{ null }}">chose your faculty</option>
    @foreach($data as $facilty)
        <option value="{{ $facilty->id }}"> {{ $facilty['name_'.$lang] }}</option>
    @endforeach
@else
    <option value="{{ null }}">chose your Department</option>
    @foreach($data as $facilty)
        <option value="{{ $facilty->id }}"> {{ $facilty['name_'.$lang] }}</option>
    @endforeach
@endif
