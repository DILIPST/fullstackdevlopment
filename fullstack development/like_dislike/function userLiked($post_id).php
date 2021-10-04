function userLiked($post_id)
   {
       global $conn;
       global $user_id;
       $sql = "SELECT * FROM rating_info WHERE user_id=$user_id
       AND post_id=$post_id AND rating_action='like'";
       $result = mysqli_query($conn,$sql);
       if (mysqli_num_rows($result)>0) {
           return true;
       }
       else{
           return false;
       }
   }

     
   function userDisliked($post_id)
   {
       global $conn;
       global $user_id;
       $sql = "SELECT * FROM rating_info WHERE user_id=$user_id
       AND post_id=$post_id AND rating_action='dislike'";
       $result = mysqli_query($conn,$sql);
       if (mysqli_num_rows($result)>0) {
           return true;
       }
       else{
           return false;
       }
   }
   server sideee
   ?php if (userDisliked($post['id2'])): ?>
    class="fa fa-thumbs-down dislike-btn"
<?php else: ?>
    class="fa fa-thumbs-o-down  dislike-btn"
<?php endif ?>
 index pageee
 <!--<span class="likes"><?php  echo getlikes($post['id2']) ?></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->       
<!--<span class="dislikes"><?php  echo getDislikes($post['id2']) ?></span>-->
index tooo
server 
// function getRating($id)
    //   {
      //     global $conn;
        //   $rating=array();
//
  //         $likes_query="SELECT COUNT(*) FROM rating_info WHERE post_id=$id AND rating_action='like'";
    //       $dislikes_query="SELECT COUNT(*) FROM rating_info WHERE post_id=$id AND rating_action='dislike'";
//
 //          $likes_rs= mysqli_query($conn,$likes_query);
   //        $dislikes_rs=mysqli_query($conn,$dislikes_query);
//
   ///        $likes=mysqli_fetch_array($likes_rs);
 //          $dislikes=mysqli_fetch_array($dislikes_rs);
  //         
    //       $rating =[
      //         'likes'=> $likes[0],
        //       'dislikes'=>$dislikes[0]
          // ];
           //return json_encode($rating);
         //  }
   //
   //
     //      function getlikes($id)
      //     {
       //        global $conn;
        //       $sql = "SELECT  COUNT(*) FROM  rating_info 
          //             WHERE  post_id=$post_id AND rating_action='like'";
//
  //             $rs = mysqli_query($conn,$sql);
    //           $result= mysqli_fetch_array($rs);
  //
    //           return $result[0];
      //     }
   //
    //       function getDislikes($id)
       //  {
     // //         global $conn;
//               $sql = "SELECT  COUNT(*) FROM  rating_info 
  //                   WHERE  post_id=$post_id AND rating_action='dislike'";
    //           $rs = mysqli_query($conn,$sql);
      //         $result= mysqli_fetch_array($rs);
        //       return $result[0];
          // }


