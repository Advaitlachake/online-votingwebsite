
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
    
        document.getElementById("name").innerHTML = xmlDoc.getElementsByTagName("NAME")[5].childNodes[0].nodeValue;
        document.getElementById("post").innerHTML =xmlDoc.getElementsByTagName("POST")[5].childNodes[0].nodeValue;
        document.getElementById("age").innerHTML = xmlDoc.getElementsByTagName("AGE")[5].childNodes[0].nodeValue;
        document.getElementById("dob").innerHTML = xmlDoc.getElementsByTagName("DATE_OF_BIRTH")[5].childNodes[0].nodeValue;
        document.getElementById("bg").innerHTML = xmlDoc.getElementsByTagName("BLOOD_GROUP")[5].childNodes[0].nodeValue;
        document.getElementById("pn").innerHTML = xmlDoc.getElementsByTagName("PARTY_NAME")[5].childNodes[0].nodeValue;
        document.getElementById("pp").innerHTML = xmlDoc.getElementsByTagName("PARTY_POST")[5].childNodes[0].nodeValue;
        document.getElementById("nw").innerHTML = xmlDoc.getElementsByTagName("NET_WORTH")[5].childNodes[0].nodeValue;
        document.getElementById("edu").innerHTML = xmlDoc.getElementsByTagName("EDUCATION")[5].childNodes[0].nodeValue;
        document.getElementById("ms").innerHTML = xmlDoc.getElementsByTagName("MARITAL_STATUS")[5].childNodes[0].nodeValue;


        document.getElementById("a1").innerHTML = xmlDoc.getElementsByTagName("A")[25].childNodes[0].nodeValue;
        document.getElementById("a2").innerHTML = xmlDoc.getElementsByTagName("A")[26].childNodes[0].nodeValue;
        document.getElementById("a3").innerHTML = xmlDoc.getElementsByTagName("A")[27].childNodes[0].nodeValue;
        document.getElementById("a4").innerHTML = xmlDoc.getElementsByTagName("A")[28].childNodes[0].nodeValue;
        document.getElementById("a5").innerHTML = xmlDoc.getElementsByTagName("A")[29].childNodes[0].nodeValue;

        document.getElementById("p1").innerHTML = xmlDoc.getElementsByTagName("PP")[15].childNodes[0].nodeValue;
        document.getElementById("p2").innerHTML = xmlDoc.getElementsByTagName("PP")[16].childNodes[0].nodeValue;
        document.getElementById("p3").innerHTML = xmlDoc.getElementsByTagName("PP")[17].childNodes[0].nodeValue;
    
    }
