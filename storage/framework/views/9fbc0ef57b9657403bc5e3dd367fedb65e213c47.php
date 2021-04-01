<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                    <form action=<?php echo e(url('/update/' . $id )); ?> method="post" >
                    <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="field_nama">Nama</label>
                            <input type="text" name="field_nama" class="form-control" value ="<?php echo e($results[0]->nama); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="field_alamat">Alamat</label>
                            <input type="text" name="field_alamat" class="form-control" value ="<?php echo e($results[0]->alamat); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="field_telp">Telp</label>
                            <input type="text" name="field_telp" class="form-control" value ="<?php echo e($results[0]->telp); ?>" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="field_submit" class="form-control btn-primary" value="Submit">Simpan</button>
                        </div>
                    </form>
            </div>
        </div>
    </body>
</html>
