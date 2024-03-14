<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <form method="POST" action="">
        <div class="form-group row">
            <label for="nim" class="col-2 ml-3 mt-3 col-form-label">NIM</label>
            <div class="col-6 mt-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-adn"></i>
                        </div>
                    </div>
                    <input id="nim" name="nim" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-2  ml-3 mt-3 col-form-label">Nama</label>
            <div class="col-6 mt-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-book"></i>
                        </div>
                    </div>
                    <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2  ml-3 mt-3">Jenis Kelamin</label>
            <div class="col-6 mt-3">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="laki laki">
                    <label for="jk_0" class="custom-control-label">Laki-laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="perempuan">
                    <label for="jk_1" class="custom-control-label">Perempuan</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="select" class="col-2  ml-3 mt-3 col-form-label">Program Studi</label>
            <div class="col-6 mt-3">
                <select id="prodi" name="prodi" class="custom-select">
                <?php
                //Array Prodi
                $ar_prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika", "BD"=>"Bisnis Digital"];
                foreach ($ar_prodi as $index_prodi => $value_prodi) {
                ?>    
                <option value="<?=$index_prodi?>"><?=$value_prodi ?></option>
                <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2  ml-3 mt-3">Skill Web &amp; Programming</label>
            <div class="col-8 mt-3">
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skil[]" id="skil_0" type="checkbox" class="custom-control-input" value="HTML">
                    <label for="skil_0" class="custom-control-label">HTML</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skil[]" id="skil_1" type="checkbox" class="custom-control-input" value="CSS">
                    <label for="skil_1" class="custom-control-label">CSS</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skil[]" id="skil_2" type="checkbox" class="custom-control-input" value="JavaScript">
                    <label for="skil_2" class="custom-control-label">JavaScript</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skil[]" id="skil_3" type="checkbox" class="custom-control-input" value="RWD Bootstrap">
                    <label for="skil_3" class="custom-control-label">RWD Bootstrap</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skil[]" id="skil_4" type="checkbox" class="custom-control-input" value="PHP">
                    <label for="skil_4" class="custom-control-label">PHP</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skil[]" id="skil_5" type="checkbox" class="custom-control-input" value="Python">
                    <label for="skil_5" class="custom-control-label">Python</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skil[]" id="skil_6" type="checkbox" class="custom-control-input" value="Java">
                    <label for="skil_6" class="custom-control-label">Java</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="tempat_domisili" class="col-2  ml-3 mt-3 col-form-label">Tempat Domisili</label>
            <div class="col-6 mt-3">
                <select id="domisili" name="domisili" class="custom-select">
                    <!-- <option value="jakarta">Jakarta</option>
                    <option value="depok">Depok</option>
                    <option value="bogor">Bogor</option>
                    <option value="tangerang">Tangerang</option>
                    <option value="bekasi">Bekasi</option> -->
                    <?php 
                        //Array Domisili
                        $ar_domisili = ["Jakarta", "Bogor", "Depok", "Tanggerang", "Bekasi"];
                        foreach ($ar_domisili as $value_domisili) { ?>
                        <option value="<?= $value_domisili ?>"><?= $value_domisili ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-2  ml-3 mt-3 col-form-label">Email</label>
            <div class="col-6 mt-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-gg-circle"></i>
                        </div>
                    </div>
                    <input id="email" name="email" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row ml-2">
            <div class="offset-2 col-4 mt-3">
                <button name="submit" type="submit" class="btn btn-primary pl-4 pr-4">Submit</button>
            </div>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim = $_POST["nim"];
        $nama = $_POST["nama"];
        $jk = $_POST["jk"];
        $skill_web = isset($_POST["skil"]) ? $_POST["skil"] : [];
        $index_prodi = $_POST['prodi'];
        $value_domisili = $_POST['domisili'];
        $email = $_POST["email"];

        //Array Skill
        $skor_skill = ["HTML" => 10, "CSS" => 10, "JavaScript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50];

        function hitungTotalSkor($skill_web, $skor_skill){
            $total_skor = 0;
            // Hitung skor skill web
            foreach ($skill_web as $skill) {
                $total_skor += $skor_skill[$skill];
            }
            return $total_skor;
        }

        // Hitung total skor
        $total_skor = hitungTotalSkor($skill_web, $skor_skill);
        
        function hitungKategoriSkill($total_skor){
            // Tentukan Kategori Skill
            if ($total_skor <= 0) {
            $kategori_skill = "Tidak Memadai";
            } elseif ($total_skor <= 40) {
                $kategori_skill = "Kurang";
            } elseif ($total_skor <= 60) {
                $kategori_skill = "Cukup";
            } elseif ($total_skor <= 100) {
                $kategori_skill = "Baik";
            } else {
                $kategori_skill = "Sangat Baik";
            }
            return $kategori_skill;
        }
        
        $kategori_skill = hitungKategoriSkill($total_skor);
        

        // Tampilkan hasil
        echo "<h2>Hasil Registrasi:</h2>";
        echo "NIM : $nim<br>";
        echo "Nama : $nama<br>";
        echo "Jenis Kelamin : $jk<br>";
        echo "Program Studi : $index_prodi<br>";
        echo "Skill : " . implode(", ", $skill_web) . "<br>";
        echo "Total Skor : $total_skor<br>";
        echo "Kategori Skill : $kategori_skill<br>";
        echo "Tempat Domisili : $value_domisili<br>";
        echo "Email : $email<br>";
    }
    ?>
</body>

</html>