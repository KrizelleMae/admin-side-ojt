<!-- BUttons -->
<div class="mt-10">
   <div class="uk-child-width-expand@l" uk-grid>
      <!-- One -->
      <div>
         <a href="./enrollment.php" class="stat-box"
            ><div
               class="uk-card bg-white uk-card-body rounded p-5 <?php if($stat == 'advising') {echo 'bg-gray-700';} else {echo 'bg-gray-200';}; ?> flex items-center px-6 <?php if($stat != 'advising') echo 'stat-box'; ?>"
            >
               <div
                  class="<?php if($stat == 'advising') {echo 'text-white ';} else {echo 'text-black';}; ?> font-semibold"
               >
                  ADVISING
               </div>

               <div class="uk-card-badge uk-label my-1 rounded-full">5</div>
            </div></a
         >
      </div>
      <!-- Two -->
      <div>
         <a href="./assessment.php" class="stat-box">
            <div
               class="uk-card bg-white uk-card-body rounded p-5 <?php if($stat == 'assessment') {echo 'bg-gray-700';} else {echo 'bg-gray-200';}; ?> flex items-center px-6 <?php if($stat != 'assessment') echo 'stat-box';?>"
            >
               <div
                  class="<?php if($stat == 'assessment') {echo 'text-white ';} else {echo 'text-black';};?> font-semibold"
               >
                  ASSESSMENT
               </div>

               <div class="uk-card-badge uk-label my-1 rounded-full">5</div>
            </div></a
         >
      </div>
      <!-- Three -->

      <div>
         <a href="./payments.php" class="stat-box">
            <div
               class="uk-card bg-white uk-card-body rounded p-5 <?php if($stat == 'payment') {echo 'bg-gray-700';} else {echo 'bg-gray-200';}; ?> flex items-center px-6 <?php if($stat != 'payment') echo 'stat-box';?>"
            >
               <div
                  class="<?php if($stat == 'payment') {echo 'text-white ';} else {echo 'text-black';};?> font-semibold"
               >
                  PENDING PAYMENTS
               </div>

               <div class="uk-card-badge uk-label my-1 rounded-full">5</div>
            </div></a
         >
      </div>
      <!-- Four -->
      <div>
         <a href="./enlistment.php" class="stat-box">
            <div
               class="uk-card bg-white uk-card-body rounded p-5 <?php if($stat == 'enlistment') {echo 'bg-gray-700';} else {echo 'bg-gray-200';}; ?> flex items-center px-6 <?php if($stat != 'enlistment') echo 'stat-box';?>"
            >
               <div
                  class="<?php if($stat == 'enlistment') {echo 'text-white ';} else {echo 'text-black';};?> font-semibold"
               >
                  ENLISTMENT
               </div>

               <div class="uk-card-badge uk-label my-1 rounded-full">5</div>
            </div></a
         >
      </div>
   </div>
</div>
