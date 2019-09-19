function showList(str, typeSearch) {
  console.log(typeSearch); //debug
  if (str == "") {
    document.getElementById("txtHint").innerHTML = ""; //cleR INPUT VELD
  }
  let xmlhttp = new XMLHttpRequest();
  if (window.XMLHttpRequest) {} // Code for IE7+, Firefox, Chrome, Opera,Safari
  else {} // Code for IE6, IE5
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      let responseString = this.responseText; //voor alle gevallen
      console.log("JSON string is binenn")
      //JSON string naar array

      //ALS LIST
      if (typeSearch == "list") {
        console.log("Er word een list gebruikt");
        responseArray = JSON.parse(responseString);
        printArray(responseArray);
      }

      //ALS ANSWWER PARSELJSON
      if (typeSearch == "answer") {
        console.log("Er word een answer gebruikt");
        parseJson(responseString);
      }


    }
  };
  let httpString = "../../private/includes/getdata.php?q=" + str + "&type=" + typeSearch; //voor zowel list al answer

  xmlhttp.open("GET", "../../private/includes/getdata.php?q=" + str + "&type=" + typeSearch, true);
  xmlhttp.send();
}


let searchCountry = document.getElementById('searchCountry');
searchCountry.addEventListener("keyup", printArray);

function printArray(responseArray) {
  console.log(responseArray);
  let localString = "<ul>"; // lege string
  for (let i = 0; i < responseArray.length; i++) {
    localString += "<h3 onclick=showList('" + responseArray[i] + "','answer')>" + responseArray[i] + "</h3>";
    console.log(localString)
    //echo httpString;

    //bedenk truc voor toeveoeng link of click showList(responseArray[i], "answer")

    //onclick=showList(responseArray[i],"answer")
  }

  document.getElementById("txtHint").innerHTML = localString + "</ul>"; // SCHRIJF NAAR HTML

  //showList(searchCountry);
}
/**/
function parseJson(result) {
  console.log(result)
  console.log("Result gelogd")
  let localString = result; // Result in localstring stoppen
  document.getElementById("txtHint").innerHTML = localString; // SCHRIJF NAAR HTML
}
