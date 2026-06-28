let total_calory=0;
const calory_goal=2000;
let count=0;

document.getElementById("submit").addEventListener("click",function() {
    count++

let calories=parseFloat(document.getElementById("calories").value);

total_calory=total_calory+calories;

if(total_calory>0 && total_calory<801)
{
    document.getElementById("calory").innerHTML="your total calaroy: "+total_calory+"<br>"+"<br>"
    document.getElementById("result").innerHTML="You’re off to a healthy start"+" your meal count: "+count;
}

else
    if(total_calory>800 && total_calory<1601)
{
     document.getElementById("calory").innerHTML="your total calaroy: "+total_calory+"<br>"+"<br>"
    document.getElementById("result").innerHTML="Good progress, keep it balanced! "+" your meal count: "+count;
}

else 
        if(total_calory>1600 && total_calory<2000)
{
     document.getElementById("calory").innerHTML="your total calaroy: "+total_calory+"<br>"+"<br>"
    document.getElementById("result").innerHTML="Almost at your limit"+" your meal count: "+count;
}

else 
        if(total_calory>1999)
{
     document.getElementById("calory").innerHTML="your total calaroy: "+total_calory+"<br>"+"<br>"
    document.getElementById("result").innerHTML="Goal reached! Stay mindful!"+" your meal count: "+count+"<br>";
}
    

if(total_calory<2000 && count>9)
{
     document.getElementById("calory").innerHTML="your total calaroy: "+total_calory+"<br>"+"<br>"
     document.getElementById("alert").innerHTML="Be cautious of frequent snacking"+" your meal count: "+count;
}

})