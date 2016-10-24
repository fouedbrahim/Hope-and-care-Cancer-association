  function verifiermail() {
      var x = document.getElementById("email").value;
	  var test=false;
	  if ((x.indexOf("@")>=5)&&(x.lastIndexOf(".")>x.indexOf("@")))
      	 
test=true;

return(test);

   };
function esttext(x)  {
  var c = x.toUpperCase();
var tstn=true;

   var i;
  if(c.length<4)
tstn=false;
  for(i=0;i<=c.length;i++)
if(c.charCodeAt(i)<65 || c.charCodeAt(i)>90)
tstn=false;

return(tstn);


   };
   
   function estnum()
   {
   var t=false;
   
      var x = document.getElementById("tel").value;
	  
	if(!isNaN(x.substr(4,8))&& x.length==12 && x.substr(0,4)=="+216")//+216
t=true;
	return(t);
   };
   function passw()
   {
   var p= document.getElementById("passadmin").value;
   
   var t=false;
   if(p.length>=6)
   t=true;
   return(t);
   };
   function adresse()
   {
   var p= document.getElementById("adrs").value;
   
   var t=false;
   if(p.length>=5)
   t=true;
   return(t);
   };
   
   function daten()
   {
    var d = document.getElementById("daten").value;
	   
      
      var amin=1960; 
      var amax=1993; 
      var separateur="/"; 
      var j=(d.substring(0,2));
      var m=(d.substring(3,5));
      var a=(d.substring(6));
      var ok=true;
      if ( ((isNaN(j))||(j<1)||(j>31)) && ok ) {
         ok=false;
      }
      if ( ((isNaN(m))||(m<1)||(m>12)) && ok ) {
        ok=false;
      }
      if ( ((isNaN(a))||(a<amin)||(a>amax)) && ok ) {
         ok=false;
      }
      if ( ((d.substring(2,3)!=separateur)||(d.substring(5,6)!=separateur)) && ok) {
          ok=false;
      }
      if (ok) {
         var d2=new Date(a,m-1,j);
         j2=d2.getDate();
         m2=d2.getMonth()+1;
         a2=d2.getFullYear();
         if (a2<=100) {a2=1900+a2}
         if ((j!=j2)||(m!=m2)||(a!=a2) ) 
		 {
          
            ok=false;
         }
      }
      return ok;
   };
	
   
function valider()
{var ok =true;
   
   if(esttext(document.getElementById("nom").value))
	{ document.getElementById("nom").style.border = "1px solid "; }
	else
	{ document.getElementById("nom").style.border = "2px solid red";ok=false; }	

if(esttext(document.getElementById("prenom").value))		
{ document.getElementById("prenom").style.border = "1px solid "; }
	else
{ document.getElementById("prenom").style.border= "2px solid red"; ok=false;}
		 

  if(verifiermail())
 { document.getElementById("email").style.border = "1px solid ";}
else  
 {document.getElementById("email").style.border = "2px solid red";ok=false;}
  
  
  if(daten())
  document.getElementById("daten").style.border = "1px solid ";
  else 
  {document.getElementById("daten").style.border = "2px solid red";ok=false;}
  
  if(estnum())
  document.getElementById("tel").style.border = "1px solid ";
  
  else 
  {document.getElementById("tel").style.border = "2px solid red";ok=false;}
  
 if(passw())
{document.getElementById("passadmin").style.border = "1px solid";}
 else
 {document.getElementById("passadmin").style.border = "2px solid red";ok=false;}
 
 if(adresse())
{document.getElementById("adrs").style.border = "1px solid";}
 else
 {document.getElementById("adrs").style.border = "2px solid red";ok=false;}
 
 
 
if(estnum())
{ document.getElementById("tel").style.border ="1px solid";}
 else
 
 { document.getElementById("tel").style.border ="2px solid red";ok=false;}
 
 
 
if(ok)
{

document.forms[0].submit();



}
else 
	{
	  
	return  (alert("verifier le formulaire !!"));}
	  };
	  
	  
	  function valider_mod()
{var ok =true;
   
   if(esttext(document.getElementById("nom").value))
	{ document.getElementById("nom").style.border = "1px solid "; }
	else
	{ document.getElementById("nom").style.border = "2px solid red";ok=false; }	

if(esttext(document.getElementById("prenom").value))		
{ document.getElementById("prenom").style.border = "1px solid "; }
	else
{ document.getElementById("prenom").style.border= "2px solid red"; ok=false;}
		 

  
  
  if(daten())
  document.getElementById("daten").style.border = "1px solid ";
  else 
  {document.getElementById("daten").style.border = "2px solid red";ok=false;}
  
  if(estnum())
  document.getElementById("tel").style.border = "1px solid ";
  
  else 
  {document.getElementById("tel").style.border = "2px solid red";ok=false;}
  
 if(passw())
{document.getElementById("passadmin").style.border = "1px solid";}
 else
 {document.getElementById("passadmin").style.border = "2px solid red";ok=false;}
 
 if(adresse())
{document.getElementById("adrs").style.border = "1px solid";}
 else
 {document.getElementById("adrs").style.border = "2px solid red";ok=false;}
 
 
 
if(estnum())
{ document.getElementById("tel").style.border ="1px solid";}
 else
 
 { document.getElementById("tel").style.border ="2px solid red";ok=false;}
 
 
 
if(ok)
{

document.forms[0].submit();



}
else 
	{
	  
	return  (alert("verifier le formulaire !!"));}
	  };