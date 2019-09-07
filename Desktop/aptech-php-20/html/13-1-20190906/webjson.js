function createWeb() {

    var nhung = new XMLHttpRequest();
    nhung.onreadystatechange = function () {
      if (nhung.readyState == 4 && nhung.status == 200) {
        var web = nhung.responseText;
        var dataweb = JSON.parse(web);
      //console.log(dataweb);
                 
        var divContainer = document.createElement('div');
        document.body.appendChild(divContainer);
        divContainer.classList.add()
        divContainer.setAttribute('class','container bg-light');
        var divRow = document.createElement('div');
        divRow.classList.add();
        divRow.setAttribute('class','row');
        divContainer.appendChild(divRow);
        for (var i = 0; i < dataweb.length; i++){
            var divCol= document.createElement('div');
            divRow.appendChild(divCol);
            divCol.classList.add()
            divCol.setAttribute('class','col-4 shadow mb-4');
            var divCard = document.createElement('div');
            divCard.classList.add();
            divCard.setAttribute('class','text-center py-4 shadow')
            divCol.appendChild(divCard);
            var img = document.createElement('img');
            img.classList.add()
            img.setAttribute('style','width:100%');
      //  img.setAttribute("src", baiDauTien.image_url) 
            img.src = dataweb[i].image_url;
            divCard.appendChild(img);
            var div1 = document.createElement('div');
            divCard.appendChild(div1);
            var title1 = document.createElement('h2');
            div1.appendChild(title1);
            var title12 = document.createElement('a');
            title12.innerHTML= dataweb[i].title;
            title12.href = dataweb[i].content;
            title1.appendChild(title12);
            var description1 = document.createElement('p');
            description1.innerHTML= dataweb[i].description;
            div1.appendChild(description1);
            var btn = document.createElement('button');
            div1.appendChild(btn);
            btn.width = 50;
            var btn2 = document.createElement('a');
            btn2.innerHTML = "View";
            btn2.href = dataweb[i].content;
            btn.appendChild(btn2);
            var created_at1 = document.createElement('h6');
            created_at1.innerHTML= "created day:  " + dataweb[i].created_at;
            div1.appendChild(created_at1);
            var updated_at1 = document.createElement('h6');
            created_at1.classList.add()
            created_at1.setAttribute('class',' text-muted');
            updated_at1.innerHTML= "updated day:  " + dataweb[i].updated_at;
            div1.appendChild(updated_at1);
            
            }
        
        }
    //     for (var j=0; j< dataweb.length; j++){
    //       var x = dataweb[j].categories.length;
    //       if(dataweb[j].categories != null){
    //         var  categoriesul= document.getElementById('nhung');
    //         var  categoriesli= document.createElement('li');
    //         if(dataweb[j].categories[j].name != null){categoriesli.innerHTML =  dataweb[j].categories[j].name;
    //           categoriesul.appendChild(categoriesli);
    //         }
      
    //       else {
    //         var  categoriesli= document.createElement('p');
    //         categoriesul.appendChild(categoriesli);
    //         categoriesli.innerHTML= "none";
    //             }
    //      }  
    //   } 
      else {
        console.log('du lieu chua ve dau' + nhung.readyState);
        }
    }
    nhung.open('GET', 'https://namcoi.com/projects/news-website-laravel/public/api/posts');
    nhung.send();
  }
  document.getElementById('createWebNhung').addEventListener("click", createWeb);

