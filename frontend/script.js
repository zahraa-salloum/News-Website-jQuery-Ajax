$(document).ready(function(){
    $.ajax({
        url: 'http://localhost/news-website-jQuery-Ajax/backend/select_news.php',
        type: 'get',
        dataType: 'JSON',
        success: function(response){
            
            let len = response.length;
            for(let i=0 ; i < len; i++){
                let html = "<div>"+response[i]['title']+"</div>"+"<div>"+response[i]['content']+"</div>"+"<div>"+response[i]['date']+"</div>"+"<hr>";

                $("#container").append(html);



            }
        }
    });
});