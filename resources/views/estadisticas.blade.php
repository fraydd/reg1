@extends('layouts.app')
@section('content')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container">
    <div class="card-header">
<h3>Estadísticas</h3>
    </div>
    

    <div class="row">
        <div style=" width: 500px; ">

        
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"> Parámetro</th>
                        <th scope="col"> Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Personas registradas</td><td id="cantidad"></td>
                        
                    </tr>
                    <tr>
                        <td>Edad media de los habitantes de calle</td><td id="edadm"></td>
                        
                    </tr>
                </tbody>

            </table>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6">
            <canvas id="chart-edades" width="10" height="10"></canvas>
        </div>
        <div class="col-md-6">
            <canvas id="chart-pais" width="10" height="10"></canvas>
        </div>

        
    </div>
    <div class="row">
        <div class="col-md-6">
            <br>
            <br>
            <br>
        <canvas id="chart-ocupacion" width="10" height="10"></canvas>
        </div>
        <div class="col-md-6">
            <br>
            <br>
            <br>
        <canvas id="chart-fechaa" width="10" height="10"></canvas>
        </div>
    </div>
    
    
</div>
    


@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>

    <script>
        $(document).ready(function(){
            const cData = JSON.parse(`<?php echo $data; ?>`)

            /* rangos de edades */
            let c =cData.fechan //fechas de nacimiento
            const rangos=['0-5','6-11', '12-18', '19-26','27-59','>60']
            var y=[],m=[],d=[],edad=[]
            

            const actual= new Date()
            const anoactual=parseInt(actual.getFullYear())
            const mesactual=parseInt(actual.getMonth())+1
            const diaactual=parseInt(actual.getDate())

            for (var i=0;i<c.length; i++){
                
                 y[i]=parseInt(String(c[i]).substring(0,4))
                 m[i]=parseInt(String(c[i]).substring(5,7))
                 d[i]=parseInt(String(c[i]).substring(8,10))
                 
                 edad[i]=anoactual-y[i]
                 if(mesactual< m[i]){
                     edad[i]--
                 } else if(mesactual==m[i]){
                     if(diaactual< d[i]){
                         edad[i]--
                     }
                 }
            }
            
            yedad=[0,0,0,0,0,0]
            for (var i=0;i<edad.length; i++){
                if(edad[i]>=0 && edad[i]<=5){
                    yedad[0]++
                }
                 if(edad[i]>5 && edad[i]<=11){
                    yedad[1]++
                }
                 if(edad[i]>11 && edad[i]<=18){
                    yedad[2]++
                }
                 if(edad[i]>18 && edad[i]<=26){
                    yedad[3]++
                }
                 if(edad[i]>26 && edad[i]<=59){
                    yedad[4]++
                }
                 if(edad[i]>60 ){
                    yedad[5]++
                }
            }
            



            /* Países de origen */
            const pData = JSON.parse(`<?php echo $dataPais; ?>`)
            const p=[];
            y=cData.pais.filter(onlyUnique)

            for(var i=0;i<y.length;i++){
                p[i]=0;
            }
            ya=[]
            for(var i=0;i<y.length;i++){
                ya[i]=y[i]-1;
            }
            for(var j=0;j<y.length;j++){
                for(var i=0;i<=cData.pais.length;i++){
                    if(cData.pais[i]==y[j]){
                        p[j]++
                    }
                }
            }
            var pais=[]
            for(var i=0;i<ya.length;i++){
                pais[i]=pData.nombrePais[ya[i]]
            }



            /* Ocupación */
            const ocupaciones=pData.nombreOc
            const datos=[];
            yO=[]
            for(var i=0;i<ocupaciones.length;i++){
                yO[i]=0
            }

            for(var i=0;i<cData.ocupacion.length;i++){
                datos[i]=cData.ocupacion[i]-1
            }            
            for(var j=0;j<yO.length;j++){
                for(var i=0;i<datos.length;i++){
                    if(datos[i]==j){
                        yO[j]++
                    }
                }
            }




            /* Fecha de inicio adicción */
            const datosfa=cData.fechaa
            var ya=[]
            for (var i=0;i<datosfa.length; i++){
                
                ya[i]=parseInt(String(datosfa[i]).substring(0,4))
            }
            
            yao=ya.sort(function(a, b){return a - b}); //oganiza de menor a mayo
            if(yao[0]==0){
                yao.splice(0,1);
            }
            ya=yao.filter(onlyUnique)

            var pa=[]
            for(var i=0;i<ya.length;i++){
                pa[i]=0;
            }
            
           for(var j=0;j<ya.length;j++){
                for(var i=0;i<=yao.length;i++){
                    if(yao[i]==ya[j]){
                        pa[j]++
                    }
                }
            } 
            

            var min = Math.min(...ya);
            var max = Math.max(...ya);
            


            function range(start, end) {
                return Array(end - start +1).fill().map((_, idx) => start + idx)
}
            var result = range(min, max);
           

            /* Edad de incursion en las drogas */





            /* ##################    Gráficas   #######################*/


            const ctx=document.getElementById('chart-edades').getContext('2d');
            const edadGraph =new Chart(ctx,{
                type: 'bar',
                data: {
                            labels: rangos,
                            datasets: [{
                            label: '#',
                            
                            data: yedad,
                            backgroundColor:[
                                'rgba(255, 105, 25)',

                            ],
                            hoverBackgroundColor:[
                                'rgba(255, 156, 102)',
                            ],
                            borderWidth: 1,
                            borderColor:[
                                'rgba(0,0,0)',
                            ]
                        }]
                },
                options:{
                    plugins: {
                        responsive: true,
                        legend:{
                            display: false,
                        },
                        title:{
                            display: true,
                            text:'Rangos de edad'
                        },
                    },
                    
                    scales:{
                        xAxes:{
                            title:{
                                display:true,
                                text: 'Rangos de edad'
                            }
                        },
                        yAxes:{
                            title:{
                                display: true,
                                text:'N° de personas'
                            },
                            
                            
                                ticks:{
                                    display: true,
                                    beginAtZero: true,
                                    stepSize: 1,
                                }
                        }
                    }
                }
            
            });


            const pcx=document.getElementById('chart-pais').getContext('2d');
            const paisGraph =new Chart(pcx,{
                type: 'bar',
                data: {
                            labels: pais,
                            datasets: [{
                            label: '#',
                            
                            data: p,
                            backgroundColor:[
                                'rgba(41, 109, 255 )',

                            ],
                            hoverBackgroundColor:[
                                'rgba(113, 158, 255 )',
                            ],
                            borderWidth: 1,
                            borderColor:[
                                'rgba(0,0,0)',
                            ]
                        }]
                },
                options:{
                    plugins: {
                        responsive: true,
                        legend:{
                            display: false,
                        },
                        title:{
                            display: true,
                            text:'Nacionalidades'
                        },
                    },
                    responsive: true,
                    scales:{
                        xAxes:{
                            title:{
                                display:true,
                                text: 'País'
                            }
                        },
                        yAxes:{
                            title:{
                                display: true,
                                text:'N° de personas'
                            },
                            
                            
                                ticks:{
                                    display: true,
                                    beginAtZero: true,
                                    stepSize: 1,
                                }
                        }
                    }
                }
            
            });






            const ocx=document.getElementById('chart-ocupacion').getContext('2d');
            const ocupacionGraph =new Chart(ocx,{
                type: 'bar',
                data: {
                            labels: ocupaciones,
                            datasets: [{
                            label: '#',
                            
                            data: yO,
                            backgroundColor:[
                                'rgba(230, 16, 255)',

                            ],
                            hoverBackgroundColor:[
                                'rgba(243, 138, 255 )',
                            ],
                            borderWidth: 1,
                            borderColor:[
                                'rgba(0,0,0)',
                            ]
                        }]
                },
                options:{
                    plugins: {
                        responsive: true,
                        legend:{
                            display: false,
                        },
                        title:{
                            display: true,
                            text:'Generación de ingresos'
                        },
                    },
                    scales:{
                        xAxes:{
                            title:{
                                display:true,
                                text: 'Ocupación'
                            }
                        },
                        yAxes:{
                            title:{
                                display: true,
                                text:'N° de personas'
                            },
                            
                            
                                ticks:{
                                    display: true,
                                    beginAtZero: true,
                                    stepSize: 1,
                                }
                        }
                    }
                }
            
            });



            
            const oyx=document.getElementById('chart-fechaa').getContext('2d');
            const fechaaGraph =new Chart(oyx,{
                type: 'line',
                data: {
                            labels: ya,
                            datasets: [{
                            label: '#',
                            
                            data: pa,
                            backgroundColor:[
                                'rgba(230, 16, 255)',

                            ],
                            hoverBackgroundColor:[
                                'rgba(243, 138, 255 )',
                            ],
                            borderWidth: 1,
                            borderColor:[
                                'rgba(0,0,0)',
                            ]
                        }]
                },
                options:{
                    lineTension: 0.3,
                    plugins: {
                        responsive: true,
                        legend:{
                            display: false,
                        },
                        title:{
                            display: true,
                            text:'Inicio de adicciones en el tiempo'
                        },
                    },
                    scales:{
                        xAxes:{
                            title:{
                                display:true,
                                text: 'Año'
                            }
                        },
                        yAxes:{
                            title:{
                                display: true,
                                text:'N° de personas'
                            },
                            
                            
                                ticks:{
                                    display: true,
                                    beginAtZero: true,
                                    min: 0,
                                    stepSize: 1,
                                }
                        }
                    }
                }
            
            });

            const N=cData.fechan.length;
            document.getElementById('cantidad').innerHTML = N;
            console.log(cData.fechan)

                let sum = 0;
                for (let i = 0; i < edad.length; i++) {
                    sum += edad[i];
                }
                var a=(sum/edad.length).toFixed(2);
                console.log(a)
                document.getElementById('edadm').innerHTML = a+' Años';

            function onlyUnique(value, index, self) {
  return self.indexOf(value) === index;
}
        });
    </script>
@endsection