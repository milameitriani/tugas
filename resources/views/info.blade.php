@extends('layout.template')
@section('title')

@section('content')
<font Size="5" face="Algerian">KOPERASI</font> <br> <br>
<div class="w-full mt-6" @data="{ openTab: 1 }">
    <div>
    <ul class="flex border-b">
            <li class="-mb-px mr-1" @click="openTab = 1">
                <a :class="openTab === 1 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">SEJARAH</a>
    <div class="bg-white p-6">
        <div id="" class="" x-show="openTab === 1">
     <p>Di Indonesia koperasi mulai diperkenalkan oleh Patih R.Aria Wiria Atmaja pada tahun 1896, dengan melihat banyaknyak para pegawai negeri yang tersiksa dan menderita akibat bunga yang terlalu tinggi dari rentenir yang memberikan pinjaman uang. Melihat penderitaan tersebut Patih R.Aria Wiria Atmaja lalu mendirikan Bank untuk para pegawai negeri, beliau mengadopsi system serupa dengan yang ada di jerman yakni mendirikan koperasi kredit. Beliau berniat membantu orang-orang agar tidak lagi berurusan dengan renternir yang pasti akan memberikan bunga yang tinggi.</p>
        </div>
        <li class="mr-1" @click="openTab = 3">
                <a :class="openTab === 3 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">MANFAAT</a>
            </li>
        <div id="" class="" x-show="openTab === 3">
        <p>(MEMBERIKAN PINJAMAN MODAL USAHA) <br>Para pelaku usaha pemula seringkali dihadapkan dengan masalah modal. Budget keuangan yang minim membuat pelaku usaha kebingungan untuk mengajukan pinjaman. Padahal koperasi simpan pinjam bisa menjadi tempat yang tepat Koperasi simpan pinjam bisa memberikan pinjaman modal bagi anggotanya. Prosesnya pun cenderung lebih sederhana dan tidak rumit jika dibandingkan dengan bank. Ini bisa menjadi pilihan yang pas untuk mendapatkan modal usaha dengan mudah.</p>
        <p>(TEMPAT PENYIMPANAN UANG SELAIN BANK) <br>Selama ini kita selalu menyimpan uang di bank. Padahal koperasi juga bisa menjadi tempat penyimpanan uang.
Koperasi simpan pinjam memberikan fasilitas penyimpanan uang untuk anggotanya. Ada beberapa keuntungan yang bisa didapatkan anggota jika menyimpan uangnya di koperasi. 
Yang pertama adalah bunga deposito yang diberikan cenderung lebih tinggi dari bank. Keuntungan kedua, besaran pajak bunga simpanan koperasi cenderung lebih kecil. </p>
        <p>(PROSES PEMINJAMAN MUDAH)<br>Persyaratan peminjaman di bank biasanya cenderung sulit. Namun tidak dengan koperasi simpan pinjam yang sangat mudah dan sederhana Bagi anggota yang ingin mengajukan pinjaman hanya perlu melengkapi beberapa persyaratan dokumen saja. Di antaranya yakni fotokopi KTP, fotokopi Kartu Keluarga, fotokopi rekening listrik, slip gaji dan agunan.</p>
        </div>  
    </div>
@endsection