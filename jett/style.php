<?php header("content-type: text/css")?>


body{
    margin: 0;
    font-size: 22px;
    font-family: Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif;
    text-align: justify;
    overflow-x: hidden;
}
h1, h2, h3, h4{
    text-align: center;
}
.logo{
    text-align: center;
}
div.logo img{
    width: 250px;
}
p{
    margin: 30px;
    text-indent: 2em;
}
ul{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: darkred;
    text-align: center;
}
li{
    display: inline-block;
}
li a, #persiana{
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li a:hover:not(.atual){
    background-color: indianred;
}
.atual{
    background-color: red;
}
.atual2{
    background-color: indianred;
}
li.cortina{
    display: inline-block;
}
.conteudo{
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 180px;
    box-shadow: 0px 8px 16px 0px;
    z-index: 1;
    padding: 0;
}
.conteudo a{
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
.conteudo a:hover{
    background-color: #f1f1f1;
}
.cortina:hover .conteudo{
    display: block;
}
main{
    padding-top: 10px;
    padding-bottom: 60px;
    background-color: lightgray;
}
.main{
    min-width: 300px;
    max-width: 1000px;
    margin: auto;
    padding: 20px;
    background-color: white;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.486);
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
.faixa{
    background-color: royalblue;
    display: block;
    margin: 0;
    padding: 0;
}
.faixa h2{
    padding: 14px 16px;
    margin: 0;
}
aside{
    float: left;
}
aside img{
    width: 250px;
    padding: 30px;
    padding-top: 60px;
}
div{
    padding: 0px 60px 0px 60px;
}
.doutores{
    display: block;
    background-color: lightgray;
    width: 900px;
    height: 170px;
    margin: auto;
    margin-top: 30px;
    margin-bottom: 30px;
    padding: 0;
}
.doutores div{
    padding: 0;
}
.doutores div.doutor{
    width: 200px;
    height: 166px;
    float: left;
}
.doutores div.doutor img{
    border: solid 2px;
    height: 166px;
}
.doutores div.graduação{
    width: 500px;
    height: 166px;
    float: left;
}
.doutores div.graduação h4{
    text-align: left;
    margin-left: 30px;
}
.doutores div.graduação p{
    margin: 0;
    text-indent: 0;
    margin-left: 30px;
    text-align: left;
}
.rodape{
    display: block;
    margin: auto;
    margin-top: 30px;
    margin-bottom: 30px;
    padding: 0;
    text-align: center;
}
.rodape div{
    padding: 0px;
}
.rodape div.um{
    width: 49%;
    height: 200px;
    float: left;
}
.rodape div.um h4{
    text-align: left;
    padding-left: 200px;
}
.rodape div.dois{
    width: 49%;
    height: 200px;
    float: right;
}
.rodape div.dois h4{
    text-align: right;
    padding-right: 200px;
}
.rodape div a{
    color: royalblue;
    text-decoration: none;
}
footer{
    background-color: white;
    display: block;
    margin: 0;
    padding: 0;
}
footer h2{
    padding: 14px 16px;
    margin: 0;
}
.vermelho{
    color: white;
}
form, label, input{
    display: block;
    margin-top: 5px;
    margin-bottom: 5px;
}
fieldset{
    width: 30%;
    margin: auto;
    text-align: center;
    background-color: white;
}
fieldset input{
    margin: auto;
}
.botao{
    margin-top: 20px;
    text-align: center;
}
.fotos{
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
    margin-top: 40px;
    padding: 0;
}
.fotos img{
    width: 400px;
    height: 400px;
    padding: 10px;
    border-radius: 25px;
}
.img4{
    margin-bottom: 70px;
}
.img6{
    margin-bottom: 10px;

}
.img7{
    margin-left: 40px;
}
.depoimentos img{
    width: 550px;
}
.faixa1{
    background-color: darkred;
    display: block;
    margin: 0;
    padding: 0;
}
.faixa1 h2{
    padding: 14px 16px;
    margin: 0;
}
main#branco{
    background-color: white;
}