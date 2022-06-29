<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <title>Faktur Penjualan Barang</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/laporan.css')?>"/>
</head>
<!-- <body> -->
<body onload="window.print()">
<div id="laporan">
<table align="center" style="width:350px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">

</table>

<table border="0" align="center" style="width:350px; border:none;margin-top:5px;margin-bottom:0px;">
<tr>
    
</tr>
                       
</table>
<?php 
    $b=$data->row_array();
?>
<table align="center" style="width:350px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>  
        <td colspan="2" style="width:800px;paddin-left:20px;"><center><h4><b> TOKO RAHAYU<br>
        Desa Dempelan RT.18 RW.03, Kec.Madiun, Kabupaten Madiun, Jawa Timur 63151</h4><b>-----------------------------------------------------------------------------------------------</b></center></td>
    </tr>
    <tr>
        <td align="right"></td>
    </tr>
    <tr>
        <td align="center"></td>
    </tr>
</table>
<table border="0" align="center" style="width:350px;border:none;">
        <tr>
            <td style="text-align:left;">No Faktur : <?php echo $b['jual_nofak'];?></td>
        </tr>
        <tr>
            <td style="text-align:left;">Tanggal : <?php echo $b['jual_tanggal'];?></td>
        </tr>
        <tr>
            <td style="text-align:left;">Keterangan : <?php echo $b['jual_keterangan'];?></td>
        </tr>
        <tr>
            <td style="text-align:left;">Kasir : <?php echo $this->session->userdata('nama');?></td>
        </tr>
        <tr><th></th></tr>
        <tr>
            <th style="text-align:left;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </th>
        </tr>
        </tr>
        <tr><th><br></th></tr>
        
</table>

<table border="0" align="center" style="width:350px;margin-bottom:20px;border:none;">
<thead>

    <tr>
        <td style="text-align:left;" style="width:20px;">No</td>
        <td style="text-align:left;" style="width:70px;">Nama Barang</td>
        <td style="text-align:center;" style="width:60px;">Harga Jual</td>
        <td style="text-align:center;" style="width:60px;">Qty</td>
        <td style="text-align:center;" style="width:60px;">Diskon</td>
        <td style="text-align:right;">SubTotal</td>
    </tr>
</thead>
<tbody>
<?php 
$no=0;
    foreach ($data->result_array() as $i) {
        $no++;
        
        $nabar=$i['d_jual_barang_nama'];
        $harjul=$i['d_jual_barang_harjul'];
        $qty=$i['d_jual_qty'];
        $diskon=$i['d_jual_diskon'];
        $total=$i['d_jual_total'];
?>
    <tr>
        <td style="text-align:center;"><?php echo $no;?></td>
        <td style="text-align:left;"><?php echo $nabar;?></td>
        <td style="text-align:center;"><?php echo 'Rp '.number_format($harjul);?></td>
        <td style="text-align:center;"><?php echo $qty;?></td>
        <td style="text-align:center;"><?php echo 'Rp '.number_format($diskon);?></td>
        <td style="text-align:right;"><?php echo 'Rp '.number_format($total);?></td>
    </tr>
<?php }?>
</tbody>
<tfoot>

    <tr>
        <td colspan="5" style="text-align:right;"><b>Total</b></td>
        <td style="text-align:right;"><b><?php echo 'Rp '.number_format($b['jual_total']);?></b></td>
    </tr>
</tfoot>
</table>
<p style="text-align:center;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
<table border="0" align="center" style="width:350px;border:none;">
        <tr>
            <td align="right">Total  : <?php echo 'Rp '.number_format($b['jual_total']).',-';?></td>
        </tr>
        <tr>
            <td align="right">Tunai  : <?php echo 'Rp '.number_format($b['jual_jml_uang']).',-';?></td>
        </tr>
        <tr>
            <td align="right">Kembalian   : <?php echo 'Rp '.number_format($b['jual_kembalian']).',-';?></td>
        </tr>
</table>
<p style="text-align:center;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
<p style="text-align:center;">---- TERIMA KASIH ----</p>
<p style="text-align:center;">---- SELAMAT DATANG KEMBALI ----</p>

<table align="center" style="width:350px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td></td>
</table>

<table align="center" style="width:350px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <th><br/><br/></th>
    </tr>
    <tr>
        <th align="left"></th>
    </tr>
</table>
</div>
</body>
</html>