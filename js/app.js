function listarMenuProductos()
{
    
    const http=new XMLHttpRequest();
    const url = 'index.php';
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){
            document.getElementById("divResultados").innerHTML = this.responseText;
        }
    };

    http.open("POST",url);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send("option=menuCodigos");
}