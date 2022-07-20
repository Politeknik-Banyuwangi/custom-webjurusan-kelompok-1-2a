<div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Tambah data User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data"
                    accept-charset="utf-8">
                    @csrf

                    <div class="form-group row">
                        <label class="col-md-4 control-label text-right">Nama</label>
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Nama"
                                value="{{ old('name') }}" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 control-label text-right">Email</label>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Email"
                                value="{{ old('email') }}" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password"
                            class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                        <div class="col-md-6">
                            <input id="password" type="password" value="{{ old('password') }}"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password" placeholder="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm"
                            class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" placeholder="Confirm Password" required
                                autocomplete="new-password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 control-label text-right">Level Hak Akses</label>
                        <div class="col-md-6">
                            <select name="role_id" id="roles" class="select2" data-placeholder="Pilih akses">
                                <option value="">-- Roles Akses --</option>
                                @foreach ($roles as $id => $roles)
                                    <option value="{{ $id }}"
                                        {{ in_array($id, old('role', [])) || (isset($user) && $user->roles->contains($id)) ? 'selected' : '' }}>
                                        {{ $roles }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 control-label text-right"></label>
                        <div class="col-md-6">
                            <div class="form-group pull-right btn-group">
                                <input type="submit" name="submit" class="btn btn-primary " value="Simpan">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
