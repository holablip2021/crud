@include('main')
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                    <form action={{ url('/update/' . $id ) }} method="post" >
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="field_nama">Nama</label>
                            <input type="text" name="field_nama" class="form-control" value ="{{ $results[0]->nama }}" required>
                        </div>
                        <div class="form-group">
                            <label for="field_alamat">Alamat</label>
                            <input type="text" name="field_alamat" class="form-control" value ="{{ $results[0]->alamat }}" required>
                        </div>
                        <div class="form-group">
                            <label for="field_telp">Telp</label>
                            <input type="text" name="field_telp" class="form-control" value ="{{ $results[0]->telp }}" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="field_submit" class="form-control btn-primary" value="Submit">Simpan</button>
                        </div>
                    </form>
            </div>
        </div>
    </body>
</html>
