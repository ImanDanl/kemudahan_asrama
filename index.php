<?php
include "connection.php";

if (isset($_POST['ndp'])){
	$nama = $_POST['nama'];
	$ndp = $_POST['ndp'];

	$conn = mysqli_query($mysqli, "SELECT * FROM user WHERE ndp = '$ndp'");
	$count = mysqli_num_rows($conn);
    if (mysqli_num_rows($sql) == 0) {
    } else {
        $row = mysqli_fetch_assoc($conn);
        $_SESSION["nama"] = $row["nama"];
        $_SESSION["ndp"] = $row["ndp"];
            header("Location: report.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
</head>
<body class="bg-blue-400">
	<center>
<div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
  <form>
    <div class="form-group mb-6">
      <label for="nama" class="form-label inline-block mb-2 text-gray-700">Nama</label>
      <input type="nama" class="form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="nama">
    </div>
    <div class="form-group mb-6">
      <label for="ndp" class="form-label inline-block mb-2 text-gray-700">No. NDP</label>
      <input type="ndp" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
        placeholder="ndp">
    </div>
	<div class="form-group mb-6">
      <label for="no_phone" class="form-label inline-block mb-2 text-gray-700">No.Telefon</label>
      <input type="no_phone" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
        placeholder="010-0000000">
    </div>
	<div class="form-group mb-6">
      <label for="no_bilik" class="form-label inline-block mb-2 text-gray-700">No.Bilik</label>
      <input type="no_bilik" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
        placeholder="AL-00-000">
    </div>
	<div class="form-group mb-6">
      <label for="email" class="form-label inline-block mb-2 text-gray-700">Email</label>
      <input type="email" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" 
        placeholder="xxxxx@gmail.com">
    </div>
    <button type="submit" class="
      w-full
      px-3
      py-2.5
	  bg-gray-600
      text-white
      font-medium
      text-xs
      leading-tight
      uppercase
      rounded
      transition
      duration-150
      ease-in-out"><a href="report.php">Sign in</a></button>
  </form>
</div>
</center>
</body>
</html>