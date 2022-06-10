@extends('layouts.layout')
@section('content')
    @include('sweetalert::alert')

    <!-- Modal -->

    <h5 class="modal-title" id="exampleModalLabel">Edit Data Penilaian</h5>

    <form action="{{ route('penilaian.update', [$penilaian->id]) }}" method="POST">
        @csrf
        <div class="modal-body">
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="user_id">Nama User :</label>
                <select name="user_id" class="form-control" required id="user_id">
                    @foreach ($user as $user)
                        <option value="{{ $user->id }}" {{ $siswa->user->id === $user->id ? 'selected' : '' }}>
                            {{ $siswa->user->name === $user->name ? $siswa->user->name : $user->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="user_id">Nama User :</label>
                <select name="siswa_id" class="form-control" required id="user_id">
                    <option value="">-- Pilih Nama User --</option>
                    @foreach ($siswa as $siswa)
                        <option value="{{ $siswa->id }}">{{ $siswa->user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mx-2">
                <p>Agama & Moral :</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <input type="radio" name="agama_moral" value="BB" id="bb1" />
                        <label for="bb1">BB </label><br>
                    </div>
                    <div>
                        <input type="radio" name="agama_moral" value="MB" id="mb1" />
                        <label for="mb1">MB </label><br>
                    </div>
                    <div>
                        <input type="radio" name="agama_moral" value="BSH" id="bsh1" />
                        <label for="bsh1">BSH </label><br>
                    </div>
                    <div>
                        <input type="radio" name="agama_moral" value="BSB" id="bsb1" />
                        <label for="bsb1">BSB </label><br>
                    </div>
                </div>
            </div>
            <div class="form-group mx-2">
                <p>Emosional :</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <input type="radio" name="emosional" value="BB" id="bb2" />
                        <label for="bb2">BB </label><br>
                    </div>
                    <div>
                        <input type="radio" name="emosional" value="MB" id="mb2" />
                        <label for="mb2">MB </label><br>
                    </div>
                    <div>
                        <input type="radio" name="emosional" value="BSH" id="bsh2" />
                        <label for="bsh2">BSH </label><br>
                    </div>
                    <div>
                        <input type="radio" name="emosional" value="BSB" id="bsb2" />
                        <label for="bsb2">BSB </label><br>
                    </div>
                </div>
            </div>
            <div class="form-group mx-2">
                <p>Fisik Motorik :</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <input type="radio" name="fisik_motorik" value="BB" id="bb3" />
                        <label for="bb3">BB </label><br>
                    </div>
                    <div>
                        <input type="radio" name="fisik_motorik" value="MB" id="mb3" />
                        <label for="mb3">MB </label><br>
                    </div>
                    <div>
                        <input type="radio" name="fisik_motorik" value="BSH" id="bsh3" />
                        <label for="bsh3">BSH </label><br>
                    </div>
                    <div>
                        <input type="radio" name="fisik_motorik" value="BSB" id="bsb3" />
                        <label for="bsb3">BSB </label><br>
                    </div>
                </div>
            </div>
            <div class="form-group mx-2">
                <p>Kognitif :</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <input type="radio" name="kognitif" value="BB" id="bb4" />
                        <label for="bb4">BB </label><br>
                    </div>
                    <div>
                        <input type="radio" name="kognitif" value="MB" id="mb4" />
                        <label for="mb4">MB </label><br>
                    </div>
                    <div>
                        <input type="radio" name="kognitif" value="BSH" id="bsh4" />
                        <label for="bsh4">BSH </label><br>
                    </div>
                    <div>
                        <input type="radio" name="kognitif" value="BSB" id="bsb4" />
                        <label for="bsb4">BSB </label><br>
                    </div>
                </div>
            </div>
            <div class="form-group mx-2">
                <p>Bahasa :</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <input type="radio" name="bahasa" value="BB" id="bb5" />
                        <label for="bb5">BB </label><br>
                    </div>
                    <div>
                        <input type="radio" name="bahasa" value="MB" id="mb5" />
                        <label for="mb5">MB </label><br>
                    </div>
                    <div>
                        <input type="radio" name="bahasa" value="BSH" id="bsh5" />
                        <label for="bsh5">BSH </label><br>
                    </div>
                    <div>
                        <input type="radio" name="bahasa" value="BSB" id="bsb5" />
                        <label for="bsb5">BSB </label><br>
                    </div>
                </div>
            </div>
            <div class="form-group mx-2">
                <p>Seni :</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <input type="radio" name="seni" value="BB" id="bb6" />
                        <label for="bb6">BB </label><br>
                    </div>
                    <div>
                        <input type="radio" name="seni" value="MB" id="mb6" />
                        <label for="mb6">MB </label><br>
                    </div>
                    <div>
                        <input type="radio" name="seni" value="BSH" id="bsh6" />
                        <label for="bsh6">BSH </label><br>
                    </div>
                    <div>
                        <input type="radio" name="seni" value="BSB" id="bsb6" />
                        <label for="bsb6">BSB </label><br>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Batal</button>
                <input type="submit" class="btn btn-primary btn-send" value="Simpan">
            </div>
        </div>

    </form>
@endsection
