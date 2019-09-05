function createWeb() {

    var nhung = new XMLHttpRequest();
    nhung.onreadystatechange = function () {
      if (nhung.readyState == 4 && nhung.status == 200) {
        var web = nhung.responseText;
        var dataweb = JSON.parse(web);
      //  console.log(dataweb.length);
                  //  document.write(dataweb);
        //                 document.write(dataweb[0].id);
        //                 document.write(dataweb[0].title);
                //     document.write(dataweb[0].categories[0].name);
        //                document.write(dataweb[0].categories[0].pivot.post_id);
       
       for (var i = 0; i < dataweb.length; i++) {
        var containercard = document.getElementById(i);
        var divcard = document.createElement('div');
        containercard.appendChild(divcard);
        divcard.width = 300;
        divcard.height = 500;
        var img1 = document.createElement('img');
        img1.width = 250;       
        img1.src = dataweb[i].image_url;
        divcard.appendChild(img1);
        var div1 = document.createElement('div');
        divcard.appendChild(div1);
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
        updated_at1.innerHTML= "updated day:  " + dataweb[i].updated_at;
        div1.appendChild(updated_at1);
        
        }
        for (var j=0; j< dataweb.length; j++){
          var x = dataweb[j].categories.length;
          if(dataweb[j].categories != null){
            var  categoriesul= document.getElementById('nhung');
            var  categoriesli= document.createElement('li');
            if(dataweb[j].categories[j].name != null){categoriesli.innerHTML =  dataweb[j].categories[j].name;
              categoriesul.appendChild(categoriesli);
            }
            else{
              break;
            }
            
          }
          else {
            var  categoriesli= document.createElement('p');
            categoriesul.appendChild(categoriesli);
            categoriesli.innerHTML= "none"
            ;
          }
         }  
      } 
      else {
        console.log('du lieu chua ve dau' + nhung.readyState);
        }

    }
    nhung.open('GET', 'https://namcoi.com/projects/news-website-laravel/public/api/posts');
    nhung.send();
  }

   