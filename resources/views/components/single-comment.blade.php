@props(['comment'])
<x-card-wrapper>
    <div class="d-flex">
        <div>
        <img src="{{$comment->author->avatar}}" 
        alt="" class="rounded-circle"
        height="50" width="50">
        </div>
        <div class="ms-3">
        <h6>{{$comment->author->name}}</h6>
        <p class="text-secondary">{{$comment->created_at->format("F j, Y, g:i a")}}</p>
        </div>
    </div>
    <p class="mt-1">
        {{$comment->body}}
    </p>
</x-card-wrapper>