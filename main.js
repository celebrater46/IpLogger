"use strict";

let json;

function postSend() {
    let fd = new FormData();
    fd.append('foo',1);
    fd.append('bar','a');
    let xhr = new XMLHttpRequest();
    xhr.open('POST','foobar.php');
    xhr.send(fd);
    xhr.onreadystatechange = function(){
        if ((xhr.readyState == 4) && (xhr.status == 200)) {
            json = JSON.parse(xhr.responseText);
        }
    };
}