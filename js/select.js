function DataSelect(id) {
    let url = "query/crudselect.php";

    let xhr = new XMLHttpRequest();
    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    //console.log(data); //Object {key: "some data"}
    xhr.send("id="+id);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let data = JSON.parse(xhr.responseText);
            console.log(data);
            if(data){
                document.getElementById("title").value=data['title'];
                document.getElementById("text").value=data['text'];
                document.getElementById("startDate").value=data['startDate'];
                document.getElementById("finishDate").value=data['finishDate'];
            }

        }
    };

}