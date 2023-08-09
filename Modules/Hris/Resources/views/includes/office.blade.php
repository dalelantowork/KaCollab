<form action="{{ route('hris.update', $user->id) }}" method="post"  enctype="multipart/form-data">
    @csrf
    @method('patch')
    <input type="hidden" name="id" value="{{ $user->id }}">
    <div class="block block-rounded">
        <div class="block-content block-content-full block-content-sm bg-body-light">
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Office</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($offices as $office)
                            <tr>
                                <td>{{ $office->name }}</td>
                                <td><input {{!in_array($office->id, $user->offices()->pluck('id')->toArray()) ?: 'checked'}} type="checkbox" name="office_ids[]" value="{{$office->id}}" ></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Save</button>  
                </div>
            </div>
        </div>
    </div>
</form>