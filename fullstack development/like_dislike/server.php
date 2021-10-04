<?php
   $conn=mysqli_connect('localhost','root','','like_dislike');
   $user_id =6;
$sql="SELECT * FROM post";
   $result= mysqli_query($conn,$sql);
   $post=mysqli_fetch_all($result,MYSQLI_ASSOC);
   
   if(isset($_POST['action'])){
       $post_id=$_POST['post_id'];
       $action=$_POST['action'];
    
       switch ($action) {
           case 'like':
               $sql ="INSERT INTO rating_info( post_id,user_id,rating_action) VALUES($post_id,$user_id,'$action') ON DUPLICATE KEY UPDATE rating_action='like'";
               break;
                case 'dislike':
                    $sql ="INSERT INTO rating_info( post_id,user_id,rating_action) VALUES($post_id,$user_id,'$action') ON DUPLICATE KEY UPDATE rating_action='dislike'";
                break;
                 case 'unlike':
                    $sql ="DELETE FROM rating_info WHERE user_id=$user_id AND post_id=$post_id";
                 break;
                 case 'undislike':
                    $sql ="DELETE FROM rating_info WHERE user_id=$user_id AND post_id=$post_id";
                break;
                                
           default:
               break;
       }
       mysqli_query($conn,$sql);
       echo getRating($post_id);
    
       exit(0);

    }
    
    function getRating($id2)
    {
       global $conn;
         $rating=array();

         $likes_query="SELECT COUNT(*) FROM rating_info WHERE post_id=$id2 AND rating_action='like'";
        
         $dislikes_query="SELECT COUNT(*) FROM rating_info WHERE post_id=$id2 AND rating_action='dislike'";

         $likes_rs= mysqli_query($conn,$likes_query);
         $dislikes_rs=mysqli_query($conn,$dislikes_query);
      
         $likes=mysqli_fetch_array($likes_rs);
         $dislikes=mysqli_fetch_array($dislikes_rs);
         
         $rating =[
             'likes'=> $likes[0],
             'dislikes'=>$dislikes[0]
         ];
         return json_encode($rating);
         }
 
 } 
 
          ?>