<?php
function get_skill_category($score) {
    if ($score >= 100 && $score < 150) {
        return "Sangat Baik";
    } elseif ($score >= 100  && $score < 40) {
        return "Baik";
    } elseif ($score >= 40 && $score < 60) {
        return "Cukup";
    } elseif ($score >= 0 && $score < 40) {
        return "Kurang";
    } else {
        return "Tidak Memadai";
    }
}

if(isset($_POST['submit'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $major = $_POST['prodi'];
    $skills = $_POST['skill'];
    $domisilis = $_POST['domisili'];

    function skor_skill($skills){
        $skills_list = [
            'HTML' => 10,
            'CSS' => 10,
            'JavaScript' => 20,
            'RWD Bootstrap' => 20,
            'PHP' => 30,
            'Python' => 30,
            'Java' => 50,
        ];

        $result = 0;
        foreach($skills as $skill){
            $result = $result + $skills_list[$skill];
        }

        return $result;
    }

    $skill_score = skor_skill($skills);
    $skill_category = get_skill_category($skill_score);

    echo "NIM: $nim";
    echo "<br> Nama: $nama";
    echo "<br> Jenis Kelamin: $gender";
    echo "<br> Program Studi: $major";
    echo "<br> Skill Programming: ";
    foreach($skills as $skill){
        echo $skill . ", ";
    }
    echo "<br> Domisili: $domisilis";
    echo "<br> Skor Skill: $skill_score";
    echo "<br> Kategori Skill: $skill_category";
}
