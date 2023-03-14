<x-layout>
    @if(session('success'))
        <div class="alert alert-success text-center">{{session('success')}}</div>
    @endif
    <!-- hero -->
   <x-hero />

    <!-- blogs section -->
    <x-blogs-section :blogs="$blogs" />

    

</x-layout>
