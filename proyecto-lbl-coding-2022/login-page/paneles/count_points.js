function countPoints(){
 
    var numero_ini=0;
    var total = 0;
  
      numero_ini = document.getElementById('numero_inicial').value;
  
      for(var i = 1; i <= numero_ini; i++){
          total += Math.pow(i,2);
  
          document.getElementById('total').value=total;
          console.log(total);
      }
      return total;

      
  }

  