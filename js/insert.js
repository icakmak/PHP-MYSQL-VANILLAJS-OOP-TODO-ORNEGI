function DataSend() {
    let title = document.getElementById("title").value;
    let text = document.getElementById("text").value;
    let startDate = document.getElementById("startDate").value;
    let finishDate = document.getElementById("finishDate").value;

    let url = "query/crudinsert.php";
    /*
    let data = {
        'title': title,
        "text": text,
        "startDate": startDate,
        "finishDate": finishDate
    };
    console.log(data);*/

    let xhr = new XMLHttpRequest();
    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    //console.log(data); //Object {key: "some data"}
    xhr.send("title="+title+"&text="+text+"&startDate="+startDate+"&finishDate="+finishDate);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var data = JSON.parse(xhr.responseText);
            if(data){
                window.location.href = "index.php";
            }
            //console.log(data);
        }
    };

}