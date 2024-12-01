<!doctype html>
<html>
  <head>
    <div class="hika"></div>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="data.css">
    <script src="java.js" defer></script>
    
 
    <style type="text/css">
    h2 {
        text-align: center
    }
    table {
        width: 800px;
        height: auto;
        border: 1px solid black;
    }
    th, td {
        padding: 10px;
        border: 1px solid black
    }
</style>

  </head>
  <body>
    <div class="logo">
      <p><img src="https://raw.githubusercontent.com/SKYLLERBOTZ/gldn/refs/heads/main/gldn.png" alt="banner" /></p>
    </div>
    <nav>
      <div class="navbar">
        <div class="container nav-container">
            <input class="checkbox" type="checkbox" name="" id="" />
            <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
            </div>  
          
          <div class="menu-items">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">Tentang Kami</a></li>
            <li><a href="jurusan.php">Jurusan</a></li>
            <li><a href="daftar.php">Pendaftaran Online</a></li>
            <li><a href="#">contact</a></li>
          </div>
        </div>
      </div>
    </nav>
    
    <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.php">Home</a></li>
          <li class="#"><a href="dbguru.php">Guru</a></li>
          <li><a href="dbsiswa.php">Siswa</a></li>
          <li><a href="dbeskul.php">Esktrakulikuler</a></li>
          <li><a href="dbjurusan.php">jurusan</a></li>
        </ul>
      </div>
    </div>
   
    <h2>DATA GURU</h2>
    <table align="center">
        <tr bgcolor="red">
            <th>id_guru</th>
            <th>nama_guru</th>
            <th>jabatan</th>
            <th>Foto</th>
        </tr>
        <?php
        include "koneksi.php";
        $no = 1;
        $data = mysqli_query($koneksi, "select * from tb_guru");
        while ($row = mysqli_fetch_array($data)) {
        ?>
        <tr>
       
            <td><?php echo $row['id_guru']; ?></td>
            <td><?php echo $row['nama_guru']; ?></td>
            <td><?php echo $row['jabatan']; ?></td>
      
        <?php
        }
        ?>
    </table>
    </body>
  <div class="footer">
    <div class="icon-text">
    <p><img src="https://raw.githubusercontent.com/SKYLLERBOTZ/gldn/refs/heads/main/gldn.png" alt="banner" /></p>
  </div>
    <div id="address">
  <div class="icon-text">
  <div class="icon"><i class="ph ph-house"></i></div>
  <div class="content">Jl. Letkol Atang Sendjaya No.365, Bantarjaya, Bogor.</div>
  </div>
  <div class="icon-text">
  <div class="icon"><i class="ph ph-phone"></i></div>
  <div class="content">Phone: (0721) 250 433</div>
  </div>
  <div class="icon-text">
  <div class="icon"><i class="ph ph-envelope-simple"></i></div>
  <div class="content">info@smkgolden.sch.id</div>
  </div>
  <div class="icon-text">
  <div class="icon"><i class="ph ph-globe"></i></div>
  <div class="content"><a href="https://">www.smkgolden.sch.id</a></div>
  </div>
  </div>
  </div>
</div>
  <footer>
    <p>&copy; Copyright SMK GOLDEN</p>
</footer>

</html><!doctype html>
<html>
   