$(document).ready(function(){
    $('.like-btn').on('click',function()
    {
        var post_id=$(this).data('id2');
        $clicked_btn = $(this);
    
        if($clicked_btn.hasClass('fa-thumbs-o-up')){
            echjo 
        action ='like';
    }
    else if ($clicked_btn.hasClass('fa-thumbs-up')){
        action='unlike';
    }
    $.ajax({
        url:'index.php',
        type:'post',
        data:{
          'action':action,
            'post_id': post_id
        },
        success: function(data){
            res=JSON.parse(data);
            if(action == 'like'){
                $clicked_btn.removeClass('fa-thumbs-o-up');
               $clicked_btn.addClass('fa-thumbs-up');
            }
            else if (action=='unlike'){
                $clicked_btn.removeClass('fa-thumbs-up');
                $clicked_btn.addClass('fa-thumbs-o-up');
            }
            
        $clicked_btn.siblings('span.likes').text(res.likes);
        $clicked_btn.siblings('span.dislikes').text(res.dislikes);
       }
     
     })

    });
});