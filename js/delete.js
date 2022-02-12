function DataDelete(id) {
    let url = "query/cruddelete.php";

    let xhr = new XMLHttpRequest();
    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    //console.log(data); //Object {key: "some data"}
    xhr.send("id="+id);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let data = JSON.parse(xhr.responseText);
            if(data){
                DataList();
            }

        }
    };

}