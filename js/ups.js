function UPSDeliveryDate(id,col) 
            { 
                
                var numAdd = id;
                var dataAvui = new Date();
                
                for (var i=0;i<=numAdd;i++)
                { 
                    var dataTemp = dataAvui;
                    
                    dataTemp.setDate(dataTemp.getDate() + 1)
                    if(dataTemp.getDay() === 6){
                        dataTemp.setDate(dataTemp.getDate() + 2)
                    }else if(dataTemp.getDay() === 0){
                        dataTemp.setDate(dataTemp.getDate() + 1)
                    }

                    dataAvui = dataTemp;
                }
                console.log(dataAvui);
                
                var month = new Array(12); 
                    month[0]="January"; 
                    month[1]="February"; 
                    month[2]="March"; 
                    month[3]="April"; 
                    month[4]="May"; 
                    month[5]="June"; 
                    month[6]="July"; 
                    month[7]="August"; 
                    month[8]="September"; 
                    month[9]="October"; 
                    month[10]="November"; 
                    month[11]="December"; 
                var day = new Array(14); 
                    day[0]="Sunday"; 
                    day[1]="Monday"; 
                    day[2]="Tuesday"; 
                    day[3]="Wendnesday"; 
                    day[4]="Thursday"; 
                    day[5]="Friday"; 
                    day[6]="Saturday"; 
                    day[7]="Sunday"; 
                    day[8]="Monday"; 
                    day[9]="Tuesday"; 
                    day[10]="Wendnesday"; 
                    day[11]="Thursday"; 
                    day[12]="Friday"; 
                    day[13]="Saturday"; 
                    
                var date = dataTemp.getDate(); 
                
                
                var date = document.write.innerHTML="<br/>"+day[dataAvui.getDay()]+",<br/> "+ month[dataAvui.getMonth()] + ", "+ date+ ""; 
                console.log(date);
                document.getElementById('date'+col).innerHTML = date;
                //return date;
            }

function displayDate(id,col){
    
   UPSDeliveryDate(id,col); 
    
}

