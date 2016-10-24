// JavaScript Document
/*function verfiRADIO(d1,d2,d3)
{
if  (d1 == false  && d2 == false && d3 == false) {
		alert("Veuillez cocher un montant svp");}}
	*/	
	function verifiermail(email) {
      if ((email.indexOf("@")>=0)&&(email.indexOf(".")>=0)) {
         return true 
		 alert("email correcte");
      } else {
         alert("Mail invalide !");
         return false
      }
   };
	function CheckDate(d) {
     
      var amin=1999; // année mini
      var amax=2015; // année maxi
      var separateur="/"; 
      var j=(d.substring(0,2));
      var m=(d.substring(3,5));
      var a=(d.substring(6));
      var ok=1;
      if ( ((isNaN(j))||(j<1)||(j>31)) && (ok==1) ) {
         alert("Le jour n'est pas correct."); ok=0;
      }
      if ( ((isNaN(m))||(m<1)||(m>12)) && (ok==1) ) {
         alert("Le mois n'est pas correct."); ok=0;
      }
      if ( ((isNaN(a))||(a<amin)||(a>amax)) && (ok==1) ) {
         alert("L'année n'est pas correcte."); ok=0;
      }
      if ( ((d.substring(2,3)!=separateur)||(d.substring(5,6)!=separateur)) && (ok==1) ) {
         alert("Les séparateurs doivent être des "+separateur); ok=0;
      }
      if (ok==1) {
         var d2=new Date(a,m-1,j);
         j2=d2.getDate();
         m2=d2.getMonth()+1;
         a2=d2.getFullYear();
         if (a2<=100) {a2=1900+a2}
         if ( (j!=j2)||(m!=m2)||(a!=a2) ) {
            alert("La date "+d+" n'existe pas !");
            ok=0;
         }
      }
      return ok;
   };
function verif() {
	
	var nom=window.document.f.nom.value;
var prenom=window.document.f.prenom.value;
var email=window.document.f.email.value; 
var date_naissance=window.document.f.date_naiss.value; 
var num_tel=window.document.f.tel.value;
var adresse=window.document.f.adresse.value;
//var d1 = document.getelementById('d1').checked ;
//var d2 = document.getelementById('d2').checked ;
//var d3 = document.getelementById('d3').checked ;
//verfiRADIO(d1,d2,d3) ;

if(nom=="" )
  {document.f.nom.style.backgroundColor = "red" ;
  document.f.nom.value="champs obligatoire" ;
  }
   if(prenom=="" )
  {document.f.prenom.style.backgroundColor = "red" ;
  document.f.prenom.value="champs obligatoire" ;
  }
   if(email=="" )
  {document.f.email.style.backgroundColor = "red" ;
  document.f.email.value="champs obligatoire" ;
  verifiermail(email);
  }
   if(date_naissance=="")
  {document.f.date_naiss.style.backgroundColor = "red" ;
  document.f.date_naiss.value="champs obligatoire" ;
  CheckDate(date_naissance);
  }
   if(num_tel=="" )
  {document.f.tel.style.backgroundColor = "red" ;
  document.f.tel.value="champs obligatoire" ;
  }
   if(adresse=="" )
  {document.f.adresse.style.backgroundColor = "red" ;
  document.f.adresse.value="champs obligatoire" ;
  }
  
 
};


 
 