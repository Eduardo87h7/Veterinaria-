var mascota = document.getElementById('mascota');
var propietario = document.getElementById('propietario');
var telefono = document.getElementById('telefono');
var fecha = document.getElementById('fecha');
var hora = document.getElementById('hora');
var sintomas = document.getElementById('sintomas');
var error =document.getElementById('error');
var exito = document.getElementById('exito');
function enviarFormulario(){
    console.log('Comprobando formulario');
    var mensajesError =[];
    if(mascota.value === null || mascota.value===''){
       mensajesError.push('ingresa tu nombre'); 
       document.getElementById("exito").style.display = "none";
    }
    if(propietario.value === null || propietario.value===''){
        mensajesError.push('ingresa propietario'); 
        document.getElementById("exito").style.display = "none";
     }
     if(telefono.value === null || telefono.value===''){
        mensajesError.push('ingresa Telefono'); 
        document.getElementById("exito").style.display = "none";
     }
     if(fecha.value === null || fecha.value===''){
         mensajesError.push('ingresa fecha'); 
         document.getElementById("exito").style.display = "none";
      }
      if(hora.value === null || hora.value===''){
        mensajesError.push('ingresa la hora'); 
        document.getElementById("exito").style.display = "none";
     }
     if(sintomas.value === null || sintomas.value===''){
         mensajesError.push('ingresa sintomas'); 
         document.getElementById("exito").style.display = "none";
      }
      if(mensajesError==0){
          console.log("formulario exitoso")

          exito.innerHTML=("se agrego correctamente")
          document.getElementById("exito").style.display = "block";
          document.getElementById("error").style.display = "none";

            var mascota1 = document.getElementById('mascota').value;
            var propietario1 = document.getElementById('propietario').value;
            var telefono1 = document.getElementById('telefono').value;
            var fecha1 = document.getElementById('fecha').value;
            var hora1 = document.getElementById('hora').value;
            var sintomas1 = document.getElementById('sintomas').value;
            var cita = document.getElementById("cita");
            var sinCita = document.getElementById("sinCita");

            //
            
                var myTableDiv = document.getElementById("aq    ui")
                var table = document.createElement('TABLE')
                table.setAttribute("id","ele");
                var tableBody = document.createElement('TBODY')
                
                table.border = '0'
                table.appendChild(tableBody);
                
                var heading = new Array();
                heading[0] = "Nombre"
                heading[1] = "Datos Paciente"

                var stock = new Array()
                stock[0] = new Array("Mascota: ",  mascota1)
                stock[1] = new Array("Propietario: ",  propietario1)
                stock[2] = new Array("Telefono: ", telefono1)
                stock[3] = new Array("Fecha: ",  fecha1)
                stock[4] = new Array("Hora: ",  hora1)
                stock[5] = new Array("Sintoma: ", sintomas1)
                
       
                //COLUMNAS DE LA TABLA
                var tr = document.createElement('TR');
                tableBody.appendChild(tr);
                for (i = 0; i < heading.length; i++) {
                    var th = document.createElement('TH')
                    th.width = '10';
                    

                    th.appendChild(document.createTextNode(heading[i]));
                    tr.appendChild(th);
                }
                
                //FILAS DE LA TABLA
                for (i = 0; i < stock.length; i++) {
                    var tr = document.createElement('TR');
                    for (j = 0; j < stock[i].length; j++) {
                        var td = document.createElement('TD')
                        td.appendChild(document.createTextNode(stock[i][j]));
                        tr.appendChild(td)
                    }
                    tableBody.appendChild(tr);
                    
                }  
                
                
                myTableDiv.appendChild(table)

                var elemento = document.createElement("button");

                var conte =document.createTextNode("borrar");
                
                elemento.appendChild(conte);
                
                elemento.setAttribute("onclick","borrar()");
                elemento.setAttribute("id","ele1");
                elemento.setAttribute("class","btn btn-danger");
                
                document.getElementById("aqui").appendChild(elemento);
                
                
                var elemento1 = document.createElement("button");
                
                var conte1 =document.createTextNode("editar");

                elemento1.appendChild(conte1); 
                elemento1.setAttribute("onclick","editar()");
                elemento1.setAttribute("id","ele2");
                elemento1.setAttribute("class","btn btn-primary");
                document.getElementById("aqui").appendChild(elemento1);
                   
                
                function $(selector){
                    return document.querySelector(selector);
                }

            console.log(mascota1+ " " + propietario1+" "+telefono1+" "+fecha1+" "+hora1+" "+sintomas1);
            
            sinCita.innerHTML=("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Administra   tus   citas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  ")
            
            document.getElementById("sinCita").style.display = "block"; 
          return    
      }
      error.innerHTML= mensajesError.join(', ');
      document.getElementById("error").style.display = "block";
    
    return false; 
}


function borrar(){
    var parrafo = document.getElementById("ele");
    var parrafo1 = document.getElementById("ele1");
    var parrafo2 = document.getElementById("ele2");
    parrafo.parentNode.removeChild(parrafo);
    parrafo1.parentNode.removeChild(parrafo1);
    parrafo2.parentNode.removeChild(parrafo2);
}
        