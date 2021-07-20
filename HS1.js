
    var xhttp = new XMLHttpRequest();
    
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            myFunction(this);
        }
    };
    xhttp.open("GET", "candidate_details.xml", true);
    xhttp.send();
    
    function myFunction(xml) {
        var xmlDoc = xml.responseXML;
        
    
        document.getElementById("name").innerHTML = xmlDoc.getElementsByTagName("NAME")[3].childNodes[0].nodeValue;
        document.getElementById("post").innerHTML =xmlDoc.getElementsByTagName("POST")[3].childNodes[0].nodeValue;
        document.getElementById("age").innerHTML = xmlDoc.getElementsByTagName("AGE")[3].childNodes[0].nodeValue;
        document.getElementById("dob").innerHTML = xmlDoc.getElementsByTagName("DATE_OF_BIRTH")[3].childNodes[0].nodeValue;
        document.getElementById("bg").innerHTML = xmlDoc.getElementsByTagName("BLOOD_GROUP")[3].childNodes[0].nodeValue;
        document.getElementById("pn").innerHTML = xmlDoc.getElementsByTagName("PARTY_NAME")[3].childNodes[0].nodeValue;
        document.getElementById("pp").innerHTML = xmlDoc.getElementsByTagName("PARTY_POST")[3].childNodes[0].nodeValue;
        document.getElementById("nw").innerHTML = xmlDoc.getElementsByTagName("NET_WORTH")[3].childNodes[0].nodeValue;
        document.getElementById("edu").innerHTML = xmlDoc.getElementsByTagName("EDUCATION")[3].childNodes[0].nodeValue;
        document.getElementById("ms").innerHTML = xmlDoc.getElementsByTagName("MARITAL_STATUS")[3].childNodes[0].nodeValue;


        document.getElementById("a1").innerHTML = xmlDoc.getElementsByTagName("A")[15].childNodes[0].nodeValue;
        document.getElementById("a2").innerHTML = xmlDoc.getElementsByTagName("A")[16].childNodes[0].nodeValue;
        document.getElementById("a3").innerHTML = xmlDoc.getElementsByTagName("A")[17].childNodes[0].nodeValue;
        document.getElementById("a4").innerHTML = xmlDoc.getElementsByTagName("A")[18].childNodes[0].nodeValue;
        document.getElementById("a5").innerHTML = xmlDoc.getElementsByTagName("A")[19].childNodes[0].nodeValue;

        document.getElementById("p1").innerHTML = xmlDoc.getElementsByTagName("PP")[9].childNodes[0].nodeValue;
        document.getElementById("p2").innerHTML = xmlDoc.getElementsByTagName("PP")[10].childNodes[0].nodeValue;
        document.getElementById("p3").innerHTML = xmlDoc.getElementsByTagName("PP")[11].childNodes[0].nodeValue;
        
    
    }
