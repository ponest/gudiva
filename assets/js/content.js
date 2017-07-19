/*function topic(type){
    var link ='level/'+type;
     $.ajax({
         url : link,
         dataType : "html",
         success : function(result){
             $('.add_topic').html(result);

         }
     });
}
function past_papers(type){
    var link ='pp_level/'+type;
     $.ajax({
         url : link,
         dataType : "html",
         success : function(result){
             $('.add_pp').html(result);

         }
     });
}
function questions(type){
    var link ='qn_level/'+type;
     $.ajax({
         url : link,
         dataType : "html",
         success : function(result){
             $('.add_questions').html(result);

         }
     });
}
function tips(type){
    var link ='edu_tips/'+type;
     $.ajax({
         url : link,
         dataType : "html",
         success : function(result){
             $('.tips').html(result);

         }
     });
}*/
function swap_pages(type){
    var link ='student_pages/'+type;
     $.ajax({
         url : link,
         dataType : "html",
         success : function(result){
             $('#page-wrapper').html(result);

         }
     });
}
function topic_view(type){
    var link ='topic_pages/'+type;
     $.ajax({
         url : link,
         dataType : "html",
         success : function(result){
             $('#content').html(result);

         }
     });
}
