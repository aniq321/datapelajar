<?php
include "COMPONENT/header.php";
if (isset($_POST["update"])) {
    $no_ndp = $_POST["no_ndp"];
    $nama_pelajar = $_POST["nama_pelajar"];
    $no_kp = $_POST["no_kp"];
    $jantina = $_POST["jantina"];
    $no_hp = $_POST["no_hp"];
    $emel = $_POST["emel"];
    $alamat = $_POST["alamat"];
    $rekod1 = "INSERT INTO info_pelajar (no_ndp,nama_pelajar,no_kp,jantina,no_hp) VALUES ('$no_ndp','$nama_pelajar','$no_kp','$jantina','$no_hp')";
    $result1 = mysqli_query($con, $rekod1);
    $rekod2 = "INSERT INTO contact_pelajar (no_ndp,emel,alamat) VALUES ('$no_ndp','$emel','$alamat')";
    $result2 = mysqli_query($con, $rekod2);
    if ($result1 && $result2) { 
        ?>
        <h1 class="text-white px-10 rounded">SUCCESS</h1>
        <?php
     }else{
        ?>
        <h1 class="text-white px-10 rounded">FAIL</h1>
        <?php
     }
}
?>
<h3 class="text-2xl font-bold px-10 text-white">TAMBAH MAKLUMAT PELAJAR</h3>
    <div class="px-10 text-left shadow-lg rounded-lg">
        <form method="post" enctype='multipart/form-data'>
            <div class="mt-4">
            <div class="mt-4">
                <label class="block text-white">NO NDP</label>
                <input name="no_ndp" type="text" required class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">  
                </div>
                <div class="mt-4">
                <label class="block text-white">NAMA PELAJAR</label>
                <input name="nama_pelajar" type="text" required class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">  
                </div>
                <div class="mt-4">
                <label class="block text-white">NO KP</label>
                <input name="no_kp" type="text" required class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">  
                </div>
                <div class="mt-4">
                <label class="block text-white">JANTINA</label>
                <select class="form-select appearance-none block w-full px-3 mt-2 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" name="jantina" required>
                <option disabled selected value> -- select an option -- </option>  
                <option value="Lelaki">Lelaki</option>
                <option value="Perempuan">Perempuan</option>
                </select>
                </div>
                <div class="mt-4">
                <label class="block text-white">NO HP</label>
                <input name="no_hp" type="text" required class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">  
                </div>
                <div class="mt-4">
                <label class="block text-white">EMEL</label>
                <input name="emel" type="text" required class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">  
                </div>
                <div class="mt-4">
                <label class="block text-white">ALAMAT</label>
                <input name="alamat" type="text" required class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">  
                </div>
                <td>
                <div class="flex pb-5 items-baseline justify-between">
                    <button type="submit" name="update" class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">TAMBAH</button>
                    <button type="reset"><a class="text-sm text-blue-600 hover:underline">CLEAR</a></button>
                </div>
            </div>
        </form>
    </div>
<?php include "COMPONENT/footer.php" ?>