  <div class="col-md-4">

          <!-- Search Widget -->
          <div class="p-6 mt-4 max-w-full bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <h5 class="card-header">Cari</h5>
            <div class="card-body">
                   <form name="search" action="search.php" method="post">
              <div class="input-group">
           
        <input type="text" class="bg-gray-50 appearance-none border-2 border-gray-200 rounded w-full py-2 mt-3 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-500" name="searchtitle" class="form-control" placeholder="Cari......." required>
                <span class="input-group-btn">
                  <button class="mt-3  bg-red-500  text-white font-bold py-1 px-4 rounded-full cursor-pointer hover:bg-red-900 " type="submit">CARI</button>
                </span>
              </form>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="p-6 mt-4 max-w-fullfont-sans bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <h5 class="bg-red">Kategori </h5>
            <div class="card-body mt-3">
              <div class="row">
                <div class="col-span-6">
                  <ul class="list-unstyled mb-0 py-2 text-red-600 hover:text-red-500">
<?php $query=mysqli_query($con,"select id,CategoryName from tblcategory");
while($row=mysqli_fetch_array($query))
{
?>

                    <li class="my-1">
                      <a href="category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?></a>
                    </li>
<?php } ?>
                  </ul>
                </div>
       
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="p-6 mt-4 max-w-full mb-3 font-sans bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <h5 class="card-header">Berita Terbaru</h5>
            <div class="card-body mt-3">
              <div class="col-span-6">
                      <ul class="mb-0  py-2 text-red-600 hover:text-red-500">
<?php
$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId limit 8");
while ($row=mysqli_fetch_array($query)) {

?>

  <li class="my-3">
                      <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"><?php echo htmlentities($row['posttitle']);?></a>
                    </li>
            <?php } ?>
          </ul>
          </div>
            </div>
          </div>


   <!-- Side Widget -->
          

        </div>
        <script src="https://cdn.tailwindcss.com"></script>