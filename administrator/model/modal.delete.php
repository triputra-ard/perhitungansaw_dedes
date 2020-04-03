<!-- ============== GURU====================== -->
<div class="modal animated bounceIn" id="askDelete<?php echo $guru['nip_guru']; ?>" role="dialog">
    <div class="modal-dialog modals-default nk-red" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h2>Yakin ingin dihapus ?</h2>
                <p>Jika dihapus data tidak bisa diurungkan kembali dan akan menghapus data siswa yang berhubungan dengan <?php echo $guru['guru_nama']; ?></p>
            </div>
            <div class="modal-footer">
                <a href="control/guru.proses?hapus&nip=<?php echo $guru['nip_guru'];?>" class="btn btn-default">Ya</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<!-- ============== SISWA ====================== -->
<div class="modal animated bounceIn" id="askDelete<?php echo $murid['id_beasiswa']; ?>" role="dialog">
    <div class="modal-dialog modals-default nk-red" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h2>Yakin ingin dihapus ?</h2>
                <p>Jika dihapus data tidak bisa diurungkan kembali dan akan menghapus data siswa <?php echo $murid['siswa_nama']; ?></p>
            </div>
            <div class="modal-footer">
                <a href="control/siswa.proses?hapus&beasiswa=<?php echo $murid['id_beasiswa'];?>" class="btn btn-default">Ya</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
