<form action="{{ route('password.email') }}" method="post"  enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $user->id }}">
    <input type="hidden" name="email" value="{{ $user->email }}">
    <div class="block block-rounded">
        <div class="block-content block-content-full block-content-sm bg-body-light">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary form-control">Request Reset Password</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>