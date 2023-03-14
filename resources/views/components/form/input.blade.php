@props(['name','type'=>"text",'value'=>''])
<x-form.input-wrapper>
    <x-form.lable :name="$name"/>
    <input type="{{$type}}" name="{{$name}}" class="form-control" value="{{old($name, $value)}}"
    id="{{$name}}" >    
    <x-error :name="$name" /> 
</x-form.input-wrapper>