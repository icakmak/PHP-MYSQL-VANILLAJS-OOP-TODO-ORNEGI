function DataList() {
    let url = "query/crudlist.php";

    let xhr = new XMLHttpRequest();
    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    //console.log(data); //Object {key: "some data"}
    xhr.send("list=list");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let data = JSON.parse(xhr.responseText);

            let tbody="";
            for(const i in data){
                tbody+="<tr>"+
                    "<td>"+data[i]['id']+"</td>"+
                    "<td>"+data[i]['title']+"</td>"+
                    "<td>"+data[i]['text']+"</td>"+
                    "<td>"+data[i]['startDate']+"</td>"+
                    "<td>"+data[i]['finishDate']+"</td>"+
                    "<td></td>"+
                    "</tr>";
            }
            document.getElementById("tbody").innerHTML=tbody;

            //console.log(data);
        }
    };

}