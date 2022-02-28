<div class="topnav shadow-md" id="myTopnav">
   <div class="">
      <div class="flex items-center float-right">
         <a
            href=""
            class="logout text-sky-900 decoration-none font-bold hover:bg-red-700 hover:px-4 py-2 rounded"
            >Logout <i class="fa fa-sign-out ml-3" aria-hidden="true"></i
         ></a>
      </div>
      <div class="flex items-center mb-7">
         <img src="<?php if($page == "enrollment" || $page =="students") {echo ".";} ; ?>./images/logo.png" class="h-14 mr-3" alt="" />
         <p class="text-2xl text-blue font-bold ">
            Distance Learning Enrollment System
         </p>
      </div>

      <div class="float-right mr-0">
         <form>
            <input type="text" name="search" id="search" placeholder="Search" />
         </form>
      </div>
   </div>
   <a href="../" class="<?php if($page == "dashboard") echo "active"; ?> list">
      <i class="fa fa-dashboard mr-2.5"></i> Dashboard</a
   >
   <a href="../pages/enrollment.php" class="<?php if($page == "enrollment") echo "active"; ?> list">
      <i class="fa fa-list mr-2.5"></i>Enrollment STATUS</a
   >
   <a href="../pages/students.php" class="<?php if($page == "students") echo "active"; ?> list"> <i class="fa fa-users mr-2"></i>Students</a>

   <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
   </a>
</div>

<script>
   function myFunction() {
      var x = document.getElementById('myTopnav');
      if (x.className === 'topnav') {
         x.className += ' responsive';
      } else {
         x.className = 'topnav';
      }
   }
</script>
