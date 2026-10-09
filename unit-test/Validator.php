<?php
// Validator.php
function validateInput($age) {
    if (!is_numeric($age)) {
        throw new InvalidArgumentException("Umur harus harus berupa angka");
    }
    if ($age < 0) {
        throw new InvalidArgumentException("Umur tidak boleh negatif");
    }
    return true;
}

// Fungsi baru untuk validasi nama sesuai tugas praktikum
function ValidateName($name) {
    if (empty(trim($name))) {
        throw new InvalidArgumentException("Nama tidak boleh kosong");
    }
    // Cek apakah nama hanya mengandung huruf dan spasi
    if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        throw new InvalidArgumentException("Nama harus berupa huruf");
    }
    return true;
}