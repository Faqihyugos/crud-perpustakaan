<?php

function rupiah($harga_buku){
    $hasil_rupiah = 'Rp.' . number_format($harga_buku,2,',',',');
    return $hasil_rupiah;
}