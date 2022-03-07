<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li class="{{request()-> is('/') ? 'active' : ''}}"><a href="/"><i class="fa fa-home"></i> <span>HOME</span></a></li>
        @if (auth()->user()->level==1)
        <li class="{{request()-> is('data') ? 'active' : ''}}"><a href="/data"><i class="fa fa-desktop"></i> <span>DATA KOPERASI</span></a></li>
        <li class="{{request()-> is('pinjaman') ? 'active' : ''}}"><a href="/pinjaman"><i class="fa fa-credit-card"></i> <span>PINJAMAN</span></a></li>
        <li class="{{request()-> is('simpanan') ? 'active' : ''}}"><a href="/simpanan"><i class="fa fa-align-left"></i> <span>SIMPANAN</span></a></li>
        <li class="{{request()-> is('nasabah') ? 'active' : ''}}"><a href="/nasabah"><i class="fa fa-group"></i> <span>NASABAH</span></a></li>
        <li class="{{request()-> is('angsuran') ? 'active' : ''}}"><a href="/angsuran"><i class="fa fa-desktop"></i> <span>ANGSURAN</span></a></li>
        <li class="{{request()-> is('penarikan') ? 'active' : ''}}"><a href="/penarikan"><i class="fa fa-money"></i> <span>PENARIKAN</span></a></li>
        <li class="{{request()-> is('info') ? 'active' : ''}}"><a href="/info"><i class="fa fa-info"></i> <span>INFO</span></a></li>
        @elseif (auth()->user()->level==2)
        <li class="{{request()-> is('pinjaman') ? 'active' : ''}}"><a href="/pinjaman"><i class="fa fa-credit-card"></i> <span>PINJAMAN</span></a></li>
        <li class="{{request()-> is('simpanan') ? 'active' : ''}}"><a href="/simpanan"><i class="fa fa-align-left"></i> <span>SIMPANAN</span></a></li>
        <li class="{{request()-> is('nasabah') ? 'active' : ''}}"><a href="/nasabah"><i class="fa fa-group"></i> <span>NASABAH</span></a></li>
        <li class="{{request()-> is('angsuran') ? 'active' : ''}}"><a href="/angsuran"><i class="fa fa-desktop"></i> <span>ANGSURAN</span></a></li>
        <li class="{{request()-> is('penarikan') ? 'active' : ''}}"><a href="/penarikan"><i class="fa fa-money"></i> <span>PENARIKAN</span></a></li>
        <li class="{{request()-> is('info') ? 'active' : ''}}"><a href="/info"><i class="fa fa-info"></i> <span>INFO</span></a></li>
        @elseif (auth()->user()->level==3)
        <li class="{{request()-> is('nasabah') ? 'active' : ''}}"><a href="/nasabah"><i class="fa fa-group"></i> <span>NASABAH</span></a></li>
        <li class="{{request()-> is('angsuran') ? 'active' : ''}}"><a href="/angsuran"><i class="fa fa-desktop"></i> <span>ANGSURAN</span></a></li>
        <li class="{{request()-> is('penarikan') ? 'active' : ''}}"><a href="/penarikan"><i class="fa fa-money"></i> <span>PENARIKAN</span></a></li>
        <li class="{{request()-> is('info') ? 'active' : ''}}"><a href="/info"><i class="fa fa-info"></i> <span>INFO</span></a></li>
        <li class="treeview">
        @endif