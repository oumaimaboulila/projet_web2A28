function verif(){
    var nom=document.getElementById("nom").value;
    var prenom=document.getElementById("prenom").value;
    if(nom==""||prenom=="")
        alert("veuiller remplir le champ");
else{
    alert("welcom"+nom+" "+prenom);
}


}