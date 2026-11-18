function verif1(){
    piece=document.getElementById("piece").value
    salle=document.getElementById("salle").value
    d=document.getElementById("d").value
    d1=new Date(d)
    d2=new Date()
    if(piece==0){
        alert("merci de chosir une piece")
        return false;

    }
    if(salle==0){
        alert("merci de choisir une salle")
        return false;
    }
    if(d1<d2 || d==""){
        alert("verifier votre Date")
        return false;
    } 
    return true
}
function verif2(){
    id=document.getElementById("spectacle").value
    date=document.getElementById("date").value
    d1=new Date
    d2=new Date(date)

    if(id==""){
        alert("merci d'inserer un id valide")
        return false;
    }
    if(d1>d2 || date==""){
        alert("merci d'inserer une date valide")
        return false;
    }
}