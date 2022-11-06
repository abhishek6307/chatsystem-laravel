jQuery(document).ready(function($){
    $(".inner li").click(function(){
            var isok = false;
            setTimeout(function(){
                $(".inner li").each(function(){
                    if(!isok){
                        if($(this).hasClass("selected")){
                            isok = true;
                            return;

                        }
                        else{
                            isok = false;
                        }
                    }
                });
                if(isok){
                    $("#create").prop("disabled", false);
                }
                else{
                    $("#create").prop("disabled", true);
                }
                isok = false;
            }, 600)
    });
});