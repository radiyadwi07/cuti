<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php"><i class="icon-speedometer"></i> Dashboard <span class="badge badge-primary">NEW</span></a>
            </li>
            <?php if ($_SESSION['level'] == 'admin') { ?>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i> Karyawan</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="karyawan.php"><i class="icon-arrow-right-circle"></i> Data Karyawan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="input-karyawan.php"><i class="icon-arrow-right-circle"></i> Input Karyawan</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-notebook"></i> Cuti</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="cuti.php"><i class="icon-arrow-right-circle"></i> Data Cuti</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="input-cuti.php"><i class="icon-arrow-right-circle"></i> Input Cuti</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-layers"></i> Departemen</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="departemen.php"><i class="icon-arrow-right-circle"></i> Data Departemen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="input-departemen.php"><i class="icon-arrow-right-circle"></i> Input Departemen</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-badge"></i> Jabatan</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="jabatan.php"><i class="icon-arrow-right-circle"></i> Data Jabatan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="input-jabatan.php"><i class="icon-arrow-right-circle"></i> Input Jabatan</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-directions"></i> Variabel Jenis Cuti</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="jenis.php"><i class="icon-arrow-right-circle"></i> Data Variabel Cuti</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="input-jenis.php"><i class="icon-arrow-right-circle"></i> Input Variabel Cuti</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-lock"></i> Administrator</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php" target="_top"><i class="icon-arrow-right-circle"></i> Data Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="input-admin.php" target="_top"><i class="icon-arrow-right-circle"></i> Input Admin</a>
                        </li>

                    </ul>
                </li>
            <?php } else if ($_SESSION['level'] == 'manager') { ?>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-notebook"></i> Cuti</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="cuti.php"><i class="icon-arrow-right-circle"></i> Data Cuti</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-book-open"></i> Laporan</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="cetak-karyawan.php" target="_top"><i class="icon-arrow-right-circle"></i> Lap. Data Karyawan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="laporan-cuti.php" target="_top"><i class="icon-arrow-right-circle"></i> Lap. Cuti Global</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="laporan-cuti-karyawan.php" target="_top"><i class="icon-arrow-right-circle"></i> Lap. Cuti Karyawan</a>
                        </li>

                    </ul>
                </li>
            <?php } ?>
        </ul>
    </nav>
</div>