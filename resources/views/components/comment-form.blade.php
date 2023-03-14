@props(['blog'])
<x-card-wrapper>

    <form action="/blogs/{{$blog->slug}}/comments" method="post">
    @csrf
    <div class="mb-3">
        <textarea class="form-control border border-0" name="body" 
        placeholder="say somethings..." cols="10" rows="5" required></textarea>
        <x-error name="body" />
    </div>
    <div class="d-flex justify-content-end">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
    </form>
</x-card-wrapper>