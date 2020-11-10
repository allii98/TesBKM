<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tes extends CI_Controller
{


    public function index()
    {
        echo 'Hallo word';
    }

    public function no1()
    {
        for ($a = 1; $a <= 15; $a++) {
            if ($a % 2 == 1)
                echo   $a . "<br>";
        }
        # code...
    }



    public function no2_a()
    {
        $date = '20200501';

        $year  = substr($date, 2, 2);

        $month = substr($date, 4, 2);

        $day   = substr($date, 6);
        // var_dump($day) . die();

        echo 'Hasil = ' . $month . '-' . $year . '-' . $day;
    }

    public function no2_b()
    {
        $date = '20200501';


        $tanggal  = substr($date, 0, 8);


        $d = date("m-y-d", strtotime($tanggal));



        echo 'Hasil = ' . $d;
    }

    public function no2_c()
    {
        $date = new DateTime('2020-05-01');

        $date->modify('+6 month');
        echo '6 bulan kedepan dari tanggal 2020-05-01 adalah  ' . $date->format('Y-m-d') . "\n";
    }

    public function no2_d()
    {
        // tanggal lahir
        $tanggal = new DateTime('1998-06-18');

        // tanggal sesuai di soal
        $today = new DateTime('2020-05-01');

        // tahun
        $y = $today->diff($tanggal)->y;


        echo "Umur: " . $y . " tahun ";
    }

    public function no3_a()
    {
        $data = array("20", "10", "100", "30", "15", "5");
        asort($data);


        print_r($data);
        print_r("<br>");

        $value = array("20", "10", "100", "30", "15", "5");
        krsort($value);


        print_r($value);
        # code...
    }

    public function no3_b()
    {
        $data = array("20", "10", "100", "30", "15", "5");
        // menambahkan isi pada indeks terakhir
        $data[] = "180";
        // cetak array dengan perulangan
        foreach ($data as $value) {
            echo $value . "<br>";
        }
        # code...
    }

    public function no3_c()
    {
        $data = array("20", "10", "100", "30", "15", "5");
        // menghapus angka 30
        unset($data[3]);
        // cetak array dengan perulangan
        foreach ($data as $value) {
            echo $value . "<br>";
        }
        # code...
    }

    public function no4()
    {

        $data = array(
            "aku", "aku suka", "aku suka makan", "aku suka makan nasi", "aku suka makan nasi padang",
            "padang", "padang nasi", "padang nasi makan",
            "padang nasi makan suka", "padang nasi makan suka aku"
        );

        print_r($data);

        # code...
    }

    public function no5_a()
    {
        $nama = 'Pisang';
        $harga = '5000';
        $rasa = 'manis';
        $buah = array(
            array("NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"),
            array("NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"), array("NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"),
            array("NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"),
            array("NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"),
            array("NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM"),
            array("NAMA" => $nama, "HARGA" => $harga, "RASA" => $rasa)
        );

        krsort($buah);
        print_r($buah);

        # code...
    }

    public function no5_b()
    {
        $nama = 'Pisang';
        $harga = '5000';
        $rasa = 'manis';
        $buah = array(
            array("NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"),
            array("NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"), array("NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"),
            array("NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"),
            array("NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"),
            array("NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM"),
            array("NAMA" => $nama, "HARGA" => $harga, "RASA" => $rasa)
        );

        echo $buah[0]["NAMA"] . " " . $buah[0]["HARGA"] . " " . $buah[0]["RASA"];

        # code...
    }

    public function no5_c()
    {
        $nama = 'Pisang';
        $harga = '5000';
        $rasa = 'manis';
        $buah = array(
            array("NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"),
            array("NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"), array("NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"),
            array("NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"),
            array("NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"),
            array("NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM"),
            array("NAMA" => $nama, "HARGA" => $harga, "RASA" => $rasa)
        );

        echo $buah[0]["NAMA"] . " " . $buah[0]["HARGA"] . " " . $buah[0]["RASA"] . '<br>';
        echo $buah[2]["NAMA"] . " " . $buah[2]["HARGA"] . " " . $buah[2]["RASA"] . '<br>';
        echo $buah[5]["NAMA"] . " " . $buah[5]["HARGA"] . " " . $buah[5]["RASA"] . '<br>';
        echo $buah[6]["NAMA"] . " " . $buah[6]["HARGA"] . " " . $buah[6]["RASA"] . '<br>';

        # code...
    }
}