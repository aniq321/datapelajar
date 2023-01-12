<?php include "COMPONENT/header.php" ?>
<h3 class="text-2xl font-bold px-10 text-white">PADAM MAKLUMAT PELAJAR</h3>
<div class="px-8 pb-6 mt-4 flex flex-col ">
  <div class=" sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden rounded-lg">
        <table class="min-w-full text-center">
          <thead class="border-b bg-gray-500">
            <tr>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                ID
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
              NO NDP
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                NAMA PELAJAR
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                NO KP
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                JANTINA
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                NO HP
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                EMEL
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                ALAMAT
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                ACTION
              </th>
            </tr>
          </thead class="border-b">
          <tbody>
            <?php
            $data1 = mysqli_query($con, "SELECT * FROM info_pelajar");
            while ($info = mysqli_fetch_array($data1)) { ?>
                  <tr class="bg-gray-400 border-b">
              <td class="text-base text-white font-medium px-6 py-4 whitespace-nowrap">
                <?php echo $info["id"];?>
              </td>
              <td class="text-base text-white font-medium px-6 py-4 whitespace-nowrap">
                <?php echo $info["no_ndp"]; $ndp = $info["no_ndp"]?>
              </td>
              <td class="text-base text-white font-medium px-6 py-4 whitespace-normal">
              <?php echo $info["nama_pelajar"]; ?>
              </td>
              <td class="text-base text-white font-medium px-6 py-4 whitespace-nowrap">
              <?php echo $info["no_kp"]; ?>
              </td>
              <td class="text-base text-white font-medium px-6 py-4 whitespace-nowrap">
                <?php echo $info["jantina"]; ?>
              </td>
              <td class="text-base text-white font-medium px-6 py-4 whitespace-nowrap">
                <?php echo $info["no_hp"]; ?>
              </td>     
            <?php
            $data2 = mysqli_query($con, "SELECT * FROM contact_pelajar WHERE no_ndp='$ndp'");
            while ($info2 = mysqli_fetch_array($data2)) { ?>
              <td class="text-base text-white font-medium px-6 py-4 whitespace-nowrap">
                <?php echo $info2["emel"]; ?>
              </td>
              <td class="text-base text-white font-medium px-6 py-4 whitespace-normal">
                <?php echo $info2["alamat"]; ?>
              </td>
              <!-- test -->
              <td class="text-base text-white font-medium px-6 py-4 whitespace-nowrap">
              <div class="flex space-x-2 justify-center">
                <button type="button" class="inline-block px-6 py-2.5 bg-red-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-lg hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"><a href="COMPONENT/padam.php?delete_id=<?php echo $info["id"]; ?>">delete</a></button>
              </div>
            </td>
            <!-- test -->
            </tr>
            <?php } }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php include "COMPONENT/footer.php" ?>