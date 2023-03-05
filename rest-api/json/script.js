let convert = new XMLHttpRequest();
convert.onreadystatechange = function () {
    if(convert.readyState == 4 && convert.status == 200 )
    {
        let menu =  this.responseText;
        console.log(menu);
    }
}
convert.open('GET','coba.json',true);
convert.send();