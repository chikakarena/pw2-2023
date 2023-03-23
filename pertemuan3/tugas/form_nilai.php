<?php include_once 'header.php' ?>
<div class="container my-5">
    <h1 class="text-center mb-4">Form Nilai</h1>
    <form class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm" method="POST">
        <div class="container px-3">
            <div class="form-group row mb-3">
                <label for="nama_lengkap" class="col-form-label col-sm-4">Nama Lengkap</label>
                <div class="col-sm-8">
                    <input id="nama_lengkap" type="text" class="form-control" name="nama_lengkap" placeholder="Siapa nama kamu?" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="matkul" class="col-form-label col-sm-4">Mata Kuliah</label>
                <div class="col-sm-8">
                    <select id="matkul" name="matkul" required="required" class="form-select">
                        <option value="">----- Pilih Mata Kuliah -----</option>
                        <option>Dasar Dasar Pemrograman</option>
                        <option>Pemrograman Web</option>
                        <option>Statistika dan Probabilitas</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="nilai_uts" class="col-form-label col-sm-4">Nilai UTS</label>
                <div class="col-sm-8">
                    <input id="nilai_uts" type="number" min="0" max="100" class="form-control" name="nilai_uts" placeholder="Masukan angka..." required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="nilai_uas" class="col-form-label col-sm-4">Nilai UAS</label>
                <div class="col-sm-8">
                    <input id="nilai_uas" type="number" min="0" max="100" class="form-control" name="nilai_uas" placeholder="Masukan angka..." required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="nilai_tugas" class="col-form-label col-sm-4">Nilai Praktikum</label>
                <div class="col-sm-8">
                    <input id="nilai_tugas" type="number" min="0" max="100" class="form-control" name="nilai_tugas" placeholder="Masukan angka..." required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <div class="offset-sm-4 col-sm-8">
                    <input type="submit" value="Submit" class="btn btn-primary">
                </div>
            </div>
        </div>
    </form>
</div>