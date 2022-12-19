<?php 
if(isset($_POST[''])) {    
  $no_bilik = $_POST['no_bilik'];
  $nama_barang = $_POST['nama_barang'];
  $kuantiti = $_POST['kuantiti'];
  $aduan = $_POST['aduan'];
  $conn = "INSERT INTO inventory (no_bilik, nama_barang, kuantiti, aduan)
  VALUES ('$no_bilik', '$nama_barang', '$kuantiti', '$aduan')";
  $result = mysqli_query($sql, $conn); 
  if ($result)
      echo "<script>alert('Aduan Anda telah Berjaya dihantar!')</script>";
  else 
      echo "<script>alert('Tidak Berjaya!')</script>";
      echo "<script>window.location='index.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    
</head>
<body class="bg-blue-400">
    <br>
<center>
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    <span class="sr-only">Image</span>
                </th>
                <th scope="col" class="py-3 px-6">
                    Alatan
                </th>
                <th scope="col" class="py-3 px-6">
                    Kuantiti
                </th>
                <th scope="col" class="py-3 px-6">
                    Tindakan
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="p-4 w-32">
                    <img src="https://cf.shopee.com.my/file/4af5aa52f221c43ba8cc63fb7dcf46db" alt="Katil Busuk">
                </td>
                <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                    Katil
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center space-x-3">
                        <div>
                            <input type="kuantiti" id="first_product" class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required>
                        </div>
                    </div>
                </td>
                <td class="py-4 px-6">
                    <a href="edit.php" class="font-medium text-red-600 dark:text-red-500 hover:underline">Edit</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="p-4 w-32">
                    <img src="https://media.ohbulan.com/2020/12/a879faa5-1e1b-40a8-b119-b6911a8b3334.jpg" alt="Kipas">
                </td>
                <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                    Kipas
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center space-x-3">
                        <div>
                            <input type="kuantiti" id="second_product" class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required>
                        </div>
                    </div>
                </td>
                <td class="py-4 px-6">
                    <a href="edit.php" class="font-medium text-red-600 dark:text-red-500 hover:underline">Edit</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="p-4 w-32">
                    <img src="https://hobikoe.com/uploads/all/SCqoMuxC3Qsk7b9KxvWTayINAbrU36CK29xDW5N1.jpeg" alt="Meja Open">
                </td>
                <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                    Meja 
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center space-x-3">
                        <div>
                            <input type="kuantiti" id="third_product" class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required>
                        </div>
                    </div>
                </td>
                <td class="py-4 px-6">
                    <a href="edit.php" class="font-medium text-red-600 dark:text-red-500 hover:underline">Edit</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="p-4 w-32">
                    <img src="https://media.karousell.com/media/photos/products/2019/10/02/almari_besi_2_pintu_untuk_asrama_pelajar__pekerja_1570006563_a64835c5_progressive.jpg" alt="Lockerku">
                </td>
                <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                    Almari 
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center space-x-3">
                        <div>
                            <input type="kuantiti" id="third_product" class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required>
                        </div>
                    </div>
                </td>
                <td class="py-4 px-6">
                    <a href="edit.php" class="font-medium text-red-600 dark:text-red-500 hover:underline">Edit</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="p-4 w-32">
                    <img src="https://cf.shopee.com.my/file/b11021d161e1e81a3937b697961621df" alt="kerusi ofis">
                </td>
                <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                    Kerusi malas 
                </td>
                <td class="py-4 px-6">
                    <div class="flex items-center space-x-3">
                        <div>
                            <input type="number" id="third_product" class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" required>
                        </div>
                    </div>
                </td>
                <td class="py-4 px-6">
                    <a href="edit.php" class="font-medium text-red-600 dark:text-red-500 hover:underline">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</center>
</body>
</html>