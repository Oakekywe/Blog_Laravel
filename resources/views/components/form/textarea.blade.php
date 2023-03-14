@props(['name','value'=>''])
<x-form.input-wrapper>
    <x-form.lable :name="$name"/>
    <textarea type="text" name="{{$name}}" class="form-control"
    id="{{$name}}" required >{!!old('$name', $value)!!} </textarea>   
    <x-error name="{{$name}}" /> 
</x-form.input-wrapper>