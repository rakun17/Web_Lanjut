<!DOCTYPE html>
<html>

<head>
  <title>Tugas Pekan 2 web lanjut</title>
  <style>
    #tbl,
    #row,
    #col {
      border: 1px solid black;
    }

    #row {
      text-align: start;
    }
  </style>
</head>

<body>
  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <table>
      <tr>
        <th> Nama Barang</th>
        <th>Bonus</th>
      </tr>
      <tr>
        <td><input type="checkbox" name="barang[]" value="5000000">Laptop </td>
        <td><label for="">Mouse</label></td>
      </tr>
      <tr>
        <td><input type="checkbox" name="barang[]" value="1200000">Handphone</td>
        <td><label for="">Handfree</label></td>
      </tr>
      <tr>
        <td><input type="checkbox" name="barang[]" value="2500000">LCD TV</td>
        <td><label for="">Antenna</label></td>
      </tr>
      <tr>
        <td><input type="checkbox" name="barang[]" value="3000000">Komputer</td>
        <td><label for="">Printer</label></td>
      </tr>

    </table>
    <br>
    <input type="submit" value="Submit">
    <input type="submit" value="Reset">
  </form>
  <br>
  <br>

  <?php if (isset($_POST['barang'])): ?>

    <?php $barang = $_POST['barang'] ?>


    <table id="tbl">
      <tr id="row">
        <th id="col"> Nama Barang </th>
        <th id="col"> Bonus </th>
        <th id="col"> Harga </th>
      </tr>

      <tr id="row">
        <td id="col"> Laptop </td>
        <td id="col"> Mouse </td>
        <td id="col">
          <?php echo $barang[0] . "<br>"; ?>
        </td>
      </tr>

      <tr id="row">
        <td id="col"> Handphone </td>
        <td id="col"> Handfree </td>
        <td id="col">
          <?php echo $barang[1] . "<br>"; ?>
        </td>
      </tr>
      <tr id="row">
        <td id="col"> LCD TV </td>
        <td id="col"> Antenna </td>
        <td id="col">
          <?php echo $barang[2] . "<br>"; ?>
        </td>
      </tr>
      <tr id="row">
        <td id="col"> Komputer </td>
        <td id="col"> Printer </td>
        <td id="col">
          <?php echo $barang[3] . "<br>"; ?>
        </td>
      </tr>
      <tr>
        <th colspan="2" id="row"> TOTAL </th>
        <th id="row"> 11700000</th>
      </tr>
    </table>
  <?php else: ?>
    <?php echo "Tolong ceklis semuanya" ?>

  <?php endif; ?>

</body>


</html>