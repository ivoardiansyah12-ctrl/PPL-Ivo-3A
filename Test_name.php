<?php
// File: Test_name.php
require_once 'Validator.php';

// Test Case 1: Nama lengkap valid (huruf dan spasi)
try {
    $result = ValidateName("Budi Santoso");
    echo "PASS: Nama 'Budi Santoso' diterima\n";
} catch (Exception $e) {
    echo "FAIL: Nama 'Budi Santoso' tidak diterima. Error: " . $e->getMessage() . "\n";
}

// Test Case 2: Nama mengandung angka (contoh: Budi1212)
try {
    $result = ValidateName("Budi1212");
    echo "FAIL: Nama 'Budi1212' seharusnya ditolak\n";
} catch (Exception $e) {
    echo "PASS: Nama 'Budi1212' ditolak dengan benar. Error: " . $e->getMessage() . "\n";
}

// Test Case 3: Input data kosong
try {
    $result = ValidateName("");
    echo "FAIL: Input kosong seharusnya ditolak\n";
} catch (Exception $e) {
    echo "PASS: Input kosong ditolak dengan benar. Error: " . $e->getMessage() . "\n";
}