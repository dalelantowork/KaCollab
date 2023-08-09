<form action="{{route('citizen-profile.store')}}" method="post" id="signature-upload"  enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $user->id }}">
    <input type="hidden" id="signature_default" value="{{$user->signature}}">
    <div class="block block-rounded">
        <div class="block-content block-content-full bg-primary text-white">
            Signature
        </div>
        <input type="hidden" id="signature-base64" name="draw_signature">
        <div class="block-content block-content-full block-content-sm bg-body-light">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="upload_signature">Upload Signature</label>
                        <input type="file" class="form-control" name="upload_signature">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row mt-4">
                <div class="col-12" align="center">
                    <canvas id="signature" width="450" height="300" style="border: 1px solid #ddd;"></canvas>
                </div>
            </div>
            <center>
                <div class="btn btn-danger " id="signature-clear">clear</div>
            </center>
        </div>
        <div class="btn btn-primary ml-3 mb-3" style="margin-left:10px;" id="btn-save-signature">Save signature</div>
    </div>
</form>
<form action="{{route('citizen-profile.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $user->id }}">
    <input type="hidden" id="signature_default" value="{{$user->signature}}">
    <div class="block block-rounded">
        <div class="block-content block-content-full bg-primary text-white">
            Photo
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control" name="photo_upload">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row mt-4">
                <div class="col-12" align="center">
                    @if($user->photo)
                    <img src="{{$user->photo}}" width="450" height="300" style="border: 1px solid #ddd;">
                    @endif
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary ml-3 mb-3" style="margin-left:10px;" id="btn-save-signature">Save signature</button>
    </div>
</form>
<form action="{{route('citizen-profile.store')}}" method="post"  enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $user->id }}">
    <div class="block block-rounded">
        <div class="block-content block-content-full bg-primary text-white">
            Valid ID
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="valid_id">Valid ID</label>
                        <input type="file" class="form-control" name="valid_id_upload">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row mt-4">
                <div class="col-12" align="center">
                    @if($user->valid_id)
                    <img src="{{$user->valid_id}}" width="450" height="300" style="border: 1px solid #ddd;">
                    @endif
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary ml-3 mb-3" style="margin-left:10px;" >Save signature</button>
    </div>
</form>