<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <style>
    
        body {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    color: #333;
    text-align: left;
    font-size: 14px;
}
        
.container {
    width: 750px;
    height: 1360px;
    background-color: #24ecec;
     
}
        

.ls {
    width: 120px;
    float: left;
    height: 120px;
    background-color: #FF0;
}

.ls img {
    width: 120px;
    height: 120px;
}

.kop {
    width: 620px;
    height: 120px;
    float: right;
    text-align: center;
    background-color: #0C0;
    margin-right: 10px;
}
.jdl {
    width: 100%;
    text-align: center;
     background-color: #ecff66;
    clear: both;
    margin-right: 10px;

}
.content {
    width: 100%;
    height: max-content;
    clear: both;
    margin-right: 10px;

}
.ttd {
    width: max-content;
    height: max-content;
    clear: both;
    text-align: center;
    background-color: green;
    margin-right: 10px;
    bottom: 40px;
    left: 40px;
    
}
h4{
    margin: auto;
}
hr{
    border: 2px solid black;

}
table {
    border-collapse: collapse;
    width: 100%;
    margin: auto;
}


         th{
            padding: 8px;
            border: 1px solid #333;
            background-color: #f0f0f0;
        }
        td, tr{
          text-align: center;
            border: 1px solid #333;
        }
    
    

    </style>
</head>
<body>
    <div class="container">
     <?php
        $path = public_path('vendor/logintp/images/logosmk.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
        <div class="ls">
            <img src="{{ $base64}}" alt="image">
        </div>
        <div class="kop">
             <h2 style="margin: auto;">SMK Negeri 2 Depok Sleman</h2><br style="margin: auto;">
            <p style="margin: auto;">
                Jl. STM Pembangunan, Mrican, Caturtunggal, Depok, Sleman, Daerah Istimewa<br> Yogyakarta Kode Pos 55281  <br>
                Telephone : 0274 -513515 Laman : smkn2depoksleman.sch.id <br> E-mail : smkn2depok@yahoo.com
            </p>
        </div>
        <div class="jdl">
            <hr />
            <h4>RENCANA ANGGARAN PEMBELIAN ALAT DAN BAHAN LABORATORIUM TKJ<br>Periode 1 Desember - 31 Desember 2019</h4><br><br>

            <table >
 
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Peralatan</th>
                        <th>Volume</th>
                        <th>Satuan</th>
                        <th>Sumber</th>
                        <th>Harga</th>
                        <th>Total</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            np 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231p 213231
                        </td>
                        <td>
                            3 
                        </td>
                        <td>
                            unit
                        </td>
                        <td>
                            unit
                        </td>
                        <td>
                            Rp 213231
                        </td>
                        <td>
                           Rp23213
                        </td>
                    </tr>

                      <tr>
                        <td>2</td>
                        <td>
                            n
                        </td>
                        <td>
                            345 
                        </td>
                        <td>
                            unit
                        </td>
                        <td>
                            unit
                        </td>
                        <td>
                            Rp 213231
                        </td>
                        <td>
                           Rp23213
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            n
                        </td>
                        <td>
                            345 
                        </td>
                        <td>
                            unit
                        </td>
                        <td>
                            unit
                        </td>
                        <td>
                            Rp 213231
                        </td>
                        <td>
                           Rp23213
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            n
                        </td>
                        <td>
                            345 
                        </td>
                        <td>
                            unit
                        </td>
                        <td>
                            unit
                        </td>
                        <td>
                            Rp 213231
                        </td>
                        <td>
                           Rp23213
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            n
                        </td>
                        <td>
                            345 
                        </td>
                        <td>
                            unit
                        </td>
                        <td>
                            unit
                        </td>
                        <td>
                            Rp 213231
                        </td>
                        <td>
                           Rp23213
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            n
                        </td>
                        <td>
                            345 
                        </td>
                        <td>
                            unit
                        </td>
                        <td>
                            unit
                        </td>
                        <td>
                            Rp 213231
                        </td>
                        <td>
                           Rp23213
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            n
                        </td>
                        <td>
                            345 
                        </td>
                        <td>
                            unit
                        </td>
                        <td>
                            unit
                        </td>
                        <td>
                            Rp 213231
                        </td>
                        <td>
                           Rp23213
                        </td>
                    </tr>
                    
                </tbody>
            </table>
           
        
        </div>
       <!--  <div class="content">
            
        </div> -->
        <div class="ttd">
             <p>Yogyakarta, 18 Desember 2019<br>
Ketua Prodi Kejuruan TKJ <br><br><br><br><br>Sugiarto,S.pd<br>
NIP 1214214 213213 4124 </p>
        </div>
       
        
        
    </div>
</body>
</html>