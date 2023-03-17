function ShowType() {
    var tip=document.getElementById("tipe").value;
    
    if (tip=="all")
    {
         document.getElementById('checkbox1').style.display = "block";
         document.getElementById('checkbox2').style.display = "block";
         document.getElementById('checkbox3').style.display = "block";
         document.getElementById('checkbox4').style.display = "block";
    }
    else if (tip=="grooming")
    {
         document.getElementById('checkbox1').style.display = "block";
         document.getElementById('checkbox2').style.display = "none";
         document.getElementById('checkbox3').style.display = "none";
         document.getElementById('checkbox4').style.display = "none";
    }
    else if (tip=="clinic")
    {
         document.getElementById('checkbox1').style.display = "none";
         document.getElementById('checkbox2').style.display = "block";
         document.getElementById('checkbox3').style.display = "none";
         document.getElementById('checkbox4').style.display = "none";
    }
    else if (tip=="training")
    {
         document.getElementById('checkbox1').style.display = "none";
         document.getElementById('checkbox2').style.display = "none";
         document.getElementById('checkbox3').style.display = "block";
         document.getElementById('checkbox4').style.display = "none";
    }
    else
    {
         document.getElementById('checkbox1').style.display = "none";
         document.getElementById('checkbox2').style.display = "none";
         document.getElementById('checkbox3').style.display = "none";
         document.getElementById('checkbox4').style.display = "block";
    }
}