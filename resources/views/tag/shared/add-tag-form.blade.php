<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">Tags</h2>
                </a>
                <div class="card">
                    <div class="card-header text-center font-weight-bold">
                        Add new tag:
                    </div>
                    <div class="card-body">
                      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ route('tags.add') }}">
                       @csrf
                        <div class="form-group mb-4">
                            @error('name')
                                <div class="error alert alert-danger">{{ $message }}</div>
                            @enderror
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" id="name" name="name" class="form-control" required="" value="{{ old('name') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Zapisz</button>
                      </form>
                    </div>
                </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="{{ route('tags.index') }}">Powrót do listy tagów →</a></div>
        </div>
    </div>
</div>
