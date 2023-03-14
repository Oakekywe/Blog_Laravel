<x-admin-layout>
    <h3 class="text-center mt-3">Blogs</h3>
    <x-card-wrapper>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Intro</th>
                <th scope="col" colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($blogs as $blog)
                <tr>
                    <td><a href="/blogs/{{$blog->slug}}" target="_blank">{{$blog->title}}</a></td>
                    <td>{{$blog->intro}}</td>
                    <td><a href="/admin/blogs/{{$blog->slug}}/edit" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action="/admin/blogs/{{$blog->slug}}/delete" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>    
                </tr>
              @endforeach
            </tbody>
        </table>
        {{$blogs->links()}}
    </x-card-wrapper>
</x-admin-layout>