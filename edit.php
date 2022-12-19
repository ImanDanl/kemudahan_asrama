<?php 
include_once "connection.php";
if (isset($_POST["update"])) {
    $nobilik = $_POST["no_bilik"];
    $kuantiti = $_POST["kuantiti"];
    $aduan = $_POST["aduan"];
    if (in_array($fileType, $allowTypes)) {
        $image = $_FILES["image"]["tmp_name"];
        $imgContent = addslashes(file_get_contents($image));
        $result = mysqli_query(
            $conn,
            "UPDATE inventori SET
     img='$imgContent',kuantiti='$kuantiti',aduan='$aduan', WHERE no_bilik='$nobilik'"
        );
    } else {
        $result = mysqli_query(
            $conn,
            "UPDATE user SET
     ndp='$ndp', nama='$nama' WHERE ndp='$ndp'"
        );
    }
  if($result){
  echo "<script>alert('Berjaya kemaskini')</script>";
  echo "<script>window.location='dashboard_admin.php'</script>";
  }
  else{
    echo "<script>alert('Tidak Berjaya kemaskini')</script>";
    echo "<script>window.location='update.php'</script>";
  }
      }
 ?>
 <html>
    <head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    </head>

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
</html>