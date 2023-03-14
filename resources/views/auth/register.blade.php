<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card p-4 my-3 shadow-sm">
                    <h3 class="text-primary text-center my-3">Register Form</h3>
                    <form method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" value="{{old('name')}}"
                            id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            <x-error name="name" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" value="{{old('username')}}"
                            id="exampleInputEmail1" aria-describedby="emailHelp" required> 
                            <x-error name="username" />                           
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" value="{{old('email')}}"
                            id="exampleInputEmail1" aria-describedby="emailHelp" required>    
                            <x-error name="email" />                        
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" value="{{old('password')}}"
                            id="exampleInputPassword1" required>
                            <x-error name="password" />
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>