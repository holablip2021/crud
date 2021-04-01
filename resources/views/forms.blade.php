@include('main')
<hr class="featurette-divider border-0 bg-white">
<section id="aboutme">
<div class="col-12 col-md-7 order-md-2">
            <form action={{ url('/simpan') }} method="post" >
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="field_nama">Nama</label>
                    <input type="text" name="field_nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="field_alamat">Alamat</label>
                    <input type="text" name="field_alamat" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="field_telp">Telp</label>
                    <input type="text" name="field_telp" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="field_submit" class="form-control btn-primary" value="Submit">Simpan</button>
                </div>
            </form>
</div>        
</section>
</body>
</html>


