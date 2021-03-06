$j(document).ready(function()
{
    //run timer
    setTimeout("quizTimer()",1000);
    
    //check if user set answer before submit
    $j("#quiz-form input[type=submit]").click(function()
    {
        if(
            window.time_left <= 0 ||
            ( $j("#quiz-form input[name=custom_answer]").val() && $j("#quiz-form input[name=custom_answer]").val()!=undefined ) || 
            $j("#quiz-form input[name=^answers]:checked").val()!=undefined || 
            $j("#quiz-form input[name=answer]:checked").val()!=undefined )
        {
           $j("#quiz-form").submit(); 
           return true;
        }
        else
        {
            //show confirm box if user didn't answer
            if( confirm(window.are_you_sure) )
            {
                $j("#quiz-form").submit();
                return true;
            }
        }
        
        return false;
    });
});

//Run timer
function quizTimer()
{
    //reduce time
    window.time_left--;
    
    //if no more time - submit form 
    if(window.time_left <= 0)
    {
        $j("#quiz-form input[type=submit]").click();
        return true;
    }
    
    //convert seconds to min:sec
    if( window.time_left>= 60 )
    {
        min = parseInt(window.time_left/60);
        sec = window.time_left-min*60;
    }
    else
    {
        min = "0";
        sec = window.time_left;
    }
    
    if(sec<10) sec = "0"+sec;
    
    $j("#quiz-timer").html(min+":"+sec);
    
    setTimeout("quizTimer()",1000);
}