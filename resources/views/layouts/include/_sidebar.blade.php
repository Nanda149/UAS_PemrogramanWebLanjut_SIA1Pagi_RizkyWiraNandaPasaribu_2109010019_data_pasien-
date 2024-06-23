<?php
// Mendapatkan path dari URL saat ini
$current_url = $_SERVER['REQUEST_URI'];
?>



<div id="" class="sidebar" style="background-color:#382121;">
    <div class="" style="padding-top: 50%">
        <nav>
            <ul class="nav">

                <li>
                    <a href="/pasien" class="<?php echo $current_url == '/pasien' ? 'active' : ''; ?>">
                        <i class="" style="color: rgb(255, 255, 255)"></i>
                        <span style="color: rgb(255, 255, 255)">Manajemen Data Pasien</span>
                    </a>
                </li>
                <li>
                    <a onclick="return confirm('Apa anda ingin keluar dari aplikasi?')" href="/" class="<?php echo $current_url == '/pasien' ? 'active' : ''; ?>">
                        <i class="lnr lnr-  " style="color: rgb(255, 255, 255)"></i>
                        <span style="color: rgb(255, 255, 255)">Keluar</span>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</div>
