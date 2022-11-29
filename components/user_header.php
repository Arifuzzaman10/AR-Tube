<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <section class="flex">

        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets4.lottiefiles.com/packages/lf20_xjPvZu.json"  background="transparent"  speed="1"  style="width: 40px; height: 40px;"  loop  autoplay></lottie-player>
        <a href="home.php" class="logo" style="margin-left:-32px;">AR Tube.</a>

      <form action="search_course.php" method="post" class="search-form">
         <input type="text" name="search_course" placeholder="search content..." required maxlength="100">
         <button type="submit" class="fas fa-search" name="search_course_btn"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fa-solid fa-bars"></div>
         <div id="search-btn" class="fa-solid fa-search "></div>
         <div id="user-btn" class="fa-solid fa-user-circle"></div>
         <div id="toggle-btn" class="fa-solid fa-sun"></div>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <img src="uploaded_files/<?= $fetch_profile['image']; ?>" alt="">
         <h3><?= $fetch_profile['name']; ?></h3>
         <span>viewers</span>
         <a href="profile.php" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
         <a href="components/user_logout.php" onclick="return confirm('logout from this website?');" class="delete-btn">logout</a>
         <?php
            }else{
         ?>
         <h3>please login or register</h3>
          <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
         <?php
            }
         ?>
      </div>

   </section>

</header>

<!-- header section ends -->

<!-- side bar section starts  -->

<div class="side-bar">

   <div class="close-side-bar">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <img src="uploaded_files/<?= $fetch_profile['image']; ?>" alt="">
         <h3><?= $fetch_profile['name']; ?></h3>
         <span>Viewers</span>
         <a href="profile.php" class="btn">view profile</a>
         <?php
            }else{
         ?>
         <h3>please login or register</h3>
          <div class="flex-btn" style="padding-top: .5rem;">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
         <?php
            }
         ?>
      </div>

   <nav class="navbar">
      <a href="home.php"><i class="fa-solid fa-house-user fa-bounce"></i><span>home</span></a>
      <a href="about.php"><i class="fa-solid fa-circle-info fa-bounce"></i><span>about us</span></a>
      <a href="courses.php"><i class="fa-solid fa-video fa-bounce"></i><span>content</span></a>
      <a href="/newsfeed/home.php"><i class="fa-solid fa-blog fa-bounce"></i><span>News feed</span></a>
      <a href="teachers.php"><i class="fa-solid fa-chalkboard-user fa-bounce"></i><span>content creators</span></a>
      <a href="contact.php"><i class="fa-solid fa-headset fa-bounce"></i><span>Feed back sms</span></a>
      <a href="/chat-for-each-other/message.php"><i class="fa-solid fa-envelope fa-bounce"></i><span>AR Messenger</span></a>
   </nav>

</div>

<!-- side bar section ends -->