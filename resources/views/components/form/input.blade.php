@props(['name','type'=>"text",'value'=>'', 'accept'=>''])
<x-form.input-wrapper>
    <x-form.lable :name="$name"/>
    <input type="{{$type}}" name="{{$name}}" class="form-control" value="{{old($name, $value)}}"
    id="{{$name}}" accept="{{$accept}}" required>    
    <x-error :name="$name" /> 
</x-form.input-wrapper>