$(document).ready(function(){
        

        $(".comment-container").delegate(".reply","click",function(){

            var well = $(this).parent().parent();
            var cid = $(this).attr("cid");
            var name = $(this).attr("name_a");
            var token = $(this).attr('token');
            var form = '<form method="post" action="/replies"><input type="hidden" name="_token" value="'+token+'"><br><input type="hidden" name="comment_id" value="'+ cid +'"><div class="form-group col-sm-8"><input type="text" class="form-control" name="name" placeholder="Name (optional)..."></input></div><div class="form-group col-sm-8"><textarea class="form-control" name="reply" placeholder="Comment here...">@'+name+'</textarea></div><div class="form-group col-sm-8"><button type="submit" class="btn btn-sm btn-success">Submit</button></div></form>';

            well.find(".reply-form").append(form);



        });

       

        $(".comment-container").delegate(".reply-to-reply","click",function(){
            var well = $(this).parent().parent();
            var cid = $(this).attr("rid");
            var rname = $(this).attr("rname");
            var token = $(this).attr("token")
            var form = '<form method="post" action="/replies"><input type="hidden" name="_token" value="'+token+'"><br><input type="hidden" name="comment_id" value="'+ cid +'"><div class="form-group col-sm-8"><input type="text" class="form-control" name="name" placeholder="Name (optional)..."></input></div><div class="form-group col-sm-8"><textarea class="form-control" name="reply" placeholder="Comment here...">@'+rname+'</textarea></div><div class="form-group col-sm-8"><button type="submit" class="btn btn-sm btn-success">Submit</button></div></form>';
          
            well.find(".reply-to-reply-form").append(form);

        });

  

    }); 